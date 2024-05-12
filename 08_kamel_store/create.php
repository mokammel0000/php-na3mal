<?php
require 'partitials\header.php';
require 'partitials\dbconnection.php';

if (isset($_POST['saveBtn'])) {

  $photoPath = 'images/' . time() . $_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'], $photoPath);



  //THE FIRST WAY, there is no security in this query...

  // $query = "insert into products(name, price, stock, photo, description, created_date)
  //           values ('{$_POST['pname']}','{$_POST['price']}', '{$_POST['stock']}','iphone14.jpg','{$_POST['desc']}','{$_POST['date']}')";

  // $stm = $con->prepare($query);
  // $stm->execute();



  //THE SECOND WAY, UNNAMED PLACEHOLDERS
  //take care that the valuer in the indexed array must be ordered

  // $data = [
  //   $_POST['name'], 
  //   $_POST['price'], 
  //   $_POST['stock'], 
  //   $_POST['description'], 
  //   'photo.png', 
  //   '2022-04-15'
  // ];

  // $query = "INSERT INTO products (name, price, stock, description, photo, created_date) values(?, ?, ?, ?, ?, ?)";    
  // $stm->execute($data);


  //THE THIRD WAY, Named placeholders
  /*
  u must name the keys of the assosiative array as same as the database attributes.
  no require to order the values, because u are using an assoiative array 
  there is another way to make the prepared statement... it's called the 
  */

  $assosiative_data = [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'stock' => $_POST['stock'],
    'description' => $_POST['description'],
    'photo' => $photoPath,
    'created_date' => date("Y-m-d"),
    'created_time' => date("h:i:sa")
  ];
  $query = "INSERT INTO products (name, price, stock, description, photo, created_date, created_time)
                       values(:name, :price, :stock, :description, :photo, :created_date, :created_time)";
  //UNnamed placeholders
  $stm  = $con->prepare($query);
  $stm->execute($assosiative_data);


  //THE FOURTH WAY
  /*
  this way is an advanced version from the previous one, it's also about named parameters
  write named placeholders in the query, then u can pass the $_POST[] directly 
  and then pass $_POST[] to the query
  PDO will put the value from $_POST[] in it's right attribute in the DB
     ...note that u must name the keys of the $_POST[] as same as the database attributes.
     or u must make a new array like the THIRD WAY, 
  also u must make sure that the number of keys in the $_POST[] as same as the number of the named parameters
  no require to order the values, because u are using an assoiative array 
  */

  // $query = "INSERT INTO products (name, price, stock, description, photo, created_date)
  //                       values(:name, :price, :stock, :description, :photo, :created_date)";
  //                                                                                              //UNnamed placeholders
  // unset($_POST['saveBtn']);    
  // $_POST['photo'] = 'photo path';                                                                                              
  // $stm  = $con->prepare($query);
  // $stm->execute($_POST);

  echo '<div class="alert alert-success" role="alert">
          the product has been added sucssesfuly!
          </div>';
  header("Location: index.php"); /* Redirect browser */
  //exit();
}
?>


<main class="container ">
  <div class="row mb-5">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="mb-2">
        <label class="form-label">Product Name</label>
        <input type="text" class="form-control" name="name">
      </div>

      <div class="mb-2">
        <label class="form-label">Product Price</label>
        <input type="text" class="form-control" name="price">
      </div>

      <div class="mb-2">
        <label class="form-label">Product Stock</label>
        <input type="text" class="form-control" name="stock">
      </div>

      <div class="mb-2">
        <label class="form-label">Product Description</label>
        <textarea class="form-control" name="description" rows=5></textarea>
      </div>

      <div class="mb-4">
        <label class="form-label">Product photo</label>
        <input type="file" class="form-control" name="photo">
      </div>

      <button type="submit" class="btn btn-primary mt-3 text-center" name="saveBtn">
        Save
      </button>

    </form>
  </div>
</main>

<?php
require 'partitials\footer.php'
?>