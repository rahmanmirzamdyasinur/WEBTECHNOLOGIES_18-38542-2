<?php 
    if (isset($_POST['submit'])) {
        
        if ($_FILES["ufile"]["size"] > 4194304) {
            echo "file is too large.";
            echo "file size should not be more than 4MB";
          }
          else{
            if (move_uploaded_file($_FILES['ufile']['tmp_name'], '../assets/delivery_upload/'.$_FILES['ufile']['name'])) {
                echo"uploaded";
            }
            else{
                echo"error or null submission";
            }
          }
    }
?>