<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federant&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/dd3ae97ee1.js" crossorigin="anonymous"></script>

</head>

<body>
        <!-- <?php
            include('sec_nav.php');
        ?> -->
    <main>
        <section>
            <div id="container-login">
                <div id="just-img">

                </div>
                <div id="login" >
                    <h1 id="login-title"> Login </h1>
                    <form action="php/verifica_login.php" method="post">
                        <div class="login-div">
                            <label for="user"> Usuário: </label>
                            <input type="text" name="user" required>
                        </div>
                        <div class="login-div">
                            <label for="senha"> Senha: </label>
                            <input type="password" name="senha" id="">
                        </div>
                        <button type="submit">
                            Entrar
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main> 
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
</body>
</html>