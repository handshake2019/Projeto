<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- MENU DO SISTEMA -->
        <?php include './header.php'; ?>
        <!-- FIM MENU DO SISTEMA -->

        <div>
            <br>
            <h1 align="center">Cadastro</h1>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6" align="center">
                    <img src="img/cadastro-foto.jpg" class="img-fluid" >
                </div>

                <div class="col-sm-6" align="center">

                    <form  action="procedimentos.php" method="POST" id="formCadastro">
                        <div class="form-group">
                            <input type="text" class="form-control" id="etdusuario" maxlength="30" name="etdusuario"  placeholder="Ex: Usuário(Até 20 caracteres)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="etdnome" maxlength="50" name="etdnome" placeholder="Nome completo(Até 50 caracteres)">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" id="etddata" name="etddata" placeholder="Data">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="etdemail" maxlength="30" name="etdemail" placeholder="example@email.com">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="etdsenha" minlength="6" maxlength="12" name="etdsenha" placeholder="Informe sua senha (6-12 caracteres)">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="etdconfirmarsenha" minlength="6" maxlength="12" name="etdconfirmarsenha" placeholder="Confirme sua senha (6-12 caracteres)">
                        </div>
                        <div class="form-group form-check">
                        </div>
                        <button type="button" class="btn btn-primary" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
                    </form>
                    <br>
                </div>
            </div>

            <!-- Form de mensagens -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Atenção</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body" id="mensagemErro">
                            Modal body..
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                        </div>


                    </div>
                </div>
            </div>
            <!-- Fim do Form de mensagens -->

        </div>
        <script>
            $(document).ready(function () {
                $.fn.validaEntrada = function (valor,qtd,mensagem) {
                    var str = valor;
                    if (str == '') {
                        $('#mensagemErro').html("Informe o(a) "+mensagem);
                        $('#myModal').modal('toggle');
                        return false;
                    }
                    if (str.length > qtd) {
                        $('#mensagemErro').html(mensagem + " deverá ter no máximo " + qtd + " caracteres");
                        $('#myModal').modal('toggle');
                        return false;
                    }
                }
                $("#btnCadastrar").click(function () {
                    //validações do usuário
                    if($.fn.validaEntrada($("#etdusuario").val(),20,"Usuário") == false){
                        return;
                    }
                    if($.fn.validaEntrada($("#etdnome").val(),50,"Nome") == false){
                        return;
                    }
                    if($.fn.validaEntrada($("#etdemail").val(),30,"Email") == false){
                        return;
                    }
                    

                    //Valor em Branco (Senha)
                    if ($("#etdsenha").val() == '') {
                        $('#mensagemErro').html('Informe a senha');
                        $('#myModal').modal('toggle');
                        return;
                    }
                    //Valor em Branco (Confirmar Senha)
                    if ($("#etdconfirmarsenha").val() == '') {
                        $('#mensagemErro').html('Confirme a senha');
                        $('#myModal').modal('toggle');
                        return;
                    }
                    //Caracteres < 6 (Senha)
                    if ($("#etdsenha").val() < 6) {
                        $('#mensagemErro').html('Senha Inválida');
                        $('#myModal').modal('toggle');
                        return;
                    }
                    if ($("#etdconfirmarsenha").val() < 6) {
                        $('#mensagemErro').html('Senha Inválida');
                        $('#myModal').modal('toggle');
                        return;
                    }

                    //Senhas Não Conferem
                    if ($("#etdsenha").val() == $("#etdconfirmarsenha").val()) {
                        $("#formCadastro").submit();
                        /*
                         $.ajax({method: "POST", url: 'procedimentos.php',
                         data: {
                         etdusuario: $("#etdusuario").val(),
                         edtnome: $("#edtnome").val(),
                         etddata: $("#etddata").val(),
                         etdemail: $("#etdemail").val(),
                         etdsenha: $("#etdsenha").val()
                         },
                         beforeSend: function () {
                         $("#filtro").html("Enviando");
                         }, success: function (result) {
                         $('#mensagemErro').html(result);
                         alert(result);
                         //$('#myModal').modal('toggle');
                         // $("#edtmatricula").val("");
                         //$("#edtnome").val("")
                         
                         }, error: function (obj, text, error) {
                         
                         }, fail: function (result) {
                         
                         }, complete: function (result) {
                         $("#filtro").html("");
                         }}); 
                         
                         */

                    } else {
                        $('#mensagemErro').html('As senhas não conferem');
                        $('#myModal').modal('toggle');
                        return;

                    }


                });
            });
        </script>
    </body>
    <div style="bottom:0; position: absolute; width: 100%;"><?php include './footer.php'; ?></div>
</html>
