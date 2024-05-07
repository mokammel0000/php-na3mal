<?php
require 'partitials\header.php';
require 'partitials\dbconnection.php';


//THE FIRST WAY.... UNNAMED PLACEHOLDERS
    // $q = "DELETE FROM products WHERE id =".$_GET['id'];
    // $stme = $con->prepare($q);
    // $stme->execute();

    //THE SECOND WAY... UNNAMED PLACEHOLDERS
    // $q = "DELETE FROM products WHERE id =? ";
    // $data = [$_GET['id']];
    // $stme = $con->prepare($q);
    // $stme->execute($data);                         //in the execute statement, u must send an array....

    //THE THIRD WAY...  Named placeholders
    // $q = "DELETE FROM products WHERE id =:id";
    // $data = ['id' => $_GET['id']];
    // $stme = $con->prepare($q);
    // $stme->execute($data);

    //THE FOURTH WAY... Named placeholders
    $q = "DELETE FROM products WHERE id =:id";
    $stme = $con->prepare($q);
    $stme->bindParam(':id', $_GET['id']);             // in the case u want to passing one parameter...
    $stme->execute();
?>

<main class="container ">
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style = "text-align: center;">
    <div class="col p-4 d-flex flex-column position-static" >
        <div class="alert alert-dark" role="alert" >
            <strong>
                The item has been DELETED correctly.... 
            </strong>
        </div>
        <center><a href="index.php" class="btn btn-primary mt-3">Home Page</a></center>
    </div>
</div>
</main>            


<?php  require 'partitials\footer.php'?>
  

