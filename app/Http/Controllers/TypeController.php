<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Redirect;
use DataTables;
use Validator;
use Session;


class TypeController extends Controller {


    public function index() {
        if(session()->has('userID')) {
            return view('admin/admin_typetable');
        } else {
            return view('admin/no_admin');
        }
    }

    public function typetable() {
        $type = Type::all();
        return Datatables::of($type)
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/it-admin/types/'). '/edit/'. $row->id_type .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/it-admin/types/'). '/delete/'. $row->id_type .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])->make(true);
    }



    public function edit($id) {
        if(session()->has('userID')) {
            $data['title'] = "Editovať typ";

            $type = Type::select('*')->where("id_type", "=", $id)->get()->first();

            $data['type'] = $type;

            return view('admin/type_edit', $data);
        } else {
            return view('admin/no_admin');
        }
    }


    public function delete($id) {
        if(session()->has('userID')) {
            if ($id == null) {
                return abort(404);
            }
            $type = Type::find($id);

            $type->delete();
            return redirect('/it-admin/types/');
        } else {
            return view('admin/no_admin');
        }
    }


    public function edit_validator(Request $request) {
        if($request->submit == "submit") {
            $type = Type::where("id_type", "=", $request->input('id'))->first();
            $type->update([
                "title" => $request->input('title')]);
            return redirect()->action('TypeController@index');
        } else {

            return redirect()->action('TypeController@index');
        }
    }




}