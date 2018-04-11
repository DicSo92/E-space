<?php

require_once 'tools/common.php';

if(!isset($_GET['article_id'])){
    header('location:index.php');
    exit;
}

//selection de l'article dont l'ID est envoyé en paramètre GET
$query = $db->prepare('SELECT * FROM article WHERE id = ? ');
$query->execute( array( $_GET['article_id'] ) );

$article = $query->fetch();

//si pas d'article trouvé dans la base de données
if(!$article){
    header('location:index.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
 <head>

	<title>Article</title>

   <?php require 'partials/head_assets.php'; ?>

</head>
<body>
<?php require 'partials/nav.php'; ?>

<div class="background-nav-category">
    <section class="container">
        <div class="row py-4">
            <div class="col-3">
                <?php require 'partials/vertical-nav.php'; ?>
            </div>

            <div class="col-4">
                <img src="<?php echo $article['image']; ?>" class="img-fluid" alt="">
            </div>

            <div class="col-4 offset-1 d-flex flex-column justify-content-between">
                <div>
                    <h1><?php echo $article['name']; ?></h1>
                    <h4><?php echo $article['price']; ?> $</h4>
                    <p><?php echo $article['description']; ?></p>
                </div>
                <form>
                    <hr>
                    <div class="form-group">
                        <label for="sel1">Quantité :</label>
                        <select class="form-control mb-2">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <button class="d-block btn btn-danger" type="submit" href="panier.php">Ajouter au Panier</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>


<?php require 'partials/footer.php'?>
</body>
</html>
