--1
CREATE DATABASE TallerSQL

--2
CREATE TABLE Cliente(
Id int identity(1,1) primary key not null,
nombre varchar (50) not null,
apellido varchar (50) not null,
telefono char(9) not null,
direccion varchar (30) not null,
email varchar (100) not null
);

--3
INSERT INTO Cliente values ('Franco Lucas', 'Melendez Paucar', '996870887', 'San Diego', 'FMelendez@gmail.com');
INSERT INTO Cliente values ('Jorge Luis', 'Fernandez Marquez', '960580470', 'La Molina', 'JFernandez@gmail.com');
INSERT INTO Cliente values ('Andres Martin', 'Meza De la Cruz', '963852741', 'Los Olivos', 'AndresMCruz@hotmail.com');
INSERT INTO Cliente values ('Diego Alonso', 'Galarza Gonzales', '987456321', 'Miraflores', '1483342@senati.pe');
INSERT INTO Cliente values ('Christiams Jesus', 'Veliz Aquino', '997715896', 'Los Olivos', '1517278@senati.pe');
INSERT INTO Cliente values ('Diego Alonso', 'Lumbres Guerra', '985456725', 'Independencia', 'DLumbres@hotmail.com');
INSERT INTO Cliente values ('Abigail Daniela', 'Vega Guebara', '974852964', 'Comas', 'AVega@gmail.com');
INSERT INTO Cliente values ('Daniel Francisco', 'Quispe Gonzales', '925468754', 'Ventanilla', 'DanielQ@hotmail.com');
INSERT INTO Cliente values ('Miguel Angel', 'Damian Perez', '923456852', 'Ancon', 'MiguelDP@gmail.com');
INSERT INTO Cliente values ('Yadhira Alondra', 'Rondan Flores', '963945752', 'San Isidro', 'YadhiraF@gmail.com');

--4
SELECT*FROM Cliente

--5
update Cliente set nombre = 'Daniel Williams' where Id =8
update Cliente set apellido = 'Ruiz Romero' where Id =9
update Cliente set telefono = '985642159' where Id =4
update Cliente set direccion = 'San Miguel' where Id =3
update Cliente set email = 'FrancoMPau@gmail.com' where Id =1

--6
DELETE FROM Cliente
WHERE nombre='Diego Alonso';

DELETE FROM Cliente
Where Id='3';