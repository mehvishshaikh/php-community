<?php
include 'connection.php';
    $name = $_FILES['fileupload']['name'];
    $extension = strtolower(substr($name, strpos($name, '.')+1));
    $type = $_FILES['fileupload']['type'];
    $size = $_FILES['fileupload']['size'];
    //echo "size of file: $size";
    $max_size = 2000000;
    $description = $_POST['idea'];
    $doc_name = $_POST['name'];
    $tmp_name = $_FILES['fileupload']['tmp_name'];
    $investment = $_POST['number'];
    $date = $_POST['date'];

    if(isset($name)){
        if(!empty($name)){
            if(($extension=='pdf' && $size<=$max_size){
                $Location = "./hackathon/$name";
                $retrival_path = "http://localhost/hackathon/documents/$name";
                if(move_uploaded_file($tmp_name,$Location)){
                    $sql = "INSERT INTO ideas (description,name,path,investment,date) VALUES ('$description','$doc_name','$retrival_path','$investment','$date')";
     if(!mysqli_query($conn,$sql))
     {
         echo'<script type="text/javascript">alert("File upload failed");</script>';  
         header("refresh:2; url= Upload1.html");
     }
     else{
         echo'<script type="text/javascript">alert("File uploaded successfully");</script>';
         header("refresh:2; url=Upload1.html");
     }
                }
                else{
                    echo'<script type="text/javascript">alert("There was an error");</script>';
                }
            }else{
                echo'<script type="text/javascript">alert("The file must be in .doc/.docx format and the size should be less than or equal to 1MB");</script>';
                header("refresh:2; url= Upload1.html");
            }
        }
    }
     
    
?>