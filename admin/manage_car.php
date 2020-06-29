<?php
session_start();
error_reporting(1);
include("mysql_connection.php");
if($_SESSION['email_address']==""){
    header('location:login.php');
}else{
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
                    include("include/panel.php")
                ?>
            </div>
        </div>
          <div id="content" class="float_r">
        	<center><font face="Times New Romas" color="#000000" size="5">Manage Car Here!</font ></center><br/>
           <table style="border-style: hidden;" width="100%">
               <tr align="center">
                   <td><u><font color="#087206" size="3"><b>ID</b></font></u></td>
                   <td width="17%"><u><font color="#087206" size="3"><b>Model</b></font></u></td>
                   <td ><u><font color="#087206" size="3"><b>Type</b></font></u></td>
                   <td ><u><font color="#087206" size="3"><b>Color</b></font></u></td>
                   <td width="10%" ><u><font color="#087206" size="3"><b>Price</b></font></u></td>
                   <td width="11%" ><u><font color="#087206" size="3"><b>Mileage</b></font></u></td>
                   <td ><u><font color="#087206" size="3"><b>Fuel</b></font></u></td>
                   <td width="5%"><u><font color="#087206" size="3"><b>Seat</b></font></u></td>
                   <td ><u><font color="#087206" size="3"><b>Image</b></font></td>
                   <td width="11%" colspan="2" ><u><b><font color="#087206" size="3">Action</font></b></u></td>
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
                    $query ="SELECT * FROM car limit $page1,4";
                    $result =mysql_query($query);
                    while($row =mysql_fetch_array($result)){
                        $id =$row['id'];
                        $model =$row['model'];
                        $type =$row['type'];
                        $color =$row['color'];
                        $price =$row['price'];
                        $mile =$row['mileage'];
                        $fuel =$row['fuel_type'];
                        $seat =$row['seat'];
                        $img =$row['image'];

                        echo "<tr align='center'><td>".$id."</td>";
                        echo "<td>".$model."</td>";
                        echo "<td>".$type."</td>";
                        echo "<td>".$color."</td>";
                        echo "<td>".$price."</td>";
                        echo "<td>".$mile."</td>";
                        echo "<td>".$fuel."</td>";
                        echo "<td>".$seat."</td>";
                        echo "<td><img src='images/car/$img' width='60px' height='60px'/>"."</td>";
                        echo "<td colspan='2'><a href='edit_car.php?edit=".$id."'> <img src='images/edit.png'/></a>&nbsp;&nbsp;
                                <a href='delete_car.php?delete=".$id."'><img src='images/delete.png'/></a>".
                            "</td></tr>";
                    }
               ?>
           </table><br/><hr/>
              <!-- Start Pagination-->
              <div style="text-align:center;">
                  <?php
                  $query="SELECT * FROM car";
                  $result=mysql_query($query);
                  $cou=mysql_num_rows($result);
                  $a =$cou/4;
                  $a =ceil($a);
                  for($b=1;$b<=$a;$b++) {
                      ?><?php echo "<a href='manage_car.php?page=".$b."'>".$b." "."</a>";?><?php

                  }
                  ?>
              </div><!--End of Pagination-->
          </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
	<?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->
<?php } ?>
</body>
</html>