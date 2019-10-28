create table user(
    id_user int not null auto_increment,
    alias varchar(20) not null, 
    password varchar(50) not null,
    user_type char(1) not null,
    primary key(id_user)
);

create table client(
    id_client int not null auto_increment,
    name varchar(40) not null,
    address varchar(50) not null,
    phone int not null,
    code varchar(3),
    date datatime,
    id_user int,
    primary key(id_client),
    FOREIGN key(id_user)references user(id_user)
);

create table baseClient(
    id_database int not null,
    id_client int not null, 
    dbname varchar(20)not null,
    primary key(id_database),
    foreign key(id_client)references client(id_client)
)