<?php

?>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <!--Made with love by Mutiullah Samim -->

        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Link para o CSS da página-->
        <link rel="stylesheet" type="text/css" href="estilo/style.css">
        <meta charset="UTF-8">
    </head>
    <?php include './header.php'; ?>
    
    <body class="corpologin">
    
        <div>
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="E-mail">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Senha">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Lembrar-me
                            </div>
                            <div class="form-group">
                                <a href="#" class="corlink">Esqueceu sua senha?</a><input type="submit" value="Entrar" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Você ainda não possui uma conta?
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="corlink">Cadastre-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <div style="bottom:0; position: absolute; width: 100%;"><?php include './footer.php'; ?></div>
    </body>
    
</html>
