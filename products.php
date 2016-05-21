<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
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
        <?php
            $data = new mysqli("localhost","root","","data_base");
            $sql = "SELECT * FROM orders";
            $res = $data->query($sql);
            echo "<div class='categories_products'>
                    <div class='title'><img src='../img/title_products.gif'/></div>
            ";
            while($row = $res->fetch_array()){
                printf("
                    <div class='prod_box'>
                        <img src='%s' class='prod_img'/>
                        <div class='prod_details'>
                            <h1>%s</h1>
                            <p>%s</p>
                        
                            <input type='image' class='hooks' src='../img/order.gif' value='%s'>
                </div></div>
                ",$row['pic'],$row['name'],$row['texts'],$row['id']);
            }
            echo "
                     <div class='pagination'>
            <span class='disabled'>prev</span>
            <span class='current'>1</span>
            <a href='#?page=2'>2</a>
            <a href='#?page=3'>3</a>
            <a href='#?page=4'>4</a>
            <a href='#?page=7'>5</a>...<a href='#?page=22'>22</a>
            <a href='#?page=23'>23</a>
            <a href='#?page=2'>next</a>
             </div>
             <div class='clear'></div>
            </div>";
        ?>

        </div>

    </div>

    <div id="footer">
        <div class="left_footer"><img src="../img/footer_logo.gif" alt="" title="" /></div>

    </div>

</div>
</body>
</html>
