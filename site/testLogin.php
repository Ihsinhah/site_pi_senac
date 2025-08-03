<?php 
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST["submit"]) && !empty($_POST["usuario"]) && !empty($_POST["senha"])){

        include_once("connect.php");
        $user = $_POST["usuario"];
        $password = $_POST["senha"];
    
        // print_r($user);
        // print_r($password);
    
        $sql = "SELECT * FROM loginpi49 WHERE usuario = '$user' AND senha = '$password'";

        $result = $connect->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header("Location: login.php");
        }
        else{
            $_SESSION['usuario'] = $user;
            $_SESSION['senha'] = $password;
            header("Location: painel.php");
        }
        
    }else{
        header("Location: login.php");
    }
?>