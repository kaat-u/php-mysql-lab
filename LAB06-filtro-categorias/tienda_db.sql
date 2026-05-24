CREATE DATABASE tienda_php;
USE tienda_php;

CREATE TABLE categorias(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100)
);

CREATE TABLE productos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10,2),
    stock INT,
    categoria_id INT,
    FOREIGN KEY(categoria_id) REFERENCES categorias(id)
);

INSERT INTO categorias(nombre) VALUES
('Laptops'),
('Celulares'),
('Accesorios');

INSERT INTO productos(nombre,descripcion,precio,stock,categoria_id) VALUES
('Laptop HP','Laptop Core i7 16GB RAM',3500,10,1),
('Laptop Lenovo','Laptop Ryzen 7 SSD 1TB',4200,5,1),
('Samsung S24','Celular gama alta',2800,15,2),
('iPhone 15','Celular Apple 256GB',5200,8,2),
('Mouse Gamer','Mouse RGB Gamer',120,30,3),
('Teclado Mecánico','Teclado RGB Switch Blue',250,20,3);



