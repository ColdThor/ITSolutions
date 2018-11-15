<?php


namespace app\Http\Controllers;

class TestController {

   public function  test() {
       $mystring = " Gastly used paralyze. Ultra effective";
       echo "<div align='center' style='color: purple; font-size: 100px'>".$mystring;
       echo "<br />";
       echo "<img src='/reality/assets/img/gastly.png' height='440px' width='356px'/>";
       echo " </div>";
}

    public function  test2() {
        $mystring = " Charizard, fire breath attack!";
        echo "<div align='center' style='color: orange; font-size: 100px'>".$mystring;
        echo "<br />";
        echo "<img src='/reality/assets/img/charizard.png' style='cursor: pointer;' onclick='new function test2() {
       var audio = new Audio(admin-theme);
        audio.play();
}' height='440px' width='356px'/>";
        echo " </div>";
    }


    public function  test3() {
        $mystring = " Pikachu I choose you!";
        echo "<div align='center' style='color: yellow; font-size: 100px'>".$mystring;
        echo "<br />";
       echo "<img src='/reality/assets/img/pikachu.png' onclick='new function lol() {
        var audio = new Audio(\"/reality/assets/sounds/pikachu.mp3\");
        audio.play();
}' style='cursor: pointer;' height='440px' width='356px'/>";
        echo " </div>";


    }




}

