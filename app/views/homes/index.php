<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $data['title'];?></h1>

    <?php
    foreach($data['proyects'] as $proyect)
    {
        echo "<p>name: " . $proyect["titulo"] . "estado: " .
            $proyect["estado_id"] . "</p>";
    }
?>
</body>
</html>
