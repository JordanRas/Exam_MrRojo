create database regime;
use regime;

create table utilisateur(
    idutilisateur int primary key not null auto_increment,
    nom varchar(50),
    email varchar(50) unique,
    motdepasse varchar(50),
    genre int
);
insert into utilisateur values(null,'admin','admin@gmail.com','0000',null);