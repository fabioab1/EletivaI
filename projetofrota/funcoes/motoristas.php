<?php

    declare(strict_types=1);
    require_once '../config/bancodedados.php';

    function novoMotorista(string $nome, string $email, string $numero_cel, float $horas_serv): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO motorista (nome, email, numero_cel, horas_serv) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nome, $email, $numero_cel, $horas_serv]);
    }

    function excluirMotorista(int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM motorista WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function todosMotoristas(): array
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM motorista");
        return $stmt->fetchAll((PDO::FETCH_ASSOC));
    }

    function retornaMotoristaPorId(int $id): ?array
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM motorista WHERE id = ?");
        $stmt->execute([$id]);
        $motorista = $stmt->fetch(PDO::FETCH_ASSOC);
        return $motorista ? $motorista : null;
    }

    function editarMotorista(string $nome, string $email, string $numero_cel, float $horas_serv, int $id)
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE motorista SET nome = ?, email = ?, numero_cel = ?, horas_serv = ? WHERE id = ?");
        return $stmt->execute([$nome, $email, $numero_cel, $horas_serv, $id]);
    }

?>