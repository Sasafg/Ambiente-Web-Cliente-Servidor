CREATE DATABASE decoshop;

CREATE TABLE decoshop.infogeneral (
    id int(11) not null auto_increment,
    acerca text not null,
    vision text not null,
    mision text not null,
    primary key (id)
);

CREATE TABLE decoshop.articulos (
    id int(11) not null auto_increment,
    imagen image not null,
    descripcion varchar(150) not null,
    precio float not null,
    primary key (id)
);

CREATE TABLE decoshop.residencias (
    id int(11) not null auto_increment,
    imagePath varchar(100) not null,
    descripcion varchar(150) not null,
    precio float not null,
    primary key (id)
);

CREATE TABLE decoshop.vehiculos (
    id int(11) not null auto_increment,
    imagen image not null,
    descripcion varchar(150) not null,
    precio float not null,
    primary key (id)
);

CREATE TABLE decoshop.contacto (
    id int(11) not null auto_increment,
    nombre varchar(100) not null,
    correo varchar(100) not null,
    telefono varchar(8) not null,
    asunto varchar(100) not null,
    mensaje varchar(256) not null,
    primary key (id)
);

CREATE TABLE decoshop.usuarios (
    id int(11) not null auto_increment,
    nombre varchar(100) not null,
    username varchar(50) not null,
    correo varchar(100) not null,
    contrasena varchar(25) not null,
    primary key (id)
);

CREATE TABLE decoshop.resenas (
    id int(11) not null auto_increment,
    puntaje int(1) not null,
    username_id int(11) not null,
    comentario varchar(200) not null,
    CONSTRAINT fk_usernameId 
    FOREIGN KEY (username_id) 
    REFERENCES decoshop.usuarios (id),
    primary key (id)
);