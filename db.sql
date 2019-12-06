create database admClient;
use admClient;
/*create table client(
    rut varchar(11) not null,
    name varchar(40) not null,
    address varchar(50) not null,
    phone int not null,
    mobile int not null,
    email varchar(30) not null,
    date varchar(20),
    primary key(rut)
);

create table user(
    id_user int not null auto_increment,
    alias varchar(20) not null, 
    password varchar(50) not null,
    user_type char(1) not null,
    state char(1) not null,
    rut_client varchar(11) not null,
    primary key(id_user),
    FOREIGN key(rut_client)references client(rut)
);

create table baseclient(
    id_database int not null,
    rut_client varchar(11) not null, 
    dbname varchar(20)not null,
    status int not null,
    primary key(id_database),
    foreign key(rut_client)references client(rut)
)*/


create table client(
    rut varchar(11) not null,
    name_client varchar(40) not null,
    address varchar(50) not null,
    phone int not null,
    mobile int not null,
    email varchar(30) not null,
    date timestamp default current_timestamp,
    primary key(rut)
);

create table profile(
    id_profile int auto_increment not null,
    name_profile varchar(20)not null,
    description text not null,
    date timestamp default current_timestamp,
    primary key(id_profile)
);

create table users(
    id_user int not null auto_increment,
    name_user varchar(20) not null,
    rut_user varchar(11) not null, 
    first_names varchar(50)not null,
    last_names varchar(50)not null,
    password varchar(50) not null,
    id_profile int not null,
    state char(1) not null,
    date timestamp default current_timestamp,
    primary key(id_user),
    FOREIGN KEY(id_profile)REFERENCES profile(id_profile)
);

create table baseclient(
    id_database int not null auto_increment, 
    dbname varchar(20)not null,
    state char(1) not null,
    date timestamp default current_timestamp,
    primary key(id_database)
);

create table clientUserDB(
    rut_client varchar(11),
    id_user int,
    id_db int,
    FOREIGN KEY(rut_client)references client(rut),
    FOREIGN KEY(id_user)references users(id_user),
    FOREIGN KEY(id_db)references baseclient(id_database)
);


