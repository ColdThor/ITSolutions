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
use Lava;





class ChartController extends Controller {





public function index() {


//DOKUMENTÁCIA: http://lavacharts.com/#examples
    if(session()->has('userID')) {
        $chart = Lava::DataTable();

        $date = DB::table('user')->max('created_at');


        $date = substr($date, 0, 11);

        $yesterday = DB::table('user')->where('created_at', 'NOT LIKE', $date . '%')->max('created_at');

        $data = User::where("created_at", "LIKE", $date . '%')->count();

        $yesterday = substr($yesterday, 0, 11);
        $data2 = User::where("created_at", "LIKE", $yesterday . '%')->count();

        $chart->addStringColumn('Deň')
            ->addNumberColumn('Deň 1')
            ->addNumberColumn('Deň 2')
            ->addRow([$date . "   &   " . $yesterday, $data, $data2]);

        Lava::ColumnChart('Finances', $chart, [
            'title' => 'Počet najnovších zaregistrovaných používateľov',
            'titleTextStyle' => [
                'color' => '#eb6b2c',
                'fontSize' => 14
            ],
            'vAxis' => [
                'minValue' => 0,
                'maxAlternation' => 1

            ],

        ]);
        return view('admin/admin_home');
    } else {
        return view('admin/no_admin');
    }
}


}