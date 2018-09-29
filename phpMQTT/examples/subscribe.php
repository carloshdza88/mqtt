<?php

require("../phpMQTT.php");

error_reporting(E_ALL);
ini_set("display_errors", 1);

 $host = "tcp://m15.cloudmqtt.com:15440";
 $port = "15440";
 $username = "gxcheyfv";
 $password = "X9BYHngj4usD";
 $message = "";


 //MQTT client id to use for the device. "" will generate a client id automatically
 $mqtt = new phpMQTT($host, $port, "ClientID".rand());

 if($mqtt->connect(true,NULL,$username,$password)) {
      echo "Conectado";


}
else
{
			echo "Fail or time out<br />";
}

/*
//$topics['ferries/IOW/#'] = array("qos"=>0, "function"=>"procmsg");
$topics = "#";
$mqtt->subscribe($topics,0);

while($mqtt->proc()){

}


//$mqtt->close();

function procmsg($topic,$msg){
		echo "Msg Recieved: ".date("r")."\nTopic:{$topic}\n$msg\n";
}

*/

?>
