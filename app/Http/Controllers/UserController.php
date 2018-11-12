<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 22.10.2018
 * Time: 12:03
 */

namespace App\Http\Controllers;
use App\Models\Usergroup;
use Illuminate\Http\Request;
use App\Models\User;
use Redirect;
use DataTables;
use Validator;
use Session;

use Fico7489\Laravel\EloquentJoin\Traits\EloquentJoin;
use Illuminate\Database\Eloquent\Model;


class UserController extends Controller {


    public function insert() {

        $namearrays = array("John","Michael","Thomas","Juliette","Adrienne");
        $namearrays2 = array("Wick","Strowman","Wayne","Doe","Orton");
        for($i = 0; $i<=10;$i++) {
            $user = new User();
            $random = rand(0,4);
            $user->First_name = $namearrays[$random];
            $random = rand(0,4);
            $user->Last_name = $namearrays2[$random];
            $user->Email =  $user->First_name.".". $user->Last_name."@gmail.com";
            $user->Password = str_random(8);
            $user->ID_usergroup = null;
            $user->save();
        }
        echo "<div align='center'><h1>Pridal som 10 záznamov do tabuľky users</h1></div>";
    }

    public function update_usergroup($id) {
        $user =  User()::where("ID_user","=",$id)->first();
        $user->update(["ID_usergroup" => 1]);
    }



        public function show($id) {
            $user = User::find($id);
            if($user != null) {
                echo "Používateľ pod ID ".$id." je ".$user ->First_name." ".$user ->Last_name."<br />";
                echo "Email usera: ".$user -> Email. "<br />";
            } else {
                echo "<div align='center'>";
                echo "<h1>Používateľ s ID $id neexistuje."."</h1><br />";
                echo "<br /> <img src='/reality/assets/img/cry.gif' />";

                echo "</div>";
            }
        }


    public function showall() {
        $user = User::all();
        echo "<h1>List of  all users</h1>";
        echo "<br />";
       foreach($user as $users) {
           echo $users ->First_name." ".$users->Last_name." with email ".$users->Email."<br />";
       }
    }

    public function update($id) {
        $namearrays2 = array("Wick","Strowman","Wayne","Doe","Orton");
        $random = rand(0,4);
        $user = User::where("id_user","=",$id)->first();
        if($user != null) {
            $user->update(["Last_name"=>$namearrays2[$random]]);
            echo "<div align='center'>";
            echo "<h1>User s číslom $id bol updateovaný, jeho nové priezvisko je $user->Last_name</h1>";
            echo "<br /> <img src='/reality/assets/img/wedding.gif' />";
            echo "</div>";
        } else {
            echo "<div align='center'>";
            echo "<h1>Nebol updateovaný user s číslom $id, lebo neexistuje</h1>";
            echo "<br /> <img src='/reality/assets/img/cry.gif' />";
            echo "</div>";
        }

    }

    public function delete($id) {

        if($id == null) {
            return abort(404);
        }
        $user = User::find($id);

            $user->delete();
        return redirect('/');
    }



    public function edit($id) {
        $data['title'] = "Editovať používateľa";

        $user = User::join('user_group', 'user.id_user_group', '=', 'user_group.id_user_group')
            ->select('*')->where("id_user","=",$id)->get()->first();

        $rola = Usergroup::all();



        $data['users'] =  $user;
        $data['rola'] =  $rola;
        return view('admin/user_edit',$data);
    }

    public function edit_validator(Request $request) {


        $user = User::where("id_user","=",$request->input('id'))->first();
        $user->update(["first_name" => $request->input('first_name'),
        "last_name" => $request->input('last_name'),
            "email" => $request->input('email'),
            "id_user_group" => $request->input('rola'),
            "telephone" => $request->input('telephone')]);
        return redirect()-> action('UserController@index');

    }




    public function usertable()
    {
        $users = User::leftJoin('user_group', 'user.id_user_group', '=', 'user_group.id_user_group')
            ->select('*');
        return Datatables::of($users)
            ->addColumn('full_name', function ($row) {
                return $row->first_name ." ". $row->last_name;
            })
            ->addColumn('edit', function($row) {
                return '<a  href="'. url('/'). '/edit/'. $row->id_user .'" class="editbutton">Editovať</a>';
            })
            ->addColumn('delete', function ($row) {
                return '<a href="'. url('/'). '/delete/'. $row->id_user .'" class="deletebutton">Zmazať</a>';
            })
            ->rawColumns(['delete' => 'delete','edit' => 'edit'])
            ->editColumn('telephone', function ($row) {
                if($row->telephone==null) {
                    return "Používateľ nemá def. tel. číslo";
                } else {
                    return $row->telephone;
                }

            })
            ->make(true);
    }
    public function index() {
        return view('admin/admin_userstable');
    }



}