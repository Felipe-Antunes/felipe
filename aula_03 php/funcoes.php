<!DOCTYPE html>

<html lang="pt-br">
<head>
	<title>aulaphp</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="_css/estilo.css"/>
    <style>
    	h2 {
    		font: 15pt Arial;
    		color: #171559; 
    		font-weight: bold;
    	}
    </style>
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
      $v1 = $_GET["x"];
      $v2 = $_GET["y"];
      echo "<h2> Valores Recebidos: $v1 e $v2 </h2>";
      echo "O valor absoluto de $v2 e " . abs($v2);
      echo "</br>O valor de $v1<sup>$v2</sup> e " . pow($v1, $v2);
      echo "</br>A raiz quadrada de $v1 e " . sqrt($v1);
      echo "</br>O arredondamento de $v2 e " . round($v2); // cell floor
      echo "</br>O valor inteiro de $v2 e " . intval($v2);
      echo "</br>O valor de $v1 em moeda e R$ " . number_format($v1, 2, ",", ".");
    ?>
	<br/>
	

<br/>

<hr/>


</div>
</body>
</html> 