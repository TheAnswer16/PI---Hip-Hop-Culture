<?php
    require('conexao.php');

    $cod = (isset($_GET['cod'])) ? $_GET['cod'] : "";

    $sql_delete = "DELETE FROM solicitacao WHERE idSolicitacao = '$cod'";

    if(mysqli_query($conexao,$sql_delete)){
        echo "<script> alert('Registro exluído com sucesso!'); window.location='../adm/solicitacoes.php'; </script>";
    } else{
        echo "<script>alert('Erro ao excluir'); window.location='../adm/solicitacoes.php';</script>";
    }
?>