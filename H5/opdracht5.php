<?php
$boodschap = array('Aardappelen', 'Aardbeien', '3 pakken melk', 'Yoghurt');
if(isset($_POST['remove'])) $boodschap=array_diff($boodschap, array($_POST['product']));
foreach($boodschap as $boodschappen)
{
    echo'<form method="post" action="">';
    echo $boodschappen.'<input type="submit" name="remove" value="remove"/><br/>';
    echo '<input type="hidden" name="product" value="'.$boodschappen.'"/>';
    echo '</form>';
}
?>