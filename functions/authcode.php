<?php

//write me code to register user
session_start();
include '../config/dbconn.php';

if (isset($_POST['register_btn'])) {
  
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $repeat_password = mysqli_real_escape_string($con, $_POST['repeat_password']);

  
    $emailquery = "SELECT * FROM users WHERE email='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if ($emailcount > 0) {
        echo "email already exists";
    } else {
        if ($password === $repeat_password) {
            $insertquery = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
            $iquery = mysqli_query($con, $insertquery);

            if( $iquery){
                $_SESSION['message'] = "You are now registered";
                header('location:../login.php');
            }else{
                $_SESSION['message'] = "Registration failed";
                header('location:../register.php');
            }
            
    }else{
        $_SESSION['message'] = "Password not matching";
        header('location:../register.php');
    }
}

}

if(isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $user_search = "SELECT * FROM users WHERE email='$email' AND Password='$password'";
    $query = mysqli_query($con, $user_search);

    $email_count = mysqli_num_rows($query);

    if($email_count > 0){
        $_SESSION['auth'] = true;
        $user_data = mysqli_fetch_array($query);
        $username = $user_data['name'];
        $useremail = $user_data['email'];
        $role_as = $user_data['role_as'];

        $_SESSION['auth_user'] = [
            'name' => $username,
            'email' => $useremail
        ];
        $_SESSION['role_as'] = $role_as;
        if($role_as == '1'){
            $_SESSION['message'] = "Welcome to Online Store Admin Panel";
            header('location:../admin/index.php');
        }
        else{
            $_SESSION['message'] = "You are now logged in";
            header('location:../index.php');
        }
  

    }else{
        echo "Invalid email";
        header('location:../login.php');
    }
}