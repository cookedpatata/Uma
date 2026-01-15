CREATE database uma;

use uma;

CREATE TABLE skills  (
    id INT auto_increment,
    nombre VARCHAR (30),
    descripcion VARCHAR (200),
    skill VARCHAR (20),
    aptitud VARCHAR (10),
    rareza VARCHAR (2),
    procedencia int null,
    PRIMARY KEY (id),
    FOREIGN KEY (procedencia) REFERENCES skills(id)
)
;

CREATE TABLE efectos  (
    id INT auto_increment,
    nombre VARCHAR(20),
    descripcion VARCHAR(100),
    PRIMARY KEY (id)
)
;

CREATE TABLE eventos(
    id INT auto_increment,
    tipo VARCHAR(20),
    nombre VARCHAR(30),
    descripcion VARCHAR(200),
    PRIMARY KEY (id)
)
;

CREATE TABLE cartas  (
    id INT auto_increment,
    img VARCHAR(20),  
    nombre VARCHAR(20),
    rareza VARCHAR(3),
    tipo VARCHAR(3),
    Efecto_U VARCHAR(200),    
    PRIMARY KEY (id)
)
;

CREATE TABLE skillsCartasEventos (
    idCarta VARCHAR(20),
    idEvento VARCHAR(30),
	FOREIGN KEY (idCarta) REFERENCES cartas(id),
    FOREIGN KEY (idEvento) REFERENCES eventos(id)
)
;

CREATE TABLE skillsCartas (
    idCarta VARCHAR(20),
    idSkill VARCHAR(30),
	FOREIGN KEY (idCarta) REFERENCES cartas(id),
    FOREIGN KEY (idSkill) REFERENCES skills(id)
)
;