<?php


include_once './database/db.class.php';

$conn = new db("aluno");

$dados = [
    'nome' => "Eloisa dos Santos",
    'telefone' => "49 9999999",
    'email' => "eloisadossantos3005@gmail.com",
];

$conn->store($dados);
echo "Inserido com sucesso!";