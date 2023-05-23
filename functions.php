<?php
$lunghezza = 0;
$lunghezza = $_GET['variabileLunghezza'];

//var_dump ($lunghezza);

function passwordGen($lunghezza) {
    $numLettere = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890123456789';
    $randomString = '';
 
    for ($i = 0; $i < $lunghezza; $i++) {
        $indice = rand(0, strlen($numLettere) - 1);
        $randomString .= $numLettere[$indice];
    }
 
    return $randomString;
}
 
//echo passwordGen($lunghezza);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>strong pass gen</title>
</head>
<body>
    
    <h1 class="text-center my-5 text-capitalize">strong password generator</h1>
    <p class="text-center">La password generata è: <b><?php echo passwordGen($lunghezza) ?></b></p>


</body>
</html>