<?php
    include('../db_conn.php');
    
    $data = json_decode(file_get_contents('php://input'), true); 
    print_r($data); // Outputs the array 

    $user = $_SESSION['user'];
    $fname = $data['fname'];
    $mname = $data['mname'];
    $lname = $data['lname'];
    $phonenum = $data['phone'];
    $email = $data['email'];
    $gender = $data['gender'];
    $bday = $data['bday']; 
    $address = $data['address']; 
    $country = $data['country']; 
    $pin = $data['pincode']; 
    $state = $data['state']; 

    $sql = "INSERT INTO `profile_table`(`user`, `firstname`, `middlename`, `lastname`, `phonenum`, `email`, `gender`, `birthday`, `address`, `country`, `pincode`, `state`) 
    VALUES ('$user','$fname','$mname','$lname','$phonenum','$email','$gender','$bday','$address','$country','$pin','$state')";

    $result = mysqli_query($_SESSION['conn'], $sql);

    
?>