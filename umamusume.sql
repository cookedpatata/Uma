CREATE database uma;

use uma;

CREATE TABLE skills  (
    nombre VARCHAR (20),
    descipcion VARCHAR (100),
    skill VARCHAR (20),
    aptitud VARCHAR (10),
    rareza VARCHAR (2),
    mejora VARCHAR(20),
    PRIMARY KEY (nombre),
    constraint mejskill_fk FOREIGN KEY (mejora) REFERENCES skills(nombre)
)
;

CREATE TABLE efectos  (
    nombre VARCHAR(20),
    descipcion VARCHAR(100)
)
;

CREATE TABLE cartas  (
    img VARCHAR(20),
    nombre VARCHAR(20),
    rareza VARCHAR(3),
    tipo VARCHAR(3),
    PRIMARY KEY (nombre)
)
;

CREATE TABLE skillsCartas (
    nomCarta VARCHAR(20),
    nomSkill VARCHAR(20),
	FOREIGN KEY (nomCarta) REFERENCES cartas(nombre),
    FOREIGN KEY (nomSkill) REFERENCES skills(nombre)
)
;