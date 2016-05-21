<?php
session_start();
$dbhost="localhost";
   $dbuser="root";
   $dbpass='';
   $db='data_base';
   $data = new mysqli($dbhost,$dbuser,$dbpass,$db);
   if($_POST['subs']){

     $username=strip_tags($_POST['login']);
     $password=strip_tags($_POST['password']);

     $username = stripslashes($username);
     $password = stripslashes($password);


     $sql="SELECT * from users where username='$username' and password='$password'";
     $query=$data->query($sql);
     $row=$query->fetch_array();
     $id=$row['id'];
     $db_password=$row['password'];
     $id=$row['id'];
     if($password==$db_password){
        $_SESSION['login']=$username;
        $_SESSION['id']=$id;
        header('Location: index.php');
     }
     else {
       echo "Wrong username or password!";
     }

   }
   if($_POST['subs2']){
   	$name = $_POST['login'];
   	$password = $_POST['password'];
	$data->query("INSERT INTO `users` (`id`,`username`,`password`) VALUES(null,'$name','$password')");
        header('Location: index.php');
   }
   ?>