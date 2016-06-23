create table categoria(
id serial primary key,
descricao varchar(100) not null
)

create table tipo(
id serial primary key,
descricao varchar(100) not null
)

create table marca(
id serial primary key,
descricao varchar(100) not null
)

create table modelo(
id serial primary key,
descricao varchar(100) not null,
id_categoria integer not null,
id_marca integer not null,
FOREIGN KEY (id_marca) references marca(id),
FOREIGN KEY (id_categoria) references categoria(id)
)

create table destaques(
id serial primary key,
foto varchar(200) not null
)

create table entregas(
id serial primary key,
foto_destaque varchar(200) not null,
foto_1 varchar(200),
foto_2 varchar(200),
foto_3 varchar(200),
titulo varchar(100) not null,
observacoes varchar(500) not null 
)

create table opcionais(
id serial primary key,
descricao varchar(100) not null
)

create table carro(
id serial primary key not null,
titulo varchar(200) not null,
quilometragem varchar(50) not null,
combustivel varchar(50) not null,
cor varchar(50) not null,
ano_modelo varchar(4) not null,
ano_fabricacao varchar(4) not null,
observacoes varchar(500),
foto_1 varchar(200),
foto_2 varchar(200),
foto_3 varchar(200),
foto_4 varchar(200),
id_modelo integer not null,
id_tipo integer not null,
FOREIGN KEY (id_tipo) references tipo(id)
FOREIGN KEY (id_modelo) references modelo(id),
)

create table carro_opcionais(
id serial primary key,
id_carro integer not null,
id_opcionais integer not null,
foreign key (id_carro) references carro(id),
foreign key (id_opcionais) references opcionais(id)
)

create table interesse(
id serial primary key,
nome varchar(100) not null,
email varchar(100),
observacao varchar(500),
telefone varchar(20) not null,
id_carro integer not null,
foreign key (id_carro) references carro(id)
)

create table perfil(
id serial primary key,
descricao varchar(100) not null
)

create table acesso(
id serial primary key,
funcao varchar(100) not null,
tela varchar(100) not null
)

create table usuario(
id serial primary key,
login varchar(100) not null,
senhar varchar(100) not null,
nome varchar(200) not null,
id_perfil integer not null,
foreign key (id_perfil) references perfil(id)
)

create table perfil_acesso(
id serial primary key,
id_perfil integer not null,
id_acesso integer not null,
foreign key (id_perfil) references perfil(id),
foreign key (id_acesso) references acesso(id)
)