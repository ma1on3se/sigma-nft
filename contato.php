<?php
// Include dos Dados e Header
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<div class="container p-5">
    <div class="col">
        <h1>Cadastro</h1>
        <br>
        <form action="./contato.php" method="post">
            <label for="txtNome">Nome Completo</label>
            <input type="text" name="txtNome" id="txtNome">
            <br>
            <label for="email">E-Mail</label>
            <input type="email" name="email" id="email">
            <br>
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="telefone" required placeholder="(xx) xxxxx-xxxx">
            <br>
            <label for="txtMensagem">Mensagem</label>
            <textarea name="txtMensagem" id="txtMensagem" cols="30" rows="1"></textarea>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
    <div class="col">
        <h1>Dados Cadastrados</h1>
        <?php
        if (isset($_POST['txtNome'])) {   
            $nome = $_POST['txtNome'];
            echo $nome;
        } 
        echo '<br>';
        if (isset($_POST['email'])) {   
            $emailCadastro = $_POST['email'];
            echo $emailCadastro;
        } 
        echo '<br>';
        if (isset($_POST['telefone'])) {   
            $telefoneCadastro = $_POST['telefone'];
            echo $telefoneCadastro;
        }; 
        echo '<br>';
        if (isset($_POST['txtMensagem'])) {   
            $mensagem = $_POST['txtMensagem'];
            echo $mensagem;
        };
        ?>
    </div>
</div>


<?php
// include do footer
include_once './includes/_footer.php';
?>