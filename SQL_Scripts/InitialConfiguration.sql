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
