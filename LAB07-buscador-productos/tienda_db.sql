create database tienda_db;
use tienda_db;
create table productos (
  id int auto_increment primary key,
  nombre varchar(100),
  precio decimal(10,2)
);
INSERT INTO productos(nombre, precio) VALUES 
('Laptop Lenovo', 2500), 
('Mouse Logitech', 120), 
('Teclado Redragon', 180), 
('Monitor Samsung', 900), 
('Audifonos Sony', 300), 
('Silla Gamer', 850); 
