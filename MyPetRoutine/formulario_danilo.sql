create database formulario_danilo;
use formulario_danilo;
create table usuarios(
    id int not null auto_increment,
    nome varchar(45) not null,
    email varchar(110) not null,
    senha varchar(45) not null,
    confi_senha varchar(45) not null,
    primary key(id)
);

insert into usuarios
(id, nome, email, senha, confi_senha)
values
(default, 'root', 'admin@admin.com','hello','hello');


CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
);

CREATE TABLE IF NOT EXISTS perfil(
  `raca` varchar(30),
  `username` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `first_name` varchar(30),
   `last_name` varchar(30),
   `endereco` varchar(110),
   `city` varchar(30),
   `country` varchar(30),
   `postal_code` int(8),
   `about_me` varchar(550)
);

insert into perfil
(raca, username, age, first_name, last_name, 
  endereco, city, country, postal_code, about_me)
values
('Pastor Alemão', 'Danilo', '5','Apollo','Polinho', 'Rua 11', 'Mauá', 'Brasil', '123456333', 'É um cachorro resmungão, chato, mas carinhoso');


/*
CREATE TABLE IF NOT EXISTS tarefas(
  `tarefa` varchar(30),
  `horario` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
);
*/


drop table perfil;
select * from usuarios;
select * from `events`;
select * from perfil;
