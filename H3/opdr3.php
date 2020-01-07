<?php
//edit this array
$boodschappen = array();
$boodschappen[] = array ('product' => '<img src="img/aardappelen.jpg">');
$boodschappen[] = array ('product' => ' <img src="img/aardbeien.jpg">');
$boodschappen[] = array ('product' => '<img src="img/melk.jpg">');
$boodschappen[] = array ('product' => '<img src="img/yoghurt.jpg">');


foreach ($boodschappen as $boodschappen) {
    echo $boodschappen['product'];
}
?>