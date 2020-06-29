<?php
session_start();
error_reporting(1);
include("include/mysql_connection.php");
if(isset($_POST['submit'])){
	$name =$_POST['un'];
	$email =$_POST['email'];
	$pass =$_POST['pass'];

	$yy =$_POST['year'];
	$mm =$_POST['month'];
	$dd =$_POST['day'];
	$date =$yy."-".$mm."-".$dd;
	$gender =$_POST['gen'];
	$country =$_POST['country'];
	$city =$_POST['city'];
	$contact =$_POST['contact'];
	$add =$_POST['add'];
	
	$query ="INSERT INTO signup VALUES('','$name','$email','$pass','$date','$gender','$country','$city','$contact','$add')";
	$result =mysql_query($query);
	if($result)
		echo "<script>alert('Account created is successful!')</script>";

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
<?php  include("include/menu.php");?>
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
        	<center><img src="images/register.png"/><br/>&nbsp;<br/>&nbsp;<font face="Times New Romas" color="#000000" size="5">Sign Up Here!</font ></center><br/><br/>
           <div id="contact_form">
                   <form method="post"  action="#">
                        <label>User Name:<font color="red">*</font></label>
                       <input type="text" name="un" class="required input_field" placeholder="User Name" placeholder="User Name" required />
                        <label>Email ID:<font color="red">*</font></label>
                       <input type="email" name="email" class="validate-email required input_field" placeholder="Email" required/>
						<label>Password:<font color="red">*</font></label>
                       <input type="password" name="pass" class="input_field" placeholder="Password"/>
						<label>Birthday:<font color="red">*</font></label>
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
						<label>Gender:<font color="red">*</font></label>
                       <input type="radio" name="gen" value="male" required/>Male
                       <input type="radio" name="gen" value="female" required/>Female
						<label>Country:</label>
                       <input type="text" name="country" class="input_field" placeholder="Country" />
						<label>City:</label>
                       <input type="text" name="city" class="input_field" placeholder="City" />
						<label>Contact No:<font color="red">*</font></label>
                       <input type="text" name="contact" class="input_field" placeholder="Contact" required/>
						 <label>Address:<font color="red">*</font></label>
                       <textarea type="text" name="add" rows="0" cols="0" placeholder="Address" required></textarea><br/><br/>
                        <input type="submit" value="Sign Up" name="submit" /> &nbsp;
						<font face="Arial" color="black">Already got an account? <a href="login.php">Login Here!</a></font>
                        
            	</form>
                </div>	   
                
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php  include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->

</body>
</html>