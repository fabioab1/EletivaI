CREATE TABLE usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nivel ENUM('adm', 'colab') NOT NULL
);

CREATE TABLE marca (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE veiculo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca_id INT,
    modelo VARCHAR(100) NOT NULL,
    ano INT NOT NULL,
    placa CHAR(7) UNIQUE NOT NULL,
    motor DECIMAL(8,1) NOT NULL,
    passageiros_max INT NOT NULL,
    condicao INT NOT NULL,
    FOREIGN KEY (marca_id) REFERENCES marca(id)
);

CREATE TABLE motorista (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(70) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    numero_cel CHAR(13) UNIQUE NOT NULL,
    horas_serv DECIMAL(8,1) NOT NULL
);

CREATE TABLE rota (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    origem VARCHAR(50) NOT NULL,
    destino VARCHAR(50) NOT NULL,
    distancia DECIMAL(8,1) NOT NULL
);

CREATE TABLE viagem (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_viagem DATE NOT NULL,
    veiculo_id INT,
    motorista_id INT,
    rota_id INT,
    saida TIME NOT NULL,
    chegada TIME NOT NULL,
    tempo_viagem CHAR(6),
    FOREIGN KEY (veiculo_id) REFERENCES veiculo(id),
    FOREIGN KEY (motorista_id) REFERENCES motorista(id),
    FOREIGN KEY (rota_id) REFERENCES rota(id)
);