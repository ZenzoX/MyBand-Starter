
<?php


class ProjectsController {

	function projectspage(){
    ?>

		<?php require __DIR__ . '/../includes/header.php';?>

  <title>MyBand -projects</title>
</head>
<body>

<div class="header">
	<div class="headContainer">



<?php require __DIR__ . '/../includes/Menu.php';?>

<h1>My other projects</h1>
</div>
</div>

<img src="uploads/logo.png" alt="brain" class="logoBrain">


<main class="wrapper">
  <h3 style="text-align: center; margin-top:2em;">This page uses Grid!</h3>
  <section class="breweries" id="breweries">
    <ul>
      <li>
        <figure>
          <img src="uploads/iddlink.png" alt="iddlink">
          <figcaption><h3>Iddink</h3></figcaption>
        </figure>
        <p>
          In this project I had to recreate an entire website with only a picture to guide me. it is completely responsive and SEO. Not only that but it is fast as well.
        </p>
        <a href="http://25453.hosts2.ma-cloud.nl/bewijzenmap/periode3.3/UXD/CopyThatSite/">Visit Website</a>
      </li>
      <li>
        <figure>
          <img src="uploads/anotherBrick.png" alt="anotherBrick">
          <figcaption><h3>AnotherBrick</h3></figcaption>
        </figure>
        <p>
          In this project I had to make a website where anyone can upload their own pictures without a problem. The name of the project was TheWall so I called my website AnotherBrick.
        </p>
        <a href="https://zenzo-arian.com/TheWall/show.php">Visit Website</a>
      </li>
      <li>
        <figure>
          <img src="uploads/schNature.png" alt="schNature">
          <figcaption><h3>SchNature</h3></figcaption>
        </figure>
        <p>
          In this project I had to redesign a completely broken website. The appearance of the website was atrocious and the lay-out could not have been worse. So i made it way better.
        </p>
        <a href="http://25453.hosts2.ma-cloud.nl/bewijzenmap/periode3.3/UXD/BetterSite/">Visit Website</a>
      </li>
    </ul>
  </section>
</main>


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
