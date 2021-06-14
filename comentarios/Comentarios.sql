create database Comentarios
Use Comentarios

create table coments(
	id int not null identity constraint pkId primary key,
	nombre varchar(50),
	email varchar(50),
	comentario text,
)

select*from coments