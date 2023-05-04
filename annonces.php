<?php require_once('inc/haut.php');
require_once('inc/init.php');


$resultat = $pdo->query("SELECT * FROM advert"); // on récupère toutes les annonces pour les afficher
$adverts = $resultat->fetchAll(PDO::FETCH_ASSOC);

echo  "<div class='d-flex justify-content-center'>";
foreach ($adverts as $advert) {
    echo '<div class="card border-secondary m-2" style="max-width: 20rem;">';
    echo '<h4 class="card-title">';
    echo $advert['title'];
    echo '</h4>';

    echo '<p class="card-text">';
    echo $advert['description'];
    echo '</p>';
    echo "<a href='ficheAnnonce.php?action=consulter&id=$advert[id]'>consulter</a>"; 
    echo '</div>';
    // ajouter btn voir l'annonce

}
echo '</div>';
require_once('inc/footer.php'); ?>