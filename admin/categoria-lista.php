<?php 
include_once "../includes/_banco.php";



$sql = "SELECT * from collection";

$resultado = mysqli_query($conn, $sql);

$total = mysqli_num_rows($resultado);


?>
<main>
<h2 style="text-align: center"> Administração de categorias</h2>

<a href="categoria-salvar.php">Inserir</a>
<hr>
<table border= "1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Ações</th>
</tr>

<?php

if ($resultado){

 while ($dado = mysqli_fetch_array($resultado)) {
  
?>
  
<tr>
<td><?php echo $dado ["CollectionID"] ?></td>
<td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CollectionID'];?>"><?php echo $dado['Name'];?></a></td>
<td><a href="categoria-processa.php?acao=excluir&id=<?php echo $dado['CollectionID'];?>">Excluir</a></td>
</tr>

<?php
 }

} else {
?>
<tr>
<td colspan="3">Resultados não encontrados</td>
</tr>
<?php
}
?>
<tr>
<td colspan="3">Total de registros: <?php echo $total;?></td>
</tr>

</table>

</main>
<?php