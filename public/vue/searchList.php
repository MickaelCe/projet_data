<?php 
include 'public/pdo/connexion.php';
 if (isset($_GET['name'])) {
    $nom = $_GET['name'];
    $tests = $pdo->query("SELECT * FROM steam_game WHERE names LIKE '$nom%' limit 7 ") ;
    $gamesearch = $tests->fetchAll();
    foreach ($gamesearch as $game):
    ?>

    <li class="livesearch-item">
        <img src="<?php echo $game->img_url; ?>" id="liveSearchImg" alt="Games image" />
            <div>
                <h3 id="liveSearchName" ><?php echo $game->names; ?></h3>   
            </div>
    </li>
    
    
    <?php 
    endforeach;
} else {
 echo "Heloooo";
}
?>