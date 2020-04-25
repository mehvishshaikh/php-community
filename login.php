<?php

// starting the sesion
session_start();

// including DB connection file
include './connection.php';




//getting the values
$Username = $_POST['name'];
$Password = $_POST['pass'];
if(isset($_POST['name'])){    
    //checking is the user exist or not
    $query = "select * from upload where Username = '$Username' && Password = '$Password'";
    $result = mysqli_query($conn, $query);

    //fetching the values from DB
    list($id, $Username, $name_check, $Password) = mysqli_fetch_row($result);

    //if authentication is successfull authorize the user else try again
    if($name_check == $Username){
        $_SESSION['current_user'] = $Username;
        $_SESSION['user_id'] = $id;
        echo" <script>
        window.alert('Welcome');
        
        </script>";
    }else{
        echo "<script>
            window.alert('Username or password is wrong!');
            window.location = './index.php';
        </script>";
    }
}else{
    echo "<script>
        window.alert('Login Again! Session cleared');
        window.location = './index.php';
    </script>";
}

?>
