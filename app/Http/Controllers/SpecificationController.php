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
        return view('admin/admin_specificationtable');
    }

    public function specificationtable() {
        $specification = Specification::all();
        return Datatables::of($specification)
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/specifications/'). '/edit/'. $row->id_specification .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/specifications/'). '/delete/'. $row->id_specification .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])->make(true);
    }



    public function edit($id) {
        $data['title'] = "Editovať druh";

        $specification = Specification::select('*')->where("id_specification","=",$id)->get()->first();

        $data['specification'] =  $specification;

        return view('admin/specification_edit',$data);
    }


    public function delete($id) {

        if($id == null) {
            return abort(404);
        }
        $specification = Specification::find($id);

        $specification->delete();
        return redirect('/specifications/');
    }


    public function edit_validator(Request $request) {

        $specification = Specification::where("id_specification","=",$request->input('id'))->first();
        $specification->update([
            "title" => $request->input('title'),
            "group" => $request->input('group')]);
        return redirect()-> action('SpecificationController@index');
    }




}