<?php
    error_reporting(1);
    include("include/mysql_connection.php");
    if(isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];
        $sql_query = "DELETE FROM category WHERE id='$delete_id'";
        mysql_query($sql_query);
        header("location:manage_category.php");

    }

?>
