<?php

    declare(strict_types=1);
    require_once '../config/bancodedados.php';

    function novaMarca(string $nome): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO marca (nome) VALUES (?)");
        return $stmt->execute([$nome]);
    }

    function excluirMarca(int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM marca WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function todasMarcas(): array
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM marca");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retornaMarcaPorId(int $id): ?array
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM marca WHERE id = ?");
        $stmt->execute([$id]);
        $marca = $stmt->fetch(PDO::FETCH_ASSOC);
        return $marca ? $marca : null;
    }

    function editarMarca(string $nome, int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE marca SET nome = ? WHERE id = ?");
        return $stmt->execute([$nome, $id]);
    }

?>