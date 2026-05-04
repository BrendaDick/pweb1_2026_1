<?php

    $pessoas = [
        ["nome"=>"Brenda", "idade" => 18],
        ["nome"=>"Carol", "idade" => 19],
        ["nome"=>"Elo", "idade" => 20],
    ];

    foreach ($pessoas as $key => $item) {
        $nome = $item["nome"];
        $idade = $item["idade"];
        echo"Indice: $key Nome: $nome Idade: $idade <br>";
    }

?>