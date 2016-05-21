<?php
session_start();
if($_SESSION['login']=='no'){
	echo "no";
}else{
$dbhost="localhost";
   $dbuser="root";
   $dbpass='';
   $db='data_base';
   $data = new mysqli($dbhost,$dbuser,$dbpass,$db);
   $user = $_SESSION['login'];
   $thing = $_POST['thing'];
   $sql = $data->query("SELECT * FROM my_ord WHERE `name`='$user' and `order_id`='$thing'");
   $row = $sql->fetch_row();
   if($row[1]){
   	echo "have";
   }else{
   	$data->query("INSERT INTO my_ord (`name`,`order_id`,`asd`) VALUES ('$user','$thing','asd')");
   	echo "yes";
   }}
   ?>