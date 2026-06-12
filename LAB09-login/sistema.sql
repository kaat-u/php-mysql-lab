create database sistema;
use sistema;
create table usuarios(
  id int auto_increment primary key,
  usuario varchar(50) not null unique,
  password varchar(255) not null);