<?php
    require "../persistence/database.php";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    //$a =  "SELECT * FROM Pessoa WHERE email = '$login' AND senha = '$senha'";
    //echo $a;
    // var_dump($con);
    $result = mysqli_query($conexao->getLink(), "SELECT * FROM Pessoa WHERE email = '$login' AND senha = '$senha'");
    $array =  mysqli_fetch_array($result);
    $nome = $array['nome'];

    // $result = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //echo "TESTE" . mysqli_num_rows ($result);

    if(mysqli_num_rows ($result) > 0 ){
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        if ($array['eAdmin'] == 1) {
            $_SESSION['user'] = 'admin';
        }else{
            $_SESSION['user'] = 'notUser';
        }
        header('location:../views/index.php');
    }
    else{
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        // header('location:login.php');
    }
?>