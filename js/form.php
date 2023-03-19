<?php
error_reporting(0);
$alias = $_POST['alias'];
$email= $_POST['email'];
$radio= $_POST['vtuber'];
$radio= $_POST['utau'];
$radio= $_POST['other'];
$mensaje .="your message here".$_POST['message'] . " \r\n";
$mensaje .= "message" . date('d/m/Y', time());

$para = live2dloreamstudios@gmail.com;

mail($para, utf8_decode($mensaje), $header);

echo 'message sent successfully';

?>