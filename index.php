<?php
include ('settings/controlsite.php');
?>
<!--

   TOVA E BEZPLATEN TEMPLATE TO GAMETEMPLATES! ( SISTEMATA I STATUSA SA SOBSTVENOST NA LUBOMIR STANKOV)

-->
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/main.css">
<head>
	<title><?php echo $imenasaita ?></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!--
	
	NOVIQ CSS !!! NE PIPAI
	
	-->
		<link rel="stylesheet" type="text/css" href="css/body.css">
		<link rel="stylesheet" type="text/css" href="css/videobg.css">
		<link rel="stylesheet" type="text/css" href="css/novideobg.css">
	<!--
	
	NOVIQ CSS !!! NE PIPAI
	
	-->

<!--
*VIDEO BG*
-->
<script>
function Stankov() {
    document.body.style.backgroundColor = "red";
}
</script>
<!--
*VIDEO BG*
-->
</head>
<body>
<div class="container headLoc">
	<img src="<?php echo $logo ?>" alt="zdrkp!" height="150px" />
</div>
<div class="container">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
				<li class="active"><a href="index.php"><i class="fa fa-home"></i> Начало</a></li>
				<li><a href="ranks.php"><i class="fa fa-shopping-cart"></i> Рангове</a></li>
				<li><a href="extras.php"><i class="fa fa-rocket"></i> Екстри</a></li>
				<li><a href="#forums"><i class="fa fa-info"></i> Информация</a></li>
				</ul>
		</div>
	</nav>
	<div class="row">
		<div class="col-md-9">
					<div class="status">
			<?php include ('settings/status&news.php'); ?>
			</div>
			<div class="panel panel-success pb">
				<div class="panel-heading">Добре дошли!</div>
				<div class="panel-body">
					<h1>Updates! <small>Публикувано от <?php echo $imenasuzdatelq ?></small></h1>
					<hr class="style14" />
					<center><h2><font color="red">V1.7</center></h2></font><center><h5><font color="black">
					<p>Сменен е Bootstrap дизайна</p>
					<p>Махнати са някой полета</p>
					<p>Анимиран фон :) </p>
					</center></h5></font>
					   <center><h2><font color="red">V1.6</center></h2></font><center><h5><font color="black">Оправена е грешката при мобио кодовете! ;)</center></h5></font>
                        <center><h2><font color="red">V1.5</center></h2></font><center><h5><font color="black">Променен е изцяло CSS кода, Добавен е контейнер "News" <font size="1">ms gogi</font></center></h5></font>
				</div>
			</div>
			 </div>
		</div>
	</div>
	<br />
	<footer>
	</div>
</div>
</footer>
</body>
</html>
<!--

	This is a FREE template from GameTemplates.org!
	Removing this copyright or the ones at the bottom
	is AGAINST THE LAW!

	Visit Gametemplates.org for great templates!

-->