<?php

require 'includes/functions.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$photo4 = findLatest(4)
?>
<!doctype html>
<html lang="fr">
    <?php require 'includes/head.php'; ?>
<body id="home">
    <?php require 'includes/header.php'; ?>
    <main>
        <div id="hero">
            <h1>I love photography</h1>
        </div>
        <div class="container">
            <div class="row">
                <div id="content" class="column">
                    <h2 class="content-head">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p>
                        Aliquam sed dolor mi. Maecenas eu tortor neque. Phasellus ornare, purus sit
                        amet ultricies fermentum, erat ex sollicitudin odio, at aliquam quam ex non
                        risus. Quisque sit amet tincidunt nisl. Quisque mauris nisl, interdum quis
                        dapibus nec, blandit eget augue. Cras fringilla, enim sed euismod scelerisque,
                        leo tellus viverra massa, nec congue sem nisi ut turpis. Nam eu ipsum sed eros
                        fringilla maximus a non augue. Orci varius natoque penatibus et magnis dis
                        parturient montes.
                    </p>
                </div><!-- end first column -->
                <div class="column">
                    <p class="content-head pictures">
                        <a class="btn" href="gallery.php?page=0" title="See all pictures">
                            See all shots
                        </a>
                    </p>
                    <?php foreach ($photo4 as $photo1) {?>
                    <div id="pictures">
                        <a href="detail.php?id=<?php echo $photo1['id']; ?>" title="<?php echo $photo1['title'] ?> ">
                            <img src = "<?php echo 'images/small/'.$photo1['slug'].'.jpg'?>" alt ="Picture <?php $photo1['id'] ?>">
                        </a>
                        <?php } ?>
                    </div>
                </div><!-- end second column -->
            </div><!-- end row -->
            <p id="home-contact">
                <a class="button" href="contact.php" title="Formulaire de contact">
                    Contact me
                </a>
            </p>
        </div>
    </main>
    <?php require 'includes/footer.php'; ?>
</body>
</html>
