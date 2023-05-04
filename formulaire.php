<?php require_once('inc/haut.php'); // si on met "include", la suite du code ne sera pas stoppé même s'il y a une erreur dans le nom du fichier par ex.
require_once('inc/init.php');



// var_dump($pdo);
// echo "<br>";

if($_POST)
{
    // foreach ($_POST as $cle => $valeur)
    // {
    //     echo "$cle : $valeur <br>";
    // }

    $pdo->exec("INSERT INTO advert (title, description, postal_code, city, type, price) VALUES ('$_POST[titre]','$_POST[description]', '$_POST[cp]', '$_POST[ville]', '$_POST[type]', '$_POST[prix]')");

    echo "<div style='background: #86d674'><p>votre message a bien été enregistré</p></div>";
}

?>


    <div class="text-center">
        <!-- à améliorer ! -->
    <h2>Ajouter une annonce</h2>
    </div>
    <form action="" method="post" class="form">
        <label for="titre">Titre de l'annonce</label>
        <input class="form-control" type="text" name="titre">
        <br>
        <label for="description">Description de l'annonce</label>
        <textarea class="form-control"  type="text" name="description"></textarea>
        <br>
        <label for="cp">Code postal</label>
        <input class="form-control"  type="int" name="cp">
        <br>
        <label for="ville">Ville</label>
        <input class="form-control"  type="text" name="ville">
        <br>
        <label for="type">Type d'annonce</label>
        <select class="form-control" name="type">
            <option value="location">location</option>
            <option value="vente">vente</option>
        </select>
        <br>
        <label for="prix">Prix</label>
        <input class="form-control"  type="int" name="prix">
        <br>

        <div class="text-center m-2">
        <input type="submit" value="envoyer">
        </div>


<?php require_once('inc/footer.php');?>