<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container">
    <div class="row">
        <?php
        foreach ($produtos as $key => $value) {
        ?>
        <div class="card" style="width: 18rem;">
            <img src="./content/<?php echo $value['image'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['collection'];?></h5>
                <p class="card-text"><?php echo $value['id'];?></p>
                <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
        </div>
        <?php }?>
    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>