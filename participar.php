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
        <section id="participar">
            <div class="inicio-form">
                 <h1> Participar </h1>
                <p> Preencha o formulário a seguir caso queira compor nossa equipe! </p>
            </div>
            <div class="center">
                <div id="container-solicitacao" class="container-form">
                    <form action="php/dados_solicitacao.php" method="post">
                        <div class="div-form">
                            <label for="nome_s">Nome:</label>
                            <input type="text" name="nome_s" id="">
                        </div>
                        <div class="div-form">
                            <label for="idade_s"> Idade: </label>
                            <input type="number" name="idade_s" id="">
                        </div>
                        <div class="div-form">
                            <label for="email_s"> E-mail: </label>
                            <input type="email" name="email_s" id="">    
                        </div>
                        <div class="div-form">
                            <label for="cel_s"> Celular: </label>
                            <input type="text" name="cel_s" id="">
                        </div>
                        <div class="flex-form">
                            <div class="div-form flex-f1">
                                <label for="cidade_s"> Cidade: </label>
                                <input type="text" name="cidade_s">
                            </div>
                            <div class="div-form">
                                <label for="cep_s"> CEP: </label>
                                <input type="text" name="cep_s">
                            </div>
                        </div>
                        <div class="flex-form">
                            <div class="div-form flex-f1">
                                <label for="rua_s"> Rua: </label>
                                <input type="text" name="rua_s">
                            </div>
                            <div class="div-form">
                                <label for="numero_s"> Número: </label>
                                <input type="text" name="numero_s">
                            </div>
                        </div>
                        <div class="div-form">
                            <label for="bairro_s"> Bairro: </label>
                            <input type="text" name="bairro_s">
                        </div>
                        <div class="div-form">
                            <label for="escolaridade_s"> Escolaridade: </label>
                            <select name="escolaridade_s" id="">
                                <option value="Ensino Fundamental I completo"> Ensino Fundamental I Completo </option>
                                <option value="Ensino Fundamental II completo"> Ensino Fundamental II Completo </option>
                                <option value="Ensino Médio Completo"> Ensino Médio Completo </option>
                                <option value="Ensino Superior Completo"> Ensino Superior Completo </option>
                            </select>
                        </div>
                        <div class="div-form">
                            <label for="expArt_s"> Experiência artística: </label>
                            <input type="text" name="expArt_s" placeholder="Ex: 2 anos de teatro">
                        </div>
                        <div class="div-form">
                            <label for="expHipHop_s"> Experiência no Hip Hop</label>
                            <input type="text" name="expHipHop_s" placeholder="ex: 2 anos com MC, 3 anos como beatmaker">
                        </div>
                        <div class="div-form">
                            <label for="dispoSemanal_s"> Disponibilidade semanal (dias por semana): </label> <!-- lembrar de mudar no diagrama-->
                            <input type="number" name="dispoSemanal_s" >
                        </div>
                        <div class="div-form">
                            <label for="obs_s"> Observação: </label>
                            <textarea name="obs_s" id=""></textarea>
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