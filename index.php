<?php
    $number=$_GET["number"];
    function randomPassword($number){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?/\.";
    $password ="";
    for ($i=0; $i < $number ; $i++) { 
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
    }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./css/style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP-STRONG-PASSWORD-GENERATOR</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                    <input type="number" name="number">
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
                <?php if(isset($number)){?>
                <p>La tua password è : <h4><?php echo randomPassword($number) ?></h4></p>
                <?php }?>
            </div>
        </div>
    </div>
</body>
</html>

