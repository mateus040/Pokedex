create database pokedex;

use pokedex;

create table pokemon (
	id int auto_increment not null,
    nome varchar(250) not null,
    altura double not null,
    peso double not null,
    habilidades varchar(250) not null,
    foto varchar(500) not null,
	primary key (id)
);




    