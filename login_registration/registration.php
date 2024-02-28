<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if(isset($_POST['submit'])){
            $fullName = post('fullName'); 
            $email = post('email'); 
            $password = post('password'); 
            $repeatPassword = post('repeat_password'); 
            $errors = array(); 
            if(empty($fullName) || empty($email) || empty($password) || empty($repeatPassword)){
                array_push($errors, "All field are required");
            }

            if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                array_push($errors, "Email is not valid");
            }

            if(strlen($password) < 8){
                array_push($errors, "Password must be at least 8 characters long");
            }

            if($password !== $repeatPassword){
                array_push($errors, "Password does not match");
            }

            if(count($errors) > 0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
            }

            print_r(post("fullName"));

        }
            
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Full Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email:">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password:">
            </div>
            <div class="form-group">
                <input type="repeat_password" class="form-control" name="repeat_password" id="password" placeholder="Repeat Password:">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Register">
            </div>
        </form>
        
    </div>
</body>

<?php
    function post($key) {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>