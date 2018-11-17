<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specification;
use Redirect;
use DataTables;
use Validator;
use Session;


class SpecificationController extends Controller {


    public function index() {
        if(session()->has('userID')) {
            return view('admin/admin_specificationtable');
        } else {
            return view('admin/no_admin');
        }
    }

    public function specificationtable() {
        $specification = Specification::all();
        return Datatables::of($specification)
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/it-admin/specifications/'). '/edit/'. $row->id_specification .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/it-admin/specifications/'). '/delete/'. $row->id_specification .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])->make(true);
    }



    public function edit($id) {
        if(session()->has('userID')) {
            $data['title'] = "Editovať druh";

            $specification = Specification::select('*')->where("id_specification", "=", $id)->get()->first();

            $data['specification'] = $specification;

            return view('admin/specification_edit', $data);
        } else {
            return view('admin/no_admin');
        }
    }


    public function delete($id) {
        if(session()->has('userID')) {
            if ($id == null) {
                return abort(404);
            }
            $specification = Specification::find($id);

            $specification->delete();
            return redirect('/it-admin/specifications/');
        } else {
            return view('admin/no_admin');
        }
    }


    public function edit_validator(Request $request) {
        if($request->submit == "submit") {
            $specification = Specification::where("id_specification", "=", $request->input('id'))->first();
            $specification->update([
                "title" => $request->input('title'),
                "group" => $request->input('group')]);
            return redirect()->action('SpecificationController@index');
        } else {
            return redirect()->action('SpecificationController@index');
        }
    }




}