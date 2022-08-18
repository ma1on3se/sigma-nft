<?php
// Incluí a conexão com o banco de dados
include_once '../includes/_banco.php';

if (isset($_GET['id']) || !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM collection WHERE CollectionID = ".$id;
    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
} else{
    $id = '';
    $dados['Name'] = '';
    $dados['Active'] = '';
}

include_once '_menu.php';
?>

<main>
    <h2>Administração das Coleções</h2>
    <a href="categoria-lista.php">Listagem</a>
    <hr>
    <form action="categoria-processa.php" method="post">
        <input type="hidden" value="salvar" name="acao">
        <input type="text" name="id" value="<?php echo $id;?>"><br>  
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="<?php echo['Name'];?>"><br>
        <label for="active">Ativo:</label>
        <input type="number" id="active" name="active" value="<?php echo['Active'];?>"><br>
        <input type="submit" value="Enviar">
    </form>
</main>

<?php
// Incluí o Footer do Painel Admin
include_once './_footer.php';
?>