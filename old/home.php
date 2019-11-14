<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
	<head>
		<title>Cadastro</title>
		<meta charset="utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<script>
			/*$(document).ready(function(){
				var date_input=$('input[name="date"]'); //our date input has the name "date"
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				date_input.datepicker({
					format: 'mm/dd/yyyy',
					container: container,
					todayHighlight: true,
					autoclose: true,
				})*/
				
			function imprimir(){
				usuario = document.getElementById('usuario').valeu;
			
			document.getElementById('dados').innerHTML = 'Usuário' + title;
			
							<p>Usuário:</p>
							<p>Nome Completo:</p>
							<p>Último Nome:</p>
							<p>E-mail:</p>
							<p>Data de nascimento:</p>
							<p>Telefone:</p>
							<p>Sexo:</p>
							<p>Número:</p>
							<p>Endereço:</p>
							<p>Bairro:</p>
							<p>Cidade:</p>
							<p>Estado:</p>
							<p>CEP:</p>
							
							<p>Faculdade:</p>
							<p>CPF:</p>
							<p>Escola:</p>
							<p>Endereço Fac:</p>
							<p>RG:</p>
							<p>Endereço Esc:</p>
							
							<p>País de interesse:</p>
							<p>Localização:</p>
							<p>Você fez alguma preparação?</p>
							<p>Nome da Preparação:</p>
							
			}
		</script>
		
		<!-- Include jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Include Date Range Picker -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
		
		<style>
		
			body{
				background-image: url('cadastro-foto.jpg');
				background-position-x: center;
				background-position-y: center;
				background-size: cover;
				background-repeat-x: no-repeat;
				background-repeat-y: no-repeat;
				background-attachment: fixed;
				background-origin: initial;
				background-clip: initial;
				background-color: initial;
			}
			.top-buffer-1 { margin-top:20px; }
			.top-buffer { margin-top:2px; }
			fieldset.scheduler-border {
				border: 1px groove #ddd !important;
				padding: 0 1.4em 1.4em 1.4em !important;
				margin: 0 0 1.5em 0 !important;
				-webkit-box-shadow:  0px 0px 0px 0px #000;
						box-shadow:  0px 0px 0px 0px #000;
			}

				legend.scheduler-border {
					font-size: 1.2em !important;
					font-weight: bold !important;
					text-align: left !important;
					width:auto;
					padding:0 1px;
					border-bottom:none;
				}
			.login-wrapper {
				width: 100%;
				height: 100%;
				position: absolute;
				display: table;
				z-index: 2;
			}
			.note
			{
				text-align: center;
				height: 80px;
				background: -webkit-linear-gradient(left, #0072ff, #8811c5);
				color: #fff;
				font-weight: bold;
				line-height: 80px;
			}
			.note p{ font-size:30px; }
			.form-content
			{
				padding: 5%;
				border: 1px solid #ced4da;
				margin-bottom: 2%;
			}
			.form-control{
				border-radius:1.5rem;
			}
			.bk{
				background-color: white;
			}
			@media print {
				body * {
					visibility: visible;
				  }
				  #section-to-print, #section-to-print * {
					visibility: hidden;
				  }
				  #section-to-print {
					position: absolute;
					left: 0;
					top: 0;
				  }
			   .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
					float: left;
			   }
			   .col-sm-12 {
					width: 100%;
			   }
			   .col-sm-11 {
					width: 91.66666667%;
			   }
			   .col-sm-10 {
					width: 83.33333333%;
			   }
			   .col-sm-9 {
					width: 75%;
			   }
			   .col-sm-8 {
					width: 66.66666667%;
			   }
			   .col-sm-7 {
					width: 58.33333333%;
			   }
			   .col-sm-6 {
					width: 50%;
			   }
			   .col-sm-5 {
					width: 41.66666667%;
			   }
			   .col-sm-4 {
					width: 33.33333333%;
			   }
			   .col-sm-3 {
					width: 25%;
			   }
			   .col-sm-2 {
	
					width: 16.66666667%;
			   }
			   .col-sm-1 {
					width: 8.33333333%;
			   }
			}
		</style>


	</head>
	<body>
		<div class="container register-form top-buffer-1">
		  <div class="form">
			  <div class="note">
				<p>Cadastro do Formulário para acesso</p>
			  </div>
		 <div class="form-content bk">
				<form action="#" method="POST">
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Informações Pessoais</legend>
						<div class="row">
							<div class="col-SM-2">
							  <label for="title">Usuário</label>
							  <input type="name" class="form-control" id="usuario" placeholder="Login para cadastro" name="title">
							</div>
							<div class="col-SM-5">
							  <label for="fname">Nome Completo</label>
							  <input type="name" class="form-control" id="nomecompleto" placeholder="Nome pessoal" name="fname">
							</div>
							<div class="col-sm-5">
							  <label for="lname">Último nome</label>
							  <input type="name" class="form-control" id="ultimonome" placeholder="O nome da família" name="lname">
							</div>
						</div>
						<div class="section-to-print" id="section-to-print">
						<div class="row top-buffer">
							<div class="col-sm-3">
							  <label for="email">Email</label>
							  <input type="email" class="form-control" id="email" placeholder="xyz@xyz.com" name="email">
							</div>
							<div class="col-sm-3">
							  <label for="dob">Data de Nascimento</label>
							  <input name="date" class="form-control" id="dob" type="dob" />
							</div>
							<div class="col-sm-2">
							  <label for="phone">Telefone</label>
							  <input name="phone" class="form-control" id="phone" type="phone" />
							</div>
							<div class="col-sm-2">
							  <label for="phone">Sexo</label></br>
								<div class="radio-inline"><label><input type="radio" name="sex" value="Homem" checked>Male</label></div>
								<div class="radio-inline"><label><input type="radio" name="sex" value="Mulher">Female</label></div>
							</div>
							<div class="form-group col-sm-2">
									  <label for="inputCity">Numero</label>
									  <input type="text" class="form-control" name="Cidade" id="inputNumero">
								</div>
						</div>
						<div class="row top-buffer">
							<!-- Address -->
							  <div class="form-group col-sm-3">
								<label for="inputAddress">Endereço</label>
								<input type="text" class="form-control" id="inputAddress" name="add1" placeholder="Seu endereço principal">
							  </div>
							  <div class="form-group col-sm-3">
								<label for="inputAddress2">Bairro</label>
								<input type="text" class="form-control" id="inputAddress2" name="add2" placeholder="Trabalho, Faculdade, etc...">
							  </div>
							  <div class="form-row">
								<div class="form-group col-sm-2">
								  <label for="inputCity">Cidade</label>
								  <input type="text" class="form-control" name="Cidade" id="inputCity">
								</div>
								<div class="form-group col-sm-2">
								  <label for="inputState">Estado</label>
								<select id="inputState" class="form-control">
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select><br>
								</div>
								<div class="form-group col-sm-2">
									  <label for="inputCity">CEP</label>
									  <input type="text" class="form-control" name="Cidade" id="inputCEP" onkeypress="$.mascaracep(this)" Size="9" maxlength="9">
								</div>
							  </div>
							  <!-- Endereço -->
							</div>
						</div>
					</fieldset>
					<!-- Informação Pessoal -->
					
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Informações Extras</legend>
						<div class="row">
							<div class="col-sm-4">
							  <label for="uname">Faculdade</label>
							  <input type="name" class="form-control" id="fmane" placeholder="Nome" name="uname">
							</div><div class="col-sm-4">
								  <label for="cname">CPF</label>
								  <input type="name" class="form-control" id="title" placeholder="Número" name="cname">
								</div>
							<div class="col-sm-4">
							  <label for="cname">Escola</label>
							  <input type="name" class="form-control" id="fmane" placeholder="Escola" name="cname">
							</div>
						</div>
						<div class="scheduler-border">
							<div class="row">
								<div class="col-sm-4">
								  <label for="place">Endereço</label>
								  <input type="name" class="form-control" id="fmane" placeholder="Endereço da Faculdade" name="place">
								</div>								
								<div class="col-sm-4">
								  <label for="uname">RG</label>
								  <input type="name" class="form-control" id="fmane" placeholder="Nome" name="uname">
								</div>
								<div class="col-sm-4">
								  <label for="place">Endereço</label>
								  <input type="name" class="form-control" id="fmane" placeholder="Endereço da Escola" name="place">
							</div>
						</div>
						</div>
					</fieldset>
					<!--Educational Qualification -->
					<!-- Study Abroad Plans -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Plano de estudo no exterior</legend>
						<div class="row">
							<div class="col-sm-8">
							  <label for="cname">País de interesse</label>
							  <label class="checkbox-inline"><input type="checkbox" name="country[]" value="USA">USA</label>
								<label class="checkbox-inline"><input type="checkbox" name="country[]" value="Canada">Canada</label>
								<label class="checkbox-inline"><input type="checkbox" name="country[]" value="UK">UK</label>
								<label class="checkbox-inline"><input type="checkbox" name="country[]" value="Japão">Japão</label>
								<label class="checkbox-inline"><input type="checkbox" name="country[]" value="NZ">NZ</label>
								<input id="propertytype_other" name="country[]" type="text" value="" placeholder="other Seperate with coma (,)" class="form-control"> 
							</div>
							<div class="col-sm-4">
							  <label for="location">Localização</label>
							  <input type="name" class="form-control" id="fmane" placeholder="País" name="location">
							</div>
						</div>
					</fieldset>
					<!-- Plano de Estudo no Exterior -->
					<!-- Teste -->
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Teste de Preparação</legend>
						<div class="row">
							<div class="col-sm-4">
							  <label for="location">Você fez alguma preparação para teste?</label>
							  <div class="radio-inline"><label><input type="radio" name="testprep" value="Sim" >Sim</label></div>
								<div class="radio-inline"><label><input type="radio" name="testprep" value="Não" checked>Não</label></div>
							</div>
							<div class="col-sm-8">
							  <label for="cname">Nome do Teste de Preparação</label>
							  <label class="checkbox-inline"><input type="checkbox" name="tname[]" value="USA">GMAT</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="CANADA">PTE</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="UK">GRE</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="USA">GMAT</label>
								<label class="checkbox-inline"><input type="checkbox" name="tname[]" value="NZ">TOEFL</label>
								<input type="checkbox" name="tname[]" id="propertytype-8" value="vários"> Outros
								<input id="propertytype_other" name="tname[]" type="text" value="" placeholder="other Seperate with coma (,)" class="form-control"> 
							</div>
							
						</div>
					</fieldset>
					<!-- Study Abroad Plans -->
					<button type="submit" onclick="imprimir()" class="btn btn-success" value="submit">Enviar</button>
					<button onclick="window.print();return false;" class="btn btn-primary">Imprimir</button>
					
					<fieldset class="scheduler-border">
						<legend class="scheduler-border">Informações</legend>
							<div id="dados">
							</div>
						</div>
					</fieldset>	
				</form>
			</div>
		  </div>
		  </div>
		  
	</body>
</html>
