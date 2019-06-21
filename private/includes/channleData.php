<?php



$database = dbConnect();

$query = "SELECT * FROM uploaders";
$statement = $database->query($query);

foreach ($statement as $row) {


echo '<div class="channelAround">';

echo '<div class="channelTitle">';

echo $row["name"];

echo '</div>';

echo '<img class="channelImg" src="uploads/'.$row["image"].'" alt="'.$row["image"].'" >';

echo '</div>';


    }

 ?>
