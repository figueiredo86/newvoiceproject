create table t_licencas (
 id int(10) not null auto_increment,
 company_id int(10) not null #FK -> company
 agents int(10) not null,
 queues int(10) not null,
 incoming int(10) not null,
 primary key (id)
)
