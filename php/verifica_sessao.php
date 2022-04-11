<?php
        session_start();
        if(!$_SESSION['logado']){
            echo "<script>alert('Para acessar essa página você precisa ser um administrador, por favor faça login! '); window.location='../login.php'; </script>";
        }

?>