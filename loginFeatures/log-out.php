<?php
    session_start();
    $_SESSION['name'] = false;
    if($_SESSION["name"] == false){
        header("location: index.php");
    }
    
?>