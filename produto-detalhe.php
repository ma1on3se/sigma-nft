<?php
// Include dos Dados e Header
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
// Pegar os dados pela URL
$id = $_GET['id'];
?>

<div class="container p-5">
    <div class="row">
        <img src="./content/<?php echo $produtos[$id]['image']?>" alt="">
        <div class="col">
            <p><?php echo $produtos[$id]['collection']?></p>
            <h1><?php echo $produtos[$id]['code']?></h1>
            <h3><?php echo $produtos[$id]['price']?></h3>
        </div>
    </div>
</div>

<?php
// Include do Footer
include_once './includes/_footer.php';
?>