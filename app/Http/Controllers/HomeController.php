<?php


namespace App\Http\Controllers;


use Redirect;
use Validator;
use DB;
use Session;
use App\Models\Advertisement;
use App\Models\Usergroup;
use App\Models\Condition;
use App\Models\Type;
use App\Models\Location;
use App\Models\Specification;
use App\Models\User;


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


}