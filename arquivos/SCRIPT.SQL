drop schema if exists coi cascade;
create schema coi;

-- Tabela da estrutura organizacional
create table coi.structures (
	id					serial primary key,
	structure			varchar(20) not null,
	structure_id		int
);

insert into coi.structures (id, structure) values (0, 'ADMINISTRADOR');

insert into coi.structures (structure) values ('SEGURANCA');

insert into coi.structures (structure, structure_id) values ('COI', 1);
insert into coi.structures (structure, structure_id) values ('BASE', 1);
insert into coi.structures (structure, structure_id) values ('SECRETARIA', 1);

insert into coi.structures (structure, structure_id) values ('COADE', 2);
insert into coi.structures (structure, structure_id) values ('SIN', 2);
insert into coi.structures (structure, structure_id) values ('MANUTENCAO', 2);
insert into coi.structures (structure, structure_id) values ('SENTINELA', 2);
insert into coi.structures (structure, structure_id) values ('TI', 2);

insert into coi.structures (structure, structure_id) values ('OFICINA', 3);
insert into coi.structures (structure, structure_id) values ('ESTATISTICA', 3);

insert into coi.structures (structure, structure_id) values ('MULTAS', 4);
insert into coi.structures (structure, structure_id) values ('ATENDIMENTO', 4);
insert into coi.structures (structure, structure_id) values ('COMPRAS', 4);

-- Tabela de usuários
create table coi.users (
	id					serial primary key,
	structure_id		integer not null references coi.structures (id) on delete restrict,
	name				varchar(100) not null,
	user_name			varchar(100) not null unique,
	pass				varchar(100) not null,
	email				varchar(150) not null unique,
	image				varchar(100),
	active				smallint not null default 1,
	notes				text
);
insert into coi.users (id, structure_id, name, user_name, pass, email) values (0, 0, 'ADMINISTRADOR', 'ADMIN', '$2y$10$UWRbumrwew6DA/.YAAbHPed6cD.QgF/xfnOWdYRk3Et/jpJlPWB2a', 'admin@admin.com.br'); -- 123456
insert into coi.users (structure_id, name, user_name, pass, email) values (2, 'WELTHON', 'WELTHON', '$2y$10$UWRbumrwew6DA/.YAAbHPed6cD.QgF/xfnOWdYRk3Et/jpJlPWB2a', 'welthons@email.com'); -- 123456
insert into coi.users (structure_id, name, user_name, pass, email) values (2, 'MARCELO', 'MARCELO', '$2y$10$UWRbumrwew6DA/.YAAbHPed6cD.QgF/xfnOWdYRk3Et/jpJlPWB2a', 'marcelos@email.com'); -- 123456
insert into coi.users (structure_id, name, user_name, pass, email) values (2, 'PAULO', 'PAULO', '$2y$10$UWRbumrwew6DA/.YAAbHPed6cD.QgF/xfnOWdYRk3Et/jpJlPWB2a', 'paulo@email.com'); -- 123456

-- Controle de autenticação do usuário
create table coi.auth (
	id              	serial primary key,
	created        		timestamp not null default current_timestamp, 
	user_id   			integer not null references coi.users(id) on delete restrict,
	token				varchar(100) not null,
	valid				integer not null default 0,
	ip					varchar(20),
	date				timestamp not null default current_timestamp
);

-- Tabela de aplicativos disponíveis
create table coi.apps (
	id					serial primary key,
	app					varchar(50) not null,
	description			varchar(100),
	imagem				varchar(100),
	active				smallint not null default 1
);

-- Grupos Menu
create table coi.groups (
	id					serial primary key,
	app_id				integer not null references coi.apps(id) on delete cascade,
	position			integer not null default 0,
	icon				varchar(20) not null default 'fa fa-gg-circle',
	active				smallint not null default 1
);

-- Links do menu
create table coi.pages (
	id					serial primary key,
	group_id			integer not null references coi.groups(id) on delete cascade,
	pages				varchar(20) not null,
	route				varchar(50) not null
);

-- Tabela de permissões
create table coi.page_user (
	id					serial primary key,
	user_id				integer not null references coi.users(id) on delete cascade,
	page_id				integer not null references coi.pages(id) on delete restrict	
);


/* ****************************************************************************************************** */