<html>
<head>
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $SITENAME;?></title>
</head>
<body>
    
<?php
    echo "<p>Proyects/index called!</p>";
    echo "APPROOT: " . APPROOT . "<br>";
    echo "URLROOT: ". URLROOT . "<br>";
    echo "SITENAME: " . SITENAME . "<br>";
    
    //var_dump($data['proyects']);
    
    //recover data from model transfer
    foreach ($data['proyects'] as $proyect)
    {
        echo "<p>titulo: " . $proyect["titulo"]. " objetivo: ".$proyect["objetivo"]
         ." nivel: ".$proyect['nivel'] . " modalidad: ".$proyect['modalidad']."</p>";
    }
    ?>
</body>
</html>