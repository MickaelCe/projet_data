<section id="content">

<?php

foreach($test as $t):

?>

<img src="<?php echo $t["img_url"]; ?>" value="<?php echo $t["id"]; ?>" alt="image de présentation du jeu ou dlc: <?php echo $t["names"] ?>">

<p> <?php echo $t["names"]; ?> </p>

<?php

endforeach;

?>

</section>