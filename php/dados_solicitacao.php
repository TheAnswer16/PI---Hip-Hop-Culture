<?php
    require('conexao.php');

    $nome = (isset($_POST['nome_s'])) ? $_POST['nome_s'] : "";
    $idade = (isset($_POST['idade_s'])) ? $_POST['idade_s'] : "";
    $email = (isset($_POST['email_s'])) ? $_POST['email_s'] : "";
    $cel = (isset($_POST['cel_s'])) ? $_POST['cel_s'] : "";
    $cidade = (isset($_POST['cidade_s'])) ? $_POST['cidade_s'] : "";
    $cep = (isset($_POST['cep_s'])) ? $_POST['cep_s'] : "";
    $rua = (isset($_POST['rua_s'])) ? $_POST['rua_s'] : "";
    $numero = (isset($_POST['numero_s'])) ? $_POST['numero_s'] : "";
    $bairro = (isset($_POST['bairro_s'])) ? $_POST['bairro_s'] : "";
    $escolaridade = (isset($_POST['escolaridade_s'])) ? $_POST['escolaridade_s'] : "";
    $expArt = (isset($_POST['expArt_s'])) ? $_POST['expArt_s'] : "";
    $expHipHop = (isset($_POST['expHipHop_s'])) ? $_POST['expHipHop_s'] : "";
    $dispoSemanal = (isset($_POST['dispoSemanal_s'])) ? $_POST['dispoSemanal_s'] : "";
    $obs = (isset($_POST['obs_s'])) ? $_POST['obs_s'] : "";

    $sql_insert = "INSERT INTO solicitacao (nome, idade, email, celular, cidade, cep, rua, numero, bairro, escolaridade, expArtistica, expHipHop, disponibilidadeSemanal, obs) VALUES ('$nome','$idade', '$email', '$cel', '$cidade', '$cep', '$rua', '$numero', '$bairro','$escolaridade','$expArt', '$expHipHop', '$dispoSemanal', '$obs');";

if(mysqli_query($conexao, $sql_insert)){
    echo "<script> alert('Desde já agradecemos o seu interesse em compor nosssa equipe! Retornaremos via email :)'); window.location='../participar.php' </script>";
}
?>