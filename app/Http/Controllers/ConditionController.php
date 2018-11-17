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
        if(session()->has('userID')) {
            return view('admin/admin_conditiontable');
        } else {
            return view('admin/no_admin');
        }
    }

    public function conditiontable() {
        $conditions = Condition::all();
        return Datatables::of($conditions)
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/it-admin/conditions/'). '/edit/'. $row->id_condition .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/it-admin/conditions/'). '/delete/'. $row->id_condition .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])->make(true);
    }



    public function edit($id) {
        if(session()->has('userID')) {
            $data['title'] = "Editovať stav";

            $condition = Condition::select('*')->where("id_condition", "=", $id)->get()->first();


            $data['condition'] = $condition;

            return view('admin/condition_edit', $data);
        } else {
            return view('admin/no_admin');
        }
    }


    public function delete($id) {
        if(session()->has('userID')) {
            if ($id == null) {
                return abort(404);
            }
            $condition = Condition::find($id);

            $condition->delete();
            return redirect('/it-admin/conditions/');
        } else {
            return view('admin/no_admin');
        }
    }


    public function edit_validator(Request $request) {
        if($request->submit == "submit") {
            $condition = Condition::where("id_condition", "=", $request->input('id'))->first();
            $condition->update([
                "title" => $request->input('title')]);
            return redirect()->action('ConditionController@index');
        } else {
            return redirect()->action('ConditionController@index');
        }
    }




}