<?php


namespace App\Http\Controllers;


use Redirect;
use Validator;
use DB;
use Session;
use Input;
use App\Models\Advertisement;
use App\Models\Usergroup;
use App\Models\Condition;
use App\Models\Type;
use App\Models\Location;
use App\Models\Specification;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{


    public function index()
    {

        $condition = Condition::all();
        $type = Type::all();
        $specification = Specification::all();
        $location = Location::all();
        $user = Usergroup::all();
        $data['condition'] = $condition;
        $data['specification'] = $specification;
        $data['type'] = $type;
        $data['location'] = $location;
        $data['user'] = $user;
        return view('frontend/home',$data);
    }


    public function search(Request $request)  {
        if($request->submit == "submit") {

            $location = $request->input('location');
            $type = $request->input('type');
            $condition = $request->input('condition');
            $specification = $request->input('specification');
            $user = $request->input('user');
            $area = $request->input('area');
            $price_from = $request->input('cena_od');
            $price_to = $request->input('cena_do');


            $advertisements = Advertisement::select('advertisement.*','user_group.title AS group')->leftJoin("user","advertisement.id_user","user.id_user")
            ->leftJoin("user_group","user.id_user_group","user_group.id_user_group");

            if ($location != "") {
                $advertisements->where("id_location", "=", $location);
            }
            if ($type != "") {
                $advertisements->where("id_type", "=", $type);
            }

            if ($condition != "") {
                $advertisements->where("id_condition", "=", $condition);
            }
            if ($specification != "") {
                $advertisements->where("id_specification", "=", $specification);
            }

              if($user != "") {
                  $advertisements->where("user.id_user_group","=",$user);
              }
            if ($price_from != "") {
                $advertisements->where("price", ">", $price_from);
            }
            if ($price_to != "") {
                $advertisements->where("price", "<", $price_to);
            }
            if ($area != "") {
                switch ($area) {
                    case 1:   $advertisements->where("area", "<", 20);  break;
                    case 2:   $advertisements->where("area", ">", 20)->where("area","<",30);  break;
                    case 3:   $advertisements->where("area", ">", 30)->where("area","<",40);  break;
                    case 4:   $advertisements->where("area", ">", 40)->where("area","<",50);  break;
                    case 5:   $advertisements->where("area", ">", 50);  break;
                }
        }

           $ad= $advertisements->latest('advertisement.created_at')->get();


            Session::flash('search', $ad);
            return redirect()-> action('HomeController@results');
        }
    }

    public function results(Request $request) {

            return view('frontend/search_results');
    }

    public function showlogin() {
       return view('frontend/login');
    }

    public function dologin(Request $request) {
        $rules = array(
            'email'    => 'required|email',
            'password' => 'required|alphaNum|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('/user/login')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            $email = Input::get('email');
            $password =  Input::get('password');


            $user = User::where("email","=",$email)->where("password","=",md5($password))->count();


            if($user ==1){
                $user = User::where("email","=",$email)->where("password","=",md5($password))->first();
                $userID = $user->id_user;
                $username = $user->first_name. " ".$user->last_name;
                Session::put('userID',$userID);
                Session::put('userName',$username);
                return redirect('/');
            } else {
                return Redirect::to('/user/login')
                    ->withErrors(['no' => 'Kombinácia emailu a hesla neexistuje']);

            }
        }

    }

    public function logout(Request $request) {

        $request->session()->flush();
        return redirect('/');
    }

        public function showregister() {
            return view('frontend/register');
        }

        public function doregister() {
            $rules = array(
                'first_name' => 'required|alphaNum',
                'last_name' => 'required|alphaNum',
                'email'    => 'required|email', // make sure the email is an actual email
                'password' => 'required|alphaNum|min:3|confirmed'
            );

            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {
                return Redirect::to('/user/register')
                    ->withErrors($validator) // send back all errors to the login form
                    ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            } else {


                $email = Input::get('email');
                $password =  md5(Input::get('password'));
                $first_name = Input::get('first_name');
                $last_name = Input::get('last_name');
                $telephone = Input::get('telephone');
                $id_user_group = Input::get('user_group');

                $user =  new User;

                $user->first_name = $first_name;
                $user->last_name = $last_name;
                $user->password = $password;
                $user->email = $email;
                $user->telephone = $telephone;
                $user->id_user_group = $id_user_group;

                $user->save();


                return redirect('/user/login');

            }
        }


}