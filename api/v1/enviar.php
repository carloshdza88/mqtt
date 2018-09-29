<?php


require("../../phpMQTT/phpMQTT.php");


echo "<h1> MQTT </h1>";

$host = "tcp://m15.cloudmqtt.com:15440";
$port = "15440";
$username = "gxcheyfv";
$password = "X9BYHngj4usD";
$message = "";

$mqtt = new phpMQTT($host, $port, "carlos");

echo "Iniciando";
if($mqtt->connect(true,NULL,$username,$password)){

 echo "Conectado";
 $mqtt->publish("smnyl/carlos","TCK213422".date("r"),0);
 $mqtt->close();


}
else{

 echo "No conecto;";
}


 ?>
