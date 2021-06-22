<?php
$servername = "biblioteca";
$username = "hinata";
$password =  "kuroo";

//Crear conexión a la base de datos
$con = new mysqli($biblioteca, $hinata, $kuroo);
//Verificar la conexión
if($con->connect_error){
    die("La conexión falló :c error: " . $con->connect_error);
    }

    //crear base de datos
    $sql = "CREATE DATABASE biblioteca";
    if ($con->query($sql) === TRUE){
    echo "La base de datos se creó satisfactoriamente";
    }else{
    echo "Error al crear la base de datos: " . $con->error;}

    $sql

    pg_close($con);
?>
//


//TABLA LIBROS
CREATE TABLE libros
(
    libro_id serial NOT NULL;
    nombreLibro varchar(30) NOT NULL,
    editorial varchar(20) NOT NULL,
    edicion varchar(15) NOT NULL,
    nombreAutor INTEGER NOT NULL,
    apaterno INTEGER,
    amaterno INTEGER,
    CONSTRAINT fk_nombreAutor FOREIGN KEY (nombreAutor)
        REFERENCES autores (nombreAutor)
        ON UPDATE RESTRICT ON DELETE RESTRICT,
    CONSTRAINT fk_apaterno FOREIGN KEY (apaterno)
            REFERENCES autores (apaterno)
            ON UPDATE RESTRICT ON DELETE RESTRICT,
    CONSTRAINT fk_amaterno FOREIGN KEY (amaterno)
            REFERENCES autores (amaterno)
            ON UPDATE RESTRICT ON DELETE RESTRICT

    )

//tabla autores
CREATE TABLE autores
(
    autor_id serial NOT NULL,
    nombreAutor varchar(20),
    apaterno varchar(20),
    amaterno varchar(20)
)

//tabla editorial 
CREATE TABLE editoriales (
    editorial_id serial NOT NULL,
    nombreEdit varchar (30) NOT NULL)
