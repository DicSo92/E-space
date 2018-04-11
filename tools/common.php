<?php

//connexion à la base de données
try{

    //$db = new PDO('mysql:host=mysql.hostinger.fr;dbname=u177295062_space;charset=utf8', 'u177295062_dicso', 'HostStart75', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $db = new PDO('mysql:host=localhost;dbname=e_space;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $exception)
{
    die( 'Erreur : ' . $exception->getMessage() );
}

//ouverture de session pour connexions utilisateurs
session_start();


if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array() ;
}


if(isset($_POST['id_cart'])) {

    $query = $db->prepare('SELECT * FROM article WHERE id = ? ');
    $query->execute(array($_POST['id_cart']));

    $article = $query->fetch();

// si l'article est ajouté au panier
    if ($article) {
        array_push($_SESSION['panier'], [$article['image'], $article['name'], $article['price'], $article['id']]);
        $msgPanier = $article['name'] . " à bien été ajouté au panier";
    }
}

$count = count($_SESSION['panier']);

?>

<?php require 'login-register.php' ?>

