<?php
$conn = mysqli_connect('localhost','root','');
if(!$conn)
{
    echo'not connected to server';
}
if(!mysqli_select_db($conn,'test'))
{
    echo'database not selected';
}
?>