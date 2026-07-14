CREATE DATABASE sistema_tickets;
USE sistema_tickets;
CREATE TABLE usuarios(
  id int auto_increment primary key,
  nombre varchar(100),
  usuario varchar(50) unique,
  password varchar(255),
  rol ENUM('cliente','soporte'));
  
INSERT INTO usuarios(nombre,usuario,password,rol)
VALUES
('Juan Perez','juan',MD5('123'),'cliente'),
('Maria Lopez','maria',MD5('123'),'cliente'),
('Carlos Soporte','carlos',MD5('123'),'soporte');  

CREATE TABLE tickets(
id INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(150),
descripcion TEXT,
estado ENUM('Pendiente','En Proceso','Resuelto') DEFAULT 'Pendiente',
fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
id_cliente INT,
id_soporte INT NULL,
respuesta TEXT,
FOREIGN KEY(id_cliente) REFERENCES usuarios(id),
FOREIGN KEY(id_soporte) REFERENCES usuarios(id)
);


  