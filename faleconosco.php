<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Fale Conosco</title>
	<meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <?php include './header.php'; ?>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Fale Conosco</h1>
        <p class="lead text-muted mb-0"> Entre em contato comosco de forma rápida e objetiva !</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Fale Conosco.
                </div>
                <div class="card-body">
                    <form action="procedimentosfaleconosco.php" method="POST" id="formFaleConosco">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" id="etdnome" name="etdnome" class="form-control" id="etdnome" aria-describedby="emailHelp" maxlength="50" placeholder="Informe seu nome" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" maxlength="30" id="etdemail" name="etdemail" aria-describedby="emailHelp" placeholder="examplo@email.com" required>
                            <small id="emailHelp" class="form-text text-muted">Nós não iremos compartilhar seu e-mail com mais ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="etdmensagem" maxlength="1000" name="etdmensagem"rows="6" required placeholder="Descreva aqui o seu problema."></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Enviar</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Informações de Contato</div>
                <div class="card-body">
                    <p>Recife - PE</p>
                    <p>Brazil</p>
                    <p>E-mail : handshake@gmail.com</p>
                    <p>Tel. +55 (81) 4002-8922</p>
                </div>
            </div>
        </div>
    </div>
</div>

        <?php include './footer.php'; ?>

</body>
</html>