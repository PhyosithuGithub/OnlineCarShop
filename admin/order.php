<?php
session_start();
error_reporting(1);
if($_SESSION['email_address']==""){
    header("location:login.php");
}else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    include("include/head.php");
    ?>
</head>
<body>
<div id="templatemo_wrapper">
    <?php include("include/menu.php"); ?>
    <!-- --><?php /*include("include/slider.php"); */?>

    <div id="templatemo_main">
        <div id="sidebar" class="float_l">
            <div class="sidebar_box"><span class="bottom"></span>
                <?php
                include("include/panel.php");
                ?>
            </div>
        </div>
        <div id="content" class="float_r">
            <center>&nbsp;<font face="Times New Romas" color="#000000" size="5">View Ordered Lists!</font></center>
            <br/>
            <table style="border-style: hidden;" width="100%">
                <tr align="center">
                    <td><u><font color="#087206" size="3"><b>ID</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Model</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Price</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Name</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Phone</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Date</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Address</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Order_No</b></font></u></td>
                </tr><hr/>
                <?php
                include("include/mysql_connection.php");
                //start Pagination
                $page =$_GET['page'];
                if($page=="" || $page=="1"){
                    $page1=0;
                }else{
                    $page1=($page*4)-4;
                }
                //End of Pagination
                $query ="SELECT * FROM orders limit $page1,4";
                $result =mysql_query($query);
                while($row =mysql_fetch_array($result)){
                    $id =$row['id'];
                    $model =$row['model'];
                    $price =$row['price'];
                    $name =$row['name'];
                    $phone =$row['phone'];
                    $date =$row['date'];
                    $add =$row['address'];
                    $order_no =$row['order_no'];

                    echo "<tr><td>".$id;
                    echo "<td>".$model;
                    echo "<td>".$price;
                    echo "<td>".$name;
                    echo "<td>".$phone;
                    echo "<td>".$date;
                    echo "<td align='center'>".$add;
                    echo "<td align='center'>".$order_no;
                    echo "</td></tr>";
                }
                ?>
            </table><br/><hr/>
            <!-- Start Pagination-->
            <div style="text-align:center;">
                <?php
                $query="SELECT * FROM orders";
                $result=mysql_query($query);
                $cou=mysql_num_rows($result);
                $a =$cou/4;
                $a =ceil($a);
                for($b=1;$b<=$a;$b++) {
                    ?><?php echo "<a href='order.php?page=".$b."'>".$b." "."</a>";?><?php

                }
                ?>
            </div><!--End of Pagination-->
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
<?php
}
?>
</body>
</html>