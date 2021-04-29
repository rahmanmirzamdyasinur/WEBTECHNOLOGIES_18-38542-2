<?php

	$inp = file_get_contents('../model/class_assign.json');
	$temp = json_decode($inp, true);

	session_start();
	unset($_SESSION['flag']);

	foreach ($temp as $key1 => $value1) {
        
            setcookie('subject'.$i, $temp[$key1]["subject"], time()-3600, '/');
            setcookie('startTime'.$i, $temp[$key1]["classStartTime"], time()-3600, '/');
            setcookie('endTime'.$i, $temp[$key1]["classEndTime"], time()-3600, '/');
            setcookie('class'.$i, $temp[$key1]["class"], time()-3600,'/');
            $i++;
    }


	header('location: ../view/delivery_login.html');

?>