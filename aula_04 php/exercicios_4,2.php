<!DOCTYPE html>

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

		// Exercício 4,2

<br/>
<br/>

<fieldset class="field">
	<legend>Presente e Futuro</legend>
	
	<?php 
		$atual = $_GET["aa"];/*Essa linha fica na URL*/
		echo "O ano atual é $atual e o seu ano anterio foi " . --$atual;
	?>
	<br/>
	


<br/>

<hr/>


</div>
</body>
</html> 