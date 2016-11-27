<?php  
include ('settings/controlsite.php'); // NE PIPAI
require_once('rcon.php'); // NE PIPAI
// NE PIPAI \\
$rcon = new Rcon($host, $port, $password, $timeout);
// ------ \\
$servID = 29; // ID NA USLUGATA
// --- \\
$smsinf = "Изпрати смс на номер 1096 с текст bulhost на цена 6.00лв с ДДС!"; //Info na sms-a
// Vlizane v mobio servera

function mobio_checkcode($servID, $code, $debug = 0)
{
	$res_lines = file("http://www.mobio.bg/code/checkcode.php?servID=$servID&code=$code");
	$ret = 0;
	if ($res_lines)
	{
		if (strstr("PAYBG=OK", $res_lines[0]))
		{
			$ret = 1;
		}
		else
		{
			if ($debug) echo $line . "\n";
		}
	}
	else
	{
		if ($debug) echo "Unable to connect to mobio.bg server.\n";
		$ret = 0;
	}

	return $ret;
}

// NE PIPAI

if (isset($_POST['submit']))
{
	$code = htmlspecialchars(addslashes(trim($_POST['code'])));
	$playername = htmlspecialchars(addslashes(trim($_POST['playername'])));
	if ($rcon->connect())
	{
      if (mobio_checkcode($servID, $code, 0) == 1)
      {
  $rcon->send_command("acc say $playername zakupi rank VIP");
  $rcon->send_command("manuadd $playername Co-Owner");
    $rcon->send_command("msg $playername Zakupi uspeshno rank.");
  $errormsg = '<h4><div class="alert alert-success"><center>Успешна Покупка !</center> </div></h4>';
	  } 
      else
	  {
	  $errormsg = '<h4><div class="alert alert-danger"><center><b>SMS</b> Кода е Грешен!</center> </div></h4>';
	  } 
	}
	else
	{
		$errormsg = '<div class="alert alert-danger" role="alert">Сървъра е офлайн, моля ела отново когато е пуснат!</div>';
	}
}


?>
<!--

   TOVA E BEZPLATEN TEMPLATE TO GAMETEMPLATES! ( rcona SISTEMATA I STATUSA SA SOBSTVENOST NA LUBOMIR STANKOV)

-->
<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="css/main.css">
<head>
	<title><?php echo $imenasaita ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	<img src="<?php echo $logo ?>" alt="Логото не е намерено" height="150px" />
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
				<li class="active"> <a href="ranks.php"><i class="fa fa-shopping-cart"></i> Рангове</a></li>
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
			<div class="panel panel-success pb-mega">
				<div class="panel-heading">РАНГ :: VIP</div>
				<div class="panel-body">
  <center><h1><font color="red">VIP</h1></font></center>
  <center><img src="http://digital-minds.net/1kt/img/shop/158026-3e9422541d13f8789b59f9ecb64a3bcc711d4dfd.png" alt="Smiley face" height="120" width="120"></center>

  <hr class="style14" />
  
 <center> <button size="5" type="button" class="btn btn-success" data-toggle="modal" data-target="#vipcommands">Цъкни за да видиш командите</button> </center>

  <div class="modal fade" id="vipcommands" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">РАНГ :: VIP КОМАНДИ</h4>
        </div>
        <div class="modal-body">
          <p>/fly - <font color="green">Летиш кат самолетчи ;D!!</font></p>
          <p>/heal - <font color="green">Болница ;D</font></p>
          <p>/hat</p>
          <p>/near</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Затвори</button>
        </div>
      </div>
      
    </div>
  </div>  
    <hr class="style14" />
	
    <div class="alert alert-warning" role="alert"><?php echo $smsinf; ?></div>

        <form method="post" action="">
        
		<div class="form-group">
			<label for="playername">Minecraft име <font color="red">*</font></label>
			<input type="text" class="form-control" name="playername" placeholder="Въведи точно името си от сървъра!">
		</div>
		
		
		<div class="form-group">
    		<label for="smscode">СМС Код <font color="red">*</font></label>
    		<input type="text" class="form-control" name="code" placeholder="Въведи смс кода който получи!">
		</div>
		
  		<input type="submit" class="btn btn-success" name="submit" value="Купи Ранга" />

		</form>
		
	<br />
	
	<?php echo $errormsg; ?>
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