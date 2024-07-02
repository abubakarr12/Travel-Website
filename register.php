<?php
include('./include/db.php');

if (isset($_POST['signup'])) {

    $name = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string(md5($_POST['password']));
    $existsql  = "SELECT email from `users` WHERE email = '$email'";
    $res = mysqli_query($conn, $existsql);
    if (mysqli_num_rows($res) > 0) {
?>
        <script>
            alert("email already exist");
        </script>
    <?php
    } else {

        $sql = "INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
        $result = mysqli_query($conn, $sql);
        $_SESSION['login'] = true;
        if ($result) {
            header('location:index.php');
        }
    }
}



if (isset($_POST['signin'])) {

    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string(md5($_POST['password']));
    $existsql  = "SELECT * from `users` WHERE email = '$email' AND password = '$password '";
    $res = mysqli_query($conn, $existsql);
    if (mysqli_num_rows($res) === 1) {
        header('location:index.php');
        $_SESSION['login'] = true;
    } else {

    ?>
        <script>
            alert("email not found");
        </script>
<?php
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/profile.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/register.css" rel="stylesheet">

    <head>

    <body>


        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#" method="post">
                    <h1>Create Account</h1>
                    <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="username">
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button name="signup">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#" method="post">
                    <h1>Sign in</h1>
                    <!-- <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <a href="#">Forgot your password?</a>
                    <button name="signin">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>













        <!-- Template Javascript -->
        <script src="js/register.js"></script>
    </body>

</html>