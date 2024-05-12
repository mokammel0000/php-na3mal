<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Uploaded File</title>
</head>

<body>
    <pre>
    <?php
    //var_dump($_FILES);

    // echo $_FILES['photo']['name'] . '<br>';
    // echo $_FILES['photo']['full_path'] . '<br>';

    //echo $_FILES['photo']['tmp_name'] . '<br>';
    // this is a temporary name to the uploaded file that's upoladed to the server
    // u should take this tmp file and move it into the place u want(also in your server).

    //move_uploaded_file($_FILES['photo']['tmp_name'], 'images/my_image.png');

    move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . time() . '_' . $_FILES['photo']['name']);
    // htdocs is the root of the server, so it can be opened to the strangers, (it's permissions is public)
    // so it's better to upload the file on any other file 
    // because other files on the server aren't public to the users,
    // and then u can aliasing (make a shourt cut) this folder into htdocs

    echo 'the file is uploaded sucssesfuly .<br>';

    //echo $_FILES['photo']['type'] . '<br>'; 
    //file mime type (important to check the real type of the type)
    //echo $_FILES['photo']['size'] . '<br>'; //size in bytes
    //these are important to validate the uploaded file
    //study web pentiration test... and OWASP 

    // echo $_FILES['photo']['error'] . '<br>'; //each number has it's definition
    ?>
    </pre>
</body>

</html>