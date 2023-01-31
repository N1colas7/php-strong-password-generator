<?php
    function randomPassword($number){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;':<>,.?/\.";
    $password ="";
    for ($i=0; $i < $number ; $i++) { 
        $password .= $chars[rand(0, srteln($chars) - 1)];
    }
    return $password;
    }
    var_dump(randomPassword($number))
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>PHP-STRONG-PASSWORD-GENERATOR</title>
</head>
<body>
    <h1>Strong Password Generator</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="GET">
                    <input type="number" name="number">
                    <button type="submit">Invia</button>
                </form>
                <p>La tua password è : <?php echo randomPassword($number) ?></p>
            </div>
        </div>
    </div>
</body>
</html>

