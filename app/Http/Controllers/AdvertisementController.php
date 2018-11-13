<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Condition;
use App\Models\Type;
use App\Models\Location;
use App\Models\Specification;
use App\Models\User;
use Redirect;
use DataTables;
use Validator;
use DB;
use Session;



class AdvertisementController extends Controller {



    public function index() {
        return view('admin/admin_adtable');
    }

    public function table() {
        $ads = Advertisement::leftJoin('condition', 'advertisement.id_condition', '=', 'condition.id_condition')
            ->leftJoin('type', 'advertisement.id_type', '=', 'type.id_type')
            ->leftJoin('specification', 'advertisement.id_specification', '=', 'specification.id_specification')
            ->leftJoin('location', 'advertisement.id_location', '=', 'location.id_location')
            ->leftJoin('user', 'advertisement.id_user', '=', 'user.id_user')
            ->select('advertisement.*', 'type.title AS type', 'condition.title AS condition','specification.title AS specification', 'location.region AS location', DB::raw('CONCAT(first_name," ",last_name) AS user'));
        return Datatables::of($ads)
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/inzercia/'). '/edit/'. $row->id_advertisement .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/inzercia/'). '/delete/'. $row->id_advertisement .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])
            ->editColumn('contact_mail', function ($row) {
                if($row->contact_mail==null) {
                    return "Používateľ nezadal svoju emailovu adresu";
                } else {
                    return $row->contact_mail;
                }

            })
            ->editColumn('contact_phone', function ($row) {
                if($row->contact_phone==null) {
                    return "Používateľ nezadal svoje tel. číslo";
                } else {
                    return $row->contact_phone;
                }

            })
            ->make(true);
    }



    public function edit($id) {
        $data['title'] = "Editovať inzerciu";

        $ad = Advertisement::select('*')->where("id_advertisement","=",$id)->get()->first();

        $condition = Condition::all();
        $type = Type::all();
        $specification = Specification::all();
        $location = Location::all();
        $user = User::all();

        $data['ads'] =  $ad;
        $data['condition'] =  $condition;
        $data['type'] =  $type;
        $data['specification'] =  $specification;
        $data['location'] =  $location;
        $data['user'] =  $user;



        return view('admin/ad_edit',$data);
    }


    public function delete($id) {

        if($id == null) {
            return abort(404);
        }
        $ad = Advertisement::find($id);

        $ad->delete();
        return redirect('/inzercia/');
    }


    public function edit_validator(Request $request) {

        $ad = Advertisement::where("id_advertisement","=",$request->input('id'))->first();
        $ad->update([
            "title" => $request->input('title'),
            "description" => $request->input('description'),
            "date" => $request->input('date'),
            "contact_mail" => $request->input('contact_mail'),
            "contact_phone" => $request->input('contact_phone'),
            "price" => $request->input('price'),
            "area" => $request->input('area'),
            "id_user" => $request->input('id_user'),
            "id_condition" => $request->input('id_condition'),
            "id_type" => $request->input('id_type'),
            "id_location" => $request->input('id_specification'),
            "id_specification" => $request->input('id_specification')]);
        return redirect()-> action('AdvertisementController@index');
    }




}