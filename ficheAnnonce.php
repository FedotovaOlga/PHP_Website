<?php require_once('inc/haut.php');
require_once('inc/init.php');


// $resultat = $pdo->query("SELECT * FROM advert");
// $adverts = $resultat->fetchAll(PDO::FETCH_ASSOC);


// foreach ($adverts as $advert) {


//     foreach ($advert as $cle => $valeur)
//     {
//         echo "$cle : $valeur <br>";
//     }

//     echo '<form action="" method="post">
//     <label for="reservation_message">Message de réservation</label>
//     <input type="text" name="reservation_message"></form>';
//     echo "<br>";

// }

if(isset($_GET['action']) && $_GET['action'] == "consulter" && isset($_GET['id'])) // on vérifie si dans l'url il y a une action qui correspond à "consulter" avec un id
{
    $resultat = $pdo->query("SELECT * FROM advert WHERE id=$_GET[id]");
    $annonce = $resultat->fetch(PDO::FETCH_ASSOC);

if($_POST) // on verifie si le formulaire est envoyé
{
    $pdo->exec("UPDATE advert SET reservation_message='$_POST[message]' WHERE id=$annonce[id]");
    // echo "<div class='test-center bg-success' <p>Vous venez de réserver cette annonce</p></div>";

    header('location: index.php'); // rnvoi vers la page d'accueil
}
}


?>

<div class="text-center">
    <?php if($annonce['reservation_message']): // si l'annonce contient un message de reservation en bdd ?> 
    <h2 class="text-warning">Cette annonce est réservée</h2>
    <?php endif; ?>
    <h1> <?=$annonce['title']; ?> </h1>
    <h4>type : <?=$annonce['type']; ?> </h4>
    <h4>localisation :<span> <?=$annonce['city'] . " ($annonce[postal_code])"; ?> </span></h4>
    <h4>description : <?=$annonce['description']; ?> </h4>
    <h3>prix : <?=$annonce['price']; ?>€</h3>

</div>

<div>
    <form action="" method="post" class="form">
        <label for="message">Message</label>
        <textarea name="message" class="form-control"></textarea>
        <input type="submit" value="envoyer">
    </form>
</div>