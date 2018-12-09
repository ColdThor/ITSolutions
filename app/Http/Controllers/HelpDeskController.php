<?php


namespace App\Http\Controllers;


use App\Models\Helpdesk;
use Redirect;
use DB;
use Session;
use Input;
use Mail;
use Validator;
use Illuminate\Http\Request;



class HelpDeskController extends Controller
{

    public function index($id) {
        $help = Helpdesk::find($id);
        $data['help'] = $help;
        return view('admin/helpdesk',$data);
    }

    public function send_message(Request $request) {

        $rules = array(
            'response' => 'required|min:3'
        );
        $validator = Validator::make(Input::all(), $rules);

        $id = Input::get('id_helpdesk');
        if ($validator->fails()) {
            return Redirect::to('it-admin/helpdesk/'.$id)
                ->withErrors($validator);
        } else {
            $help = Helpdesk::where("id_helpdesk","=",$id)->update(["was_read" =>  1]);
            $help_data = Helpdesk::find($id);
            $text = Input::get('response');
            $email = $help_data->email;


            $data = array('text'=>$text, 'to' => $email, 'id' => $id,'message' => $help_data->text);
            Mail::send('admin/reply', ["data" => $data], function ($message) use ($data) {
                $message->from('chrisfodor333@gmail.com', 'Svet Realít');
                $message->subject("Odpoveď na Vašu otázku - Svet Realít");
                $message->to($data['to']);
            });
            return redirect()-> action('ChartController@index');
        }


    }






}
?>