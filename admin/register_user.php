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
            <center>&nbsp;<font face="Times New Romas" color="#000000" size="5">View Registered User!</font></center>
            <br/>
            <table style="border-style: hidden;" width="100%">
                <tr align="center">
                    <td><u><font color="#087206" size="3"><b>ID</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Name</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Email</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Pass</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Birth</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Gen</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Country</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>City</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Contact</b></font></u></td>
                    <td><u><font color="#087206" size="3"><b>Address</b></font></u></td>
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
                    $query ="SELECT * FROM signup limit $page1,4";
                    $result =mysql_query($query);
                    while($row =mysql_fetch_array($result)){
                        $id =$row['user_id'];
                        $name =$row['name'];
                        $email =$row['email'];
                        $pass =$row['password'];
                        $date =$row['reg_date'];
                        $gender =$row['gender'];
                        $country =$row['country'];
                        $city =$row['city'];
                        $contact =$row['contact'];
                        $address =$row['address'];

                        echo "<tr><td>".$id;
                        echo "<td>".$name;
                        echo "<td>".$email;
                        echo "<td>".$pass;
                        echo "<td>".$date;
                        echo "<td>".$gender;
                        echo "<td>".$country;
                        echo "<td>".$city;
                        echo "<td>".$contact;
                        echo "<td>".$address;
                        echo "</td></tr>";
                    }
                ?>
            </table><br/><hr/>
        <!-- Start Pagination-->
        <div style="text-align:center;">
            <?php
                $query="SELECT * FROM signup";
                $result=mysql_query($query);
                $cou=mysql_num_rows($result);
                $a =$cou/4;
                $a =ceil($a);
                for($b=1;$b<=$a;$b++) {
                    ?><?php echo "<a href='register_user.php?page=".$b."'>".$b." "."</a>";?><?php

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