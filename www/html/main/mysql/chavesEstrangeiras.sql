use d_webvoice;

alter table cliente 
	add foreign key (status_cli)
	references status_cli(status)
;
