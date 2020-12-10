<?php require APPROOT.'/partials/header.php'?>

<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <h1><?php echo $data['title'];?></h1>

    <?php
    foreach($data['proyects'] as $proyect)
    {
        echo "<p>name: " . $proyect["titulo"] . "estado: " .
            $proyect["estado_id"] . "</p>";
    }
?>
</body>

<?php require APPROOT.'/partials/footer.php'?>