<?php
    include_once('../model/db_function.php');

    $name = $_REQUEST['name'];

    $data=getdeliverybyName($name);

    $response = "<table border=2>
					<tr>
						<td>name</td>
						<td>id</td>
                        <td>bloodgroup</td>
						<td>email</td>
						<td>phone</td>
                        <td>profilepic</td>
					</tr>";
                foreach($data as $var){
                $response .= "
                                <tr>
                                    <td>{$var['name']}</td>
                                    <td>{$var['id']}</td>
                                    <td>{$var['bloodgroup']}</td>
                                    <td>{$var['email']}</td>
                                    <td>{$var['phone']}</td>
                                    <td><img src='{$var['profilepic']}' width='40px' height='40px'></td>
                                    </td> 
                                </tr>";
                    }
	$response .= "</table>";
	echo $response;	

?>