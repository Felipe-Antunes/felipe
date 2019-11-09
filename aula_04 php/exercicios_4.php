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

		// Exercício 04
		Operadores de Atribuição

<br/>
<br/>

<fieldset class="field">
	<legend>10% de desconto em um produto</legend>
	
	<?php 
		$preco = $_GET["p"];
		echo "O preço do produto é R$" . number_format($preco, 2);
		$preco += ($preco*10/100);
		echo "</br>E o novo preço com 10% de aumento será R$" . number_format($preco, 2);
	?>
	<br/>
	


<br/>

<hr/>


</div>
</body>
</html> 