<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/adm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/dd3ae97ee1.js" crossorigin="anonymous"></script>

</head>
<body>
<?php
    include('../php/verifica_sessao.php')
  ?>
<div id="open-nav-mode">
    <div class="center" id="container-delete">
        <div class="modal-delete">
            <p> Deseja excluir esse item permanentemente?</p>
            <div class="options-delete">
                <a> <button class="yes-del"> Sim </button></a>
                <button class="no-del"> Não </button>
            </div>
        </div>
    </div>
  </div>
  <section>
    <div id="container-solicitacao">
    

    <?php
      include('../nav_adm.php');
    ?>
    <h1 class="titulo-adm">
      Solicitações
    </h1>
    <div id="solicitacoes" >
          <?php
             require('../php/conexao.php');
             $sql = "SELECT * FROM solicitacao";
             $res = mysqli_query($conexao, $sql);

             $num_rows = mysqli_num_rows($res);
            
             if($num_rows > 0){
                 while($dados = mysqli_fetch_assoc($res)){
                echo "<div class = 'solicitacao'> 
                        <div class = 'head-solicitacao'> 
                            <h2> Nome: ".$dados['nome']."</h2>
                            <div class='action-solicitacao'>
                            <span class='material-icons expand' id = '".$dados['idSolicitacao']."'>
                                expand_more
                            </span>
                            <a class = 'delete-item' value='".$dados['idSolicitacao']."'> <span class='material-icons'>
                            delete
                            </span></a>
                            </div>
                        </div>
                        <div class='body-solicitacao' id='body-".$dados['idSolicitacao']."'>
                            <p> Nome: ".$dados['nome']."</p>
                            <p> Idade: ".$dados['idade']."</p>
                            <p> Email: ".$dados['email']."</p>
                            <p> Celular: ".$dados['celular']."</p>
                            <p> Cidade: ".$dados['cidade']."</p>
                            <p> CEP: ".$dados['cep']."</p>
                            <p> Rua: ".$dados['rua']."</p>
                            <p> Número: ".$dados['numero']."</p>
                            <p> Bairro: ".$dados['bairro']."</p>
                            <p> Escolaridade: ".$dados['escolaridade']."</p>
                            <p> Experiência Artística: ".$dados['expArtistica']."</p>
                            <p> Experiência no Hip Hop ".$dados['expHipHop']."</p>
                            <p> Observação: ".$dados['obs']."</p>
                        </div>
                     </div>";
                 }
             } else{
              echo "<div class='no-register center'>
                <span class='material-icons'>
                   watch_later
                </span> 
                <p> Nenhum registro realizado! </p>
              </div>";
           }


          ?>
        </div>
    </div>
  </section>
  <script src="../js/jquery.js"></script>
  <script>
        $('.body-solicitacao').hide();

        $('.expand').on("click", function(){
            const id = $(this).attr('id');
            console.log($(this).attr('id'));
            $('#body-' + id).animate(
              {
                height:"toggle"
              }
            );
        });
        $('#open-nav-mode').hide();
      $('.delete-item').on('click', function(){
        document.querySelector('#open-nav-mode').style.display = 'flex'
        $('#open-nav-mode').fadeIn();
        $('.options-delete a').attr('href', '../php/exclui_solicitacao.php?cod=' + $(this).attr('value'));
      });

      $('.no-del').on('click', function(){
        $('#open-nav-mode').fadeOut();
      });
  </script>



</body>