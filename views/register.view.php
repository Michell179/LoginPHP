<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="register-form">
        <h1>Register</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="">
            <div class="register-input">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="register-input">
                <i class="fa fa-user" aria-hidden="true"></i>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="register-input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <div class="register-input">
                <label for="confirm-password">Confirmar Password</label>
                <input type="password" name="confirm-password" id="confirm-password">
            </div>

            <div class="register-send">
                <input type="submit" value="Enviar">
            </div>
            
            <?php if(!empty($error)){echo $error;}?>

        </form>

        <a href="login.php">Ya tienes cuenta?</a>
    </div>




</body>
</html>