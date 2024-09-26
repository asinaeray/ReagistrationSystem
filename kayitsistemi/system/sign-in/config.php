<?php
   define("DB_SERVER","localhost");
   define("DB_USERNAME","root");
   define("DB_PASSWORD","");
   define("DB_NAME","kayitsistemi");

   $con=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

   if($con===false){
        die("ERROR".mysqli_connect_error());
   }
   else{
    //echo("Bağlantı Başarılı");
   }

?>