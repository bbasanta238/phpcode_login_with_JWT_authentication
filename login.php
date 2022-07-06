<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsstrap -->
    <!-- CSS only -->
    <link rel="stylesheet" href="1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--  -->
    <title>PHP</title>
</head>
<body>
    <!-- <form action="index.php" method="POST">
        <input placeholder="Enter your name" type="text" name="name" id="name">
        <input placeholder="Enter your Password" type="text" name="password" id="password">
        <button class="submit">Submit</button>
    </form> -->
    <form action="loginbackend.php" method="POST">
        <div class="form-group">
            <label for="Email">Email address</label>
            <input type="text" class="form-control" name="Email" id="Email1" aria-describedby="emailHelp" placeholder="Enter email or username" required>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
          <input type="password" class="form-control" name="Password" id="Password1" placeholder="Password" required>
        </div>
        
        <br>
        <?php
            $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if(strpos($url,"login=error") == true){ ?>
                <div class="alert alert-danger" role="alert">
               <?php echo "<p>Username or Password is incorrect </p>"; ?>
                </div>
          <?php  }?>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <a href="Login.php"><button type="submit" class="btn btn-info">Login</button></a>
    
</body>
</html>