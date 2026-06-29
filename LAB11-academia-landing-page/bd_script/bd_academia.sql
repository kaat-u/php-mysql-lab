/*drop database bd_academia;*/
create database bd_academia;
use bd_academia;
create table cursos(
   id int auto_increment primary key,
   titulo varchar(100),
   descripcion text,
   horario VARCHAR(100),
   duracion varchar(100),
   modalidad varchar(100),
   precio varchar(150),
   estado bit);
   
INSERT INTO cursos VALUES(
1,
'Python + Inteligencia Artificial desde Cero hasta Avanzado',
'Aprende programación con Python, automatización, análisis de datos e Inteligencia Artificial creando proyectos reales.',
'Lunes y Viernes 8:00 PM - 10:00 PM',
'24 clases',
'Online en vivo',
'Precio promocional',
 1
);

INSERT INTO cursos VALUES(
2,
'PHP + Inteligencia Artificial desde Cero hasta Avanzado',
'Aprende programación con PHP, automatización, análisis de datos e Inteligencia Artificial creando proyectos reales.',
'Lunes y Viernes 8:00 PM - 10:00 PM',
'24 clases',
'Online en vivo',
'Precio promocional',
 0
);

create table interesados(
  id int auto_increment primary key,
  nombre varchar(100),
  correo varchar(150),
  telefono varchar(20),
  fecha timestamp default current_timestamp);
  
/*select * from cursos where estado=1;*/
  