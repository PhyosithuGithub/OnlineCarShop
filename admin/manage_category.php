<?php
session_start();
if($_SESSION['email_address']==""){
  header('location:login.php');
}
else{
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
        	<center><font face="Times New Romas" color="#000000" size="5">Manage Category!</font ></center><br/>
           <table style="border-style: hidden;" width="90%">
               <tr align="center">
                   <td width=""><u><b><font color="#087206" size="3">ID</font></b></u></td>
                   <td width=""><u><b><font color="#087206" size="3">Category</font></b></u></td>
                   <td width=""><u><b><font color="#087206" size="3">Date</font></b></u></td>
                   <td width="" colspan="2"><u><b><font color="#087206" size="3">Action</font></b></u></td>
               </tr>
               <hr/>
               <?php
                    error_reporting(1);
                    include("include/mysql_connection.php");
                    //start Pagination
                    $page =$_GET['page'];
                    if($page=="" || $page=="1"){
                        $page1=0;
                    }else{
                        $page1=($page*4)-4;
                    }
                    //End of Pagination
                    $query="SELECT * FROM category limit $page1,4";
                    $result=mysql_query($query);
                    while($row =mysql_fetch_array($result)) {
                        $id = $row['id'];
                        $category = $row['brand'];
                        $date = $row['reg_date'];
                        echo "<tr align='center'><td>" . $id . "</td>";
                        echo "<td>" . $category . "</td>";
                        echo "<td>" . $date . "</td>";
                        echo "<td colspan='2'>
                                <a href='edit_category.php?edit=".$id."'><img src='images/edit.png'/></a>&nbsp;&nbsp;
                                <a href='delete_category.php?delete=".$id."'><img src='images/delete.png'/></a>" .
                                "</td></tr>";
                    }
                    ?>

           </table><br/><hr/>
             <!-- Start Pagination-->
              <div style="text-align:center;">
                  <?php
                  $query="SELECT * FROM category";
                  $result=mysql_query($query);
                  $cou=mysql_num_rows($result);
                  $a =$cou/4;
                  $a =ceil($a);
                  for($b=1;$b<=$a;$b++) {
                      ?><?php echo "<a href='manage_category.php?page=".$b."'>".$b." "."</a>";?><?php

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