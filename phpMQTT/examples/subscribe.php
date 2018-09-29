<?php

require("../phpMQTT.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);

 $host = "tcp://m15.cloudmqtt.com:15440";
 $port = "15440";
 $username = "gxcheyfv";
 $password = "X9BYHngj4usD";
 $message = "";



   $mqtt = new phpMQTT($host, $port, "carlos");

   echo "Iniciando";
   if(!$mqtt->connect(true,NULL,$username,$password)){
       exit(1);
       echo "no conecto";
   }

   $topics['#'] = array("qos"=>0, "function"=>"procmsg");
   $mqtt->subscribe($topics,1);



     try{
     	while($mqtt->proc()){

     	}

     }catch(Exception $ex){
        echo "Excepcion en el while";
     }

       $mqtt->close();

       function procmsg($topic,$msg){

         echo "Mensaje - " . $msg;

       }


?>
