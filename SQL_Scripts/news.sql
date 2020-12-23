drop table news;
create table news
(
	date varchar(256) not null,
	info varchar(256) not null
);
insert into news(date, info) values('26/12/20', 'Lançamento da Unicloud');
insert into news(date, info) values('24/12/20', 'Boas Festas!');
