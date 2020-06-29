<?php
session_start();
error_reporting(1);
$car_model =$_REQUEST['car_model']; /*take id from carlist*/
include("include/mysql_connection.php");

if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $pass = $_POST['pass'];
    if($email=="" || $pass==""){
        echo "<script>alert('Please Fill Your Email and Password first!')</script>";
    }else{
        $query ="SELECT * FROM signup WHERE email='$email'";
        $result =mysql_query($query);
        $row =mysql_fetch_object($result);
        $e =$row->email;
        $p =$row->password;
        if($e==$email && $p==$pass){
            $_SESSION['e_address']= $email;
            header("location:order_detail.php?car_model=$car_model"); /*we should doubld quote here. if not, it will be error*/
        }else{
            echo "<script>alert('Wrong Email ID or Password!')</script>";
        }
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
            <center><img src="images/login.png"/><br/>&nbsp;&nbsp;<font face="Times New Romas" color="#000000" size="5">Log In Here!</font ></center><br/><br/>

            <div id="contact_form">
                <form method="post"  action="#">
                    <label>Email ID:<font color="red">*</font></label>
                    <input type="email" name="email" class="validate-email required input_field"/>
                    <label>Password:<font color="red">*</font></label>
                    <input type="password" name="pass" class="input_field"/><br/> <br/>
                    <input type="submit" name="submit"  value="Log In" />
                    <font face="Arial" color="black">No Account? <a href="signup.php">Sign Up Here!</a></font>
                </form>
            </div>

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
</body>
</html>