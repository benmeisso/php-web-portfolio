<?php
require 'includes/functions.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$page = isset($_GET['page']) ? $_GET['page'] : 0;
if ($page == 3){
    $page = 0;
}
$photo6 = findPaged(6, $page*6);
?>
<!doctype html>
<html lang="fr">
    <?php require 'includes/head.php'; ?>
<body id="gallery">
    <?php require 'includes/header.php'; ?>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                <?php foreach($photo6 as $photo1){ ?>
                <a href="detail.php?id= <?php echo $photo1['id']?>" title="<?php echo $photo1['title'] ?>">
                    <img src="<?php echo'images/medium/'.$photo1['slug'].'.jpg';?>" alt="Picture <?php echo $photo1['id'] ?>">
                    <br><?php echo $photo1['title'] ?>
                </a>
                <?php } ?>
            </div>
            <p id="pager">
                <a href="gallery.php?page=<?php echo $page+=1;?>" class="btn">
                    Next page
                </a>
            </p>
        </div>
    </main>
    <?php require 'includes/footer.php'; ?>
</body>
</html>
