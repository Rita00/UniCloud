drop table if exists cadeiras;
drop table if exists cursos;
drop table if exists files;
drop table if exists news;

create table if not exists news
(
    date varchar(256) not null,
    info varchar(256) not null
);
create table if not exists users
(
    name              varchar(256) not null,
    email             varchar(256) not null,
    password          varchar(256) not null,
    remember_token    varchar(256),
    updated_at        datetime,
    created_at        datetime,
    email_verified_at datetime,
    primary key (email)
);

CREATE TABLE if not exists cursos
(
    nome      VARCHAR(256),
    faculdade VARCHAR(256),
    sigla     varchar(256),
    id        int unique auto_increment not null,
    PRIMARY KEY (id)
);

create table if not exists activity
(
    ip      varchar(256) not null,
    value   varchar(256) not null,
    user_id varchar(256),
    date    datetime     not null
);

create table if not exists files
(
    id           varchar(256)  not null,
    file_name    varchar(256)  not null,
    name         varchar(256)  not null,
    category     varchar(256)  not null,
    sub_category varchar(256)  not null,
    description  varchar(1024) null,
    tag1         varchar(256)  null,
    tag2         varchar(256)  null,
    tag3         varchar(256)  null,
    uploaded_by  varchar(256)  not null references users (email),
    uploaded_at  datetime      not null,
    cadeiraID    int           not null references cadeiras (id),
    rate         int,
    primary key (id),
    constraint files_id_uindex unique (id)
);


create table if not exists cadeiras
(
    id       int auto_increment unique not null,
    nome     varchar(255),
    ano      int                       not null,
    semestre int                       not null,
    cursoID  int                       not null references cursos (id),
    primary key (id)
);

alter table cadeiras
    add constraint cadeiras unique (nome, cursoID);

create table if not exists downloads
(
    ip           varchar(256) not null,
    fileID       varchar(256) not null,
    userID       varchar(256),
    downloadTime datetime     not null
);

select *
from downloads
