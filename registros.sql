create database usuarios;
use usuarios;
show databases;
create table registro(
nombre varchar(50),
apellido varchar(50),
correo_elec varchar(50) not null unique,
contraseña varchar(50) not null,
confirmar_contra varchar(50) not null,
documento int primary key,
fecha_nac date
);
select * from registro;


 INSERT INTO registro VALUES ('maria', 'torres', 'mariatorres23@gmail.com', '1234', '1234', '34553', '2003-02-12');