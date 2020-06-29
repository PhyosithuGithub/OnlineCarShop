<?php
session_start();
if($_SESSION['email_address']==""){
  header('location:login.php');
}
else{
  ?>

<?php
    error_reporting(1);
    include("include/mysql_connection.php");
        $edit_id =$_GET['edit'];
        $query ="SELECT * FROM category WHERE id='$edit_id'";
        $result =mysql_query($query);
        $row=mysql_fetch_array($result);
            $brand=$row['brand'];


    if(isset($_POST['update'])){
        $b =$_POST['brand'];
        $sql_query = "UPDATE category SET brand='$b' 
                      WHERE id='$edit_id'";
        $result = mysql_query($sql_query);
        header("location:manage_category.php");

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
        	<center><font face="Times New Romas" color="#000000" size="5">Update Category!</font ></center><br/><br/>

           <div id="contact_form">
                 <form method="post"  action="#">
                    <label>Brand:<font color="red">*</font></label>
                     <input type="text" name="brand" value="<?php echo $brand;?>" class="validate-email required input_field" />
					<!--<label>Register Date:<font color="red">*</font></label>
                     <select name="year" >
                         <option>Year</option>
                         <?php
/*                            for($i=2019;$i>=1900;$i--){
                                echo "<option value='$i'>$i</option>";
                            }
                         */?>
                     </select>
                     <select name="month" >
                         <option value="">Month</option>
                         <?php
/*                            for($i=1;$i<=12;$i++){
                                echo "<option value='$i'>$i</option>";
                            }
                         */?>
                     </select>
                     <select name="day" id="" >
                         <option>Day</option>
                         <?php
/*                            for($i=1;$i<=31;$i++){
                                echo "<option value='$i'> $i</option>";
                            }
                         */?>
                     </select>--><br/>
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