<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
<<<<<<< HEAD
    <h1><?= $data['title'];?></h1>;
<?php

    echo "APPROOT: " . APPROOT . "<br>";
    echo "URLROOT: ". URLROOT . "<br>";
    echo "SITENAME: " . SITENAME . "<br>";

    //recover data from model transfer
    /*
    foreach ($data['users'] as $user)
    {
        echo "<p>user_name: " . $user["user_name"] . "password: " .
            $user["password"] . "</p>";
    }*/
?>

=======
<?php require '../../partials/header.php'?>
>>>>>>> master
</body>
<?php require '../../partials/footer.php'?>
</html>