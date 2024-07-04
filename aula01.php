<?php
    //Variáveis em PHP

    $anoAtual = 2024;

    $anoNascimento = 2005;

    $idade = ($anoAtual - $anoNascimento); // Reconhece sem identificar tipo

    $alura = 1.70; // Sempre ponto

    $pesoPessoa = 70.3;

    $nomePessoa = "Antoniely Santos"; // Caractéres entre áspas

    echo "<h1 style= 'color:red;'>Minha primeira aula de PHP!</h1>"; // Exibir na tela, aspas simples ou duplas para diferenciar

    echo "<p>" . $nomePessoa . " nasceu no ano de " . $anoNascimento . // Concatenação
    ". Se ela já fez aniversário neste ano de " . $anoAtual . " ,ela possui " . ($anoAtual - $anoNascimento) . " anos de idade. </p>";
    ;

?>
