<?php

    $host = "localhost";
    $db = "banco_php";
    $usuario = "root";
    $senha = "";
    $port = "3306"; // Quem usa 3306 não precisa por esta variável, apenas se for outro valor.

    try
    {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db", $usuario, $senha);
        if($pdo)
        {
            echo "Conexão realizada com sucesso!";
        }
        else
        {
            echo "Erro ao conectar o banco de dados!";
        }
    }
    catch (Exception $e)
    {
        echo 'Erro! '.$e->getMessage();
    }

?>