<?php
// Include dos Dados e Header
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container p-5">
    <h2>Promoção</h2>
    <div class="row">
        <?php 
            // Laço de repetição limitado pra exibir os produtos
            for ($i=0; $i < 3 ; $i++) { 
        ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="./content/<?php echo $produtos[$i]['image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $produtos[$i]['code']?></h5>
                <p class="card-text"><?php echo $produtos[$i]['collection']?></p>
                <a href="produto-detalhe.php?id=<?php echo $i?>&tipo=promocao" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php
            // Fim do laço  
            }
        ?>
    </div>
</div>

<?php
// Include do Footer
include_once './includes/_footer.php';
?>