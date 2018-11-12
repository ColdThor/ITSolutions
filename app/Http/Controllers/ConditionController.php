<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;
use Redirect;
use DataTables;
use Validator;
use Session;



class ConditionController extends Controller {



    public function index() {
        return view('admin/admin_conditiontable');
    }

    public function conditiontable() {
        $conditions = Condition::all();
        return Datatables::of($conditions)
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/conditions/'). '/edit/'. $row->id_condition .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/conditions/'). '/delete/'. $row->id_condition .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])->make(true);
    }



    public function edit($id) {
        $data['title'] = "Editovať stav";

        $condition = Condition::select('*')->where("id_condition","=",$id)->get()->first();


        $data['condition'] =  $condition;

        return view('admin/condition_edit',$data);
    }


    public function delete($id) {

        if($id == null) {
            return abort(404);
        }
        $condition = Condition::find($id);

        $condition->delete();
        return redirect('/conditions/');
    }


    public function edit_validator(Request $request) {

        $condition = Condition::where("id_condition","=",$request->input('id'))->first();
        $condition->update([
            "title" => $request->input('title')]);
        return redirect()-> action('ConditionController@index');
    }




}