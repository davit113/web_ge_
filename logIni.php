<?php 
    session_start();


    function initSesion($_user,$_password){
        $_SESSION['logedIn'] = true;
        $_SESSION['username'] = $_user;
        $_SESSION['password'] = $_password;
    }

    function checkUser($mail, $pass){
        $file = fopen('data/users/users.txt', 'r');

        if(!$file){echo 'err file cannt be opened'; return null;}

        while (($line = fgets($file)) !== false) {
            if (strpos($line, 'email='.$mail) !== false && strpos($line, 'password='.$pass) !== false) {
                return true;
            }
        }
        return false;
    }
    

    (function(){
        $user = $_POST['user'];
        $password = $_POST['password'];
        $ans = checkUser($user, $password);

        if($ans === null){
            die();
        }elseif($ans === false){
            header('Location: /pages/logIn.php');
            exit;
        }else
        {   
            initSesion($user, $password);
            header('Location: /index.php');
            exit;
        }
    })();

?>