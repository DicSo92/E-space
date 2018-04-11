<nav class="navbar navbar-expand-sm navbar-dark bg-dark testmm" id="top">
    <div class="container">
        <a class="navbar-brand" id="brand" href="index.php">
            <img src="img/E-space.gif" alt="Logo" style="width:75px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navHeaderCollapse" aria-controls="navHeaderCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navHeaderCollapse">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="index.php">Accueil</a>
                <a class="nav-item nav-link" href="index.php#categories-articles">Produits</a>
                <a class="nav-item nav-link" href="a_propos.php">A propos</a>
            </div>
        </div>
        <div class="navbar-nav" id="connectPanier">
            <!-- Si une session utilisateur existe (utilisateur connécté) on affiche son pseudo et un boutton pour se déconnecter -->
            <?php if(isset($_SESSION['user'])): ?>
                <div class="nav-item">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle nav-link btn btn-outline-secondary my-2" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon compte<span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <h2 class="text-center" class="text-center"><?php echo $_SESSION['user']; ?></h2>
                            <div class="dropdown-divider"></div>
                            <?php if($_SESSION['is_admin'] == 1): ?>
                                <a class="dropdown-item" href="admin/index.php">Administration</a>
                            <?php else: ?>
                                <a class="dropdown-item" href="user-profile.php">Profile</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="d-block btn btn-danger ml-2 mr-2" href="index.php?logout">Déconnexion</a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="nav-item">
                    <!-- Button trigger modal -->
                    <button class="btn btn-outline-primary btn-block my-2" data-toggle="modal" data-target="#myModal1">
                        Connexion / Inscription
                    </button>
                </div>
            <?php endif; ?>

                <div class="nav-item">
                    <a class="btn btn-sm ml-3 nav-link btn btn-outline-secondary my-2 px-2" href="panier.php">
                        <img src="img/icon-cart.png" class="img-fluid" width="22px">
                        <span class="badge badge-secondary"><?php echo $count ; ?></span>
                    </a>
                </div>
        </div>
    </div>
</nav>

<?php require 'modal.php' ?>


