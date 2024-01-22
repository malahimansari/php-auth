<?php 
    session_start();
    if(isset($_SESSION['email'])){
        include "db.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['user']);
        if(isset($logout_id)){
                session_unset();
                session_destroy();
                header("location: ../login.php");
        }
        else{
            header("location: ../index.php");
        }
    }   
    else{
        header("location: ../login.php");
    }

?>