create table users
(
    name varchar (256) not null,
    email          varchar(256) not null,
    password       varchar(256) not null,
    remember_token varchar(256),
    updated_at datetime,
    created_at datetime,
    email_verified_at datetime,
    primary key (email)
);

CREATE TABLE cursos (
    nome	 VARCHAR(256),
    faculdade VARCHAR(256),
    PRIMARY KEY(nome,faculdade)
);

create table activity
(
    ip varchar (256) not null,
    value       varchar(256) not null,
    user_id          varchar(256),
    date datetime not null
);

create table files
(
    id           int auto_increment,
    file_name    varchar(256)  not null,
    name         varchar(256)  not null,
    category     varchar(256)  not null,
    sub_category varchar(256)  not null,
    description  varchar(1024) null,
    tag1  varchar(256) null,
    tag2  varchar(256) null,
    tag3  varchar(256) null,
    uploaded_by  varchar(256)  not null,
    uploaded_at  datetime      not null,
    constraint files_id_uindex
        unique (id)
);

alter table files
    add primary key (id);


insert into cursos(nome, faculdade) values('Licenciatura em Engenharia Informatica', 'Ciencias e tecnologias');
insert into cursos(nome, faculdade) values('Licenciatura em Biologia', 'Ciencias e tecnologias');
insert into cursos(nome, faculdade) values('Licenciatura em Design e Multimedia', 'Ciencias e tecnologias');
insert into cursos(nome, faculdade) values('Licenciatura em Engenharia e Ciencia de Dados', 'Ciencias e tecnologias');
insert into cursos(nome, faculdade) values('Licenciatura em Quimica', 'Ciencias e tecnologias');
insert into cursos(nome, faculdade) values('Licenciatura em Bioguimica', 'Ciencias e tecnologias');
