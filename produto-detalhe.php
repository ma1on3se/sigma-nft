<?php
// Include dos Dados e Header
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
// Pegar os dados pela URL
$id = $_GET['id'];
?>

<?php 
    // Cria uma variável contendo o comando SQL
    $sql = "SELECT * FROM products WHERE Active = 1 LIMIT 1";
    // Executa o comando SQL
    $exec = mysqli_query($conn, $sql);
    // Informar a quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);
    // Percorre todos os dados extraídos do banco
    while($dados = mysqli_fetch_assoc($exec)){ 
?>
<div class="container p-5">
    <div class="row">
        <img src="./content/<?php echo $dados['Image']?>" alt="">
        <div class="col">
            <p><?php echo $dados['CollectionID']?></p>
            <h1><?php echo $dados['Code']?></h1>
            <h3><?php echo $dados['Price']?></h3>
        </div>
    </div>
</div>
<?php
    }
?>

<?php
// Include do Footer
include_once './includes/_footer.php';
?>