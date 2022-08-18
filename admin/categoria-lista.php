<?php
// Incluí a conexão com o banco de dados
include_once '../includes/_banco.php';
// Incluí o Head e Header da Página Admin
include_once './_header.php';
// Incluí o Menu do Painel Admin
include_once './_menu.php';

// Consulta os dados
$sql = "SELECT * FROM collection";
// Conta quantos registros existem
$resultado = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($resultado);

?>
<main>
    <h2>Administração de Coleções</h2>
    <a href="categoria-salvar.php">Inserir</a>
    <hr>
    <table border="1">
        <tr>
            <th>collectionID</th>
            <th>Name</th>
            <th>Active</th>
        </tr>
        <?php
        // Verifica as informações com base da database
        if($resultado){
            // Converte os resultado em linha de matriz
            while ($dado = mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $dado['collectionID'];?></td>
            <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['collectionID'];?>"><?php echo $dado['Name'];?></a></td>
            <td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['collectionID'];?>">Excluir</a></td>
        </tr>
        <?php
            }
        }else{
        ?>
        <tr>
            <td colspan="3">Resultados não encontrado</td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="3">Total de Registros: <?php echo $total;?></td>
        </tr>
    </table>
</main>

<?php
// Incluí o Footer do Painel Admin
include_once './_footer.php';
?>