<?php

$imenasaita = "StankoVSYS v1"; // IME NA SAITA VI
$IDYT = "Ad8IJGkFxuw"; // ID NA KLIPA ZA BG->http://prntscr.com/d835tc ** OSTAVETE PRAZNO ZA BEZ ANIMIRAN BG

//

$servicon = "http://static.planetminecraft.com/files/avatar/2133294_1.png"; 
$logo = "https://s-media-cache-ak0.pinimg.com/originals/84/61/da/8461da929aa54d4674288721262c41dd.png"; // LOGOTO NA SAITA

// STATUS NA SAITA

$ip = "play.ghostmc.eu";
$portna = 25565;
$ver = "1.8 - 1.10"; // VERSIQ

// NE PIPAI

include "status_stankov.php";
$server = new stankovstat($ip, $portna); // PIPNESH LI GRUMVA TI KOMPA / LAPTOPA

// IME NA SUZDATELQ

$imenasuzdatelq = "Lubomir Stankov"; 

// 

//** MAHA NOTICE GRESHKITE **'\\
error_reporting(E_ALL ^ E_NOTICE); // MAHA NOTICE (AKO IMA TAKIVA);
//** MAHA NOTICE GRESHKITE **'\\
?>
<!DOCTYPE html>
<!--VIDEO BG -->
<link rel="stylesheet" type="text/css" href="css/videobg.css">
<div class="video-background">
    <div class="video-foreground">
      <iframe src="https://www.youtube.com/embed/<?php echo $IDYT ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=W0LHTWG-UmQ" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
<!--VIDEOBG -->
<!--DESIGN-->
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/sandstone/bootstrap.min.css">
	<!-- DESIGN -->