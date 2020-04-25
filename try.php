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
            <br><br><br><br><br>
    <center>
        <h1><u>Search Results</u></h1>
        <fieldset>
<?php
include 'connection.php';
if (isset($_POST['search'])){
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query="select * from upload where Keywords like '%$searchq%'";

    $result= mysqli_query($conn,$query);

    while(list($id, $path, $name, $keywords) = mysqli_fetch_row($result)){
        echo "<h2>Name of the document: $name</h2>";
        echo "<h2>Keyword searched is: </h2><h1><u>$searchq</u></h1>";
        echo "<h2>Related Keywords: $keywords</h2>";
        echo "<a href='$path'><button>Download</button></a>";
    }
}
?>
</fieldset>
</center>
</body>
</html>