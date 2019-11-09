<!DOCTYPE html>

<html lang="pt-br">
<head>
	<title>aulaphp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>

</head>

<body>
<div id="topo">

</div>



<div id="faixa_superior">




	<h1>AC BRITO COMANDOS TECNOLOGY<br/>Custumer Service &copy</h1>
	

</div>

<div id="php_corpo">

		// Exercício 03
		<h1>Testando PHP</h1>

<br/>
<br/>
    <?php 
	  $n1 = $_GET["a"];
	  $n2 = $_GET["b"];
	  echo "<h2>Valores recebidos: $n1 e $n2</h2>";
	  $m = ($n1 + $n2) / 2;
	  echo "A media foi $m";	  
	  echo "</br> A adição e ". ($n1 + $n2);
	  echo "</br> A subtração e ". ($n1 - $n2);
	  echo "</br> A multiplicação e ". ($n1 * $n2);
	  echo "</br> A divisão e ". ($n1 / $n2);
	  echo "</br> O modulo e ". ($n1 % $n2);	  
	?>
	<br/>
	

<br/>

<hr/>


</div>
</body>
</html> 