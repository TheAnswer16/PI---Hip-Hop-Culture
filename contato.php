<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
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
            include('sec_nav.php');
        ?>
    <main>
        <section id="contato">
            <div class="inicio-form">
                 <h1> Contato </h1>
                <p> Deixe aqui sua mensagem! </p>
            </div>
            <div class="center">
                <div id="container-contato" class="container-form">
                    <form action="php/dados_contato.php" method="post">
                        <div class="div-form">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" id="">
                        </div>
                        <div class="div-form">
                            <label for="email"> E-mail: </label>
                            <input type="email" name="email" id="">
                        </div>
                        <div class="div-form">
                            <label for="msg"> Mensagem: </label>
                            <textarea name="msg"></textarea>
                        </div>
                        <div class="right button-form">
                            <button type="submit"> Enviar </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main> 
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>