<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Upload</title>
    <link rel= "stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
    <?php if (isset($_GET['error'])){ ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
   <?php } ?>



        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>PassWord</label>
        <input type="text" name="password" placeholder="Password"><br>


        <button type="submit">Login</button>

</form>
    
</body>
</html>