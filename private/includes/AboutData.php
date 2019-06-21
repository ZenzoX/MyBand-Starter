<?php



$database = dbConnect();

$query = "SELECT * FROM about";
$statement = $database->query($query);

foreach ($statement as $row) {


echo '<div class="aboutAround">';

echo '<div class="aboutTitle">';

echo $row["title"];

echo '</div>';

echo '<div class="aboutText">';

echo $row["text"];

echo '</div>';

echo '<img class="aboutImg" src="uploads/'.$row["image"].'" alt="'.$row["image"].'" >';

echo '</div>';


    }

 ?>
