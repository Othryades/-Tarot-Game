<?php

$cards = array(

    "card1" => array("img"=>"/Works/Tarot/public/photos/cards/a01.jpg","description" => 'Card 1. The Magician: Start of something. Beginner’s luck. Having various tools and means at our disposal. Use of supernatural forces. Creating reality with mind power. Training and acquisition of practical skills. Improvisation. Display or show for other people. Inverse: Tricks, sleight of hand, cheating. Showing off, pretending. Lack of self-awareness about body, sexuality or basic motives. Near miss due to inexperience or inaccuracy. Message: create a new reality.'),
    "card2" => array("img"=>"/Works/Tarot/public/photos/cards/a02.jpg","description" => 'card2'),
    "card3" => array("img"=>"/Works/Tarot/public/photos/cards/a03.jpg","description" => 'card3'),
    "card4" => array("img"=>"/Works/Tarot/public/photos/cards/a04.jpg","description" => 'card4'),
    "card5" => array("img"=>"/Works/Tarot/public/photos/cards/a05.jpg","description" => 'card5'),
    "card6" => array("img"=>"/Works/Tarot/public/photos/cards/a06.jpg","description" => 'card6'),
    "card7" => array("img"=>"/Works/Tarot/public/photos/cards/a07.jpg","description" => 'card7'),
    "card8" => array("img"=>"/Works/Tarot/public/photos/cards/a08.jpg","description" => 'card8'),
    "card9" => array("img"=>"/Works/Tarot/public/photos/cards/a09.jpg","description" => 'card9'),
    "card10" => array("img"=>"/Works/Tarot/public/photos/cards/a10.jpg","description" => 'card10'),

);


$rand_keys = array_rand($cards, 3);


echo "<img src=\"".$cards[$rand_keys[0]]['img']."\">  ".$cards[$rand_keys[0]]['description'] ;
echo "<img src=\"".$cards[$rand_keys[1]]['img']."\">  ".$cards[$rand_keys[1]]['description'] ;
echo "<img src=\"".$cards[$rand_keys[2]]['img']."\">  ".$cards[$rand_keys[2]]['description'] ;



?>
