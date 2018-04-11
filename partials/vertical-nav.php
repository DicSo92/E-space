<?php

require_once 'tools/common.php';

$query = $db->query('SELECT * FROM category');

?>

<div class="card mb-3">
    <div class="card-header">
        Général
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <a class="decoration-link text-dark" href="index.php">Accueil</a>
        </li>
        <li class="list-group-item">
            <a class="decoration-link text-dark" href="user-profile.php">Profile</a>
        </li>
        <li class="list-group-item">
            <a class="decoration-link text-dark" href="panier.php">Panier</a>
        </li>
        <li class="list-group-item">
            <a class="decoration-link text-dark" href="#">A propos</a>
        </li>
    </ul>
</div>

<div class="card">
    <div class="card-header">
        Categories
    </div>
    <ul class="list-group list-group-flush">
        <?php while($category = $query->fetch()): ?>
            <li class="list-group-item">
                <a class="decoration-link text-dark" href="index.php?category_id=<?php echo $category['id']; ?>#categories-articles" ><?php echo $category['name']; ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</div>

