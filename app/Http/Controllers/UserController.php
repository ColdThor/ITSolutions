<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 22.10.2018
 * Time: 12:03
 */

namespace App\Http\Controllers;


use App\Models\Usergroup;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
use DataTables;
use Validator;
use Session;
use Auth;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input as Input;

use Fico7489\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;


class UserController extends Controller {




    public function delete($id) {

        if(session()->has('admin')) {
            if ($id == null) {
                return abort(404);
            }
            $user = User::find($id);

            $user->delete();
            return redirect('/it-admin/users');
        } else {
            return view('admin/no_admin');
        }
    }



    public function edit($id) {
        if(session()->has('admin')) {
            $data['title'] = "Editovať používateľa";

            $user = User::join('user_group', 'user.id_user_group', '=', 'user_group.id_user_group')
                ->select('*')->where("id_user", "=", $id)->get()->first();

            $rola = Usergroup::all();


            $data['users'] = $user;
            $data['rola'] = $rola;
            return view('admin/user_edit', $data);
        } else {
            return view('admin/no_admin');
        }
    }

    public function edit_validator(Request $request) {
        if($request->submit == "submit")
        {

            $user = User::where("id_user","=",$request->input('id'))->first();
            $user->update(["first_name" => $request->input('first_name'),
                "last_name" => $request->input('last_name'),
                "email" => $request->input('email'),
                "id_user_group" => $request->input('rola'),
                "telephone" => $request->input('telephone')]);
            return redirect()-> action('UserController@user_index');

        } else {
            return redirect()-> action('UserController@user_index');
        }

    }


    public function changepass(Request $request) {
        if($request->submit == "submit")
        {


            $rules = array(
                'password' => 'required|alphaNum|min:3|confirmed' // password can only be alphanumeric and has to be greater than 3 characters
            );


            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {
                return Redirect::to('/it-admin/profile')
                    ->withErrors($validator) // send back all errors to the login form
                    ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            } else {
                $user = User::where("id_user","=",session()->get('userID'))->first();
                $user->update(['password' => md5(Input::get('password'))]);
                return Redirect::to('/it-admin/profile')
                    ->with('status', 'Heslo zmenené!');
            }

        }
    }




    public function usertable()
    {

        $users = User::leftJoin('user_group', 'user.id_user_group', '=', 'user_group.id_user_group')
            ->select('*');
        return Datatables::of($users)
            ->addColumn('full_name', function ($row) {
                return $row->first_name ." ". $row->last_name;
            })
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/it-admin/'). '/edit/'. $row->id_user .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/it-admin/'). '/delete/'. $row->id_user .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])
            ->editColumn('telephone', function ($row) {
                if($row->telephone==null) {
                    return "Používateľ nemá def. tel. číslo";
                } else {
                    return $row->telephone;
                }

            })
            ->make(true);


    }
    public function user_index() {
        if(session()->has('admin')) {
            return view('admin/admin_userstable');
        } else {
            return view('admin/no_admin');
        }
    }


    public function index(Request $request) {
        if(session()->has('admin')) {
        $data['value'] = $request->session()->get('userID');
        return view('admin/admin_home',$data);
        } else {
            return view('admin/no_admin');
        }
    }

    public function not_admin() {
        return view('admin/no_admin');
    }

    public function showprofile() {
        if(session()->has('admin')) {
        $user = User::where("id_user","=",session()->get('userID'))->first();
        $data['users'] = $user;
        return view('admin/profile',$data);
        } else {   return view('admin/no_admin'); }
    }




    public function showlogin() {
        return view('admin/login');
    }

    public function dologin(Request $request) {

        $rules = array(
            'email'    => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('/it-admin/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication



             $email = Input::get('email');
             $password =  Input::get('password');



            $user = User::where("email","=",$email)->where("password","=",md5($password))->where("id_user_group","=",4)->count();


            if($user ==1){
                $user = User::where("email","=",$email)->where("password","=",md5($password))->where("id_user_group","=",4)->first();
                $userID = $user->id_user;
                $username = $user->first_name. " ".$user->last_name;
                $admin = $user->id_user_group;
                Session::put('userID',$userID);
                Session::put('userName',$username);
                Session::put('admin',$admin);

                return redirect('/it-admin/');
            } else {
                return Redirect::to('/it-admin/login')
                    ->withErrors(['no' => 'Použivateľ neexistuje alebo nie je administrátorom']);

            }

        }
    }


public function logout(Request $request) {

    $request->session()->flush();
    return redirect('/it-admin/');
}


public function showaddAdmin() {
    if(session()->has('admin')) {
        return view('admin/register_admin');
    } else {
        return view('admin/no_admin');
    }
}



public function add_admin(Request $request) {

    $rules = array(
        'first_name' => 'required|alphaNum',
        'last_name' => 'required|alphaNum',
        'email'    => 'required|email', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:3|confirmed',
        'fotka' => 'required'
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);



    if ($validator->fails()) {
        return Redirect::to('/it-admin/register')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
    } else {


        $email = Input::get('email');
        $password =  md5(Input::get('password'));
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $telephone = Input::get('telephone');
        $id_user_group = 4;

        $user =  new User;

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->password = $password;
        $user->email = $email;
        $user->telephone = $telephone;
        $user->id_user_group = $id_user_group;

        $user->save();

        $id = User::max('id_user');



        if( Input::file('fotka') ) {
            $file = Input::file('fotka');

            $name = 'admin_' . $id;
            Storage::putFileAs('admins/' . $name, $file, 'fotka.jpeg');
        } else {
            return Redirect::to('/it-admin/register')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        }

        return redirect('/it-admin/users');

    }
}






















}