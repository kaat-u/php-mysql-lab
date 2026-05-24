CREATE DATABASE tambo_db;
USE tambo_db;
CREATE TABLE pedido(
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100),
    fecha DATE,
    total DECIMAL(10,2)
);
CREATE TABLE detalle_pedido(
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT,
    producto VARCHAR(100),
    cantidad INT,
    precio DECIMAL(10,2),
    subtotal DECIMAL(10,2),
    FOREIGN KEY (pedido_id) REFERENCES pedido(id)
);

/*========================
  INSERTAR PEDIDOS
=========================*/
INSERT INTO pedido(cliente, fecha, total) VALUES
('Clara Fuentes',  '2026-01-05', 13.40),
('Carlos Mendoza', '2026-01-12', 17.00),
('Paula Torres',   '2026-01-20',  9.20),
('Luis Ramirez',   '2026-02-03', 21.90),
('María García',   '2026-02-14', 14.00),
('Sofía Flores',   '2026-02-28', 10.80),
('Miguel Castillo','2026-03-07', 24.80),
('Diego Chávez',   '2026-03-15', 16.00),
('Andrés Salinas', '2026-03-22', 14.30),
('Rosa Valentín',  '2026-04-01', 20.80),
('Jorge Vargas',   '2026-04-10', 14.60),
('Pedro López',    '2026-04-18', 18.40),
('Camila Paredes', '2026-05-02', 32.20),
('Juan Cruz',      '2026-05-10', 11.10),
('Julián Gomez',   '2026-05-18', 19.90);

/*========================
  DETALLE DE PEDIDOS
=========================*/

/* Pedido 1 - Clara Fuentes */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(1,'Inca Kola 600ml',1,3.80,3.80),
(1,'Empanada de Pollo',2,3.40,6.80),
(1,'Chicles Bubbaloo',1,1.00,1.00),
(1,'Chupete Globo',2,0.90,1.80);

/* Pedido 2 - Carlos Mendoza */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(2,'Pizza Personal Pepperoni',1,4.40,4.40),
(2,'Coca Cola 600ml',1,3.80,3.80),
(2,'Helado Frio Rico',1,5.80,5.80),
(2,'Chicles Trident',1,2.10,2.10),
(2,'Chupete Globo',1,0.90,0.90);

/* Pedido 3 - Paula Torres */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(3,'Jugo Frugos Naranja 235ml',1,2.10,2.10),
(3,'Galletas Casino',2,1.50,3.00),
(3,'Chicles Bubbaloo',1,1.00,1.00),
(3,'Galletas Glacitas',1,2.20,2.20),
(3,'Chupete Globo',1,0.90,0.90);

/* Pedido 4 - Luis Ramirez */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(4,'Pizza Personal Americana',2,4.40,8.80),
(4,'Coca Cola 1.5L',1,7.60,7.60),
(4,'Galletas Morochas',1,2.20,2.20),
(4,'Caramelos Halls',1,2.40,2.40),
(4,'Chupete Globo',1,0.90,0.90);

/* Pedido 5 - María García */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(5,'Empanada de Carne',2,3.40,6.80),
(5,'Jugo Frugos Durazno 235ml',1,2.10,2.10),
(5,'Chocolate Sublime',1,2.00,2.00),
(5,'Galletas Ritz',1,2.10,2.10),
(5,'Chicles Bubbaloo',1,1.00,1.00);

/* Pedido 6 - Sofía Flores */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(6,'Helado Frio Rico',1,5.80,5.80),
(6,'Galleta Oreo',1,1.80,1.80),
(6,'Chicles Bubbaloo',1,1.00,1.00),
(6,'Agua San Luis 625ml',1,2.20,2.20);

/* Pedido 7 - Miguel Castillo */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(7,'Pizza Personal Hawaiana',2,4.40,8.80),
(7,'Coca Cola 600ml',2,3.80,7.60),
(7,'Chocolate Vizzio',2,3.00,6.00),
(7,'Mentos',1,2.40,2.40);

/* Pedido 8 - Diego Chávez */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(8,'Empanada de Pollo',2,3.40,6.80),
(8,'Jugo Frugos Naranja 235ml',1,2.10,2.10),
(8,'Galletas Casino',2,1.50,3.00),
(8,'Doritos',1,4.10,4.10);

/* Pedido 9 - Andrés Salinas */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(9,'Papas Lays',1,4.40,4.40),
(9,'Coca Cola 600ml',1,3.80,3.80),
(9,'Chicles Bubbaloo',1,1.00,1.00),
(9,'Galletas Pícaras',1,1.80,1.80),
(9,'Chupete Globo',1,0.90,0.90),
(9,'Mentos',1,2.40,2.40);

/* Pedido 10 - Rosa Valentín */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(10,'Empanada de Carne',2,3.40,6.80),
(10,'Pizza Personal Americana',1,4.40,4.40),
(10,'Agua San Luis 625ml',2,2.20,4.40),
(10,'Gomitas Mogul',1,5.20,5.20);

/* Pedido 11 - Jorge Vargas */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(11,'Coca Cola 600ml',1,3.80,3.80),
(11,'Helado Frio Rico',1,5.80,5.80),
(11,'Galleta Oreo',1,1.80,1.80),
(11,'Chocolate Lentejas',1,3.20,3.20);

/* Pedido 12 - Pedro López */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(12,'Jugo Frugos Durazno 235ml',1,2.10,2.10),
(12,'Empanada Mixta',1,3.40,3.40),
(12,'Chifles',1,9.50,9.50),
(12,'Chicles Bubbaloo',1,1.00,1.00),
(12,'Caramelos Halls',1,2.40,2.40);

/* Pedido 13 - Camila Paredes */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(13,'Pizza Familiar Americana',1,12.90,12.90),
(13,'Coca Cola 1.5L',1,7.60,7.60),
(13,'Helado Frio Rico',1,5.80,5.80),
(13,'Gomitas Fini',1,5.90,5.90);

/* Pedido 14 - Juan Cruz */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(14,'Galletas Casino',2,1.50,3.00),
(14,'Chicles Bubbaloo',1,1.00,1.00),
(14,'Chocolate Sublime',1,2.00,2.00),
(14,'Agua San Luis 625ml',1,2.20,2.20),
(14,'Chupete Globo',1,0.90,0.90),
(14,'Galletas Choko Soda',1,2.00,2.00);

/* Pedido 15 - Julián Gomez */
INSERT INTO detalle_pedido(pedido_id, producto, cantidad, precio, subtotal) VALUES
(15,'Empanada de Pollo',2,3.40,6.80),
(15,'Jugo Frugos Naranja 235ml',1,2.10,2.10),
(15,'Coca Cola 600ml',1,3.80,3.80),
(15,'Chocolate Snickers',1,6.20,6.20),
(15,'Chicles Bubbaloo',1,1.00,1.00);