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
    <div id="container-users">
    <?php
      include('../nav_adm.php');
    ?>
    <h1 class="titulo-adm">
        Novo administrador
    </h1>
        <div id="users" >

            <form action="../php/novo_user.php" method="post" id="adm-form">
                <div>
                  <label for="nome"> Nome: </label>
                  <input type="text" name="nome" id="">
                </div>
                <div>
                  <label for="email"> E-mail: </label>
                  <input type="text" name="email">
                </div>
                <div>
                  <label for="celular"> Celular: </label>
                  <input type="text" name="celular">
                </div>
                <div>
                  <label for="nomeUsuario"> Nome de usuário </label>
                  <input type="text" name="nomeUsuario">
                </div>
                <div>
                  <label for="senha"> Senha: </label>
                  <input type="password" name="senha">
                </div>
                <div id="button-users">
                   <button type="submit"> Cadastrar </button>
                </div>
            </form>
         
        </div>
    </div>
  </section>

  <script src="../js/jquery.js"></script>
            
  <script>
      $('#open-nav-mode').hide();
      $('.delete-item').on('click', function(){
        document.querySelector('#open-nav-mode').style.display = 'flex'
        $('#open-nav-mode').fadeIn();
        $('.options-delete a').attr('href', '../php/exclui_user.php?cod=' + $(this).attr('value'));
      });

      $('.no-del').on('click', function(){
        $('#open-nav-mode').fadeOut();
      });
  </script>


</body>