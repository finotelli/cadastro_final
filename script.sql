create database sistema;
use sistema;

create table tb_cliente (
cd_cliente int auto_increment primary key,
nm_cliente varchar(45),
email_cliente varchar(45),
senha_cliente varchar(45),
endereco_cliente varchar(45),
nr_cep char(11),
complemento_cliente varchar(45),
nm_cidade varchar(45),
sg_estado char(2)tb_cliente
);