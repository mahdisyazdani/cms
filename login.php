<?php
    function check ($name , $password ){
        if($name == 'admin'&& $password == '123'){
            session_start();
            $_SESSION['hasLoggedIn'] = true;
        }
        header('Location: admin.php');

    }
    check($_POST['name'] , $_POST['password']);