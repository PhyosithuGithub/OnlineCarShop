<?php
    include("include/mysql_connection.php");
    if(isset($_GET['delete'])){
        $delete_id =$_GET['delete'];
        $query ="SELECT * FROM car WHERE id='$delete_id'";
        $result =mysql_query($query);
        $row =mysql_fetch_array($result);
        $img =$row['image'];
        unlink("images/car/$img");
        $sql_query ="DELETE FROM car WHERE id='$delete_id'";
        mysql_query($sql_query);
        header("location:manage_car.php");
    }
?>