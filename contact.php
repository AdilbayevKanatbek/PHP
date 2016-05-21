<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Musical instruments</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
            	<div class="title"><img src="../img/title_contact.gif" alt="" title="" /></div>

                    <div class="prod_box">
                    	<img src="../img/contact.gif" alt="" title="" class="prod_img"/>
                        <div class="contact_details">
                            <p>
                             <span>Adress:</span> Almaty, sdu <br />
                             <span>Email:</span> <a href="#">email@is.sdu.edu.kz</a><br />
                             <span>Phone:</span> 87262-77-77-77<br />
                            </p>
                        </div>
                    </div>
            		<div class="clear"></div>

            </div>

		        <div id="contact_form">
                        <label class="contact_form">Name:</label>
		      			<input type="text" name="user" class="contact_input" />
		       			<div class="cleardiv"></div>
                        <label class="contact_form">Email:</label>
		      		 	<input type="text" name="payuity"  class="contact_input"/>
		       			<div class="cleardiv"></div>
                        <label class="contact_form">Message:</label>
		      		 	<textarea name="text" cols="" rows="" class="contact_textarea"></textarea>
		       			<div class="cleardiv"></div>
                        <input type="image" src="../img/send.gif" class="contact_submit" />

      		    </div>

                <div class="clear"></div>


        </div>

    </div>

    <div id="footer">
        <div class="left_footer"><img src="../img/footer_logo.gif" alt="" title="" /></div>

    </div>

</div>
</body>
</html>
