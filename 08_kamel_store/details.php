<?php
require 'partitials\header.php';
require 'partitials\dbconnection.php';
$query = "SELECT * FROM products where id = :id";
$stm = $con->prepare($query);
$stm->bindParam(':id', $_GET['id']);
$stm->execute();

$selectedProduct = $stm->fetch(PDO::FETCH_ASSOC);
// echo '<pre>';
// var_dump($selectedProduct);
// echo '<pre>';
?>
<center>
    <div class="card text-center " style="width: 18rem;">
        <img src="<?= $selectedProduct['photo'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $selectedProduct['name'] ?></h5>
            <p class="card-text">
                <?= $selectedProduct['description'] ?>
            </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $selectedProduct['price'] ?></li>
            <li class="list-group-item"><?= $selectedProduct['stock'] ?></li>
            <li class="list-group-item"><?= $selectedProduct['created_date'] ?></li>
            <li class="list-group-item"><?= $selectedProduct['created_time'] ?></li>
        </ul>
        <div class="card-body">
            <a href="edit.php?id= <?= $selectedProduct['id'] ?>" class="btn btn-warning">Edit</a>
            <a href="delete.php?id=<?= $selectedProduct['id'] ?>" class="btn btn-danger">Delete</a>
        </div>
    </div>
</center>

<?php require 'partitials\footer.php' ?>