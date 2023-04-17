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

INSERT INTO decoshop.articulos VALUES (null, "Racks Negros Universales", "../imagenes/racks.negros.jpg", "Racks de 120cm en material aluminio,
 llegan a un peso maximo de 100kg", 88500);
INSERT INTO decoshop.articulos VALUES (null, "Alfombras de bandeja Universales", "../imagenes/alfombras.jpg", "Alfombras de bandeja universales,
son ideales para cualquier vehículo ya que tienen la facilidad de recortarse y adaptarse sin problema al espacio.", 19000);
INSERT INTO decoshop.articulos VALUES (null, "Canasta de 34x34 pulgadas", "../imagenes/canasta.jpg", "Canasta de 34x34 pulgadas en material aluminio
ideal para vehículos pequeños, esta hecha por tubos redondeados para un aspecto más fuerte, esta canasta tiene un máximo de 85kg.", 98000);
INSERT INTO decoshop.articulos VALUES (null, "Vinil de colores", "../imagenes/vinil.jpg", "Rollo de Vinilo de 156cm x 22 variedad de 
colores, es ideal para proteger la pintura del vehículo.", 185000);


--Ejemplo de insert en Vehiculos--

INSERT INTO decoshop.vehiculos VALUES (null, "Polarizado Trasero", "../imagenes/polarizados.jpg", "Aplicacion de Polarizado (1%,15% o 20%) al
 parabrisas trasero bajo la responsabilidad del cleinte solicitante.", 18000);
INSERT INTO decoshop.vehiculos VALUES (null, "Polarizado en Ventanas", "../imagenes/pola.ventanas.jpg", "Aplicacion de Polarizado (1%,15% o 20%)", 28000);
INSERT INTO decoshop.vehiculos VALUES (null, "Remplazo de polarizado", "../imagenes/cambio.pola.jpg", "limpieza de todas ventanas para aplicar el nuevo polarizado
(1%,15% o 20%)", 37000);
INSERT INTO decoshop.vehiculos VALUES (null, "Polarizado Delantero", "../imagenes/frontal.jpg", "plicacion de Polarizado (1%,15% o 20%) al
 parabrisas trasero bajo la responsabilidad del cleinte solicitante.", 26000);
INSERT INTO decoshop.articuvehiculoslos VALUES (null, "Visera Anti Sol", "../imagenes/visera.jpg", "Visera de tamaño personalisado (max 30cm) 
para evitar el sol", 11000);

--Ejemplo de insert en Residencias--

INSERT INTO decoshop.residencias VALUES (null, "Polarizado Industrial", "../imagenes/el-coco.jpg", "Polarizado aplicable hasta 8m x 8m", 108000);
INSERT INTO decoshop.residencias VALUES (null, "Ventanas pequeñas", "../imagenes/elcoco.jpg", "Aplicacion de polarizado a ventanas estáticas de hasta 2m x 2m", 19000);
INSERT INTO decoshop.residencias VALUES (null, "Puertas de Vidrio", "../imagenes/nicoya.jpg", "Polarizado de ventanas 2m x 2m", 49000);
INSERT INTO decoshop.residencias VALUES (null, "Ventanas Clásicas", "../imagenes/nicoya2.jpg", "Aplicaion de polarizado a ventanas de 1.50m x 1.80m", 28000);



-- Insert para Nosotros
INSERT INTO decoshop.infogeneral VALUES (1, "En nuestro emprendimiento de instalación de accesorios para vehículos, 
estamos comprometidos con brindar soluciones personalizadas y de alta calidad para nuestros clientes. Sabemos que su vehículo 
es una inversión importante y queremos ayudarlo a maximizar su potencial. Es por eso que nuestro equipo de profesionales 
altamente capacitados tiene años de experiencia en la instalación de todo tipo de accesorios, desde sistemas de sonido 
avanzados hasta kits de iluminación personalizados", "Llevar a cabo nuestra labor con el mayor esmero, ganando la confianza 
de nuestros preciados clientes", "Establecernos como empresa en el mercado costarricense brindando un servicio de la mas 
alta calidad");