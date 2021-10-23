<?php
    $con = mysqli_connect('localhost','root','','facebook_clone');

    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];
    
    $check_data = mysqli_query($con, "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        echo "Login successful";
    }
    else{
        $input = mysqli_query($con, "INSERT INTO userdata(id,firstname,lastname,phoneoremail,password) VALUES ('$id','$firstname','$lastname','$phoneoremail','$password')");
        if($input){
            echo "Login successful";
        }
        else{
            echo "Login failed";
        }
    }
?>