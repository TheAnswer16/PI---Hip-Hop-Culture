<?php
    session_start();
    require('conexao.php');

    $user = (isset($_POST['user'])) ? $_POST['user']: "";
    $senha = (isset($_POST['senha'])) ? $_POST['senha']: "";;
    
    

    $sql = "SELECT * FROM administrador WHERE nomeUsuario = '$user' AND senha = '$senha'";
    
    $result = mysqli_query($conexao, $sql);

    $row = mysqli_num_rows($result);
    $dados = mysqli_fetch_assoc($result);
    if($row == 1){       
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        $_SESSION['logado'] = TRUE;

        echo "<script> window.location = '../adm/mensagens.php'</script>";
    } else {
        $_SESSION['logado'] = false;
        echo "<script> alert('Usuário ou senha incorretos!'); window.location = '../login.php'</script>";
        exit();
    }
?>