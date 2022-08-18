<?php
include_once '../includes/banco.php';

$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao) {
    case 'excluir':
        $sql = "DELETE FROM collection WHERE CollectionID = ".$id;
        mysqli_query($conexao,$sql);
        header('location: ./categoria-lista.php');
        break;
    
    case 'salvar':
        $nome = $_POST['name'];
        $ativo = $_POST['active'];

        if (!isset($_POST['id']) || empty($_POST['id'])) {
            $sql = "INSERT INTO `collection`(`Name`, `Active`) VALUES ('".$name."','".$active."')";
        } else{
            $sql = "UPDATE `collection` SET `Name`='".$name."', `Active`='".$active."' WHERE `CollectionID`='".$id."' ";
        }
        mysqli_query($conexao, $sql);

        heaedr('location: ./categoria-lista.php');
        break;
}
?>