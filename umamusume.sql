CREATE database uma;

use uma;

CREATE TABLE skills  (
    id INTEGER,
    nombre VARCHAR (30),
    descipcion VARCHAR (200),
    skill VARCHAR (20),
    aptitud VARCHAR (10),
    rareza VARCHAR (2),
    procedencia VARCHAR(20),
    PRIMARY KEY (id),
    constraint procskill_fk FOREIGN KEY (procedencia) REFERENCES skills(nombre)
)
;

CREATE TABLE efectos  (
    id INTEGER,
    nombre VARCHAR(20),
    descipcion VARCHAR(100),
    PRIMARY KEY (id)
)
;

CREATE TABLE eventos(
    id INTEGER,
    tipo VARCHAR(20),
    nombre VARCHAR(30),
    descipcion VARCHAR(200),
    RIMARY KEY (id)
)
;

CREATE TABLE cartas  (
    img VARCHAR(20),  
    nombre VARCHAR(20),
    rareza VARCHAR(3),
    tipo VARCHAR(3),
    Efecto_U VARCHAR(200),    
    PRIMARY KEY (nombre)
)
;

CREATE TABLE skillsCartasEventos (
    nomCarta VARCHAR(20),
    nomSkill VARCHAR(30),
	FOREIGN KEY (nomCarta) REFERENCES cartas(nombre),
    FOREIGN KEY (nomSkill) REFERENCES skills(nombre)
)
;

CREATE TABLE skillsCartas (
    nomCarta VARCHAR(20),
    nomSkill VARCHAR(30),
	FOREIGN KEY (nomCarta) REFERENCES cartas(nombre),
    FOREIGN KEY (nomSkill) REFERENCES skills(nombre)
)
;