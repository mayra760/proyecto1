show databases;
create schema pruebita1;
use pruebita1;


show tables;
create table tb_usuarios(
documento int not null,
nombre varchar(50) not null,
apellido varchar(50) not null,
correo varchar(50) not null,
contraseña varchar(50) not null,
fecha date not null,
primary key(documento)
);

create table tb_productos(
id_producto int not null,
nombre_producto varchar(150) not null,
precio float not null,
cantidad int not null,
detalles varchar(150) not null,
id_categoría int  not null,
primary key(id_producto)
);

create table tb_categoría(
id_categoría int not null,
categoria varchar(50) not null,
primary key(id_categoría)
);

create table tb_compras(
factura varchar(100) not null,
método_pago varchar(50) not null,
devoluciones varchar(50) not null,
documento int not null,
id_producto int not null,
primary key(id_factura)
);

create table tb_carrito(
documento int not null,
nombre_producto varchar (40) not null,
cantidad int not null,
precio float not null,
primary key (documento)
);

delete from tb_productos
where id_producto= 3;

select * from tb_carrito;
select * from tb_compras;
select * from tb_categoría;
select * from tb_productos;
select * from tb_usuarios;

alter table tb_carrito
add column id_producto varchar(255) not null;

INSERT INTO `pruebita1`.`tb_productos` (`id_producto`, `nombre_producto`, `precio`, `cantidad`, `detalles`, `id_categoría`, `ruta_img`)
VALUES ('15', 'camisa de lana', '43800', '10', 'Camiseta de lana pos', '15', 'img\\nnn.png');


alter table tb_carrito
add column id_producto int not null after documento;