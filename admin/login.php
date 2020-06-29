<?php
session_start();
error_reporting(1);
include("include/mysql_connection.php");

if(isset($_POST['submit'])){
	$email =$_POST['email'];
	$pass = $_POST['pass'];
	if($email=="" || $pass==""){
		$errmsg ="<font color='red' size='4'>Please Fill Email and Password!</font>";
	}else{
		$data ="SELECT * FROM admin WHERE email='$email'";
		$result =mysql_query($data);
		$row =mysql_fetch_object($result);
		$e =$row->email;
		$p =$row->password;
		if($e==$email && $p==$pass){
			$_SESSION['email_address']= $email;
			header('location:index.php');
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
        	<center><img src="images/login.png"/><br/>&nbsp;&nbsp;<font face="Times New Romas" color="#000000" size="5">Log In Here!</font ></center><br/><br/>
			
           <div id="contact_form">
                 <form method="post"  action="#">
                    <label>Email ID:<font color="red">*</font></label> <input type="email" name="email" class="validate-email required input_field" required/>
					<label>Password:<font color="red">*</font></label> <input type="password" name="pass" class="input_field" required/>
                    <input type="submit" name="submit"  value="Log In" class="submit_btn float_l" />
            	</form>
            </div>	

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
	<?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
</body>
</html>