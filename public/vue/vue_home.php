<?php

foreach($test as $t):

?>

<img src="<?php echo $t["img_url"]; ?>" alt="image de présentation du jeu ou dlc: <?php echo $t["names"] ?>">

<?php

endforeach;