<?php

include_once '../includes/_banco.php';

//captura a acao do usuario
$acao = $_REQUEST['acao'];
$id = $_REQUEST['id'];

switch ($acao) {
    //acao de excluir dados
    case 'excluir':
        //monta a SQL que exclui os registros

        $sql="DELETE FROM collection Where CollectionID =".$id;

        mysqli_query($conn,$sql);

        header('location: ./categoria-lista.php');

        break;
    
    case 'salvar':
        

        $nome= $_POST['name'];

        if (!isset($_POST['id'])|| empty($_POST['id'])) {

            $sql = "INSERT INTO collection (Name) VALUES('".$name."')";

        }else  {
            $sql= "UPDATE collection SET Name = '".$name." 'WHERE  CollectionID =' ".$id."' ";
        }

        mysqli_query($conn, $sql);


        header('location: ./categoria-lista.php');
        break;
       
}

?>