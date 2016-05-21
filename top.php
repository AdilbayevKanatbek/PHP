<div id="menu_tab">                                     
                    <ul class="menu">                    
                         <li><a href="index.php" class="nav"> home </a></li>
                         <li><a href="about.php" class="nav_selected"><?php
                        if($_SESSION['login']!="no"){
                            echo $_SESSION['login'];
                        }else{
                            echo "Log In";
                        }
                         ?></a></li>
                         <li><a href="products.php" class="nav"> products</a></li>
                         <li><a href="contact.php" class="nav"> contact </a></li>

                    </ul>
            </div> 
