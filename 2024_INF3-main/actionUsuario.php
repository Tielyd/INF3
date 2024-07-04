<?php include("header.php"); ?>  

<?php
    //Bloco para Declaração de Variáveis
    $fotoUsuario = $nomeUsuario = $cidadeUsuario = $telefoneUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = "";
    $erroPreenchimento = false; // Inicia "false".

    //Verifica o método de envio do FORM
    if($_SERVER["REQUEST_METHOD"] == "POST"){ // Método "POST" não exibe dados pessoais na url/ "GET" exibe.

        //Verifica se o campo do form está vazio utilizando a função empty
        if(empty($_POST["nomeUsuario"])){
            echo "<div class= 'alert alert-warning text-center'> O campo <strong>NOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true;  //É exibido quando for "true"
        } //4 tipos de alerta, warning:amarelo / reforça a segurança
        else{
            $nomeUsusario = $_POST["nomeUsuario"];
        }

        if(empty($_POST["cidadeUsuario"])){
            echo "<div class= 'alert alert-warning text-center'> O campo <strong>CIDADE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } 
        else{
            $nomeUsusario = $_POST["cidadeUsuario"];
        }

        if(empty($_POST["telefoneUsuario"])){
            echo "<div class= 'alert alert-warning text-center'> O campo <strong>TELEFONE</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } 
        else{
            $nomeUsusario = $_POST["telefoneUsuario"];
        }

        if(empty($_POST["emailUsuario"])){
            echo "<div class= 'alert alert-warning text-center'> O campo <strong>EMAIL</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } 
        else{
            $nomeUsusario = $_POST["emailUsuario"];
        }

        if(empty($_POST["senhaUsuario"])){
            echo "<div class= 'alert alert-warning text-center'> O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } 
        else{
            $nomeUsusario = $_POST["senhaUsuario"];
        }

        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<div class= 'alert alert-warning text-center'> O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } 
        else{
            $nomeUsusario = $_POST["confirmarSenhaUsuario"];
        }

    }
?>

<?php include("footer.php"); ?>