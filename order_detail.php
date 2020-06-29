<?php
session_start();
error_reporting(1);
$_SESSION['e_address']= $email;
include("include/mysql_connection.php");
$car_model =$_REQUEST['car_model'];
if(isset($_POST['order'])){
    $model =$_POST['model'];
    $price =$_POST['price'];
    $name =$_POST['nm'];
    $phone =$_POST['num'];

    $yy =$_POST['year'];
    $mm =$_POST['month'];
    $dd =$_POST['day'];
    $date =$yy."-".$mm."-".$dd;
    $address =$_POST['add'];
    $order_no =order.rand(100,500);
    $mysql_query ="INSERT INTO orders VALUES('','$model','$price','$name','$phone','$date','$address','$order_no')";
    $result =mysql_query($mysql_query);
    if($result){
        header("location:order.php?order_number=$order_no");
    }else{
        echo "<script>alert('User Already exists!')</script>";
    }
}
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
            <center>&nbsp;<font face="Times New Romas" color="#000000" size="5">Order Here!</font ></center><br/>
            <div id="contact_form">
                <?php
                    include("include/mysql_connection.php");
                    $sql_query ="SELECT * FROM car WHERE model='$car_model'";
                    $result =mysql_query($sql_query);
                    $row =mysql_fetch_array($result);
                ?>
                <form method="post"  action="#">
                    <label>Car Model:</label>
                    <input type="text" name="model" value="<?php echo $row['model']; ?>" class="validate-email required input_field" readonly/>
                    <label>Price:</label>
                    <input type="text" name="price" value="<?php echo $row['price']; ?>" class="validate-email required input_field" readonly/>
                    <label>User Name:<font color="red">*</font></label>
                    <input type="text" name="nm" class="validate-email required input_field" placeholder="Enter Name"/>
                    <label>Phone Number:<font color="red">*</font></label>
                    <input type="text" name="num" class="validate-email required input_field" placeholder="Enter Phone Number"/>
                    <label>Order Date:<font color="red">*</font></label>
                    <select name="year">
                        <option>Year</option>
                        <?php
                            for($i=2019;$i>=1900;$i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="month">
                        <option>Month</option>
                        <?php
                            for($i=1;$i<=12;$i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="day">
                        <option>Day</option>
                        <?php
                            for($i=1;$i<=31;$i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <label>Address:<font color="red">*</font></label>
                    <textarea type="text" name="add" rows="0" cols="0" placeholder="Address" required></textarea><br/>
                    <input type="submit" name="order"  value="Order" class="submit_btn float_l" />


                </form>
            </div>

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
</body>
</html>