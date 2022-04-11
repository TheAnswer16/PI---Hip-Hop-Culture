<?php
    require("conexao.php");

    $nome = (isset($_POST['nome'])) ? $_POST['nome'] :"";
    $email = (isset($_POST['email'])) ? $_POST['email'] : "";
    $msg = (isset($_POST['msg'])) ? $_POST['msg'] : "";

    $sql_insert = "INSERT INTO mensagem (nome, email, msg) VALUES ('$nome', '$email', '$msg')";

    if(mysqli_query($conexao, $sql_insert)){
        echo "<script> alert('Mensagem enviada com sucesso! Retornaremos via email :)'); window.location='../contato.php' </script>";
    }

?>