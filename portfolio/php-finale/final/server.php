<?php
session_start();
include 'config.php';

//init variables
$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$Password1 = '';
$Password2 = '';
$Password = '';

$errors = array();
$success = 'You are now logged in.';

$database = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

//REGISTRATION
if(isset($_POST['register'])) {
    //get entered info
    $FirstName = mysqli_real_escape_string($database, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($database, $_POST['LastName']);
    $Email = mysqli_real_escape_string($database, $_POST['Email']);
    $UserName = mysqli_real_escape_string($database, $_POST['UserName']);
    $Password1 = mysqli_real_escape_string($database, $_POST['Password1']);
    $Password2 = mysqli_real_escape_string($database, $_POST['Password2']);

    //check for errors
    if(empty($FirstName)) {
        array_push($errors, 'First name is required.');
    }
    if(empty($LastName)) {
        array_push($errors, 'Last name is required.');
    }
    if(empty($Email)) {
        array_push($errors, 'Email is required.');
    }
    if(empty($UserName)) {
        array_push($errors, 'Username is required.');
    }
    if(empty($Password1)) {
        array_push($errors, 'Password is required.');
    }
    if($Password1 != $Password2) {
        array_push($errors, 'Passwords must match.');
    }

    $user_query = "SELECT * FROM finalusers WHERE username = '$UserName' OR email = '$Email' LIMIT 1";
    $check_result = mysqli_query($database, $user_query);
    $user = mysqli_fetch_assoc($check_result);
    //if the user's username or email are already in the table...
    if($user) {
        if($user['username'] == $UserName) {
            array_push($errors, 'Username already in use.');
        }
        if($user['email'] == $Email) {
            array_push($errors, 'Email already in use.');
        }
    } //end if user

    //if there are no errors...
    if(count($errors) === 0) {
        $Password = md5($Password1);
        $insert_query = "INSERT INTO finalusers (firstname, lastname, email, username, password) VALUES ('$FirstName', '$LastName', '$Email', '$UserName', '$Password')";
        mysqli_query($database, $insert_query);
        header('Location: login.php');
    } //END IF 0 ERRORS
} //END REGISTRATION BLOCK

//LOGIN
//if form has been submitted:
if(isset($_POST['login'])) {
    $loginUN = mysqli_real_escape_string($database, $_POST['loginUN']);
    $loginPW = mysqli_real_escape_string($database, $_POST['loginPW']);

    if(empty($loginUN)) {
        array_push($errors, 'Username is required.');
    }
    if(empty($loginPW)) {
        array_push($errors, 'Password is required.');
    }

    if(count($errors) === 0) {
        $loginPW = md5($loginPW);
        $login_query = "SELECT * FROM finalusers WHERE username = '$loginUN' and password = '$loginPW'";
        $result = mysqli_query($database, $login_query);
        $count = mysqli_num_rows($result);

        //if the login and password are good for exactly one user in table:
        if($count === 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['FirstName'] = $row['firstname'];
            $_SESSION['UserName'] = $loginUN;
            $_SESSION['success'] = $success;
            header('Location: index.php');
        } else {
            array_push($errors, 'Username and password do not match.');
        }
    } //end if 0 errors
} //end login block
