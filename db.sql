create table client(
    rut varchar(11) not null,
    name varchar(40) not null,
    address varchar(50) not null,
    phone int not null,
    code varchar(3) not null,
    email varchar(30) not null,
    date varchar(20),
    primary key(rut)
);

create table user(
    id_user int not null auto_increment,
    alias varchar(20) not null, 
    password varchar(50) not null,
    user_type char(1) not null,
    status char(1) not null,
    rut_client varchar(11) not null,
    primary key(id_user),
    FOREIGN key(rut_client)references client(rut)
);

create table baseclient(
    id_database int not null,
    rut_client varchar(11) not null, 
    dbname varchar(20)not null,
    primary key(id_database),
    foreign key(rut_client)references client(rut)
) /*fdsf*/