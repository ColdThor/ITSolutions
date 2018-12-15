<?php


namespace App\Http\Controllers;


use App\Models\Helpdesk;
use App\Models\Newsletter;
use Redirect;
use Validator;
use DB;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Session;
use Input;
use Mail;
use Lava;
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


        $data['type'] = $type;
        $data['kos'] = $kos;
        $data['nit'] = $nit;
        $data['ban'] = $ban;
        $data['bra'] = $bra;
        $data['pre'] = $pre;
        $data['tre'] = $tre;
        $data['trn'] = $trn;
        $data['zil'] = $zil;

        $user = Usergroup::all();
        $data['condition'] = $condition;

        $data['byty'] = $byty;
        $data['domy'] = $domy;
        $data['objekty'] = $objekty;
        $data['pozemky'] = $pozemky;
        $data['priestory'] = $priestory;
        $data['rek'] = $rek;
        $data['user'] = $user;

        $top = Advertisement::select('advertisement.*','condition.title AS condition',
            'type.title AS type','specification.title AS title','location.city AS location')->leftJoin('condition', 'advertisement.id_condition', '=', 'condition.id_condition')
            ->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
            ->leftJoin('specification', 'advertisement.id_specification', '=', 'specification.id_specification')
            ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location')
            ->leftJoin('user', 'advertisement.id_user', '=', 'user.id_user')->latest("views")->get();
        $data['top'] = $top;





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


            $advertisements = Advertisement::select('advertisement.*','user_group.title AS group','location.city AS location','type.title AS type')->leftJoin("user","advertisement.id_user","user.id_user")
            ->leftJoin("user_group","user.id_user_group","user_group.id_user_group")->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
                ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location');


            if ($type != "") {
                $advertisements->where("advertisement.id_type", "=", $type);
            }

            if ($condition != "") {
                $advertisements->where("advertisement.id_condition", "=", $condition);
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


            if ($location != "") {
                $i = 0;
                foreach($location as $loc) {
                    $i++;
                    if($i==1) {
                        $advertisements->where("advertisement.id_location", "=", $loc);
                    } else {
                        $advertisements->orWhere("advertisement.id_location", "=", $loc);
                    }
                }
            }

            if ($specification != "") {
                $i = 0;
                foreach($specification as $sp) {
                    $i++;
                    if($i==1) {
                        $advertisements->where("advertisement.id_specification", "=", $sp);
                    } else {
                        $advertisements->orWhere("advertisement.id_specification", "=", $sp);
                    }
                }
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




    public function show_mypage() {

        $ad = Advertisement::leftJoin('condition', 'advertisement.id_condition', '=', 'condition.id_condition')
            ->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
            ->leftJoin('specification', 'advertisement.id_specification', '=', 'specification.id_specification')
            ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location')
            ->leftJoin('user', 'advertisement.id_user', '=', 'user.id_user')
            ->where('advertisement.id_user','=',session()->get('userID'))
            ->select('advertisement.*','user.id_user_group','type.title as type')->get();



        Session::flash('mypage', $ad);


        $chart = Lava::DataTable();


        $data = DB::table('advertisement')->where("id_user","=",session()->get('userID'))->max('views');
        if($data == null) {
            $data2 = 0;
            $title = "";
            $title2 = "";
        } else {
        $data2 = DB::table('advertisement')->where('views', 'NOT LIKE',$data)->where("id_user","=",session()->get('userID'))->max('views');
        $title = DB::table('advertisement')->where("id_user","=",session()->get('userID'))->where('views', DB::raw("(select MAX(`views`) from advertisement)"))->get()->first();
        $title2 = DB::table('advertisement')->where("id_user","=",session()->get('userID'))->where('views', DB::raw("(select MAX(`views`) from advertisement WHERE views NOT LIKE ".$data.")"))->get()->first();
        }




        $chart->addStringColumn('Inzeráty')
            ->addNumberColumn(@$title->title)
            ->addNumberColumn(@$title2->title)
            ->addRow(["Počet prehliadnutí", $data,$data2]);

        Lava::ColumnChart('Finances', $chart, [
            'title' => 'Najsledovanejšie inzeráty',
            'titleTextStyle' => [
                'color' => '#eb6b2c',
                'fontSize' => 14
            ],
            'vAxis' => [
                'minValue' => 0,
                'maxAlternation' => 1
            ],
        ]);


        return view('frontend/moje_inzeraty');
    }


    public function search_all(Request $request)  {
        $ad = Advertisement::leftJoin('condition', 'advertisement.id_condition', '=', 'condition.id_condition')
            ->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
            ->leftJoin('specification', 'advertisement.id_specification', '=', 'specification.id_specification')
            ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location')
            ->leftJoin('user', 'advertisement.id_user', '=', 'user.id_user')
            ->select('advertisement.*','type.title AS type','location.city AS location')->get();




            Session::flash('search', $ad);
            return redirect()-> action('HomeController@results');
    }


    public function pridat(Request $request) {
        $location = Location::all();
        $type = Type::all();
        $condition = Condition::all();


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


        $data['type'] = $type;
        $data['kos'] = $kos;
        $data['nit'] = $nit;
        $data['ban'] = $ban;
        $data['bra'] = $bra;
        $data['pre'] = $pre;
        $data['tre'] = $tre;
        $data['trn'] = $trn;
        $data['zil'] = $zil;



        $data['byty'] = $byty;
        $data['domy'] = $domy;
        $data['objekty'] = $objekty;
        $data['pozemky'] = $pozemky;
        $data['priestory'] = $priestory;
        $data['rek'] = $rek;






        $data['type'] = $type;
        $data['condition'] = $condition;

        return view('frontend/sell',$data);
    }


    public function informacie() {
        return view('frontend/informacie');
    }
    public function ziadosti() {
        return view('frontend/ziadosti');
    }
    public function kupa() {
        return view('frontend/kupa');
    }
    public function navrhy() {
        return view('frontend/navrhy');
    }

    public function zmluvy() {
        return view('frontend/zmluvy');
    }

    public function hypoteky() {
        return view('frontend/hypoteky');
    }

    public function poradenstvo() {
        return view('frontend/poradenstvo');
    }


    public function subscribe() {
        $email = Input::get('email');
        $newsletter = new Newsletter;
        $newsletter->email = $email;
        $newsletter->save();
        return redirect()-> action('HomeController@index');


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
            'fotka.*' => 'required|max:999',
            'pan.*' => 'max:999',
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

               $email_check = $this->check_email($contact_mail);

               if($email_check == false) {
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
               } else {
                   $first_name = Input::get('first_name');
                   $last_name = Input::get('last_name');
                   $password = $this->randomPassword();
                   $user = User::where("email","=",$contact_mail)->update(["password" =>  md5($password),"telephone" => $contact_phone,
                       "first_name" => $first_name,"last_name" => $last_name]);
                   $id_user =  User::select("id_user")->where("email","=",$contact_mail)->get()->first();
                   $ad->id_user = $id_user->id_user;
               }



            }

            $ad->save();

            $id =  Advertisement::max('id_advertisement');



            if(!session()->has('userID')) {
                $data = array('name'=>$first_name,'password' =>$password, 'to' => $contact_mail, 'id' => $id);
                Mail::send('frontend/mail', ["data" => $data], function ($message) use ($data) {
                    $message->from('svetrealit@devsite.sk', 'Svet Realít');
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
                    Storage::disk('public_uploads')->putFileAs('/storage/inzeraty/' . $name, $fotka, 'fotka_' . $i . '.png','public');
                }
            } else {
                return Redirect::to('/pridat')
                    ->withErrors(['fotka' => 'Pridajte aspoň jednu fotku k inzerátu']);
            }


            if(Input::file('pan')) {
                $panoramy = Input::file('pan');
                $i=0;
                foreach ($panoramy as $panorama) {

                    $i++;
                    Storage::disk('public_uploads')->putFileAs('/storage/inzeraty/' . $name, $panorama, 'panorama_' . $i . '.jpg');

                }
            }

            return redirect()-> action('HomeController@showinzerat',['id' => $id,'owner' => 'true']);




        }

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


        $data['type'] = $type;
        $data['kos'] = $kos;
        $data['nit'] = $nit;
        $data['ban'] = $ban;
        $data['bra'] = $bra;
        $data['pre'] = $pre;
        $data['tre'] = $tre;
        $data['trn'] = $trn;
        $data['zil'] = $zil;

        $user = Usergroup::all();
        $data['condition'] = $condition;

        $data['byty'] = $byty;
        $data['domy'] = $domy;
        $data['objekty'] = $objekty;
        $data['pozemky'] = $pozemky;
        $data['priestory'] = $priestory;
        $data['rek'] = $rek;
        $data['user'] = $user;



        //CRAWLER

        $client = new Client();
        $crawler = $client->request('GET', 'https://www.nehnutelnosti.sk/vyhladavanie/');

        $goutteClient = new Client();
        $guzzleClient = new GuzzleClient(array(
            'timeout' => 60,
        ));
        $goutteClient->setClient($guzzleClient);

        $nazov = array();
        $link = array();
        $miesto = array();
        $cena = array();
        $druh = array();
        $popis = array();
        $image = array();
        $image_title = array();

        $GLOBALS['increment_miesto'] = 0;
        $GLOBALS['increment_nazov'] = 0;
        $GLOBALS['increment_cena'] = 0;
        $GLOBALS['increment_druh'] = 0;
        $GLOBALS['increment_popis'] = 0;
        $GLOBALS['increment_image'] = 0;

        $crawler->filter('h2 > a,img, div')->each(function ($node) {

            if (in_array($node->getNode(0)->nodeName, ['h2', 'a'])) {
                $i_nazov =   $GLOBALS['increment_nazov']++;
                $GLOBALS['nazov'.$i_nazov] = $node->getNode(0)->textContent;
                $GLOBALS['link'.$i_nazov] = $node->getNode(0)->getAttribute('href');
            }
            elseif ($node->getNode(0)->nodeName == 'div') {
                $class= $node->getNode(0)->getAttribute('class');
                if($class == "location-text mb-1 d-block text-truncate") {
                 $i_miesto =   $GLOBALS['increment_miesto']++;
                 $GLOBALS['miesto'.$i_miesto] = $node->getNode(0)->textContent; // MIESTO INZERÁTU
                }

                elseif($class == "col-auto pl-0 pl-md-3 pr-0 advertisement-price-panel text-right mt-2 mt-md-0 align-self-end") {
                    $i_cena =   $GLOBALS['increment_cena']++;
                    $GLOBALS['cena'.$i_cena] = $node->getNode(0)->textContent;
                }
                elseif($class == "location-text") {
                    $i_druh =   $GLOBALS['increment_druh']++;
                    $GLOBALS['druh'.$i_druh] = $node->getNode(0)->textContent; //DRUH A VÝMERA INZERÁTU
                }
                elseif($class == "advertisement-content-text mb-0 d-none d-md-block") {
                    $i_popis =   $GLOBALS['increment_popis']++;
                    $GLOBALS['popis'.$i_popis] = $node->getNode(0)->textContent;   // POPIS INZERÁTU
                }
            }
            elseif ($node->getNode(0)->nodeName == 'img') {
                $class= $node->getNode(0)->getAttribute('class');


                $length = strlen($node->getNode(0)->getAttribute('data-lazy-src'));

                if($length>10) {

                    if($class == "img--small") {
                        $i_image =   $GLOBALS['increment_image']++;
                        $GLOBALS['image'.$i_image] = $node->getNode(0)->getAttribute('data-lazy-src');
                        $GLOBALS['image_title'.$i_image] = $node->getNode(0)->getAttribute('alt');
                    }

                       // $GLOBALS['image'.$i_image] = "#";
                       // $GLOBALS['image_title'.$i_image] = "#";


                }

            }
        });



        $i_nazov = 0;
        $nazov_bol = true;
        while(   $nazov_bol) {
            if(isset($GLOBALS['nazov'.$i_nazov])) {
                array_push($nazov, $GLOBALS['nazov'.$i_nazov]);
                array_push($link, $GLOBALS['link'.$i_nazov]);
                $i_nazov++;
            } else {
                $nazov_bol = false;
            }
        }


            $i_miesto = 0;
            $miesto_bol = true;
            while( $miesto_bol) {
                if(isset($GLOBALS['miesto'.$i_miesto])) {
                    array_push($miesto, $GLOBALS['miesto'.$i_miesto]);
                    $i_miesto++;
                } else {
                    $miesto_bol = false;
                }
            }


        $i_cena = 0;
        $cena_bol = true;
        while( $cena_bol) {
            if(isset($GLOBALS['cena'.$i_cena])) {
                array_push($cena, $GLOBALS['cena'.$i_cena]);
                $i_cena++;
            } else {
                $cena_bol = false;
            }
        }

        $i_druh = 0;
        $druh_bol = true;
        while(  $druh_bol) {
            if(isset($GLOBALS['druh'.$i_druh])) {
                array_push($druh, $GLOBALS['druh'.$i_druh]);
                $i_druh++;
            } else {
                $druh_bol = false;
            }
        }

        $i_popis = 0;
        $popis_bol = true;
        while($popis_bol) {
            if(isset($GLOBALS['popis'.$i_popis])) {
                array_push($popis, $GLOBALS['popis'.$i_popis]);
                $i_popis++;
            } else {
                $popis_bol = false;
            }
        }


        $i_image = 0;
        $image_bol = true;
        while($image_bol) {
            if(isset($GLOBALS['image'.$i_image])) {
                array_push($image, $GLOBALS['image'.$i_image]);
                $i_image++;
            } else {
                $image_bol = false;
            }
        }

        $i_image_title = 0;
        $image_title_bol = true;
        while($image_title_bol) {
            if(isset($GLOBALS['image_title'.$i_image_title])) {
                array_push($image_title, $GLOBALS['image_title'.$i_image_title]);
                $i_image_title++;
            } else {
                $image_title_bol = false;
            }
        }


        //CRAWLER

        $data['link'] = $link;
        $data['nazov'] = $nazov;
        $data['miesto'] = $miesto;
        $data['cena'] = $cena;
        $data['druh'] = $druh;
        $data['popis'] = $popis;
        $data['image'] = $image;
        $data['image_title'] = $image_title;
        $data['crawler'] = $crawler;


        return view('frontend/search_results',$data);
    }

    public function showlogin() {
       return view('frontend/login');
    }

    public function check_email($email) {
        $user = User::where("email","=",$email)->count();
        if($user>=1) {
            return true;
        } else {
            return false;
        }
    }


    public function show_editinzerat($id,$owner) {
        if(session()->has('userID')) {
            $data['title'] = "Editovať inzerciu";

            $ad = Advertisement::select('*')->where("id_advertisement", "=", $id)->get()->first();

            $condition = Condition::all();
            $type = Type::all();
            $specification = Specification::all();
            $location = Location::all();
            $user = User::all();

            $data['ads'] = $ad;
            $data['condition'] = $condition;
            $data['type'] = $type;
            $data['specification'] = $specification;
            $data['location'] = $location;
            $data['user'] = $user;


            return view('frontend/editinzerat', $data);
        } else {
            if($owner == "true") {
                $data['title'] = "Editovať inzerciu";

                $ad = Advertisement::select('*')->where("id_advertisement", "=", $id)->get()->first();

                $condition = Condition::all();
                $type = Type::all();
                $specification = Specification::all();
                $location = Location::all();
                $user = User::all();

                $data['ads'] = $ad;
                $data['condition'] = $condition;
                $data['type'] = $type;
                $data['specification'] = $specification;
                $data['location'] = $location;
                $data['user'] = $user;


                return view('frontend/editinzerat', $data);
            } else {
            return redirect('/search_all');
            }
        }
    }

    public function do_editinzerat(Request $request) {
        if($request->submit == "submit") {

            $rules = array(
                'title' => 'required|min:3',
                'description' => 'required|min:3',
                'contact_mail'    => 'required|email', // make sure the email is an actual email
                'area' => 'required|alphaNum',
                'price' => 'required|alphaNum',
                'id_location' => 'required',
                'id_type' => 'required',
                'id_specification' => 'required',
                'id_condition' => 'required',
                'eula' => 'required',
                'g-recaptcha-response' => 'required'
            );


            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {
                return Redirect::to('/inzerat/edit/'.$request->input('id').'/true')
                    ->withErrors($validator);
            } else {
                $ad = Advertisement::where("id_advertisement", "=", $request->input('id'))->first();
                $ad->update([
                    "title" => $request->input('title'),
                    "description" => $request->input('description'),
                    "contact_mail" => $request->input('contact_mail'),
                    "contact_phone" => $request->input('contact_phone'),
                    "price" => $request->input('price'),
                    "area" => $request->input('area'),
                    "id_condition" => $request->input('id_condition'),
                    "id_type" => $request->input('id_type'),
                    "id_location" => $request->input('id_location'),
                    "id_specification" => $request->input('id_specification')]);
                return redirect()->action('HomeController@showinzerat',['id' => $request->input('id'),'owner' => 'true']);
            }
        } else {
            return redirect()->action('HomeController@showinzerat',['id' => $request->input('id'),'owner' => 'true']);
        }
    }

    public function delete_inzerat($id,$owner) {
        if(session()->has('userID')) {

            $ad = Advertisement::find($id);

            $ad->delete();
            return redirect('/search_all');
        } else {
            if($owner == "true") {
                $ad = Advertisement::find($id);

                $ad->delete();
                return redirect('/search_all');
            } else {
                return redirect('/search_all');
            }
        }

    }


    public function showinzerat($id,$owner) {
        $ads = Advertisement::leftJoin('condition', 'advertisement.id_condition', '=', 'condition.id_condition')
            ->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
            ->leftJoin('specification', 'advertisement.id_specification', '=', 'specification.id_specification')
            ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location')
            ->leftJoin('user', 'advertisement.id_user', '=', 'user.id_user')
            ->where('id_advertisement','=',$id)
            ->select('advertisement.*', 'type.title AS type', 'condition.title AS condition','specification.title AS specification',
                'location.region AS location',
                DB::raw('CONCAT(first_name," ",last_name) AS user'),DB::raw('CONCAT(city," - ",region) AS location2'))->get()->first();
        $his = $owner;
        $data['owner'] = $his;
        $data['ad'] = $ads;


        $ad = Advertisement::where("id_advertisement","=",$id)->update(["views" =>  DB::raw('views+1')]);




        return view('frontend/inzerat',$data);
    }



    public function ask_helpdesk(Request $request) {
        $rules = array(
            'email'    => 'required|email',
            'text' => 'required|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);



        if ($validator->fails()) {
            return Redirect::to('/poradenstvo')
                ->withErrors($validator); // send back the input (not the password) so that we can repopulate the form
        } else {

            $email = Input::get('email');
            $text = Input::get('text');

            $helpdesk =  new Helpdesk;

            $helpdesk->email = $email;
            $helpdesk->text = $text;
            $helpdesk->was_read = 0;

            $helpdesk->save();

            return redirect('/poradenstvo')->withErrors(['success' => 'Vaša otázka bola poslaná administrátorom stránky']);
        }


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
                'email'    => 'required|email', // make sure the email is an actual email
                'password' => 'required|alphaNum|min:3|confirmed',
                'user_group' => 'required'
            );

            $validator = Validator::make(Input::all(), $rules);


            if ($validator->fails()) {
                return Redirect::to('/user/register')
                    ->withErrors($validator) // send back all errors to the login form
                    ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
            } else {


                $email = Input::get('email');

              if($this->check_email($email)) {
                  return Redirect::to('/user/register')
                      ->withErrors(['email' => 'Emailova adresa už existuje v našej databáze'])
                      ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
              }



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