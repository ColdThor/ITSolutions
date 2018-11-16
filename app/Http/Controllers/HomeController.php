<?php


namespace App\Http\Controllers;


use Redirect;
use Validator;
use DB;
use Session;



class HomeController extends Controller
{


    public function index()
    {
        return view('frontend/home');
    }


}