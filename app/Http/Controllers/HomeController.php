<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DataTables;
use Validator;
use Session;


class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }


}