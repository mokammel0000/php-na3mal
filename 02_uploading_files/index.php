<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploadin File</title>
</head>

<body>
    <fieldset>
        <form action="file.php" method="post" enctype="multipart/form-data">
            <!--form method must be [[POST]] to enable u to upload files -->
            <input type="file" name="photo">
            <br>
            <br>
            <input type="submit">
        </form>
    </fieldset>
</body>

</html>