<?php
error_reporting(1);
include("include/mysql_connection.php");
$car_model =$_GET['car_model'];
$id =$_GET['cate_id'];
$query ="SELECT * FROM car WHERE model='$car_model'";
$result =mysql_query($query);
$row =mysql_fetch_array($result);
$type =$row['type'];
$year =$row['year'];
$color =$row['color'];
$price =$row['price'];
$mile =$row['mileage'];
$fuel =$row['fuel_type'];
$seat =$row['seat'];
$img =$row['image'];
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
            <center><u><font face="Times New Romas" color="#0000ff" size="4"><?php echo $car_model;?></font ></u></center><br/>
            <?php
/*                echo "<table border='0' width='100%'>
                        <tr><td><hr color='#fcd6d6'/></td></tr>
                        <tr align='center' bgcolor='#ffbfbf'> <td>Car details</td></tr>
                        <tr><td><hr color='#fcd6d6'/></td></tr>
                      </table><br/>
                      <table>
                     ";
            */?>
            <?php
                echo "<table border='0' width='100%'>
                        <tr><td><hr color='#fcd6d6'/></td></tr>
                        <tr align='center' bgcolor='#ffbfbf'> <td><strong>Car details</strong></td></tr>
                        <tr><td><hr color='#fcd6d6'/></td></tr>
                      </table>
                      <table>";
                echo "<table border='0' width='70%' cellspacing='7'>";
                echo "<tr><td rowspan='8'>"."<img src='admin/images/car/$img' width='170px' height='190px'/>";
                echo "<td>"."<b>Model</b>"."</td>";
                echo "<td>".$car_model."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Type</b>";
                echo "<td>".$type."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Year</b>";
                echo "<td>".$year."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Color</b>";
                echo "<td>".$color."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Price</b>";
                echo "<td>".$price."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Mileage</b>";
                echo "<td>".$mile."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Fuel Type</b>";
                echo "<td>".$fuel."</td>";
                echo "</tr>";
                echo "<tr><td>"."<b>Seat</b>";
                echo "<td>".$seat."</td>";
                echo "</tr>";
                echo "<tr><td colspan='3' align='right'>"."<a href='carlist.php'/><b>Back</b><a>";
                echo "</tr>";
                echo "</table>";
            ?>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->

</body>
</html>