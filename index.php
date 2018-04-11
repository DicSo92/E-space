<?php

require_once 'tools/common.php';

$query = $db->query('SELECT * FROM category');

//si un utilisateur est connécté et que l'on reçoit le paramètre "lougout" via URL, on le déconnecte

if(isset($_GET['logout']) && isset($_SESSION['user'])){

    //la fonction unset() détruit une variable ou une partie de tableau. ici on détruit la session user
    unset($_SESSION["user"]);
    //détruire $_SESSION["user"] va permettre l'affichage du bouton connexion / inscription de la nav, et permettre à nouveau l'accès aux formulaires de connexion / inscription
    //détruire $_SESSION["is_admin"] va empêcher l'accès au back-office
    unset($_SESSION["is_admin"]);
    unset($_SESSION["user_id"]);

    $logoutMessage = "Vous êtes bien déconnecté";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Space - Ventes extraterrestre</title>

    <?php require 'partials/head_assets.php'?>
</head>

<body class="w-100">

<!------ NavBar ------->
<?php require 'partials/nav.php'?>

<!------ Carousel ------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >

    <!------ Message Connexion / Inscription / Erreurs ------->
    <?php require 'messages.php'?>

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/header_background.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="pb-4 animCarouselH1">Réserver un voyage dans l'espace</h1>
                <h4 class="animCarouselH4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut enim eum itaque minus molestiae molestias</h4>
                <a href="index.php?category_id=1#categories-articles" class="btn btn-danger mt-3 animCarouselBtn">Découvrir</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/ciel-etoile.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="pb-4 animCarouselH1">Acheter une étoile pour un proche</h1>
                <h4 class="animCarouselH4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque minus molestiae molestia</h4>
                <a href="index.php?category_id=4#categories-articles" class="btn btn-danger mt-3 animCarouselBtn">Découvrir</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/meteorite.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="pb-4 animCarouselH1">Décorer chez vous avec des météorites</h1>
                <h4 class="animCarouselH4">Lorem ipsum dolor sit amet, consect elit. Aut enim eum itaque minus molestiae molestias</h4>
                <a href="index.php?category_id=3#categories-articles" class="btn btn-danger mt-3 animCarouselBtn">Découvrir</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!------ Row Description ------->
<div class="row m-auto dark-1">
    <div class="container text-center text-white p-5">
        <h4 class="mb-3">Lorem ipsum Dolor Sit</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, laborum, neque! Ad aliquam architecto dolore dolorem doloribus eaque earum explicabo maiores mollitia neque praesentium recusandae repellat sint totam voluptas, voluptatum.</p>
        <a href="a_propos.php" class="btn btn-secondary">A propos</a>
    </div>
</div>

<!------ Nav categories ------->
<div class="background-nav-category">
    <section class="container" id="categories-articles">
        <div class="row m-auto container-category">
            <?php while($category = $query->fetch()): ?>
                <a href="index.php?category_id=<?php echo $category['id']; ?>#categories-articles" class="d-flex flex-column justify-content-center align-items-center text-center col-3 py-3 animHoverNav">
                    <h5 class="mb-1 text-dark text-category"><?php echo $category['name']; ?></h5>
                    <img src="<?php echo $category['image']; ?>" class="img-fluid icon-category">
                </a>
            <?php endwhile; ?>
        </div>
    </section>
</div>

<!------ Articles ------->
<div class="background-articles">
    <section class="container pt-3">
        <?php require 'article_list.php'?>
    </section>
</div>

<div class="background-comments">
    <section class="container py-3">
        <div class="row">
            <div class="card-group">
                <div class="card text-center index-comments">
                    <img class="card-img-top rounded-circle img-responsive mx-auto mt-4 avatar" src="img/tarou_p.jpg" alt="Card image cap">
                    <img src="img/5-étoiles.png" alt="" class="img-fluid w-75 m-auto">
                    <div class="card-body pt-0">
                        <h5>Super ! Je recommande</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad earum eius facere, facilis harum in iusto laudantium, odit perferendis qu</p>
                        <p class="card-text pull-right"><small class="text-muted">4 Avril 2018</small></p>
                    </div>
                </div>
                <div class="card text-center index-comments">
                    <img class="card-img-top rounded-circle img-responsive mx-auto mt-4 avatar" src="img/tarou_p.jpg" alt="Card image cap">
                    <img src="img/5-étoiles.png" alt="" class="img-fluid w-75 m-auto">
                    <div class="card-body pt-0">
                        <h5>Super ! Je recommande</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad earum eius facere, facilis</p>
                        <p class="card-text pull-right"><small class="text-muted">4 Avril 2018</small></p>
                    </div>
                </div>
                <div class="card text-center index-comments">
                    <img class="card-img-top rounded-circle img-responsive mx-auto mt-4 avatar" src="img/tarou_p.jpg" alt="Card image cap">
                    <img src="img/5-étoiles.png" alt="" class="img-fluid w-75 m-auto">
                    <div class="card-body pt-0">
                        <h5>Super ! Je recommande</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad earum eius facere, facilis harum in iusto laudantium, odit perferendis quidem lorem ipsum dolor sit halet</p>
                        <p class="card-text pull-right"><small class="text-muted">4 Avril 2018</small></p>
                    </div>
                </div>
                <div class="card text-center index-comments">
                    <img class="card-img-top rounded-circle img-responsive mx-auto mt-4 avatar" src="img/tarou_p.jpg" alt="Card image cap">
                    <img src="img/5-étoiles.png" alt="" class="img-fluid w-75 m-auto">
                    <div class="card-body pt-0">
                        <h5>Super ! Je recommande</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad earum eius facere, facilis harum in iusto laudantium, odit </p>
                        <p class="card-text pull-right"><small class="text-muted">4 Avril 2018</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!------ Footer ------->
<?php require 'partials/footer.php'?>

</body>
</html>
