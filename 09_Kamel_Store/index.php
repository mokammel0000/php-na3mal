<?php

require 'partitials\header.php';
require 'partitials\dbconnection.php';
?> 

<div class= "container mt-5 mb-5" >
    <?php
    if(isset($_POST['login'])){
        $q = "SELECT * FROM users WHERE email = :email";
        $stm = $con->prepare($q);
        $stm->bindParam(':email', $_POST['email']);  
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);
    
        if($result){
            if($result['password'] == $_POST['pass']){
                header("Location: main.php"); 
            } else{
                echo '<div class="alert alert-danger" role="alert">
                          <center> Invalid password </center> 
                        </div>';
            }
        }else{
            echo '<div class="alert alert-warning" role="alert">
                    <center> you are not signed up yet </center> 
                </div>';
        }
    }
    
    ?>
    <form  action="" method="post">
        <div class="col-md-4 mb-3">
            <label >Email address</label>
            <input type="text" class="form-control " placeholder="Email"required name="email">
            <!-- <div class="valid-feedback"> Looks good! </div> -->
        </div>

        <div class="col-md-4 mb-3">
            <label >Password</label>
            <input type="text" class="form-control "  placeholder="First name" required name="pass">
            <!-- <div class="valid-feedback"> Looks good! </div> -->
        </div>       
    
        <button  type="submit" class="btn btn-primary mt-2 " name="login">Log In</button>
    </form>
    <small>
        you are not signed up yet, sign in from here
        <a href="signup.php">Sign Up</a>
    </small>
</div>

<?php  require 'partitials\footer.php'?>