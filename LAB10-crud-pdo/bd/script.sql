CREATE DATABASE crud_pdo;
USE crud_pdo;
CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
/* CRUD (Crear, Leer, Actualizar y Eliminar)  */
/* CREAR */
insert into usuarios (nombre,correo,telefono)
values
('Armando','aruiz@isil.pe','234-6678'),
('Maria','maria@isil.pe','434-6678'),
('Camila','camila@isil.pe','734-6678');
/*Leer*/
select * from usuarios where id=1;
/*Actualizar*/
update usuarios set correo="armando@isil.pe" where id=1;
/*Eliminar*/
delete from usuarios where id=3