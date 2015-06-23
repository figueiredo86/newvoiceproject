create database if not exists nvtelecom;

drop table ramal;

create table ramal (
id int(10) not null auto_increment,
numero int(10) not null,
nome varchar(100) not null,
senha varchar(100) not null,
primary key (id),
unique(numero)
);

insert into ramal values (
'',
200,
'Felipe',
'felipe'
);
