<?php 
include_once "../includes/_banco.php";


if ( isset ($_GET['id']) || !empty ($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM collection WHERE CollectionID = ".$id;
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
} else {
    $id = '';
    $dados['Name'] = '';
}

?>

<main>
    <h2 style="text-align: center;">Adminstração das Categorias</h2>
    <a href="categoria-lista.php">Listagem</a>
    <hr>
    <form style="text-align: center;" action="categoria-processa.php" method="post" ectype="multipart/form-data">
        <input type= "hidden" value="salvar" name="acao" id="acao">
        <input type="text" name="id" id="<?php echo $id;?>"><br>
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $dados['Name'];?>"><br>
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>

<?php

?>