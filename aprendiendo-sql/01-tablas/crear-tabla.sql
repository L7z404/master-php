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
show tables;
/*drop table usuarios;*/
CREATE TABLE usuarios(id         int(11) auto_increment not null,
                      nombre     varchar(100) not null,
                      apellidos  varchar(100) default 'hola que tal',
                      email      varchar(255) not null,
                      password   varchar(255),
                      CONSTRAINT pk_usuarios PRIMARY KEY(id));
describe usuarios;