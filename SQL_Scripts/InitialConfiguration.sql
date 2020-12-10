drop table cadeiras;
drop table cursos;
drop table files;

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
                        sigla   varchar(256),
                        id int unique auto_increment not null,
                        PRIMARY KEY(id)
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
    cursoID int not null references cadeiras(id),
    primary key (id),
    constraint files_id_uindex unique (id)
);


create table cadeiras
(
    id           int auto_increment unique not null,
    nome   varchar(255),
    ano     int not null,
    semestre int not null,
    cursoID int not null references cursos(id),
    primary key (id)
);

alter table cadeiras
    add constraint cadeiras unique (nome, cursoID);
