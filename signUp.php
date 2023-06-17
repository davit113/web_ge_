<?php 

    function checkEmail($email){
        $file = fopen('data/users/users.txt', 'r');

        if(!$file){echo 'err file cannt be opened'; return null;}

        while (($line = fgets($file)) !== false) {
            // For example, you can check if a line contains a specific word
            if (strpos($line, 'email='.$email) !== false ){
                // echo "Found the search word in this line!";
                return true;
            }
        }
        return false;
    }

    function registr($firstName, $lastName, $email, $password){
        $file = fopen("data/users/users.txt", "a"); 
        if ($file) {
            fwrite($file,  "\nfirstName=$firstName lastName=$lastName email=$email password=$password");
        
            if(fclose($file)){
                return true;
            }

            echo 'could not close file';
            return false;
        }
        else {
            echo "cant open file";
        }
    }


    (function(){
        $firstName= $_POST['first-name'];
        $lastName =$_POST['last-name'];
        $email = $_POST['email'];
        $passWord = $_POST['password'];


        $ans = checkEmail($email, $passWord);

        if($ans === null){
            die();
        }elseif($ans === true){
            header('Location: /pages/logIn.php');
            exit;
        }else;
        {
            $succesfull= registr($firstName, $lastName, $email, $passWord);
            if(!$succesfull)
                die('errr can\'t register user');
            else { header('Location: /index.php');
                session_start();
                $_SESSION['logedIn'] = true;
                $_SESSION['username'] = $firstName;
                $_SESSION['password'] = $passWord;
            }

        }
    })();

?>