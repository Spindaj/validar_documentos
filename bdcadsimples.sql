create database BDCadSimples

use BDCadSimples

create table tbclientes
(
    CPF varchar(14) not null,
	idcliente int(4) auto_increment not null primary key,
    nome varchar(60) not null,
    cidade varchar(60) not null,
    email varchar(60) not null,
    RG varchar(20) not null ,
    contato varchar(20) not null
)

create table tbfornecedores
(
	idfornecedor int(4) auto_increment not null primary key,
    razao varchar(200) not null,
    nome varchar(40) not null,
    cidade varchar(40) not null,
    email varchar(40) not null,
    CNPJ varchar(30) not null,
    RG varchar(20) not null,
    inscricao varchar(50) not null,
    contato varchar(20) not null
)

create table tbpedido
(
	idpedido int(4) auto_increment not null primary key,
    pedido_codigocliente int(4),
    data varchar(20) not null,
    produtos varchar(90) not null,
    valor_total decimal(10) not null,
	foreign key (pedido_codigocliente) references tbclientes (idcliente)
)