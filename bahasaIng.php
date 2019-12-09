<?php
    session_start();
    if(isset($_REQUEST['id'])){
        unset($_SESSION['bahasa']);
    }else{
        $_SESSION['bahasa'] = 1;
    }
    
    header("location:javascript://history.go(-1)");
?>
