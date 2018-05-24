<?php

session_start(); 

if(isset($_SESSION['status'])) {
    
   // header("Location:../pages/dashboard.php");

    header("Location:../script/checkScreenSize.html");

        exit();
    
    } else {

        header("Location:../pages/login.php");

        
        exit();
    }

/*
$session_logout = 5; 
$_SESSION['logout_time'] = 5;

if(isset($_SESSION['status'])) {

    
//$_SESSION['logout_time'] = time() - $_SESSION['session_time'];

if((time()-$_SESSION['session_time']) > $session_logout){


    header("Location:../script/logout.php");
    exit();

} else {

    //$_SESSION['session_time'] = time();

    header("Location:../pages/dashboard.php");
	exit();
}

}
 */
?>