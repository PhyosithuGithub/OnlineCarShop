<?php
    error_reporting(1);
    include("include/mysql_connection.php");
    $ordered_no =$_REQUEST['order_number'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    include("include/head.php");
    ?>
</head>
<body>
<div id="templatemo_wrapper">
    <?php  include("include/menu.php"); ?>
    <?php include("include/slider.php"); ?>

    <div id="templatemo_main">
        <div id="sidebar" class="float_l">
            <div class="sidebar_box"><span class="bottom"></span>
                <?php
                include("include/search.php");
                ?>
            </div>
        </div>
        <div id="content" class="float_r">
            <!--Show Car here!-->
            <u><font face="Times New Romas" color="#000000" size="6">Thank you for your shopping!</font ></u><br/><br/><br/>
            <p><font size="5" color="#008000">Your orders have been sent!</font></p><br/>
            <p><font size="4">Your <b>order number</b> is</font> &nbsp;<?php echo "<font size='5' color='#0000ff'>$ordered_no.</font>"; ?> </p><br/>
            <p><font size="4">Please Come Again!</font></p>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->

</body>
</html>
