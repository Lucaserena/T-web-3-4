<?php include 'top.html';
       require 'profile.php';

 if (isset($_REQUEST["min"]) && isset($_REQUEST["max"]) && isset($_REQUEST["nome"]) && isset($_REQUEST["gender"])
      && isset($_REQUEST["age"]) && isset($_REQUEST["personality_type"]) && isset($_REQUEST["oS"]) ) {
         $min = $_REQUEST["min"];
         $max = $_REQUEST ["max"];
         $age = $_REQUEST ["age"];
         $oS = $_REQUEST ["oS"];
         $nome =  $_REQUEST ["nome"];
         $gender = $_REQUEST ["gender"];
         $pT = $_REQUEST ["personality_type"];
         $profilo  = new profile();
         $profilo->setProfile ($nome, $gender, $age, $pT, $oS, $min, $max);
         $profilo->write();
     }
?>
     <p> Thank You! </p> <br/>
     <p> Welcome to NerdLuv <?= $nome ?> !
     Now <a href= "matches.php"> log in to see your matches! </a>


<?php include 'bottom.html' ?>