
<?php require_once('inc/haut.php'); // require_once : le code va être stoppé si y a une erreur ( "haute" par ex.)
require_once('inc/init.php');



$resultat = $pdo->query("SELECT * FROM advert ORDER BY id DESC LIMIT 3"); // on récupère les annonces par ordre descendant d'id (pour avoir en premier les plus recentes) et la limite des 3 (pour avoir les 3 dernières)
$adverts = $resultat->fetchAll(PDO::FETCH_ASSOC);

echo  "<div class='d-flex justify-content-center'>";
// foreach ($adverts as $advert): fermeture php

foreach ($adverts as $advert) {
    echo '<div class="card text-center m-1 border-secondary" style="max-width: 20rem;">';
    echo '<h4 class="card-title">';
    echo $advert['title'];
    echo '</h4>';

    echo '<p class="card-text">'; // changer: enlever description, mettre tout sauf description
    echo $advert['description'];
    echo '</p>';
    echo '</div>';
    // ajouter btn voir l'annonce
}
echo '</div>';
// <?php enforeach; fermeture php ; puis à l'intéreiur mettre encore du <?= mb_strtoupper (multibyte string to upper pour afficher en maj) $advert['title]
// </div>

require_once('inc/footer.php'); ?>
