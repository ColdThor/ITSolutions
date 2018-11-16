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
        return view('admin/admin_typetable');
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
        $data['title'] = "Editovať typ";

        $type = Type::select('*')->where("id_type","=",$id)->get()->first();

        $data['type'] =  $type;

        return view('admin/type_edit',$data);
    }


    public function delete($id) {

        if($id == null) {
            return abort(404);
        }
        $type = Type::find($id);

        $type->delete();
        return redirect('/it-admin/types/');
    }


    public function edit_validator(Request $request) {

        $type = Type::where("id_type","=",$request->input('id'))->first();
        $type->update([
            "title" => $request->input('title')]);
        return redirect()-> action('TypeController@index');
    }




}