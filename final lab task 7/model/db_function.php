<?php 
    require_once("../model/db_connection.php");

    function add_delivery($delivery){
        
        $conn_status=db_connect();
        
        $sql="insert into delivery values('{$delivery['name']}', '{$delivery['id']}',
            '{$delivery['email']}', '{$delivery['phone']}', '{$delivery['grnder']}',
            '{$delivery['desig']}', '{$delivery['address']}', '{$delivery['bloodgroup']}', 
            '{$delivery['pass']}', '{$delivery['cpass']}', '{$delivery['dob']}', '{$delivery['qualification']}' ,'{$delivery['profilepic']}')";
        
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