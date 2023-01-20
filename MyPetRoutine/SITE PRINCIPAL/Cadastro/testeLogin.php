<?php
    session_start();
    //print_r($_REQUEST);
    
    if(isset($_POST['submit_lg']) && !empty($_POST['email_lg']) && !empty($_POST['password_lg'])){
        include_once('config.php');
        $email = $_POST['email_lg'];
        $senha = $_POST['password_lg'];

        /*
        print_r('Email: '.$email);
        print_r('<br>');
        print_r('Senha: '.$senha);
        */

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $res = $conn->query($sql);
        //print_r($res);

        
        if(mysqli_num_rows($res) < 1){
            //print_r('Nao existe');         
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: log_cad.php');
        }else{
            //print_r('Existe');
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: ../../SITE FUNÇÕES/user.php');
        }
    }
    else{
        header('Location: log_cad.php');
    }
    
?>