﻿CREATE DATABASE BALITA;

CREATE TABLE IF NOT EXISTS `articlesblog` (
  IDARTICULO INT AUTO_INCREMENT,
  TITLE varchar(255),
  IMAGE varchar(255),
  DESCRIPTION varchar(255),
  CONTENT text,
  KEYWORDS varchar(255),
  AUTOR varchar(255),
  DATE TIMESTAMP,

   PRIMARY KEY (IDARTICULO),
   UNIQUE (TITLE)
);

CREATE TABLE `usuarios`(
    IDUSUARIO INT AUTO_INCREMENT,
    NOMBRE VARCHAR(25),
    CORREO VARCHAR(30),
    CLAVE VARCHAR(50),
    NIVEL  INT,
    CREADO_EN TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY (IDUSUARIO),
    UNIQUE (CORREO)
)