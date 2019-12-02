create database car_registeration;

use car_registeration;

create table carlist (
id int(11) auto_increment primary key not null,
name varchar(255) not null,
price varchar(255) not null,
file varchar(255) not null
);

insert into carlist (name, price, file) values ("1","100","1.png.jpg"), ("9ja","300","9ja.jpg"), ("c4", "9000000", "c4.jpg"), ("cat3", "100000", "cat3.png"), ("tiin", "20000", "tiin.jpg");

create table lease (
id int(11) auto_increment primary key not null,
lease_id varchar(50) not null,
name varchar(255) not null,
location varchar(255) not null,
price varchar(255) not null,
phone varchar(50) not null
);

create table user (
id int(11) auto_increment primary key not null,
name varchar(255) not null,
email varchar(255) not null,
password varchar(255) not null
);
