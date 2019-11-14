<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="pt-br">
<head>
	<style type="text/css">
	.titulocadastro{
		background-color: #FF8C00;
		padding: 30px;
		border-radius: 25px;
		text-align: center;
	}	
	.campocadastro{
		background-color: #A9A9A9;
		border-radius:25px;
		width: 50%;
		margin-left: 25%;
		text-align: left;
	}
	body{
		background-color: #FFFFFF;
		font-family: "verdana";
	}
	.campo{
		border-radius:8px;
		width: 90%;
	}
	.botaocadastro{  
		margin-right: 30px;
		margin-bottom: 10px;
	}
	#botaocadastro{  
		padding: 8px;
		border-radius: 10px;
		background-color: #FFFFFF;
		color:#FF8C00;
		border-color: #FF8C00;
	}
	.logo{
		position: absolute;
		left: 0%;
		top:0%;
	}
	.textologo{
		color:#FF8C00;
		margin-top: 40px;
		margin-left: 150px;
	}
	#botaocadastrar{  
		position: absolute;
		right: 5%;
		top:6%;
		padding: 8px;
		border-radius: 10px;
		background-color: #FFFFFF;
		color:#FF8C00;
		border-color: #FF8C00;
	}
	#botaoentrar{   
		position: absolute;
		right: 12%;
		top:6%;
		padding: 8px;
		border-radius: 10px;
		background-color: #FFFFFF;
		color:#FF8C00;
		border-color: #FF8C00;
	}
	h1 {
		padding: 15px;
	}
	h2 {
		font-size: 18px;
	}
	#contrantetitulo{
		text-align: center;
		color:#FF8C00;
	
	}
	.divlateralesquerda {
	    width: 500px;
	    height: 500px;
	    background-color: white;
	    float: left;
	}
	.divlateraldireita {
	    position: relative;
		float: right;
	    width: 750px;
	    height: 400px;
	    background-color: #A9A9A9;
		border-radius: 25px;
		padding-left: 30px;
		margin-right: 20px;
	}
	#botaoeenviarformfaleconosoco{  
		padding: 8px;
		border-radius: 10px;
		background-color: #FFFFFF;
		color:#FF8C00;
		border-color: #FF8C00;
		margin-left: 645px;
		margin-top: 10px;
	}
	.menudosite{
		background-color: #FF8C00;
		text-align: center;
		border-radius: 50px;
		padding: 3px;
		padding-left: 20px;
		padding-top: 0px;
		padding-bottom: 10px;
		margin-top: 40px;
		margin-left: 100px;
		margin-right: 100px;
		height: 50px;
		text-size: 1px;
	}
	td{
		width: 250px;
		padding: 7px;
		text-align: justify;
	}
	h3{
		text-align: justify;
		color: #FFFFFF;
		font-size: 16px;
	}
	.campo{
		width: 95%;
	}
	.itemmenu:hover{
		transition: 0.5s;
		background-color: red;
		border-radius: 50px;
	
	}
	
    #opcaogeneromusicalcontratantes{
        float: left;
        margin-left: 120px;
        width: 300px;
    }

    #opcaolocalizacaocontratantes{
        float: left;
        margin-left: 400px;
        width: 300px;
    }

    #opcaodisponibilidadecontratantes{
        float: right;
        margin-right: 100px;
        width: 300px;
    }

    #botaobuscar{
        padding: 8px;
        border-radius: 10px;
        background-color: #FFFFFF;
        color:#FF8C00;
        border-color: #FF8C00;
        margin-left: 645px;
        margin-top: 100px;
        margin-right: 100px;
        float: right
    }

    .fotobusca{     
        margin-top: 250px;
    }

    #fotobusca1contratantes{
        float: left;
        margin-left: 250px;
        width: 200px;
        height: 200px;
        border: 1px solid red;
        background-image: url("img/ellenrocha.png");
        background-size: cover;
    }

    #fotobusca2contratantes{
        float: left;
        margin-left: 380px;
        width: 200px;
        height: 200px;
        border: 1px solid blue;
        background-image: url("img/sophierturner.png");
        background-size: cover;
    }

    #fotobusca3contratantes{
        float: right;
        margin-right: 250px;
        width: 200px;
        height: 200px;
        border: 1px solid green;
        background-image: url("img/natileidormer.png");
        background-size: cover;
    }
    
    #fotobusca4contratantes{
        float: left;
        margin-left: 250px;
        width: 200px;
        height: 200px;
        margin-top: 50px;
        border: 1px solid red;
        background-image: url("img/emiliaclarke.png");
        background-size: cover;
    }

    #fotobusca5contratantes{
        float: left;
        margin-left: 380px;
        width: 200px;
        height: 200px;
        margin-top: 50px;
        border: 1px solid blue;
        background-image: url("img/jenniferlawrence.png");
        background-size: cover;
    }

    #fotobusca6contratantes{
        float: right;
        margin-right: 250px;
        width: 200px;
        height: 200px;
        margin-top: 50px;
        border: 1px solid green;
        background-image: url("img/kaleycuoco.png");
        background-size: cover;
    }
    #tituloesquerda{
    	float: left;
    	margin-left: 100px;
    }
    #titulocentro{
    	float: left;
    	margin-left: 370px;
    }
    #titulodireita{
    	float: left;
    	margin-left: 350px;
    }

	</style>
	<meta charset="utf-8">
	<title>Contratantes</title>
