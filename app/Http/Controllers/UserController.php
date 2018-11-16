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
use Illuminate\Support\Facades\Input as Input;

use Fico7489\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;


class UserController extends Controller {




    public function delete($id) {

        if($id == null) {
            return abort(404);
        }
        $user = User::find($id);

            $user->delete();
        return redirect('/it-admin/');
    }



    public function edit($id) {
        $data['title'] = "Editovať používateľa";

        $user = User::join('user_group', 'user.id_user_group', '=', 'user_group.id_user_group')
            ->select('*')->where("id_user","=",$id)->get()->first();

        $rola = Usergroup::all();



        $data['users'] =  $user;
        $data['rola'] =  $rola;
        return view('admin/user_edit',$data);
    }

    public function edit_validator(Request $request) {


        $user = User::where("id_user","=",$request->input('id'))->first();
        $user->update(["first_name" => $request->input('first_name'),
        "last_name" => $request->input('last_name'),
            "email" => $request->input('email'),
            "id_user_group" => $request->input('rola'),
            "telephone" => $request->input('telephone')]);
        return redirect()-> action('UserController@user_index');

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
        return view('admin/admin_userstable');
    }


    public function index(Request $request) {
        $data['value'] = $request->session()->get('userID');
        return view('admin/admin_home',$data);
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



            // attempt to do the login

            $user = User::where("email","=",$email)->where("password","=",md5($password))->where("id_user_group","=",4)->count();


            if($user ==1){
                $user = User::where("email","=",$email)->where("password","=",md5($password))->where("id_user_group","=",4)->first();
                $userID = $user->id_user;
                $username = $user->first_name. " ".$user->last_name;
                Session::put('userID',$userID);
                Session::put('userName',$username);
                Session::get('userName');

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
        return view('admin/addadmin');
}

}