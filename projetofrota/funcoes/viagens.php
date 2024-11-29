<?php

    declare(strict_types=1);
    require_once('../config/bancodedados.php');

    function novaViagem(string $data_viagem, int $veiculo_id, int $motorista_id, int $rota_id, string $saida, string $chegada, string $tempo_viagem)
    {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO viagem (data_viagem, veiculo_id, motorista_id, rota_id, saida, chegada, tempo_viagem) VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$data_viagem, $veiculo_id, $motorista_id, $rota_id, $saida, $chegada, $tempo_viagem]);
    }

    function excluirViagem(int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM viagem WHERE id = ?");
        return $stmt->execute([$id]);
    }

    function todasViagens(): array
    {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM viagem");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function retornaViagemPorId(int $id): ?array
    {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM viagem WHERE id = ?");
        $stmt->execute([$id]);
        $viagem = $stmt->fetch(PDO::FETCH_ASSOC);
        return $viagem ? $viagem : null;
    }

    function editarViagem(string $data_viagem, int $veiculo_id, int $motorista_id, int $rota_id, string $saida, string $chegada, string $tempo_viagem, int $id): bool
    {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE viagem SET data_viagem = ?, veiculo_id = ?, motorista_id = ?, rota_id = ?, saida = ?, chegada = ?, tempo_viagem = ? WHERE id = ?");
        return $stmt->execute([$data_viagem, $veiculo_id, $motorista_id, $rota_id, $saida, $chegada, $tempo_viagem, $id]);
    }

?>