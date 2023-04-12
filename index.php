<?php
    //this is where the page starts

    //start session
    session_start();

    //check if user is login already otherwise send to login page
    if($_SESSION['logged-in'] == 'admin'){
        header('location: ../admin/dashboard.php');
    }
    else{
        header('location: home/landing.php');
    }

?>