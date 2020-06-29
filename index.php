
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
            <font face="Times New Romas" color="#000000" size="4">All you need is <b>available</b> here!</font ><br/>

            <?php
                include("include/mysql_connection.php");
                //start Pagination
                $page =$_GET['page'];
                if($page=="" || $page=="1"){
                    $page1=0;
                }else{
                    $page1=($page*6)-6;
                }
                //End of Pagination
                $sql_query ="SELECT * FROM car limit $page1,6";
                $result =mysql_query($sql_query);
                echo "<table border='0' cellspacing='12px' align='center'><tr>";
                $n =0;
                while($row =mysql_fetch_array($result)){
                    $img =$row['image'];
                    $model =$row['model'];
                    $price =$row['price'];
                    $color =$row['color'];
                    if($n%3==0){
                        echo "<tr>";
                    }
                    echo "<td height='100px' width='100px' align='center'> 
                        <img src='admin/images/car/$img' height='190px'width='190px'><br/>   
                        <b>Model:</b>".$model."<br/>
                        <b>Color:</b>".$color."<br/>
                        <b>Price:</b>&nbsp;".$price."<br/><br/>
                        <a href='login.php?car_model=$model' style='text-decoration: none;background-color:#0429f9;padding:5px 10px;border-radius:4px;color:#ffffff;'><b>Order</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='detail.php?car_model=$model' style='text-decoration: none;background-color:#f7c709;padding:5px 10px;border-radius:4px;color:#ffffff;'><b>Detail</b> </a>
                          </td>";
                        $n++;
                }
                echo "</tr></table>";
            ?> <hr/>
            <!-- Start Pagination-->
            <div style="text-align:center;">
                <?php
                $query="SELECT * FROM car";
                $result=mysql_query($query);
                $cou=mysql_num_rows($result);
                $a =$cou/6;
                $a =ceil($a);
                for($b=1;$b<=$a;$b++) {
                    ?><?php echo "<a href='index.php?page=".$b."'>".$b." "."</a>";?><?php

                }
                ?>
            </div><!--End of Pagination-->
        </div> 
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
	<?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->

</body>
</html>