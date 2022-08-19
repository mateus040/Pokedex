create schema pokedex;

use pokedex;

create table categoria (
	id int auto_increment not null,
    descricao varchar(250) not null,
    primary key(id)
);


create table pokemon (
	id int auto_increment not null,
    nome varchar(250) not null,
    descricao varchar(250) not null,
    imagem varchar(500) not null,
    id_categoria int,
    primary key(id),
	foreign key (id_categoria) references categoria(id)
);
    
    