

<?php
include 'inc.php';

//echo '<b>Laatste update:</b><br>';
$post2 = R::findLast('post');


echo '<small>Bericht:</small>';
echo '<h1 class="display-4">'.$post2->title.'</h1>';
echo '<hr>';
echo '<p class="lead"><i>'.$post2->author.' - '.toNiceTimeElapsed($post2->created).'</i></p>';


R::close();

//hele array
//echo '<hr>';
//$post = R::findAll('post');
//echo '<pre>'; print_r($post); echo '</pre>';

?>







