<?php


// require __DIR__ . '/../includes/functions.php';
$database = dbConnect();

$query = "SELECT * FROM content";
$statement = $database->query($query);

$maxPage = 3;
$minPage = 1;
$item = 0;
$page = 1;
$once = 0;
foreach ($statement as $row) {
	$item++;
	if ($item == $minPage) {
		$once++;
		if ($once == 1) {
			echo "<div id='pageItem$page' class='pageItem$page' style='display: block;'>";
		} else {
			echo "<div id='pageItem$page' class='pageItem$page' style='display: none;'>";
		}

	}
      echo "<div class='contentBox'>";

			echo "<div class='videoCon'>";

      echo $row["Video"];

			echo "</div>"; //videoCon

			echo "<h2 class='headCon'><br>" . $row["Title"] . "</h2><br><br>";

			echo "<div class='line'>_____________________</div>";

			echo "<h3 class='desCon'>" . $row["Description"];

			echo "<div class='uploadCon'>";

			echo '<img class="uploadImage" src="uploads/'.$row["Logo"].'" alt="'.$row["Logo"].'" >';

			echo "<div class='uploadTextCon'>";

			echo $row["Uploader"];
			echo "<div class='tagCon'>";
			echo "Upvote: " . $row["Vote"] . "<br>";
			echo "Tags: " . $row["Tag1"] . ", " . $row["Tag2"] . ", " . $row["Tag3"];


			echo "</div>"; //tagCon
			echo "</div>"; //uploadTextCon
			echo "</div>"; //uploadCon
      echo "</div>"; //contentBox

if ($item == $maxPage) {
	echo "<h2 class='pagePos'>$page</h2>";
	echo "</div>"; //page
	$item = 0;
	$page++;
}

    }

		if ($page <= 10) {
			while ($page <= 10) {


				$item++;
				if ($item == $minPage) {
					$once++;
					if ($once == 1) {
						echo "<div id='pageItem$page' class='pageItem$page' style='display: block;'>";
					} else {
						echo "<div id='pageItem$page' class='pageItem$page' style='display: none;'>";
					}

				}
			      echo "<div class='contentBox'>";

						echo "<div class='videoCon'>";

			      echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/XIMLoLxmTDw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

						echo "</div>"; //videoCon

						echo "<h2 class='headCon'><br>" . "No video available" . "</h2><br><br>";

						echo "<div class='line'>_____________________</div>";

						echo "<h3 class='desCon'>" . "There are no further video's available. <br><br>Sorry for this inconvenience. <br><br> We wil deafinitely try to add this.";

						echo "<div class='uploadCon'>";

						echo '<img class="uploadImage" src="uploads/'.'noFound.png'.'" alt="'.'test.jpg'.'" >';

						echo "<div class='uploadTextCon'>";

						echo "No uploader";
						echo "<div class='tagCon'>";
						echo "Upvote: " . "0" . "<br>";
						echo "Tags: " . "Tag1". ", " . "Tag2" . ", " . "Tag3";


						echo "</div>"; //tagCon
						echo "</div>"; //uploadTextCon
						echo "</div>"; //uploadCon
			      echo "</div>"; //contentBox

			if ($item == $maxPage) {
				echo "<h2 class='pagePos'>$page</h2>";
				echo "</div>"; //page
				$item = 0;
				$page++;
			}


			}
		}
 ?>
