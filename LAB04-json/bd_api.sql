CREATE DATABASE api_demo;
USE api_demo;
CREATE TABLE usuarios (
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    creado_en TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

/* USE api_demo; */
INSERT INTO usuarios (nombre,email) VALUES
('JUAN PEREZ','jperez@gmail.com'),
('PAOLA GOMEZ','pgomez@gmail.com'),
('OSWALDO CASTRO','ocastro@gmail.com');

/* USE api_demo;
SELECT * FROM usuarios; */