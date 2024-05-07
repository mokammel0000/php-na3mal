<?php
require 'partitials\header.php';
require 'partitials\dbconnection.php';
?>

<main class="container ">
    <div class="row  mb-4">
    
    <pre>
    <?php
        $q = "SELECT * from products";
        $stm = $con->prepare($q);
        $stm->execute();
        while($row = $stm->fetch(PDO::FETCH_ASSOC)){
    ?>        
    </pre>  

    <div class="col-md-6">  
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0"><?= $row['name'] ?></h3>
                <p class="card-text mb-auto mb-3"> <?php  echo substr($row['description'], 0, 20) ?> .... </p>
                
                <div >
                    <a href="details.php?id= <?=$row['id']?>" class="btn btn-primary">Details</a>
                    <a href="edit.php?id= <?=$row['id']?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
            
            <div class="col-auto d-none d-lg-block">
            <img src="<?= $row['photo'] ?>" alt="">
            </div>
        </div>
    </div>

        <?php } ?>

    </div>
</main>

<?php  require 'partitials\footer.php'?>