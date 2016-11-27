<?php
$versys = "1.7"; // NE PIPAI
?>
<!DOCTYPE HTML>
	<!--
	
	NOVIQ CSS !!! NE PIPAI
	
	-->
		<link rel="stylesheet" type="text/css" href="css/body.css">
	<!--
	
	NOVIQ CSS !!! NE PIPAI
	
	-->
			<div class="panel panel-success">
				<div class="panel-heading"><i class="fa fa-server"></i> <b>Статус <span style="float:right" class="label label-warning" size ="5"><?php echo $server->status; ?></span></b></div>
				<div class="panel-body">
                    <h3><center><span style="float:right"><?php echo $ip ?></span> </center></h3>
					<span style="float:left"></span>
					<center><h5><i class="fa fa-users"></i> <b><?php echo $server->online_players; ?>/<?php echo $server->max_players; ?> онлайн</h5></b></center>
					<hr class="style7"></hr>
					<b><h5><center> Версия: <?php echo $ver ?> </center></h5>
				    <b><h5><center> Порт: <?php echo $portna ?> </center></h5></b>
				</div>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading"><i class="fa fa-newspaper-o"></i> <b>Новини</b></div>
				<div class="panel-body">
					<center><h5><b><i class="fa fa-users"></i> V<font color="red"><?php echo $versys ?></font> е пусната! <p><a target="_blank" href="http://promc.info/stankovsms/dw/stankov.rar">ЛИНК ЗА СВАЛЯНЕ</a></p></h5></b></center>
				</div>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading"><i class="fa fa-thumbs-up"></i> <b>Гласувай</b></div>
				<div class="panel-body">
				 <center>
					<div class="buttonline"><center><h5><button type="button" class="btn btn-success"><i class="fa fa-thumbs-up"></i><a href="#"><font color="white"> Линк #1</font></button></a></center></div>
					<div class="buttonline"><center><h5><button type="button" class="btn btn-danger"><i class="fa fa-thumbs-up"></i><a href="#"><font color="white"> Линк #2</font></button></a></center></div>
					</center>
				</div>
			</div>
			<center><a href="skype:h_eaderror?chat"><font color="white">©&nbspЛюбомир Станков</font></a></center>
						<center><a href="skype:h_eaderror?chat"><font color="red">StankoVSyS <?php echo $versys ?></font></a></center>