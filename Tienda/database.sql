drop database if exists tienda;
create database tienda DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
use tienda;

create table productos (
	id_producto int not null auto_increment primary key,
	codigo int not null,
	descripcion varchar (256) not null,
	costo double not null,
	precio double not null,
	cantidad int (4) not null,
	fecha_vencimiento date not null
);
insert into productos (codigo, descripcion, costo, precio, cantidad, fecha_vencimiento) values ('21390812', 'Mascarilla KN95', '0.21', '0.50', '200', '2020-09-04');
insert into productos (codigo, descripcion, costo, precio, cantidad, fecha_vencimiento) values ('098123412', 'Guantes de látex', '0.34', '0.75', '24', '2020-09-04');

create table clientes(
	id_cliente int not null auto_increment primary key,
	nombre varchar (256) not null,
	direccion varchar (256) not null,
	telefono varchar (16) not null,
	celular varchar (16) not null,
	dui varchar (25) null,
	nit varchar (25) null,
	registro_fiscal varchar (25) not null,
	porcentaje_ganancia double null
);

insert into clientes (nombre, direccion, telefono, celular, dui, nit, registro_fiscal, porcentaje_ganancia) values ('Samuel Alejandro González Espinoza', 'Residencial Alto Verde, Senda Los Cipreses, #65', '2468-0683', '7556-9099', '1230-1230421-1', '0210-030798-103-5', '123912-5', '10');

create table facturas (
	id_factura int not null auto_increment primary key,
	nombre varchar (256) not null,
	fecha date not null,
	direccion varchar (256) null,
	dui varchar (25) null,
	nit varchar (25) null,
    tipo int (1) not null,
    dias_credito int (2) null,
    cantidad_1 int(4) null,
	cantidad_2 int(4) null,
	cantidad_3 int(4) null,
	cantidad_4 int(4) null,
	cantidad_5 int(4) null,
	cantidad_6 int(4) null,
	cantidad_7 int(4) null,
	cantidad_8 int(4) null,
	cantidad_9 int(4) null,
	cantidad_10 int(4) null,
    descripcion_1 varchar (256) null,
	descripcion_2 varchar (256) null,
	descripcion_3 varchar (256) null,
	descripcion_4 varchar (256) null,
	descripcion_5 varchar (256) null,
	descripcion_6 varchar (256) null,
	descripcion_7 varchar (256) null,
	descripcion_8 varchar (256) null,
	descripcion_9 varchar (256) null,
	descripcion_10 varchar (256) null,
    precio_1 double null,
	precio_2 double null,
	precio_3 double null,
	precio_4 double null,
	precio_5 double null,
	precio_6 double null,
	precio_7 double null,
	precio_8 double null,
	precio_9 double null,
	precio_10 double null,
    ventas_afectas_1 double null,
	ventas_afectas_2 double null,
	ventas_afectas_3 double null,
	ventas_afectas_4 double null,
	ventas_afectas_5 double null,
	ventas_afectas_6 double null,
	ventas_afectas_7 double null,
	ventas_afectas_8 double null,
	ventas_afectas_9 double null,
	ventas_afectas_10 double null,
	total double not null
);

create table usuarios(
	id_usuario int not null auto_increment primary key,
	usuario varchar (32) not null,
	clave varchar (64) not null,
	tipo int (1) not null
);

insert into usuarios (usuario, clave, tipo) values ('admin', 'admin', '1');
insert into usuarios (usuario, clave, tipo) values ('user', 'user', '2');
select * from facturas;