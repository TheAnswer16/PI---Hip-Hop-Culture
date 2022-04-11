<?php
    require('conexao.php');

    $nome = (isset($_POST['nome'])) ? $_POST['nome'] : "";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    $celular = (isset($_POST['celular'])) ? $_POST['celular'] : "";
    $nomeUsuario = (isset($_POST['nomeUsuario'])) ? $_POST['nomeUsuario'] : "";
    $senha = (isset($_POST['senha'])) ? $_POST['senha'] : "";

    $sql_insert = "INSERT INTO administrador (nome, email, celular, nomeUsuario, senha) 
    VALUES ('$nome', '$email', '$celular', '$nomeUsuario', '$senha')";

    if(mysqli_query($conexao, $sql_insert)){
        echo "<script> alert('Novo administrador cadastrado com sucesso!'); window.location='../adm/users.php' </script>";
    }

?>