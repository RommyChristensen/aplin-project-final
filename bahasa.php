<?php
    session_start();
    if(isset($_REQUEST['param'])){
        if($_REQUEST['param']=='id'){
            unset($_SESSION['bahasa']);
        }
        else{
            $_SESSION['bahasa'] = 1;
        }
    }
?>
