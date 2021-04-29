<?php
    session_start();
    require_once('../model/db_function.php');
    $id=$_GET['id'];
    $delivery=getdeliveryByID($id);
    $_SESSION['id']=$id;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit product</title>
</head>
<body>
    <fieldset>
    <legend><b>Edit Deliveryman information</b></legend>
    <form action="../controller/edit_information_check.php" method="post">
        <table>
        <tr>
            <td>Name</td>
        </tr>

        <tr>
            <td><input type="text" name="name" value="<?php echo $delivery['name'] ?>"></td>
        </tr>
        <tr>

            <td>Email</td>
        </tr>

        <tr>
            <td><input type="text" name="email" value="<?php echo $delivery['email'] ?>"></td>
        </tr>
        <tr>

            <td>Phone</td>
          
        </tr>
        <tr>
            <td><input type="text" name="phone" value="<?php echo $delivery['phone'] ?>"></td>
        </tr>
        <tr>

            <td>Gender</td>
          
        </tr>
        <tr>
            <td><input type="text" name="gender" value="<?php echo $delivery['gender'] ?>"></td>
        </tr>

        <tr>

            <td>Designation</td>
          
        </tr>
        <tr>
            <td><input type="text" name="desig" value="<?php echo $delivery['desig'] ?>"></td>
        </tr>


            <td>Address</td>
          
        </tr>
        <tr>
            <td><input type="text" name="address" value="<?php echo $delivery['address'] ?>"></td>
        </tr>

           <td>Blood Group</td>
          
          
        </tr>
        <tr>
           <td><input type="text" name="bloodgroup" value="<?php echo $delivery['bloodgroup'] ?>"></td>
        </tr>
        </tr>

              <td>Date Of Birth</td>
           
          
        </tr>
        <tr>
            <td><input type="text" name="dob" value="<?php echo $delivery['dob'] ?>"></td>
           
         </tr>
        <tr>

            <td>Qualification</td>
          
        </tr>
        <tr>
            <td><input type="text" name="qualifaction" value="<?php echo $delivery['qualifaction'] ?>"></td>
        </tr>
        <tr>
            <td>

                Profile Picture

            </td>
        </tr>
        <tr>
            <td><input type="text" name="profilepic" value="<?php echo $dlivery['profilepic'] ?>"></td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="display" id="" <?php if($delivery['display']==1){echo "checked";} ?>> Display
            </td>
        </tr>
        <tr>
            <td><hr></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Save"></td>
        </tr>
        </table>
    </form>
    </fieldset>
</body>
</html>