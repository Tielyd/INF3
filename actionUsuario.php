<?php
    //Bloco de declaração de Variáveis
    $nomeUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = ""; // Vazio para todos " ";
    $erroPreenchimento = false;

    // Verifica se o método de envio é post
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Utiliza a função empty() para verificar se está vazio
        if(empty($_POST["nomeUsuario"])){
            echo "<p>O campo NOME é obrigatório!</p>";
            $erroPreenchimento = true;
        } 
        else{
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);
        }
    }

        if(empty($_POST["emailUsuario"])){
            echo "<p>O campo EMAIL é obrigatório!</p>";
            $erroPreenchimento = true;
        } 
        else{
            $emailUsuario = filtrar_entrada($_POST["emailUsuario"]);
        }

        if(empty($_POST["senhaUsuario"])){
            echo "<p>O campo SENHA é obrigatório!</p>";
            $erroPreenchimento = true;
        } 
        else{
            $senhaUsuario = filtrar_entrada($_POST["senhaUsuario"]);
        }

        if(empty($_POST["confirmarSenhaUsuario"])){
            echo "<p>O campo CONFIRMAR SENHA é obrigatório!</p>";
            $erroPreenchimento = true;
        } 
        else{
            $confirmarSenhaUsuario = filtrar_entrada($_POST["confirmarSenhaUsuario"]);
        }

    if(!$erroPreenchimento){
    //Cria uma tabela para exibir os valores armazenados nas variáveis
    echo "
        <h3>Usuário cadastrado com sucesso!</h3>
        <table border='1'>
            <tr>
                <th>Nome:</th> 
                <td>$nomeUsuario</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>$emailUsuario</td>
            </tr>

            <tr>
                <th>Senha:</th>
                <td>$senhaUsuario</td>
            </tr>
            <tr>
                <th>Confirmar Senha:</th>
                <td>$confirmarSenhaUsuario</td>
            </tr>

        </table>";
    }

    function filtrar_entrada($dado){

        $dado = trim($dado);// TRIM - remove caracteres suspeitos
        $dado = stripslashes($dado);// Remove barras invertidas
        $dado = htmlspecialchars($dado);// Converte caracteres especiais em entidades HTML

        return($dado);
    }



?>