</head>
<body>
	<div class="cabecalho">
			<img class="logo" width="10%" src="img/logo.png"><h1 class="textologo">HANDSHAKE</h1>   <!Foto da logo do site e nome do site>
			<button id="botaocadastrar" name="botaocadastrar"><a href="cadastro.html" target="_blank">Cadastre-se</a></button>  <!botão de cadastre-se do site>
			<button id="botaoentrar" name="botaoentrar"><a href="login.html" target="_blank">Conectar</a></button> <!Botão de conectar do site>
	</div>
</div>

<!--PARTE SEPARADA PARA O MENU>-->
<div>
	<nav  class="menudosite">
		<table>
			<tr class="espacomenu">
			<td class="itemmenu"><a href="home.html" target="_blank"><h3>Home</h3></a></td>
			<td class="itemmenu"><a href="artistas.html" target="_blank"><h3>Artistas</h3></a></td>
			<td class="itemmenu"><a href="contratantes.html" target="_blank"><h3>Contratantes</h3></a></td>
			<td class="itemmenu"><a href="eventos.html" target="_blank"><h3>Eventos</h3></a></td>
			<td class="itemmenu"><a href="quemsomos.html" target="_blank"><h3>Quem somos</h3></a></td>
			<td class="itemmenu"><a href="faleconosco.html" target="_blank"><h3>Fale conosco</h3></a></td>
			</tr>
		</table>
	</nav>
</div>

<div>
	<h1 id="contrantetitulo">Contratantes</h1>
</div>
<div>
	<div id="tituloesquerda"><h1>Tipo do Evento</h1></div>
	<div align="center" id="titulocentro"><h1>Localização</h1></div>
	<div id="titulodireita"><h1>Horario do Evento</h1></div>
</div>
<div>
    <div id="generomusicalcontratantes" class="opcaoartistas"> <!--Esquerda-->
        <select id="opcaogeneromusicalcontratantes">
            <option>Aniversário</option>
            <option>Casamento</option>
            <option>Show</option>
        </select>
    </div>

    <div id="localizacaocontratantes" class="opcaoartistas"> <!--Centro-->
        <select id="opcaolocalizacaocontratantes">
            <option>Olinda</option>
            <option>Recife</option>
            <option>Jaboatao</option>
        </select>
    </div>

    <div id="disponibilidadecontratantes" class="opcaoartistas"> <!--Direita-->
        <select id="opcaodisponibilidadecontratantes">
            <option>Integral</option>
            <option>Horário Comercial</option>
            <option>Final de semana</option>
            <option>Personalizado</option>
        </select>
    </div>

    <button id="botaobuscar" name="botaobuscar">Buscar</button> <!--Botão buscar-->

</div>

<div class="fotobusca">
    
    <fieldset id="fotobusca1contratantes">
        
    </fieldset>
    
    <fieldset id="fotobusca2contratantes">
        
    </fieldset>

    <fieldset id="fotobusca3contratantes">
        
    </fieldset>
</div>

<div class="fotobusca">
    
        <fieldset id="fotobusca4contratantes">
            
        </fieldset>
        
        <fieldset id="fotobusca5contratantes">
            
        </fieldset>
    
        <fieldset id="fotobusca6contratantes">
            
        </fieldset>
    </div>

</body>
</html>