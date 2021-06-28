<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error'];?></p>
                <?php } ?>
            <label>User Name</label>
            <input type="text" name="user_name" placeholder="Enter your name" >
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <button type="submit">Login </button>
        </form>

    </body>
</html>