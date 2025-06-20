


create table usuario(
usumatricula int(5)not null primary key,
usulogin varchar(8)not null,
ususenha varchar(6)not null,
usunome varchar(120) not null);



create table comentario(
comcodigo int(8) primary key auto_increment,
comdata date not null,
comhora time not null,
comcomentario longtext,
comusumatricula int(5),
constraint fk_usuario foreign key(comusumatricula) references usuario(usumatricula));

create table tabfoto(
idfoto int primary key auto_increment,
titulo varchar(200),
arquivo varchar(200));

create table tabvideo(
idvideo int primary key auto_increment,
titulo varchar(200),
arquivo varchar(200));

