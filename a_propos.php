<?php

require_once 'tools/common.php'; ?>

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

<!------ Row Description ------->
<div class="row dark-1">
    <div class="container text-center text-white p-5">
        <h1 class="mb-3">A propos</h1>
    </div>
</div>

<section class="background-propos">
    <div class="container">
        <div class="row py-4">
            <div class="col-sm-12 col-lg-3 ">
                <?php require 'partials/vertical-nav.php'; ?>
            </div>
            <div class="col-sm-12 col-lg-5 ">
                <h1 class="text-center pb-3">Adresse</h1>
                <iframe class="col-12 p-2 border border-info rounded bg-light" height="300px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJc29kHLCdQIYRpK0NUf9HKCE&key=AIzaSyBwvGSx0WbZFQ_ELnIMQIiw5xXFRuXoizg" allowfullscreen></iframe>

                <div class="mt-3 test">
                    <small class="text-dark">Coordonnées</small>
                    <div class="row">
                        <p class="col-6">45 rue brissard</p>
                        <p class="col-6">92140</p>
                        <p class="col-6">Clamart</p>
                        <p class="col-6">FRANCE</p>
                    </div>

                    <small class="text-dark">Contact</small>
                    <p>luzzi.charly@gmail.com</p>
                    <p>06 46 77 29 01</p>

                    <small class="text-dark">Biographie</small>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, ad earum eius facere, facilis harum in iusto laudantium, odit perferendis quidem ratione suscipit. Dolore dolorum omnis rem? Ex, expedita, tempora?</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <h1 class="text-center pb-3"> Info-Pratique </h1>
                <div>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia varius neque id ultricies. Pellentesque fermentum erat ac fringilla pretium. Nulla vitae blandit sapien, nec lobortis nisi. Curabitur a convallis augue. Proin venenatis eros lorem. Pellentesque elit lacus, condimentum a lectus vel, commodo vulputate diam. Etiam cursus vestibulum nisi id lobortis. </p>
                    <p> Maecenas congue sem mi, viverra dictum arcu blandit ut. Fusce sagittis erat orci, sit amet egestas tellus ornare in. Vivamus placerat velit sed nulla vestibulum luctus. Aenean ultrices turpis vel lectus dapibus iaculis. Quisque nec blandit nibh. </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li>Cras et nisi sed quam bibendum porttitor.</li>
                        <li>Maecenas ultrices orci non augue elementum porttitor.</li>
                        <li>Aenean venenatis quam eu nulla consequat, nec volutpat tortor malesuada.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!------ Footer ------->
<?php require 'partials/footer.php'?>
</body>

