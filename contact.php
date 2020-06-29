<?php
include("include/mysql_connection.php");
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $contact =$_POST['contact'];
    $msg =$_POST['message'];

    $query ="INSERT INTO contact VALUES('','$name','$email','$contact','$msg')";
    $result =mysql_query($query);
    if($result)
        echo "<script>alert('Your Message have been send! Thank You!')</script>";

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
            <font face="Times New Romas" color="#000000" size="5">Contact Us!</font ><br/><br/>
            <div class="content_half float_l">
                <div>
                    <form method="post" action="#">
                        <table border="0" cellspacing="10px" cellpadding="5px">
                            <tr>
                                <td>Name:<font color="red">*</font></td>
                                <td><input type="text"  name="name" size="35px" class="required input_field" placeholder="Enter Name" required/></td>
                            </tr>
                            <tr>
                                <td>Email:<font color="red">*</font></td>
                                <td><input type="email"  name="email" size="35px" class="required input_field" placeholder="Enter Email" required/></td>
                            </tr>
                            <tr>
                                <td>Contact Number:<font color="red">*</font></td>
                                <td><input type="text"  name="contact" size="35px" class="required input_field" placeholder="Enter Your Number" required/></td>
                            </tr>
                            <tr>
                                <td>Message:<font color="red">*</font></td>
                                <td>
                                    <textarea name="message" placeholder="Enter Message" rows="10" cols="26px" required></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="submit" value="Send"  name="submit" />&nbsp;&nbsp;&nbsp;
                                    <input type="reset" value="Reset"  name="reset" />
                                </td>
                            </tr>

                        </table>

                    </form>
                </div>
            </div>
            <div class="content_half float_r">
                <h4>Mailing Addresses</h4><hr/>
                <u><h6><strong>Our Location</strong></h6></u>
                Car Shop <br />
                No(11), Chaw Twin Kaung street, Karbar Aye Pagoda Road,<br />
                Mayan Gone Township.<br/><br/><hr/>

                <strong>Phone:</strong>+959440115225, +959777157002<br />
                <strong>Email:</strong> <a href="#">sawphyosithu@gmail.com</a><br />
            </div>

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->
    <?php include("include/footer.php"); ?>
</div> <!-- END of templatemo_wrapper -->

</body>
</html>