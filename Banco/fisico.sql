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

select * from categoria;
select * from pokemon;

select p.id, p.nome, p.descricao, c.descricao as categoria, p.imagem
from pokemon p
join categoria c on (c.id = p.id_categoria);

insert into categoria (descricao) value ("terra");    

insert into pokemon (id_categoria, nome, descricao, imagem) values (3, "picachu", "correr", "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png"); 

    