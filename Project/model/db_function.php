<?php 
    require_once("../model/db_connection.php");

    function add_delivery($delivery){
        
        $conn_status=db_connect();
        
        $sql="insert into delivery values('{$delivery['name']}', '{$delivery['id']}',
            '{$delivery['email']}', '{$delivery['phone']}', '{$delivery['gender']}',
            '{$delivery['desig']}', '{$delivery['address']}', '{$delivery['bloodGroup']}', 
            '{$delivery['pass']}', '{$delivery['cPass']}', '{$delivery['dob']}', '{$delivery['qualification']}' ,'{$delivery['profilePic']}')";
        
        $result=mysqli_query($conn_status, $sql);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    function login_delivery($id){
        $conn_status=db_connect();
        $sql="select name, id, pass from delivery where id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
    //ok
     function getdeliverybyName($name){
        $conn_status=db_connect();
        $sql="select name, id, bloodgroup, email, phone, profilepic from delivery where name like '%{$name}%'";
        $result=mysqli_query($conn_status, $sql);
        $data2=[];

        while($row=mysqli_fetch_assoc($result))
        {
            array_push($data2, $row);
        }
        return $data2;
    }

     function showAllProduct(){
        $conn_status=db_connect();
        $sql="select name, id, email, phone, gender, desig, address, bloodgroup, qualification, profilepic from delivery";
        $result=mysqli_query($conn_status, $sql);
        $delivery=[];
        
        while($row=mysqli_fetch_assoc($result)){
            array_push($delivery, $row);
        }
        return $delivery;
    }

    function getdeliveryByID($id){
        $conn_status=db_connect();
        $sql="Select  name, email, phone, gender, desig, address, bloodgroup, qualification, profilepic from delivery where ID=$id";
        $result=mysqli_query($conn_status, $sql);
        $delivery=mysqli_fetch_assoc($result);
        return $delivery;
    }

    function editdeliveryByID($delivery){
        $conn_status=db_connect();
        $sql = "update delivery set name='{$delivery['name']}',
                                         '{$delivery['email']}',
                                         '{$delivery['phone']}',
                                         '{$delivery['grnder']}',
                                         '{$delivery['desig']}',
                                         '{$delivery['address']}',
                                         '{$delivery['bloodgroup']} 
                                         '{$delivery['dob']}',
                                         '{$delivery['qualification']}',
                                         '{$delivery['profilepic']}' 
                                          where ID='{$delivery['id']}'";

        $result=mysqli_query($conn_status, $sql);

        if($result){
            return true;
        }
        else{
            false;
        }
    }


    function all_data($id){
        $conn_status=db_connect();
        $sql="select * from delivery where id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    function class_schedule($id){
        $conn_status=db_connect();
        $sql="select class, start_time, end_time, subject from class_assign where delivery_id='{$id}' ";
        $result=mysqli_query($conn_status, $sql);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

?>