<?php
require_once 'tools/common.php';

$query = $db->query('SELECT * FROM category');
?>

<footer>
    <section class="primary-footer">
        <div class="container py-4">
            <div class="row pb-2">
                <img class="img-responsive pull-left" src="http://i76.imgup.net/accepted_c22e0.png">
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h4>A propos</h4>
                    <address>
                        <ul class="list-unstyled">
                            <li><a href="index.php" class="nav-footer">Accueil</a></li>
                            <li><a href="user-profile.php" class="nav-footer">Profile</a></li>
                            <li><a href="panier.php" class="nav-footer">Panier</a></li>
                            <li><a href="a_propos.php" class="nav-footer">A propos</a></li>
                        </ul>
                    </address>
                </div>
                <div class="col-4">
                    <h4>Categories</h4>
                    <address>
                        <ul class="list-unstyled">
                            <?php while($category = $query->fetch()): ?>
                                <li>
                                    <a href="index.php?category_id=<?php echo $category['id']; ?>#categories-articles" class="nav-footer"><?php echo $category['name']; ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </address>
                </div>
                <div class="col-4">
                    <h4>Abonnez-vous à notre Newsletters</h4>
                    <div class="row">
                        <form class="form-inline">
                            <div class="form-group mx-3 mb-2">
                                <label for="inputPassword2" class="sr-only">Votre Email</label>
                                <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary mb-2">Envoyer</button>
                        </form>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">Vous accepterez de recevoirs des mails de notre part</small>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <img src="img/E-Space-footer.gif" width="150px" alt="Logo" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="secondary-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <p class="m-2 text-white">Made with <3 by <a href="#">Charly Luzzi</a></p>
                </div>
            </div>
        </div>
    </section>

    <div class="fixed-bottom pr-3 pb-3">
        <a href="#top" class="btn pull-right btn-outline-danger" id="btnTop">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>

</footer>



<!------------------------------------------------------------------->
<!-------------------------- Javascript ----------------------------->
<!------------------------------------------------------------------->
<script>
    // ------ Animation Apparition Button ScrollTop -------
    window.onscroll = function() { scrollFunction() };
    function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            document.getElementById("btnTop").style.display = "block";
        } else {
            document.getElementById("btnTop").style.display = "none";
        }
    }

    // ------ Animation Nav Category Fixed -------
    // ------ Fixation -------
    var fixmeTop = $('.background-nav-category').offset().top;
    $(window).scroll(function() {
        var currentScroll = $(window).scrollTop();
        if (currentScroll >= fixmeTop) {
            $('.background-nav-category').css({
                position: 'fixed',
                top: '0',
                animation: 'reduceNavCategory 3s normal',
                "animation-fill-mode" : 'both'
            });
            $('.background-articles').css({
                "padding-top": '130px'
            });
        } else {
            $('.background-nav-category').css({
                animation: 'none',
                position: 'static'
            });
            $('.background-articles').css({
                "padding-top": '0'
            });
        }
    });
    // ------ Static à partir des avis -------
    var fixmeBot = $('footer').offset().top;
    $(window).scroll(function() {
        var currentScrollt = $(window).scrollTop();
        if (currentScrollt >= fixmeBot) {
            $('.background-nav-category').css({
                position: 'static'
            });
        }
    });
</script>



