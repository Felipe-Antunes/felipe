<DOCTYPE html>

<html lang="pt-br">
<head>
	<title>aulaphp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
<div id="topo">

LOGO

</div>



<div id="faixa_superior">




	<h1>AC BRITO COMANDOS TECNOLOGY<br/>Custumer Service &copy</h1>
	

</div>

<div id="php_corpo">

<br/>
<br/>

<table>
<fieldset class="field">
	<legend>Integrando Formulário em PHP</legend>
	
	<?php 

	   $nome = $_GET["nome"];
	   $nasc = $_GET["nasc"];
	   $sexo = $_GET["sexo"];

	   echo "Nome: $nome";
	   echo "Data de nascimento: $nasc";
	   echo "Sexo: $sexo";		
		
	?>
	<br/>
	<a href="03_exercicios.html">Voltar</a>
	
	
		
</form>
</table>

<br/>

<hr/>


</div>
</body>
</html> 