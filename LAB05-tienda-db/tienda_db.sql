CREATE DATABASE tienda_db;
USE tienda_db;
/* TABLA MAESTRA (Se guardará los datos de los clientes que realizan compras */
CREATE TABLE venta(
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(100),
    fecha DATE,
    total DECIMAL(10,2)
    );

/* TABLA DETALLE (Se guardará los detalles de las compras que realizó el cliente: PRODUCTOS) */
CREATE TABLE detalle_venta(
    id INT AUTO_INCREMENT PRIMARY KEY,
    venta_id INT,
    producto VARCHAR(100),
    cantidad INT,
    precio DECIMAL(10,2),
    subtotal DECIMAL(10,2),
    FOREIGN KEY (venta_id) REFERENCES venta(id));
/*========================
  INSERTAR VENTAS
=========================*/
INSERT INTO venta(cliente, fecha, total) VALUES
('Juan Perez','2026-05-01',150.00),
('Maria Lopez','2026-05-01',320.00),
('Carlos Ramos','2026-05-02',210.00),
('Ana Torres','2026-05-02',480.00),
('Luis Mendoza','2026-05-03',125.00),
('Sofia Herrera','2026-05-03',390.00),
('Pedro Castillo','2026-05-04',275.00),
('Lucia Fernandez','2026-05-04',180.00),
('Miguel Diaz','2026-05-05',520.00),
('Valeria Gomez','2026-05-05',340.00);
/*========================
  DETALLE DE VENTAS
=========================*/

/* Venta 1 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(1,'Teclado Gamer',1,80.00,80.00),
(1,'Mouse Logitech',2,35.00,70.00);

/* Venta 2 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(2,'Monitor Samsung 24"',1,320.00,320.00);

/* Venta 3 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(3,'Disco SSD 500GB',1,120.00,120.00),
(3,'Memoria RAM 8GB',1,90.00,90.00);

/* Venta 4 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(4,'Laptop Lenovo',1,480.00,480.00);

/* Venta 5 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(5,'Audifonos Bluetooth',1,65.00,65.00),
(5,'Mouse Pad RGB',2,30.00,60.00);

/* Venta 6 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(6,'Impresora Epson',1,250.00,250.00),
(6,'Tinta Epson',2,70.00,140.00);

/* Venta 7 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(7,'Tablet Samsung',1,275.00,275.00);

/* Venta 8 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(8,'Parlante JBL',2,90.00,180.00);

/* Venta 9 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(9,'PC Gamer',1,520.00,520.00);

/* Venta 10 */
INSERT INTO detalle_venta(venta_id, producto, cantidad, precio, subtotal) VALUES
(10,'Silla Gamer',1,220.00,220.00),
(10,'Escritorio Oficina',1,120.00,120.00);
