create database pokedex;

use pokedex;

create table pokemon (
	id int auto_increment not null,
    nome varchar(250) not null,
    altura double not null,
    peso double not null,
    habilidades varchar(250) not null,
    id_categoria int not null,
	primary key (id),
    foreign key (id_categoria) references categoria(id)
);

create table categoria (
	id int auto_increment not null,
    descricao varchar(250) not null,
    primary key (id)
);
    