<?php 
    session_start(); 
    $_SESSION['usuario'] = null;
    unset($_SESSION['usuario']);
    $url = "index.php";
    header("Location:".$url);
?>
    
