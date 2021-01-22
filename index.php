<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Facebook</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div>
            <form class="form-login" method="post">
                <div class="form-element">
                    <p>E-mail ou telefone: </p>
                    <input type="email" name="mail">
                </div>
                <div class="form-element">
                    <p>Senha: </p>
                    <input type="password" name="password">
                </div>
                <div class="form-element">
                    <input type="submit" name="action">
                </div>
            </form>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <img src="face_img.png" alt="">
            </div>

            <div class="abrir-conta">
                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será!</h3>

                <form class="criar-conta">
                    <div class="w50">
                        <input type="text" name="first_name" placeholder="Nome">
                    </div>
                    <div class="w50">
                        <input type="text" name="last_name" placeholder="Sobrenome">
                    </div>
                    <div class="w100">
                        <input type="email" name="mail" placeholder="E-mail">
                    </div>
                    <div class="w100">
                        <input type="password" name="password" placeholder="Senha">
                    </div>

                    <div class="w100">
                        <h2>Data de Nascimento:</h2>

                        <select name="nascimento-dia" class="nascimento">
                            <?php
                            for ($i = 1; $i <= 31; $i++) { 
                                ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>

                        <select name="nascimento-mes" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" class="nascimento">
                            <?php
                            for ($i = 1960; $i <= date('Y'); $i++) { 
                                ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div>
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <input type="submit" value="Cadastrar!">
                    </div>

                    

                    <div class="clear"></div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Inglês</a>
            <a href="#">Chinês Mandarim</a>
            <a href="#">Hindi </a>
            <a href="#">Espanhol </a>
            <a href="#">Francês </a>
            <a href="#">Árabe </a>
        </div>

        <div style="border: 0; padding-top:10px;" class="center">
        <?php
        for ($i = 0; $i < 35; $i++) {
            ?>
            <a href="#">Ipsum excepteur</a>
        <?php } ?>
        </div>
    </section>
    
</body>
</html>