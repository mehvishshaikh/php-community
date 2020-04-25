<?php
session_start();
if(isset($_SESSION['user'])){

?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<title>Search</title>
</head>
<body><nav>
    <div class="topnav" id="myTopnav">
            <a href="index.html">Saas</a>
            <a href="index.html" style="float:right; margin-right:40px;">Logout</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div></nav>
          <script>
                function myFunction() {
                  var x = document.getElementById("myTopnav");
                  if (x.className === "topnav") {
                    x.className += " responsive";
                  } else {
                    x.className = "topnav";
                  }
                }
            </script>
            <br><br><br><br><br><br><br><br><br>
    <center>
       <h2></h2>
        <form action="try.php" name="myForm" method="POST">
            <fieldset>
               <h2>  Search for the document you want:<br><br>
<input type="text" placeholder="Search.." name="search">
<button type="submit"><i class="fa fa-search"></i></button></h2>
</fieldset>
</form>
    </center>
    <?php
}else{
    header("location:index.php");
}?>
</body>
</html>