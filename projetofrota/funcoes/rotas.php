<?php

    declare(strict_types=1);
    require_once '../config/bancodedados.php';

    function novaRota(string $nome, string $origem, string $destino, float $distancia) # Não fiz um CRUD para cidades porque eu levei em consideração que a origem pode ser qualquer local, hospital, cidade, escola... Talvez um sistema para puxar as informações...
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO rota (nome, origem, destino, distancia) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nome, $origem, $destino, $distancia]);
    }

    function excluirRota(int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM rota WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function todasRotas(): array
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM rota");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retornaRotaPorId(int $id): ?array
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM rota WHERE id = ?");
        $stmt->execute([$id]);
        $rota = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rota ? $rota : null;
    }

    function editarRota(string $nome, string $origem, string $destino, float $distancia, int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE rota SET nome = ?, origem = ?, destino = ?, distancia = ? WHERE id = ?");
        return $stmt->execute([$nome, $origem, $destino, $distancia, $id]);
    }

?>