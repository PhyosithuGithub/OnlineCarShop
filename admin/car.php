
<?php
session_start();
error_reporting(1);
include("include/mysql_connection.php");
if($_SESSION['email_address']==""){
    header('location:login.php');
}else{
?>
<?php
    if(isset($_POST['submit'])){
        $brand =$_POST['cate'];
        $model =$_POST['model'];
        $tp =$_POST['type'];

        $yy =$_POST['year'];
        $mm =$_POST['month'];
        $dd =$_POST['day'];
        $date= $yy."-".$mm."-".$dd;
        explode('-',$date);

        $color =$_POST['col'];
        $price =$_POST['price'];
        $mile =$_POST['mile'];
        $fuel =$_POST['fuel'];
        $seat =$_POST['seat'];
        $image =$_FILES['img']['name'];

        $query ="INSERT INTO car VALUES('','$brand','$model','$tp','$date','$color','$price','$mile','$fuel','$seat','$image')";
        $result =mysql_query($query);
    if($result){
        mkdir("images/car/$i");
        move_uploaded_file($_FILES['img']['tmp_name'],"images/car/$i".$_FILES['img']['name']);
        echo "<script>alert('Your Data have been saved!')</script>";
    }else{
        echo "<script>alert('Your Data have not been saved!')</script>";
    }


    }

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
        	<center><font face="Times New Romas" color="#000000" size="5">Add Car!</font ></center><br/>
			     <!--<h2><?php /*echo $error; */?></h2>-->
           <div id="contact_form">
            
                 <form method="post"  action="#" enctype="multipart/form-data">
                    <label>Brand:<font color="red">*</font></label> 
                    <select name="cate" class="input_field" required />
                        <option value="">Select One</option>
                             <?php
                             $query="SELECT * FROM category";
                             $result=mysql_query($query);
                             while($row=mysql_fetch_assoc($result)){
                                 echo "<option value='".$row['id']."'>".$row[brand];
                             }
                             ?>
                    </select>
					<label>Model:<font color="red">*</font></label>
                     <input type="text" name="model" placeholder="Car Model" class="input_field" required />
                    <label>Type:</label>
                     <input type="text" name="type" placeholder="Car Type" class="input_field"/>
                    <label>Year:<font color="red">*</font></label>
                     <select name="year" required>
                         <option>Year</option>
                             <?php
                             for($i=2019;$i>=1900;$i--){
                                 echo "<option value='$i'> $i </option>";
                             }
                             ?>
                     </select>
                     <select name="month" required>
                         <option>Month</option>
                         <?php
                         for($i=1;$i<=12;$i++){
                             echo "<option value='$i'> $i </option>";
                         }
                         ?>
                     </select>
                     <select name="day" required>
                         <option>Day</option>
                         <?php
                         for($i=1;$i<=31;$i++){
                             echo "<option value='$i'> $i </option>";
                         }
                         ?>
                     </select>
                    <label>Color:<font color="red">*</font></label>
                     <input type="text" name="col" placeholder="Type your color" class="input_field" required />
                    <label>Price:<font color="red">*</font></label>
                     <input type="text" name="price" placeholder="Type your price" class="input_field" required />
                    <label>Mileage:<font color="red">*</font></label>
                     <input type="text" name="mile" placeholder="Type your Mileage" class="input_field" required />
                    <label>Fuel Type:<font color="red">*</font></label>
                     <input type="text" name="fuel" placeholder="Type your fuel type" class="input_field" required />
                    <label>Seat:<font color="red">*</font></label>
                     <input type="text" name="seat" placeholder="Type your seat number" class="input_field" required />
                    <label>Image:<font color="red">*</font></label>
                     <input type="file" name="img" class="input_field" required />
                    <input type="submit" name="submit"  value="Add" class="submit_btn float_l" />

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