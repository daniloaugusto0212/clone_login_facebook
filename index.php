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
                    <label>E-mail ou telefone</label>
                    <input type="email" name="mail">
                </div>
                <div class="form-element">
                    <label>Senha</label>
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
                        <input type="submit" value="Cadastrar!">
                    </div>

                    

                    <div class="clear"></div>
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </section>
</body>
</html>