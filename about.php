<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Musical instruments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src='jquery.js'></script>
<script type="text/javascript" src='javas.js'></script>
</head>
<body>

<div id="main_container">

	<div id="header">
    <div class="logo">
    <a href="index.html"><img src="../img/logo.gif" alt="" title="" border="0" /></a>
    </div>
    
    </div>
    

            
            
    <div id="main_content">
    
    	<div class="center_content">
        <?php
            require_once 'top.php';
        ?>
        <div class="welcome_block">
                <div class="title"><img src="../img/title_about.gif" alt="" title="" /></div>
                
                <h2 align="center"><b>
                <?php
                if($_SESSION['login']=="no"){
                    echo "<form action='log.php' method='post'>";
                    echo "<input type='text' placeholder='Login' name='login'><br>";
                    echo "<input type='password' placeholder='Password' name='password'>";
                    echo "<br>";
                    echo "<input type='submit' value='login' name='subs'>";
                    echo "<input type='submit' value='password' name='subs2'>";
                    echo "</form>";
                }else{
?>
                    <?php
                        echo $_SESSION['login'];
                    ?>
                    <button id='out'>Log Out</button><br>
                    <?php
                    $dbhost="localhost";
                       $dbuser="root";
                       $dbpass='';
                       $db='data_base';
                       $data = new mysqli($dbhost,$dbuser,$dbpass,$db);
                       $user = $_SESSION['login'];
                       $sql = $data->query("SELECT * FROM my_ord WHERE name='$user'");
                       while($row = $sql->fetch_assoc()){
                        $sql1 = $data->query("SELECT * FROM orders WHERE id='$row[order_id]'");
                        $result = $sql1->fetch_row();
                        echo "<img src='".$result[3]."'>".$result[1]."<br>";
                       }
                    ?>
                </b></h2>
                <br><?php ;
                }
                ?>
        </div>


</div>
</body>
</html>
