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

CREATE TABLE compra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data DATETIME NOT NULL,
    produto_id INT,
    quantidade INT NOT NULL,
    FOREIGN KEY (produto_id) REFERENCES produto(id)
);
