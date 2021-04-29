<!DOCTYPE html>
<html>
<body>
</form>
<h2>Seller Information Table</h2>
<?php
include('session/pdb.php');
$connection = new pdb();
$conn=$connection->OpenCon();
$userQuery=$connection->ShowAll($conn,"sellerreg");  

echo "<table border='1'>
<tr>
<th>fname</th>
<th>lname</th>
<th>email</th>
<th>username</th>
<th>password</th>
<th>cpassword</th>
<th>gender</th>
<th>DOB</th>
</tr>";

if($userQuery->num_rows > 0){
    while($row=$userQuery->fetch_assoc())
    {
    echo "<tr>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['lname'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['cpassword'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['DOB'] . "</td>";
    echo "</tr>";
    }
    echo "</table>"; 
    } ?>  

<?php include 'footer/footer.php';?>
<a href="Home.php">Back to Home</a><br>
</body>
</html>
