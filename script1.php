<?php
    require_once 'config.php'; 
    require_once 'database.php';
    
$apikeys = [
    'teste',
];

if (!isset($_SERVER['HTTP_X_API_KEY']) || !in_array($_SERVER['HTTP_X_API_KEY'], $apikeys)) {
    echo 'Você não está autorizado';
    die();
}

$db = open_database(); 

if ($db) {
    echo '>Banco de Dados Conectado!<';
} else {
    echo 'ERRO: Não foi possível Conectar!';
}

echo $_POST['input1'] . $_POST['input2'];
$dado1 = $_POST['input1'];
$dado2 = $_POST['input2'];

$sql = 'INSERT INTO dados (ftable, stable) VALUES (' .  '\'' . $dado1 . '\'' . ',' . '\'' .  $dado2 . '\'' . ')';

if (mysqli_query($db, $sql)) {
    echo "Armazenado com sucesso!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);
