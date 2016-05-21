
<?php

if (!empty($message)) {echo "<p class=\"error\">".$message . "</p>";} ?>
<div class="collapse" id="collapseExampl">
  <div class="well">
<?php
$con=mysqli_connect("localhost","root","","mysql");
mysqli_select_db($con,"data_base");
if(isset($_POST['registration'])){
$name=$_POST['username'];

$password=$_POST['password'];
$query=$con->query("INSERT INTO `users` (`id`,`username`,`password`) VALUES(null,'$name','$password')");
}

?>


<?php
   session_start();

   $dbhost="localhost";
   $dbuser="root";
   $dbpass='';
   $db='data_base';
   $data = new mysqli($dbhost,$dbuser,$dbpass,$db);
   if ($data->connect_errno) {
    printf("Connect failed: %s\n", $data->connect_error);
    exit();
  }


   if(isset($_POST['login'])){

     $username=strip_tags($_POST['username']);
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
        $_SESSION['username']=$username;
        $_SESSION['id']=$id;
        header('Location: login.php');

     }
     else {
       echo "Wrong username or password!";
     }

   }
?>

<?php
   if(isset($_POST['log out'])){
     session_destroy();
     session_unset();

   }
   ?>


<html>
<head>
   <title>log in</title>
</head>
<body>
<h1 style="font-family: Tahoma;">Login</h1>
<form action="login.php" method="post" enctype="multipart/form-data">
     <input placeholder="username" name="username" type="text" autofocus>
     <input placeholder="password" name="password" type="password" >
     <input name="login" type="submit" value="login">
     <input name="registration" type="submit" value="registration">
     <input name="log out" type="submit" value="log out">
     </form>

</body>
</html>
