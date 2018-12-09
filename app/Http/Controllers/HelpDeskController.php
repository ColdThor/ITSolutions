<?php


namespace App\Http\Controllers;


use App\Models\Helpdesk;
use Redirect;
use DB;
use Session;
use Input;
use Mail;
use Illuminate\Http\Request;



class HelpDeskController extends Controller
{

    public function index($id) {
        $help = Helpdesk::find($id);
        $data['help'] = $help;
        return view('admin/helpdesk',$data);
    }

    public function send_message(Request $request) {

    }






}
?>