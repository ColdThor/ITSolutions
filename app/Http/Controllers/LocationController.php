<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 05.11.2018
 * Time: 11:22
 */

namespace App\Http\Controllers;
use App\Models\Location;




class LocationController extends Controller
{



    public function populate() {


        $regionarrays = array("Bratislava","Nitra","Banská Bystrica","Košice","Trnava");
        for($i = 0; $i<=5;$i++) {
            $location = new Location();
            $random = rand(0,4);
            $location->region = $regionarrays[$random];
            $location->save();

        }
        echo "<div align='center'>";
        echo "<h1>Pridal som 5 záznamov do tabuľky location</h1>";
        echo "<img src='/reality/assets/img/wow.gif' height='30%' width='30%'/>";
        echo "</div>";
    }





}