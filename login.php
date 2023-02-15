<?php
    session_start(); // Start session
    $submit = false;

    // submit form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $submit = true;
        if ($_POST["password"] == "1234" && $_POST["username"] == "michael") {
            $_SESSION["username"] = "michael";
            $_SESSION["password"] = "1234";

            var_dump("hello");

            // redirect user
            header('Location: welcome.php');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Username</label>
        <input type="text" name="username" id="username"> <br/>
        <label for="name">Password</label>
        <input type="password" name="password" id="password"> <br/>
        <input type="submit" value="Submit">
    </form>

    <!-- msg connect -->
    <?php if($submit): ?>
        <h3>Login incorrect </h3>
    <?php endif; ?>

</body>
</html>