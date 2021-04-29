   
<?php 
    include('delivery_header.php');
?>

<h2>Uplaod Files</h2>

<fieldset style="width:400px">
    <legend>Please select your Subject:</legend>
        <form action="../controller/delivery_upload_check.php" method="POST" enctype="multipart/form-data">
            <?php 
                if(isset($_COOKIE['class0'])){
                                                                
                    echo '<input type="checkbox" name="mark1" id="">'.$_COOKIE['subject0'];
                }
                if(isset($_COOKIE['class1'])){
                                                                
                    echo '<input type="checkbox" name="mark2" id="">'.$_COOKIE['subject1'];
                }
                if(isset($_COOKIE['class2'])){
                                                                
                    echo '<input type="checkbox" name="mark3" id="">'.$_COOKIE['subject2'];
                }
                if(isset($_COOKIE['class3'])){
                                                                
                    echo '<input type="checkbox" name="mark4" id="">'.$_COOKIE['subject3'];
                }
            ?>   
            <br>
            <br>
            <input type="file" name="ufile" id="">
            <input type="submit" name="submit" value=Uplaod>

        </form>
</fieldset>



<?php 
    include('delivery_footer.php');
?>