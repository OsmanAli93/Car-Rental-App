
<?php

    if (isset($_POST['login'])) {

        // Check For Login Credentials

        include_once '../classes/model-handler.php';

        if (empty($_POST['email']) || empty($_POST['pwd'])) {

            header('Location: login.php?error=emptyfields');
            exit();
            
        } else {

            $email = $_POST['email'];
            $password = $_POST['pwd'];

            $checkCredentials = new Login;
            $checkCredentials->loginUser($email, $password);
        }

       

        
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental | Login Page</title>
    <link rel="stylesheet" href="../scss/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> 
</head>
<body>
    <main id="main-login" class="vh-100">
        <div class="container-fluid h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-3">
                    <div class="login-wrapper">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="form-group">
                                <div class="title text-center">
                                    <h2>Login</h2>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="text" name="email" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password :</label>
                                <input type="password" name="pwd" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <button type="submit" value="Submit" name="login" class="btn btn-primary btn-block p-3">Log In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>