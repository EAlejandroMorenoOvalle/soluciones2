drop table usuarios if exists
create table usuarios(
    id int(11) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(255) default 'hola que tal',--inserta hola que tal por default
    email varchar(100)not null,
    password varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

/* RENOMBRAR TABLA*/

    ALTER TABLE usuarios RENAME TO usuarios_renom;

-- cambiar nombre de columna

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;