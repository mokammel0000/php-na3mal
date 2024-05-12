<?php
require 'database.php';

$selected_product = $products[$_GET['id']];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details Of The Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>
    <div class="row mx-5 mt-5">
        <div class="col-3">
            <img class="img-fluid border" src="images/<?= $selected_product['photo'] ?>">
        </div>
        <div class="col-8">
            <h3><?= $selected_product['name'] ?></h3>
            <hr>
            <p><strong>price:</strong> <?= $selected_product['price'] ?></p>
            <p><strong>stock:</strong> <?= $selected_product['stock'] ?></p>
            <a href="index.php" class="btn btn-primary">Continue Shopping</a>
        </div>
    </div>
</body>

</html>