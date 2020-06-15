create database cursoSQL ;
USE cursoSQL;

CREATE TABLE usuarios(
    id          int(11) not null,
    nombre      varchar(100)not null,
    apellidos   varchar(255),
    email       varchar(100),
    password varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);

-- RENOMBRAR TABLAS
ALTER TABLE usuarios RENAME TO usuarios_renom;

-- CAMBIAR NOMBRE DE UNA COLUMNA

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(100) null;

-- MODIFICAR COLUMNA SIN CAMBIAR NOMBRE

ALTER TABLE usuarios_renom MODIFY apellido char(50)not null;

-- AÑADIR COLUMNA 

ALTER TABLE usuarios_renom ADD website varchar(100) null;

-- AÑADIR RESTRICCION A COLUMNA 

ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

-- BORRAR UNA COLUMNA 

ALTER TABLE usuarios_renom DROP website;

CREATE TABLE usuarios(
    id      int(255) auto_increment not null,
    nombre  varchar(100) not null,
    email   varchar(255)not null,
    apellidos varchar(100) not null,
    password   varchar(255)not null,
    fecha       date not null,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
    CONSTRAINT uq_email UNIQUE(email) 
    )ENGINE=InnoDb;

    CREATE TABLE categorias(
        id      int(255)not null,
        nombre  varchar(100),
        CONSTRAINT pk_categorias PRIMARY KEY (id)
    )ENGINE=InnoDb;

    CREATE TABLE entradas (
        id          int(255) auto_increment not null,          
        usuario_id  int(255) not null, 
        categoria_id int(255) not null,
        titulo      varchar(255) not null,       
        descripcion MEDIUMTEXT, 
        fecha date not null,
        CONSTRAINT pk_entradas PRIMARY KEY(id),
        CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
        CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
    )ENGINE=InnoDb;

    /*INSERTAR DATOS*/

    INSERT INTO usuarios values(null, 'Alejandro', 'Moreno Ovalle', 'moren850@gmail.com', '0dasn32ad"#', '2019-05-01');
    INSERT INTO usuarios values(null, 'Antonio', 'Martinez', 'mantonio@gmail.com', '0dasn32ad"#', '2012-05-01');
    INSERT INTO usuarios values(null, 'Ernesto', 'Mendieta', 'fello@gmail.com', '0dasnwewe2ad"#', '2003-03-01');
    
    SELECT email, (4+7) AS 'OPERACION' FROM usuarios;
    
    -- OPERADORES

    SELECT nombre, apellidos FROM usuarios  WHERE  YEAR(fecha) = 2019;  

    SELECT nombre, apellidos FROM usuarios  WHERE  YEAR(fecha) != 2019 OR ISNULL(fecha);       
    -- COMODINES
    /* cualquier cantidad de caracteres: %
        un caracter desconocido: _*/
    
    SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '0dasn32ad"#';

    -- SELECCIONAR CAMPOS DE LA TABLA USUARIOS CUYO AÑO SEA PAR

    SELECT* FROM usuarios WHERE (YEAR(fecha))%2 = 0;
    -- usuarios que tenga mas de 5 letras en el nombre que se haya registrado antes del 2020 y mostrar el nombre en mayusculas
     SELECT UPPER(nombre), apellidos FROM usuarios WHERE LENGTH(nombre) <= 7 AND YEAR(fecha) < 2020;