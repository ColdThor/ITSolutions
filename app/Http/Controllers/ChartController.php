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
    if(session()->has('admin')) {
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
            'title' => 'Počet najnovšie zaregistrovaných používateľov',
            'legend' => [
                'position' => 'bottom'
            ],

        ]);

        //chart - počet pridaných inzerátov v časovom období
        $inzeraty = Lava::DataTable();

        $pocet = DB::table('advertisement')
            ->select(DB::raw('COUNT(id_advertisement) AS pocet'),'date')
            ->groupBy('date')
            ->get();

        $inzeraty->addStringColumn('datum')
            ->addNumberColumn('počet inzerátov');
        foreach($pocet as $poc) {
            $inzeraty->addRow([$poc->date, $poc->pocet]);
                }
            ;

        Lava::AreaChart('Inzeraty', $inzeraty, [
            'title' => 'Počet pridaných inzerátov v čase',
            'legend' => [
                'position' => 'bottom'
            ]
        ]);

        //chart - 3 používatelia s najväčším počtom inzerátov
        $inzerenti = Lava::DataTable();

        $udaje = DB::table('advertisement')
            ->join('user', 'advertisement.id_user', '=', 'user.id_user')
            ->select(DB::raw('COUNT(id_advertisement) AS pocet'),'first_name', 'last_name')
            ->groupBy('first_name')
            ->orderByRaw('pocet DESC')
            ->take(3)
            ->get();

        $inzerenti->addStringColumn('inzerent')
            ->addNumberColumn('počet inzerátov');
        foreach($udaje as $inz) {
            $inzerenti->addRow([$inz->first_name. " " .$inz->last_name, $inz->pocet]);
        }
        ;

        Lava::BarChart('Inzerenti', $inzerenti, [
            'title' => 'Používatelia s najväčším počtom inzerátov',
            'legend' => [
                'position' => 'bottom'
            ]
        ]);

        //chart - počet inzerátov pre dané kraje
        $kraje = Lava::DataTable();

        $datakraj = DB::table('advertisement')
            ->join('location', 'advertisement.id_location', '=', 'location.id_location')
            ->select(DB::raw('COUNT(id_advertisement) AS pocet'),'region')
            ->groupBy('region')
            ->get();

        $kraje->addStringColumn('kraj')
        ->addNumberColumn('počet inzerátov');
        foreach($datakraj as $ud) {
            $kraje->addRow([$ud->region, $ud->pocet]);
        }
        ;

        Lava::DonutChart('Kraje', $kraje, [
            'title' => 'Podiel inzerátov podľa krajov',
            'legend' => [
                'position' => 'bottom'
            ]
        ]);


        return view('admin/admin_home');
    } else {
        return view('admin/no_admin');
    }
}






}