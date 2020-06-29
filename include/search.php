
<h3>Categories</h3>
<div class="content">
    <ul class="sidebar_list">
        <?php
            error_reporting(1);
            include("mysql_connection.php");
            $query ="SELECT * FROM category";
            $result =mysql_query($query);
            $count =mysql_num_rows($result);
            if($count>0){
                while($row =mysql_fetch_array($result)){
                    $id =$row['id'];
                    $brand =$row['brand'];
                    echo "<li><font color='#ffffff'>-></font><a href='carlist.php?cate_id=".$id."&cate_name=".$brand."'>".$brand."</a></li>";
            }
        }else{
                echo "No category";
            }
        ?>
    </ul>
</div>

