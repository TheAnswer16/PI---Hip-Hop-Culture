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
    <div id="container-mensagens">
    <?php
      include('../nav_adm.php');
    ?>
    <h1 class="titulo-adm">
      Mensagens
    </h1>
        <div id="mensagens" >
          <?php
             require('../php/conexao.php');
             $sql = "SELECT * FROM mensagem";
             $res = mysqli_query($conexao, $sql);

             $num_rows = mysqli_num_rows($res);

             if($num_rows > 0){
               while($dados = mysqli_fetch_assoc($res)){
                 echo "
                      <div class='mensagem'>
                          <h2>".$dados['nome']."</h2>
                          <a href='mailto:'".$dados['email']."' target='_blank'>".$dados['email']."</a>
                          <p>".$dados['msg']."</p>
                          <div class='msg-delete'> <a class='delete-item' value='".$dados['idMensagem']."'> <span class='material-icons'>
                          delete
                          </span></a> </div>
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
      $('#open-nav-mode').hide();
      $('.delete-item').on('click', function(){
        document.querySelector('#open-nav-mode').style.display = 'flex'
        $('#open-nav-mode').fadeIn();
        $('.options-delete a').attr('href', '../php/exclui_msg.php?cod=' + $(this).attr('value'));
      });

      $('.no-del').on('click', function(){
        $('#open-nav-mode').fadeOut();
      });
  </script>


</body>