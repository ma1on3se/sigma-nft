<?php
// Include dos Dados e Header
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<div class="container p-5">
    <h2>Promoção</h2>
    <div class="row">
        <?php 
        // Cria uma variável contendo o comando SQL
        $sql = "SELECT * FROM products WHERE Active = 1 LIMIT 3";
        // Executa o comando SQL
        $exec = mysqli_query($conn, $sql);
        // Informar a quantidade de registros de dados
        $numProdutos = mysqli_num_rows($exec);
        // Percorre todos os dados extraídos do banco
        while($dados = mysqli_fetch_assoc($exec)){ 
        ?>
        <div class="card m-3" style="width: 18rem;">
            <img src="./content/<?php echo $dados['Image']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $dados['Code']?></h5>
                <p class="card-text"><?php echo $dados['CollectionID']?></p>
                <a href="produto-detalhe.php&tipo=promocao" class="btn btn-primary">Comprar</a>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</div>

<?php
// Include do Footer
include_once './includes/_footer.php';
?>