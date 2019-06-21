
<?php


class SearchController {

	function searchpage(){
		$tekst = "";
    ?>

		<?php require __DIR__ . '/../includes/header.php';?>

		  <title>MyBand -search</title>
		</head>
		<body>

		<div class="header">
			<div class="headContainer">


				<?php require __DIR__ . '/../includes/Menu2.php';?>

		<h1>Search</h1>
		</div>
		</div>
		<img src="uploads/logo.png" alt="brain" class="logoBrain">

		<div class="searchBox">

			<input type="text" name="Search" id="tekst" value="">
			<br>
			<button type="button" id="Sbutton" name="button" class="searchBut" onclick="lookUp()">Search</button>



		</div>


		<?php
		require __DIR__ . '/../includes/functions.php';
		require __DIR__ . '/../includes/SearchData2.php';
		require __DIR__ . '/../includes/pageBut.php';
		echo '<script src="'.$link.'js/searchFunction.js"></script>';
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





function resultpage($tekst){
	?>



 <?php require __DIR__ . '/../includes/header2.php';?>


			  <title>MyBand -search</title>
			</head>
			<body>

			<div class="header">
				<div class="headContainer">


					<?php require __DIR__ . '/../includes/Menu2.php';?>

			<h1>Search</h1>
			</div>
			</div>

			<?php echo '<img src="'.$link.'uploads/logo.png" alt="brain" class="logoBrain">' ?>


			<div class="searchBox">

				<input type="text" name="Search" id="tekst" value="">
				<br>
				<button type="button" id="Sbutton" name="button" class="searchBut" onclick="lookUp()">Search</button>



			</div>


			<?php
			require __DIR__ . '/../includes/functions.php';
			require __DIR__ . '/../includes/SearchData2.php';
			require __DIR__ . '/../includes/pageBut.php';
 			echo '<script src="'.$link.'js/searchFunction.js"></script>';
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
