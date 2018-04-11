<?php

require_once 'tools/common.php';

$query = $db->query('SELECT * FROM category');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Space - Panier</title>

    <?php require 'partials/head_assets.php'?>
</head>

<body>
<!------ NavBar ------->
<?php require 'partials/nav.php'?>

<!------ Row Description ------->
<div class="row dark-1">
    <div class="container text-center text-white p-5">
        <h1 class="mb-3">Votre Panier</h1>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-3">
            <?php require 'partials/vertical-nav.php'; ?>
        </div>

        <div class="col-9">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col"> </th>
                        <th scope="col">Produit</th>
                        <th scope="col">Disponibilité</th>
                        <th scope="col" class="text-center">Quantité</th>
                        <th scope="col" class="text-right">Prix</th>
                        <th> </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(isset($_SESSION['panier'])) :
                    foreach ($_SESSION['panier'] as $key => $value) :?>
                    <tr>
                        <td><img src="<?php echo $value[0]; ?>" style="width: 55px; height: 55px"/> </td>
                        <td><?php echo $value[1]; ?></td>
                        <td>In stock</td>
                        <td><input class="form-control" type="text" value="1" /></td>
                        <td class="text-right"><?php echo $value[2]; ?> $</td>
                        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Sous-Total</td>
                        <td class="text-right">255,90 €</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>TVA ( 10% )</td>
                        <td class="text-right">6,90 €</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><strong>Total</strong></td>
                        <td class="text-right"><strong>0 $</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="index.php#categories-articles" class="btn btn-lg btn-block btn-light">Continuer mes achats</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Payment</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!------ Footer ------->
<?php require 'partials/footer.php'?>
</body>
</html>

