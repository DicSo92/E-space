<?php

if(isset($_GET['category_id']) ){ //si une catégorie est demandée via un id en URL

    //selection de la catégorie en base de données
    $query = $db->prepare('SELECT * FROM category WHERE id = ?');
    $query->execute( array($_GET['category_id']) );

    $currentCategory = $query->fetch();

    if($currentCategory){ //Si la catégorie demandé existe bien

        //récupération des articles publiés qui sont liés à la catégorie ET publiés
        $query = $db->prepare('SELECT * FROM article WHERE category_id = ?  ');
        $result = $query->execute( array($_GET['category_id']) );
        //fetchAll() renvoie un ensemble d'enregistrements (tableau), le résultat sera à traiter avec un boucle foreach
        $articles = $query->fetchAll();
    }
    else{ //si la catégorie n'existe pas, redirection vers la page d'accueil
        header('location:index.php');
        exit;
    }
}
else{ //si PAS de catégorie demandée via un id en URL
    //séléction de tous les articles publiés
    $query = $db->query('SELECT article.* , category.name AS category_name
						FROM article
						JOIN category 
						ON article.category_id = category.id ');
    $articles = $query->fetchAll();

}
?>


<section class="all_articles">

    <!-- si on affiche une catégorie, affichage de son nom, sinon affichage de "tous les articles" -->
    <h1 class="mb-4 text-white text-center"><?php if(isset($currentCategory)): ?><?php echo $currentCategory['name']; ?><?php else : ?>Tous nos produits<?php endif; ?></h1>


    <div class="container">
        <div class="row">
            <!-- si on affiche une catégorie, affichage d'une card contenant sa description et une autre avec le dernier produit de la categorie-->
            <?php if(isset($currentCategory)): ?>
            <div class="col-12 col-sm-3">
                <div class="card mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Pourquoi ?</div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $currentCategory['description']; ?></p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header bg-success text-white text-uppercase">Dernier produit</div>
                    <div class="card-body">
                        <img class="img-fluid" src="https://dummyimage.com/600x400/55595c/fff" />
                        <h5 class="card-title">Product title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="bloc_left_price">99.00 $</p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="col">
                <!-- s'il y a des articles à afficher -->
                <?php if(!empty($articles)): ?>

                    <div class="row">
                        <div class="card-group">
                        <?php foreach($articles as $key => $article):?>


                                <div class="card shadow mb-3 mx-2">
                                    <div class="card-body">
                                        <img class="img-fluid mb-3" src="<?php echo $article['image']?>">
                                        <h4 class="card-title"><?php echo $article['name']; ?></h4>
                                        <?php if(!isset($currentCategory)): ?>
                                            <b class="article-category">[<?php echo $article['category_name']; ?>]</b>
                                        <?php endif; ?>
                                        <p class="card-text"><?php echo $article['description']?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-4 pr-0">
                                                <a class="btn btn-danger btn-block mb-2"><?php echo $article['price']?>$</a>
                                            </div>
                                            <div class="col-8">
                                                <a href="article.php?article_id=<?php echo $article['id']; ?>" class="btn btn-info btn-block">Fiche produit</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <form method="post" class="col">
                                                <button href="#" type="submit" name="id_cart" value="<?php echo $article['id']; ?>" class="btn btn-success btn-block">Ajouter au panier</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                        <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- s'il n'y a pas d'articles à afficher (catégorie vide ou aucun article publié) -->
                    Ouups !! Aucun produits dans cette catégorie
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
