<?php

// Coding Challenge 1
$clownParagraph = "The clown ran after the car and the car ran into the tent and the tent fell down on the clown and the car. And the quick brown fox stole a banana from the monkey while the ring leader laughed all day";

$clownArray = explode(" ", $clownParagraph);

$countVals = array_count_values($clownArray);
print_r($countVals);

//Coding Challenge 2




?>
