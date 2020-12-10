<?php require APPROOT.'/partials/header.php'?>

<body>
    <?php require APPROOT.'/partials/navbar.php'?>
    <main class="home-container">

        <section class="title-container">
            <h1><?php echo $data['title'];?></h1>
            <img class="home-banner" src="<?php echo URLROOT?>/public/img/pexels-lucien-wanda-2827735.jpg" alt="Servicio social">
        </section>

        <section class="content-container">
            <div class="mision-content">
                <h2>Misión</h2>
                <p> <?php echo $data['mision_text']; ?> </p>
            </div>
            <div class="vision-content">
                <h2>Visión</h2>
                <p><?php echo $data['vision_text']; ?></p>
            </div>
        </section>
    
    </main>

</body>

<?php require APPROOT.'/partials/footer.php'?>

