<html>
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $SITENAME;?></title>
</head>
<body>
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

</body>
</html>

