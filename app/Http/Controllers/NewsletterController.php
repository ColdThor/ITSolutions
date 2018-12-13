<?php


namespace App\Http\Controllers;


use App\Models\Newsletter;
use Redirect;
use DB;
use Session;
use Input;
use Mail;
use Validator;
use Illuminate\Http\Request;



class NewsletterController extends Controller
{

    public function index() {
        return view('admin/newsletter');
    }

    public function send_newsletter(Request $request) {

        $rules = array(
            'newsletter' => 'required|min:3'
        );
        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('it-admin/newsletter')
                ->withErrors($validator);
        } else {
            $newsletter = Newsletter::all();

        $emails = array();
            $text = Input::get('newsletter');

            foreach($newsletter as $news) {
                array_push($emails,$news->email);
            }



            $data = array('text'=>$text, 'to' => $emails);
            Mail::send('admin/newsletter_mail', ["data" => $data], function ($message) use ($data) {
                $message->from('svetrealit@devsite.sk', 'Svet Realít');
                $message->subject("Svet Realít - Newsletter");
                $message->to($data['to']);
            });
            return redirect()-> action('ChartController@index');
        }


    }






}
?>