<?php
    require('conexao.php');

    $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "";

    $sql_delete = "DELETE FROM mensagem WHERE idMensagem = '$cod'";

    if(mysqli_query($conexao,$sql_delete)){
        echo "<script> alert('Registro exluído com sucesso!'); window.location='../adm/mensagens.php'; </script>";
    } else{
        echo "<script>alert('Erro ao excluir'); window.location='../adm/mensagens.php';</script>";
    }
?>