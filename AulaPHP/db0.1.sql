create database crud_ppi default charset utf8mb4;
use crud_ppi;
create table users(id int primary key auto_increment,
              nome varchar(200),
              email varchar(200),
              senha varchar(200),
              datanascimento date)