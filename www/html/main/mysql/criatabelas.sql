use d_webvoice;

drop table if exists cliente;

create table cliente (
	id int(10) not null auto_increment,
	nome varchar(50) not null,
	telefone char(11) not null,
	status_cli int(1) not null,
	primary key (id)
);

drop table if exists status_cli;

create table status_cli (
	id_cli int(1) not null,
	status boolean default "1"
);


drop table if exists recarga_hist;

create table recarga_hist (
	id_cli int(1) not null,
	data_u_recarga datetime,
	valor_u_recarga_id int(1)
);

drop table if exists saldo_atual;

create table saldo_atual (
	id_cli int(1) not null,
	data_atual datetime default null,
	saldo_atual varchar(80) not null
);
