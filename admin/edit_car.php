<?php
session_start();
if($_SESSION['email_address']==""){
    header('location:login.php');
}else{
?>
<?php
    error_reporting(1);
    include("include/mysql_connection.php");
    /*if(isset($_GET['edit'])){*/
        $edit_id =$_GET['edit'];
        $query ="SELECT * FROM car 
                 WHERE id='$edit_id'";
        $result =mysql_query($query);
        $row =mysql_fetch_array($result);
            $model =$row['model'];
            $type =$row['type'];
            $color =$row['color'];
            $price =$row['price'];
            $mile =$row['mileage'];
            $fuel =$row['fuel_type'];
            $seat =$row['seat'];

    if(isset($_POST['update'])){
        $type =$_POST['type'];
        $price =$_POST['price'];
        $fuel =$_POST['fuel'];
        $seat =$_POST['seat'];
        $sql_query= "UPDATE car SET type='$type',price='$price',fuel_type='$fuel',seat='$seat' 
                     WHERE id='$edit_id'";
        $result =mysql_query($sql_query);
        header("location:manage_car.php");
    }

    /*}*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include("include/head.php");?>
</head>
<body>
<div id="templatemo_wrapper">
    <?php  include("include/menu.php"); ?>
    <?php /*include("include/slider.php"); */?>

    <div id="templatemo_main">
        <div id="sidebar" class="float_l">
            <div class="sidebar_box"><span class="bottom"></span>
                <?php include("include/panel.php"); ?>
            </div>
        </div>
        <div id="content" class="float_r">
            <center><font face="Times New Romas" color="#000000" size="5">Update Car Info!</font ></center><br/>
            <div id="contact_form">
                <form method="post"  action="#" enctype="multipart/form-data">
                    <label>Model:</label>
                    <input type="text" name="model" class="input_field" value="<?php echo $model; ?>" readonly/>
                    <label>Type:</label>
                    <input type="text" name="type" class="input_field" value="<?php echo $type; ?>"/>
                    <label>Color:</label>
                    <input type="text" name="color" class="input_field" value="<?php echo $color; ?>" readonly/>
                    <label>Price:</label>
                    <input type="text" name="price" class="input_field" value="<?php echo $price; ?>" />
                    <label>Mileage:</label>
                    <input type="text" name="mile" class="input_field" value="<?php echo $mile; ?>" readonly/>
                    <label>Fuel Type:</label>
                    <input type="text" name="fuel" class="input_field" value="<?php echo $fuel; ?>" />
                    <label>Seat:</label>
                    <input type="text" name="seat" class="input_field" value="<?php echo $seat; ?>" />

                    <input type="submit" name="update"  value="Update" class="submit_btn float_l" />
                </form>
            </div>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
<?php } ?>
</body>
</html>