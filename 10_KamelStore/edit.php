<?php 
require 'partitials\header.php';
require 'partitials\dbconnection.php';


if(isset($_POST['updateBtn'])){
  if(!empty($_FILES['photo']['name'])){
    $photoPath = 'images/'.time().$_FILES['photo']['name'];
    move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath);
  }
  
  $data = [
    'id'=> $_GET['id'], 
    'name'=> $_POST['name'], 
    'price'=> $_POST['price'], 
    'stock'=> $_POST['stock'], 
    'description'=> $_POST['description'],
    'created_date'=> date("Y-m-d")
  ];

  if(isset($photoPath)){
    $data['photo'] = $photoPath;
  }

  $columns = array_keys($data);
  $placeholders = array_map(function($item){
    return "$item= :$item";
  }, $columns);

  $placeholders = implode(',', $placeholders);
  


  $query = "UPDATE products SET $placeholders WHERE id = :id";
  $stm  = $con->prepare($query);
  $stm->execute($data);
  echo '<div class="alert alert-success" role="alert">
  the product has been Updated sucssesfuly!
  </div>';
}


$q = "SELECT * FROM products where id = :id";
$stm = $con->prepare($q);
$stm->bindParam(':id', $_GET['id']);
$stm->execute();
$product = $stm->fetch(PDO::FETCH_ASSOC);

?>


<main class="container ">
    <div class="row mb-5">      
        
      <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-2">
          <label  class="form-label">Product Name</label>
          <input type="text" class="form-control" name="name" value="<?=$product['name']?>">
        </div>

        <div class="mb-2">
          <label  class="form-label">Product Price</label>
          <input type="text" class="form-control" name="price" value="<?=$product['price']?>">
        </div>

        <div class="mb-2">
          <label  class="form-label">Product Stock</label>
          <input type="text" class="form-control" name="stock" value="<?=$product['stock']?>">
        </div>

        <div class="mb-2">
          <label  class="form-label">Product Description</label>
          <textarea class="form-control" name="description" rows=5> <?=$product['description']?></textarea>
        </div>

        <div class="mb-4">
          <label  class="form-label">Product photo</label>
          <input type="file" class="form-control" name="photo">
          <img src="<?=$product['photo']?>" class="img-thumbnail" alt="...">
        </div>

        <button type="submit" class="btn btn-primary mt-3" name = "updateBtn">
          Update
        </button>
      
    </form>
  </div>
</main>

<?php  require 'partitials\footer.php'?>
