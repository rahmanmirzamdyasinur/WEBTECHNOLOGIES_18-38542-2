<?php 
    if (isset($_POST['submit'])) {
        if (empty($_POST['id'] || $_POST['newP'])) {
            echo"fields cannot be empty";
        }
        else{
            $id=$_POST['id'];
            $new_pass=$_POST['newP'];

            $error=false;
            if(strlen($new_pass)<6){
                echo "password must contain at least 6 charecters <br>";
                $error=true;
            }
            if(!strpos($new_pass, '0') and !strpos($new_pass, '1') and !strpos($new_pass, '2') and !strpos($new_pass, '3') and !strpos($new_pass, '4') and !strpos($new_pass, '5') and !strpos($new_pass, '6') and !strpos($new_pass, '7') and !strpos($new_pass, '8') and !strpos($new_pass, '9')){
                echo "password must contain atleast one number  <br>";
                $error=true;
            }

            elseif($error==false){
                $inp = file_get_contents('../model/delivery.json');
                $temp = json_decode($inp, true);

                foreach ($temp as $key1 => $value1) {
                    if ($temp[$key1]["id"]==$_POST['id']) {
                            $temp[$key1]["pass"]=$new_pass;
                            // array_push($temp, $temp[$key1]["pass"]);
                            $jsonData = json_encode($temp);
                            file_put_contents('../model/delivery.json', $jsonData);
                            header('location: delivery_logout.php');
                        }
                    }
            }
    
        
        }

    }

?>