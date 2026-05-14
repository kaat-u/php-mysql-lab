create database elecciones_peru;
use elecciones_peru;
create table candidatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    partido VARCHAR(100) NOT NULL,
    votos INT DEFAULT 0,
    logo VARCHAR(255) NOT NULL);
INSERT INTO candidatos (nombre, partido, votos, logo) VALUES 
('Pedro Pérez', 'Partido A', 450000, 'logos/pedro.png'), 
('María Gómez', 'Partido B', 380000, 'logos/maria.png'), 
('Juan López', 'Partido C', 290000, 'logos/juan.png'); 


USE elecciones_peru;
select * from candidatos;
update candidatos set nombre='Keiko Sofia',partido='Fuerza Popular',
votos='2799774', logo='logos/k.jpg' where id=1; 
update candidatos set nombre='Roberto Sanchez',partido='Juntos por el Perú',
votos='1969535', logo='logos/jp.jpg' where id=2;
update candidatos set nombre='Rafael López',partido='Renovación Popular',
votos='1942478', logo='logos/rp.jpg' where id=3;
update candidatos set nombre='Jorge Nieto',partido='Partido del Buen Gobierno',
votos='1797396', logo='logos/pg.jpg' where id=4;
update candidatos set nombre='Ricardo Belmont',partido='Obras',
votos='1661077', logo='logos/obras.jpg' where id=5;
update candidatos set nombre='Carlos Alvares',partido='Partido País para Todos',
votos='1293161', logo='logos/ppt.jpg' where id=6;
update candidatos set nombre='Pablo López',partido='Ahora Nación',
votos='1293161', logo='logos/an.jpg' where id=7;
