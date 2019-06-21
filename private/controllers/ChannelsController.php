
<?php


class ChannelsController {

	function channelpage(){
    ?>

		<?php require __DIR__ . '/../includes/header.php';?>

  <title>MyBand -channel</title>
</head>
<body>

<div class="header">
	<div class="headContainer">



<?php require __DIR__ . '/../includes/Menu.php';?>

<h1>Channels</h1>
</div>
</div>
<img src="uploads/logo.png" alt="brain" class="logoBrain">

<div class="channelh2">

<h2>These are the channels displayed on this site..</h2>
</div>

<?php
require __DIR__ . '/../includes/functions.php';
require __DIR__ . '/../includes/channleData.php';
?>
<div class="Thefooter">
	<div class="Fcenter">
<div class="Fleft">
	<p>@Zenzo.</p>
	<p>Made by: Zenzo X. Arian.</p>
	<p>MyBand project - Media college.</p>


	<a href="home">Home</a>,
	<a href="search">Search</a>,
	<a href="agenda">Agenda</a>,
	<a href="about">About us</a>,
	<a href="contact">Contact</a>,
	<a href="channel">Channels</a>,
	<a href="projects">Projects</a>
</div>
</div>
</div>

</body>
</html>

<?php

}

}

 ?>
