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

create table files
(
    id           int auto_increment,
    file_name    varchar(256)  not null,
    name         varchar(256)  not null,
    category     varchar(256)  not null,
    sub_category varchar(256)  not null,
    description  varchar(1024) null,
    uploaded_by  varchar(256)  not null,
    uploaded_at  datetime      not null,
    constraint files_id_uindex
        unique (id)
);

alter table files
    add primary key (id);
