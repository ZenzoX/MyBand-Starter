
<?php


class AgendaController {

	function agendapage(){
    ?>


		<?php require __DIR__ . '/../includes/header.php';?>

  <title>MyBand -agenda</title>
	<style>
	.Thefooter{
		margin-top: 30em;
	}
	</style>
	<script>
	function showUser(str) {
		if (str == "") {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else {
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","../private/includes/getdate.php?q="+str,true);
			xmlhttp.send();
		}
	}
</script>
</head>
<body>

<div class="header">
	<div class="headContainer">



		<?php require __DIR__ . '/../includes/Menu.php';?>

<h1>Agenda</h1>
</div>
</div>

<img src="uploads/logo.png" alt="brain" class="logoBrain">

<form>
<select class="selectDate" name="users" onchange="showUser(this.value)">
  <option value="">Select a day:</option>
  <option value="1">Monday</option>
  <option value="2">Tuesday</option>
  <option value="3">Wednesday</option>
  <option value="4">Thursday</option>
  <option value="5">Friday</option>
  <option value="6">Saturday</option>
  <option value="7">Sunday</option>

  </select>
</form>
<br>
<div id="txtHint" class="txtHint"><b>Date info will be listed here...</b></div>

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
