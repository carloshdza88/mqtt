<?php


require("../../phpMQTT/phpMQTT.php");


$topico = $_GET['topico'];
$mensaje = $_GET['mensaje'];


$host = "tcp://m15.cloudmqtt.com:15440";
$port = "15440";
$username = "gxcheyfv";
$password = "X9BYHngj4usD";
$message = "";

$mqtt = new phpMQTT($host, $port, "carlos");

echo "Iniciando";
if($mqtt->connect(true,NULL,$username,$password)){

 echo "Conectado";
$mqtt->publish($topico +'/usuario' , $mensaje , 0);
//$mqtt->publish($topico + '/admin' , $mensaje , 0);
 $mqtt->close();


}
else{

 echo "No conecto;";
}


echo json_encode(array('status' => 200 , 'message' => 'mensaje enviado'));

 ?>
