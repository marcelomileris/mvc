drop database if exists `db_test`;
create database `db_test`;
use `db_test`;

create table `users` (
    `id`              	integer not null primary key auto_increment,
    `created`        	timestamp not null default current_timestamp, 
    `name`            	varchar(150) not null,
	`user`			    varchar(50) not null,
    `email`           	varchar(200) not null,
    `pass`           	varchar(255) not null,
    `active`           	tinyint not null default 1
)engine=MyISAM;
insert into `users` (`name`, `user`, `email`, `pass`) values ('ADMINISTRATOR', 'ADMIN', 'ADMIM@EMAIL.COM', '123456');