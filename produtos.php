<?php
// Include do Head, Header e Dados
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container p-5">
    <div class="row">
        <?php 
            // Laço de repetição ilimitado pra exibir os produtos
            foreach ($produtos as $key => $value) {
        ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="./content/<?php echo $value['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['code']?></h5>
                <p class="card-text"><?php echo $value['collection']?></p>
                <a href="produto-detalhe.php?id=<?php echo $key?>" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php
            // Fim do laço  
            }
        ?>
    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>