<?php 
include 'config/dbcon.php';
session_start();
if(isset($_POST['submit'])){
    
    $logins = array('admin' => '123456');
    
    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    
         
    if (isset($logins[$Username]) && $logins[$Username] == $Password){
            
            $_SESSION['UserData']['Username']=$logins[$Username];
            header("location:index.php");
            exit;
    } else { 
            $msg="<span style='color:red'>Invalid Login Details</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/login.css">

    <title>Login</title>
</head>

<body>
    <div class="main-container">
        <div class="login-container container">
            <div class="login-form container shadow-lg col-md" id="login-form">
                <div class="logo text-center">
                    <img src="images/pnp-logo.jpg" alt="pnp-logo">
                </div>
                <div class="form text-center">
                    <form action="" method="post">
                        <div class="username-container mb-3 mt-3">
                            <input type="text" name="Username" class="username form-control" placeholder="username">
                        </div>
                        <div class="password-container mb-3 mt-3">
                            <input type="password" name="Password" class="username form-control" placeholder="password">
                        </div>
                        <div class="button-container">
                            <button class="btn btn-primary btn-block" type="submit" name="submit" value="Login">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container shadow-lg p-0" id="container">
                <div class="bg-img-container">
                    <img src="images/pnp.jpg" alt="bg-image">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</body>

</html>