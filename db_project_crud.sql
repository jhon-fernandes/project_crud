create database db_project_crud;
use db_project_crud;

create table peoples(
	id int auto_increment,
    firstName varchar(50),
    lastName varchar(100),
    email varchar(100),
    phone varchar(100),
    primary key(id)
);

select *from peoples;
drop table peoples;