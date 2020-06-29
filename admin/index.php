<?php
session_start();
error_reporting(1);
include("mysql_connection.php");

if($_SESSION['email_address']==""){
    header("location:login.php");
}else{
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
        include("include/head.php")
    ?>
</head>
<body>
<div id="templatemo_wrapper">
<?php  include("include/menu.php"); ?>
<?php /*include("include/slider.php"); */?>

    <div id="templatemo_main">
   		<div id="sidebar" class="float_l">
        	<div class="sidebar_box"><span class="bottom"></span>
                <?php
                    include("include/panel.php");
                ?>
            </div>
        </div>
        <div id="content" class="float_r">
            <marquee behavior="alternate"><h1><font color="green">Welcome To Admin</font> </h1></marquee>
           <font size="3"><b><p>  <i>Your Panel!</i></p></b></font>
            <b><p>- You can<font color="#edc709" size="3"> Edit, Delete, Insert and Update </font>Car Information Here! </p></b>
            <b><p>- Your choices are on the left sidebar!</p></b>

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
	<?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
<?php } ?>
</body>
</html>