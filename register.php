<?php
include 'connection.php';
$Username = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['pass'];
$sql="INSERT INTO register (Username,Email,Password) VALUES ('$Username','$Email','$Password')";
if(!mysqli_query($conn,$sql))
{
    echo'<script type="text/javascript">alert("Failed to Register!!");</script>'; 
    header("refresh:2; url=register.html"); 
}
else{
    echo'<script type="text/javascript">alert("Registered Successfully!!");</script>';
    header("refresh:2; url=index.html");
}

?>