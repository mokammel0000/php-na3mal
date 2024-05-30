<?php
require 'partitials\header.php';
require 'partitials\dbconnection.php';

if (isset($_POST['sign'])) {
    $data = [
        'firstname' => $_POST['fname'],
        'lastname' => $_POST['lname'],
        'email' => $_POST['email'],
        'username' => $_POST['username'],
        'pass' => $_POST['pass'],
        'created_date' => date("Y-m-d"),
        'created_time' => date("h:i:sa")
    ];
    $query = "INSERT INTO users (first_name, last_name, email, user_name, password, created_date, created_time)
                       values(:firstname, :lastname, :email, :username, :pass, :created_date, :created_time)";
    $stm  = $con->prepare($query);
    $stm->execute($data);

    header("Location: index.php"); /* Redirect browser */
    // exit();
    //
}
?>

<div class="container mt-4 mb-3">
    <form action="" method="post">

        <div class="col-md-4 mb-3">
            <label>First name</label>
            <input type="text" class="form-control " placeholder="First name" required name="fname">
            <!-- <div class="valid-feedback"> Looks good! </div> -->
        </div>


        <div class="col-md-4 mb-3">
            <label>Last name</label>
            <input type="text" class="form-control " placeholder="Last name" required name="lname">
            <!-- <div class="valid-feedback"> Looks good! </div> -->
        </div>

        <div class="col-md-4 mb-3">
            <label>Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control " id="validationServerUsername" placeholder="Username" required
                    name="username">
                <!-- <div class="invalid-feedback"> Please choose a username. </div> -->
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <label>Email address</label>
            <input type="text" class="form-control " placeholder="Email" required name="email">
            <!-- <div class="valid-feedback"> Looks good! </div> -->
        </div>

        <div class="col-md-4 mb-3">
            <label>Password</label>
            <input type="text" class="form-control " placeholder="First name" required name="pass">
            <!-- <div class="valid-feedback"> Looks good! </div> -->
        </div>

        <button type="submit" class="btn btn-primary mt-2 " name="sign">Sign Up</button>
    </form>
</div>
<?php require 'partitials\footer.php' ?>