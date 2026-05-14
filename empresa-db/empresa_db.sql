CREATE DATABASE empresa_db;
USE empresa_db;
CREATE TABLE empleados(
	id int auto_increment primary key,
    nombre varchar(50),
    apellido varchar(50),
    correo varchar(50),
    telefono varchar(9),
    fecha_registro date
    );
    
INSERT INTO empleados(nombre, apellido, correo, telefono, fecha_registro) VALUES
('Clara', 'Fuentes', 'clarafuentes@gmail.com', '999888777', '2022-03-15'),
('Carlos', 'Mendoza', 'carlosmendoza@gmail.com', '987654321', '2023-01-15'),
('Ana', 'Torres', 'anatorres@gmail.com', '998877665', '2021-02-20'),
('Luis', 'Ramírez', 'luisramirez@gmail.com', '912345678', '2022-03-05'),
('María', 'García', 'mariagarcia@gmail.com', '987654222', '2024-04-18'),
('Pedro', 'López', 'pedrolopez@gmail.com', '999666333', '2025-05-22'),
('Sofía', 'Castillo', 'sofiacastillo@gmail.com', '999777555', '2024-06-30'),
('Jorge', 'Vargas', 'jorgevargas@gmail.com', '999888666', '2023-07-14'),
('Lucía', 'Herrera', 'luciaherrera@gmail.com', '999222555', '2024-08-09'),
('Miguel', 'Flores', 'miguelflores@gmail.com', '999333444', '2025-09-25'),
('Valentina', 'Cruz', 'valentinacruz@gmail.com', '999111666', '2025-10-11'),
('Rosa', 'Valentín', 'rosaquispe@gmail.com', '987987987', '2024-11-03'),
('Diego', 'Chávez', 'diegochavez@gmail.com', '999444111', '2025-11-18'),
('Camila', 'Paredes', 'camilaparedes@gmail.com', '999222000', '2025-12-07'),
('Andrés', 'Salinas', 'andressalinas@gmail.com', '999333666', '2025-12-29');

SELECT * FROM empleados;