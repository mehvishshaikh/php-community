
<?php
include 'connection.php';
$search = mysqli_real_escape_string($conn,trim($_POST['search']));
echo $search;
$find_doc = mysqli_query($conn,"select * from upload where Keywords like'%$search%'");
while($row = mysqli_fetch_assoc($find_doc))
{
    $name = $row['Name'];
    $id = $row['ID'];
    $path = $row['Path'];
    $key = $row['Keywords'];
    echo  $row;
    echo "Name of the document: $name<br />";
    echo "Keyword searched is: <b>$search</b><br />";
    echo "Related Keywords: $key<br />";
    echo "$path<br />";
    echo "<a href='$path'>Click to download</a>";
}
?>
