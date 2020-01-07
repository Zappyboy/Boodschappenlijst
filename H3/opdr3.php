<?php
//edit this array
$boodschappen = array();
$boodschappen[] = array ('product' => 'Aardappelen');
$boodschappen[] = array ('product' => 'Aardbeien');
$boodschappen[] = array ('product' => '3 pakken melk');
$boodschappen[] = array ('product' => 'yoghurt','email');


foreach ($boodschappen as $boodschappen) {
    echo "<ul>\n<li>" . $boodschappen['product'] . "</li></ul>\n";
}
?>