<?php
  session_start();
include 'connection.php';
if(isset($_SESSION['current_user']))
{
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<title>Upload</title>
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
<center>
<br><br><br>
<h1><u>Upload</u></h1>
<h2>(Only .doc/.docx files are allowed)</h2>
<form action="upload.php" name="myForm" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
  <fieldset>
<h2>
Select file to upload: 
<input type="file" name="fileupload" accept=".doc,.docx">
<br>
Name of the file:
<input type="text" name="name">
<br>
Enter keywords:
<input type="text" name="keywords" placeholder="Enter keywords separated by ','">
<br>
<input type="submit" value="Upload File" name="submit">
<br><hr>
Click to search<br>
<a href="search.html"><input type="button" value="search"></a>
</h2>
</fieldset>
</form>
</center>
<?php
}
else
    {
        header("location:index.php");
    }
?>
</body>
</html>