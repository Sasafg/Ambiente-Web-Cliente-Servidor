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
    nombre varchar(100) not null,
    imagePath varchar(100) not null,
    descripcion varchar(150) not null,
    precio float (8) not null,
    primary key (id)
);

CREATE TABLE decoshop.residencias (
    id int(11) not null auto_increment,
    nombre varchar(100) not null,
    imagePath varchar(100) not null,
    descripcion varchar(150) not null,
    precio float (8) not null,
    primary key (id)
);

CREATE TABLE decoshop.vehiculos (
    id int(11) not null auto_increment,
    nombre varchar(100) not null,
    imagePath varchar(100) not null,
    descripcion varchar(150) not null,
    precio float (8) not null,
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
    contrasena varchar(25) not null,
    tipo int(1) not null,
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


--Ejemplo de insert en Articulos--

INSERT INTO decoshop.articulos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.articulos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.articulos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.articulos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.articulos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);

--Ejemplo de insert en Vehiculos--

INSERT INTO decoshop.vehiculos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.vehiculos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.vehiculos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.vehiculos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.articuvehiculoslos VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);

--Ejemplo de insert en Residencias--

INSERT INTO decoshop.residencias VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.residencias VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.residencias VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.residencias VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);
INSERT INTO decoshop.residencias VALUES (null, "Racks Negros Universales", "../imagenes/el-coco.jpg", "Descripcion", 88000);


-- Insert para Nosotros
INSERT INTO decoshop.infogeneral VALUES (1, "En nuestro emprendimiento de instalación de accesorios para vehículos, 
estamos comprometidos con brindar soluciones personalizadas y de alta calidad para nuestros clientes. Sabemos que su vehículo 
es una inversión importante y queremos ayudarlo a maximizar su potencial. Es por eso que nuestro equipo de profesionales 
altamente capacitados tiene años de experiencia en la instalación de todo tipo de accesorios, desde sistemas de sonido 
avanzados hasta kits de iluminación personalizados", "Llevar a cabo nuestra labor con el mayor esmero, ganando la confianza 
de nuestros preciados clientes", "Establecernos como empresa en el mercado costarricense brindando un servicio de la mas 
alta calidad");