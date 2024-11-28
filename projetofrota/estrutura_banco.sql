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
    ano INT,
    placa CHAR(7),
    motor DECIMAL(8,2),
    passageiros_max INT,
    condicao INT,
    FOREIGN KEY (marca_id) REFERENCES marca(id)
);

CREATE TABLE compra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data DATETIME NOT NULL,
    produto_id INT,
    quantidade INT NOT NULL,
    FOREIGN KEY (produto_id) REFERENCES produto(id)
);
