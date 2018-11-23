<?php


namespace App\Http\Controllers;


use Redirect;
use Validator;
use DB;
use Session;
use Input;
use Mail;
use App\Models\Advertisement;
use App\Models\Usergroup;
use App\Models\Condition;
use App\Models\Type;
use App\Models\Location;
use App\Models\Specification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{


    public function index()
    {

        $condition = Condition::all();
        $type = Type::all();
        $byty = Specification::select('*')->where("group","=","Byty")->get();
        $domy = Specification::select('*')->where("group","=","Domy")->get();
        $objekty = Specification::select('*')->where("group","=","Objekty")->get();
        $pozemky = Specification::select('*')->where("group","=","Pozemky")->get();
        $priestory = Specification::select('*')->where("group","=","Priestory")->get();
        $rek = Specification::select('*')->where("group","=","Rekreačné domy")->get();



        $kos = Location::select('*')->where("region","=","Košický kraj")->get();
        $nit = Location::select('*')->where("region","=","Nitriansky kraj")->get();
        $ban = Location::select('*')->where("region","=","Banskobystrický kraj")->get();
        $bra = Location::select('*')->where("region","=","Bratislavský kraj")->get();
        $pre = Location::select('*')->where("region","=","Prešovský kraj")->get();
        $tre = Location::select('*')->where("region","=","Trenčiansky kraj")->get();
        $trn = Location::select('*')->where("region","=","Trnavský kraj")->get();
        $zil = Location::select('*')->where("region","=","Žilinský kraj")->get();

        $user = Usergroup::all();
        $data['condition'] = $condition;

        $data['byty'] = $byty;
        $data['domy'] = $domy;
        $data['objekty'] = $objekty;
        $data['pozemky'] = $pozemky;
        $data['priestory'] = $priestory;
        $data['rek'] = $rek;




        $data['type'] = $type;
        $data['kos'] = $kos;
        $data['nit'] = $nit;
        $data['ban'] = $ban;
        $data['bra'] = $bra;
        $data['pre'] = $pre;
        $data['tre'] = $tre;
        $data['trn'] = $trn;
        $data['zil'] = $zil;

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

    public function search_all(Request $request)  {
            $ad= Advertisement::all();

            Session::flash('search', $ad);
            return redirect()-> action('HomeController@results');
    }


    public function pridat(Request $request) {
        $location = Location::all();
        $type = Type::all();
        $condition = Condition::all();
        $specification = Specification::all();
        $data['location'] = $location;
        $data['type'] = $type;
        $data['condition'] = $condition;
        $data['specification'] = $specification;
        return view('frontend/sell',$data);
    }


    public function informacie() {
        return view('frontend/informacie');
    }

    public function add_advertisement(Request $request) {
        $rules = array(
            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'contact_mail'    => 'required|email', // make sure the email is an actual email
            'area' => 'required|alphaNum',
            'price' => 'required|alphaNum',
            'location' => 'required',
            'type' => 'required',
            'specification' => 'required',
            'condition' => 'required',
            'eula' => 'required',
            'g-recaptcha-response' => 'required'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);



        if ($validator->fails()) {
            return Redirect::to('/pridat')
                ->withErrors($validator);
        } else {


            $title = Input::get('title');
            $description =  Input::get('description');
            $contact_mail = Input::get('contact_mail');
            $contact_phone = Input::get('contact_phone');
            $area = Input::get('area');
            $price = Input::get('price');
            $location =  Input::get('location');
            $type = Input::get('type');
            $specification = Input::get('specification');
            $condition = Input::get('condition');


            $ad = new Advertisement();

            $ad->title = $title;
            $ad->description = $description;
            $ad->contact_mail = $contact_mail;
            $ad->contact_phone = $contact_phone;
            $ad->area = $area;
            $ad->price = $price;
            $ad->date = date("Y-m-d");
            $ad->id_location = $location;
            $ad->id_type = $type;
            $ad->id_specification = $specification;
            $ad->id_condition = $condition;

            if(session()->has('userID')) {

                $ad->id_user = session()->get('userID');
            } else {
                $first_name = Input::get('first_name');
                $last_name = Input::get('last_name');
                $password = $this->randomPassword();

                $user = new User();

                $user->first_name = $first_name;
                $user->last_name = $last_name;
                $user->password = md5($password);
                $user->id_user_group = 2;
                $user->email = $contact_mail;
                $user->telephone = $contact_phone;

                $user->save();
                $id_user = User::max('id_user');
                $ad->id_user = $id_user;

                $data = array('name'=>$first_name,'password' =>$password, 'to' => $contact_mail);


            }

            $ad->save();

            $id =  Advertisement::max('id_advertisement');

            $data = array('name'=>$first_name,'password' =>$password, 'to' => $contact_mail, 'id' => $id);

            if(!session()->has('userID')) {
                Mail::send('frontend/mail', ["data" => $data], function ($message) use ($data) {
                    $message->from('chrisfodor333@gmail.com', 'ITSolutions');
                    $message->subject("Váš inzerát bol pridaný");
                    $message->to($data['to']);
                });
            }


            $name = 'inzerat_' . $id;

            if(Input::file('fotka')) {
                $fotky = Input::file('fotka');
                $i=0;
                foreach ($fotky as $fotka) {
                    $i++;
                    Storage::putFileAs('public/inzeraty/' . $name, $fotka, 'fotka_' . $i . '.png');
                }
            } else {
                return Redirect::to('/pridat')
                    ->withErrors(['fotka' => 'Pridajte aspoň jednu fotku k inzerátu']);
            }


            $id_advertisement =  Advertisement::max('id_advertisement');

            return redirect()-> action('HomeController@showinzerat',$id);




        }

    }

    public function show_mypage() {
        return view('frontend/moje_inzeraty');
    }

    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }


    public function results(Request $request) {

            return view('frontend/search_results');
    }

    public function showlogin() {
       return view('frontend/login');
    }


    public function showinzerat($id) {
        $ads = Advertisement::leftJoin('condition', 'advertisement.id_condition', '=', 'condition.id_condition')
            ->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
            ->leftJoin('specification', 'advertisement.id_specification', '=', 'specification.id_specification')
            ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location')
            ->leftJoin('user', 'advertisement.id_user', '=', 'user.id_user')
            ->where('id_advertisement','=',$id)
            ->select('advertisement.*', 'type.title AS type', 'condition.title AS condition','specification.title AS specification',
                'location.region AS location',
                DB::raw('CONCAT(first_name," ",last_name) AS user'),DB::raw('CONCAT(city," - ",region) AS location2'))->get()->first();
        $data['ad'] = $ads;


        $ad = Advertisement::where("id_advertisement","=",$id)->update(["views" =>  DB::raw('views+1')]);




        return view('frontend/inzerat',$data);
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

        public function show_select() {
         return view('frontend/select');
        }


}