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

<br/>
<br/>

<p>Nome: <?php echo $_GET["nome"]; ?></p>

<p>Data de nascimento: <? php echo $_GET["nasc"]; ?></p>

<p>E-mail: <?php echo $_GET["email"]; ?></p>

<p>Senha: <?php echo $_GET["senha"]; ?></p>

<p>Nacionalidade: <?php echo $_GET["pais"]; ?></p>

<br/>

<hr/>


</div>
</body>
</html> 