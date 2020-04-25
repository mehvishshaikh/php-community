<?php

session_start();

session_destroy();

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>SaaS</title>
<script type="text/javascript">
function validateForm() {
  var uname = document.forms["myForm"]["name"];
  var passd = document.forms["myForm"]["pass"];
  if (uname.value== "") {
    window.alert("Name must be filled out");
    uname.focus();
    return false;
  }
  if (passd.value== "") {
    window.alert("Password must be filled out");
    passd.focus();
    return false;
  }
  
}
</script>

</head>
<body><nav>
  <div class="topnav" id="myTopnav">
          <a href="index.html">Saas</a>
          <a href="register.html" style="float:right; margin-right:40px;">SignUp</a>
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
<br><br><br><br>
<center>
<h1><u>Storage As A Service</u></h1>
<h1><u>Login</u></h1>
<form action="login.php" name="myForm" onsubmit="return validateForm()" method="POST">
<fieldset>

<h2>
Username :
<input type="text" placeholder="Username" name="name">
<br><br>
Password :
<input type="password" placeholder="Password" name="pass">
<br><br>
<button type="submit">Login</button><br><br>
<a href="register.html">Register Here!</a>
</center>
</fieldset>
</form>
</body>
</html>