/*
 int(# de caracterers)      ENTERO
 integer(# de caracteres)   ENTERO              (Maximo 429496795)
 varchar(# de caracteres)   string/alfanumerico (maximo 255)
 char()                     string/alfanumerico
 float(# de cifras, # de decimales)     Decimal/Coma Flotante
 date, time, timestamp

 //String mas grande
 TEXT         65535 caracteres
 MEDIUMTEXT   16 millones de  caracteres
 LONGTEXT     4 billones de caracteres


//Entero mas grande
 MEDIUMINT
 BIGINT



 crear tabla
 */
 CREATE TABLE usuarios(
     id         int(11),
     nombre     varchar(100),
     apellidos  varchar(100),
     email      varchar(255),
     password   varchar(255)
);