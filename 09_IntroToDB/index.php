<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
    
<div class="container">
<?php

/*
1- open connection to the server/ connection to mysql
  + use the selected shceme.
2- send query to the DB.

3- Handling results from step 2.

4- closing connection.
*/

try{
// $connect = mysqli_connect('localhost', 'root', '', 'blog');
$connect = mysqli_connect('127.0.0.1', 'root', '', 'blog');

}catch(Exception $e){
    
    echo $e->getMessage() .'<br>';
    echo $e->getcode() .'<br>';
    echo $e->getFile() .'<br>';
    //echo $e->getTrace() .'<br>';
}
//returning an information about this connection to use it when u fetch data from this connection 
//we are here trying to connect to the local host server, cause it's the only server we have.
//note u can have more than one connection in your page....

$q = "select * from posts";
$results = mysqli_query($connect, $q);
// take an query and return the result, u can use the returned result as u want without affect the DB.

    if(mysqli_num_rows($results)){
        while($row = mysqli_fetch_assoc($results)){
        echo '<div class="card mt-2">
        <div class="card-header">
        '.date("Y/M/d", strtotime($row['publich_date'])) .'
        </div>
        <div class="card-body">
        <h5 class="card-title">'.$row['title'].'</h5>
        <p class="card-text">'.$row['content'].'</p>
            <a href="#" class="btn btn-primary">'.$row['rating'].'</a>
        </div>
        </div>';
    }
    
    

} else {
    echo 'No posts found';
}
mysqli_close($connect);
//close a spesific connection, u may have several connections in one page... 
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
