<?php
include ('settings/controlsite.php');
?>
<!--

   TOVA E BEZPLATEN TEMPLATE TO GAMETEMPLATES! ( WEBSEND SISTEMATA I STATUSA SA SOBSTVENOST NA LUBOMIR STANKOV)

-->
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/main.css">
<head>
	<title><?php echo $imenasaita ?></title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.4/yeti/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!--
	
	NOVIQ CSS !!! NE PIPAI
	
	-->
		<link rel="stylesheet" type="text/css" href="css/body.css">
	<!--
	
	NOVIQ CSS !!! NE PIPAI
	
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
		<div class="collapse navbar-collapse" id="toggle">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><i class="fa fa-home"></i> Начало</a></li>
				<li> <a href="ranks.php"><i class="fa fa-shopping-cart"></i> Рангове</a></li>
				<li class="active"> <a href="extras.php"><i class="fa fa-rocket"></i> Екстри</a></li>
				<li><a href="#forums"><i class="fa fa-info"></i> Информация</a></li>
			</ul>
		</div>
	</nav>
	<div class="row">
		<div class="col-md-9">
		    <div class="status">
			<?php include ('settings/status&news.php'); ?>
			</div>
			<div class="panel panel-success pb3">
				<div class="panel-heading">Избeрете си екстра</div>
				<div class="panel-body">
  
				<div class="col-md-2 col-md-push-0">
  <center><img src="http://digital-minds.net/1kt/img/shop/158026-9b8df834ab2fc25babace605a85c6aab81561299.png" alt="Smiley face" height="120" width="120"></center>     
             <center><b>$100000</b></center><center><a href="money.php"><button type="button" class="btn btn-success">Купи</button></a>  </center>
			 </div>
				<div class="col-md-2 col-md-push-0">
  <center><img src="http://digital-minds.net/1kt/img/shop/158026-9b8df834ab2fc25babace605a85c6aab81561299.png" alt="Smiley face" height="120" width="120"></center>     
             <center><b>$100000</b></center><center><a href="money.php"><button type="button" class="btn btn-success">Купи</button></a>  </center>
			 </div>         
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<!--

	This is a FREE template from GameTemplates.org!
	Removing this copyright or the ones at the bottom
	is AGAINST THE LAW!

	Visit Gametemplates.org for great templates!

-->