CREATE DATABASE sistema_de_ingreso_de_notas;

CREATE TABLE ALUMNO(
    Id_Alumno INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    Fecha_de_nacimiento DATE,
    Género VARCHAR(30),
    Direccion VARCHAR (80),
    Telefono NUMBER (9),
    Correo VARCHAR(50),
    Codigo_alumno NUMBER (8)
);
 
CREATE TABLE HORARIO(
    ID_Horario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Hora_de_inicio NUMBER,
    Hora_de_finalizacion NUMBER,
    Dia_de_la_semana VARCHAR (20)
);

CREATE TABLE CURSO(
    Id_Curso INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50),
    Grado NUMBER,
    Seccion VARCHAR(1),
    FOREIGN KEY (ID_Alumno) REFERENCES ALUMNO(ID_Alumno)
    FOREIGN KEY (ID_Horario) REFERENCES HORARIO(iID_Horario)
);

CREATE TABLE USUARIO(
    ID_Usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR (50),
    Apellido VARCHAR (50),
    Genero VARCHAR (30),
    Direccion VARCHAR (80),
    Correo VARCHAR (60),
    Telefono NUMBER (9),
    Usuario VARCHAR (50),
    Contraseña VARCHAR (50),
    Rol VARCHAR (50)
);

CREATE TABLE CUENTA_PROFESOR(
    ID_Cuenta INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FOREIGN KEY (ID_Usuario) REFERENCES USUARIO(ID_Usuario)
    FOREIGN KEY (ID_Curso) REFERENCES CURSO(ID_Curso)
);

CREATE TABLE REGISTRO_ACADEMICO(
    ID_Registro INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Promedio_General NUMBER,
    Comportamiento VARCHAR (20),
    FOREIGN KEY (ID_Cuenta) REFERENCES CUENTA_PROFESOR(ID_Cuenta)
);

CREATE TABLE REPORTE_ALUMNO(
    ID_Reporte INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Fecha DATE,
    FOREIGN KEY (ID_Registro) REFERENCES REGISTRO ACADEMICO(ID_Registro)
);






-- Drop TABLE usuarios;
-- FOREIGN KEY (id_perfil) REFERENCES perfiles(id_perfil)
-- INSERTAR DATOS 

INSERT INTO perfiles (nombre) VALUES ('administrador');

INSERT INTO perfiles (nombre) VALUES ('usuario');

INSERT INTO perfiles (nombre) VALUES ('vendedor');
 
--INSERT INTO usuarios (id_perfil, nombre, email, password) VALUES (1, 'Karina', 'karina@senati', '12345');

--INSERT INTO usuarios (id_perfil, nombre, email, password) VALUES (1, 'Lorena', 'lorena@senati', '11111');
