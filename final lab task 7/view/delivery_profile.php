<?php
	include('delivery_header.php');
    include_once('../model/db_function.php');

    $id=$_SESSION['id'];

    $data=all_data($id);

            $namep=$data["name"];
            $id=$data['id'];
            $email=$data['email'];
            $bloodGroup=$data['bloodGroup'];
            $gender=$data['gender'];
            $phone=$data['phone'];
            $dob=$data['dateOfBirth'];
            $picture=$data['picture'];
            $address=$data['address'];
            $designation=$data['designation'];
            $qualification=$data['qualification'];
?>


                <table border="0" width="80%">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $namep ?></td>
                        <td rowspan=8 align="center">
                            <img src="<?php echo $picture ?> " height="200px" weidth="200px" alt=""><br>
                       </td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>ID </td>
                        <td>: <?php echo $id ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Designation </td>
                        <td>: <?php echo $designation ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>

                    <tr>
                        <td>Email </td>
                        <td>: <?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Blood Group </td>
                        <td>: <?php echo $bloodGroup ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Phone </td>
                        <td>: <?php echo $phone ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <td>: <?php echo $gender ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>: <?php echo $address ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Date of Birth </td>
                        <td>: <?php echo $dob ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td>Qualifiaction </td>
                        <td>: <?php echo $qualification ?></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    
                </table>
    <?php 
        include('delivery_footer.php');
    ?>