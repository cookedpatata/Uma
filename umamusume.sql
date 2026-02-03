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
    nombre VARCHAR(50),
    descripcion VARCHAR(200),
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
    PRIMARY KEY (id)
)
;

CREATE TABLE efectosCartas (
    idEfecto int,
    idCarta int,
    FOREIGN KEY (idEfecto) REFERENCES efectos(id),
    FOREIGN KEY (idCarta) REFERENCES cartas(id)
)
;

CREATE TABLE efectosUnicosCartas (
    idEfecto int,
    idCarta int,
    FOREIGN KEY (idEfecto) REFERENCES efectos(id),
    FOREIGN KEY (idCarta) REFERENCES cartas(id)
)
;


CREATE TABLE eventosCartas (
    idCarta int,
    idEvento int,
	FOREIGN KEY (idCarta) REFERENCES cartas(id),
    FOREIGN KEY (idEvento) REFERENCES eventos(id)
)
;

CREATE TABLE skillsCartas (
    idCarta int,
    idSkill int,
	FOREIGN KEY (idCarta) REFERENCES cartas(id),
    FOREIGN KEY (idSkill) REFERENCES skills(id)
)
;

INSERT INTO efectos (id,nombre,descripcion) VALUES 
(1,'Bonus de amistad','Incrementa la efectividad del entrenamiento de amistad'),
(2,'Estado de animo','Puede aumentar el animo al entrenar juntos'),
(3,'Bono de velocidad','Aumenta la cantidad de velocidad que ganas al entrenar juntos'),
(4,'Bono de estamina','Aumenta la cantidad de estamina que ganas al entrenar juntos'),
(5,'Bono de fuerza','Aumenta la cantidad de fuerza que ganas al entrenar juntos'),
(6,'Bono de valor','Aumenta la cantidad de valor que ganas al entrenar juntos'),
(7,'Bono de ingenio','Aumenta la cantidad de ingenio que ganas al entrenar juntos'),
(8,'Efectividad de entrenamiento','aumenta la efectividad al entrenar juntos'),
(9,'Velocidad inicial','Aumenta la velocidad que tienes al inicio de tu carrera'),
(10,'Estamina inicial','Aumenta la estamina que tienes al inicio de tu carrera'),
(11,'Poder inicial','Aumenta el poder que tienes al inicio de tu carrera'),
(12,'Valor inicial','Aumenta el valor que tienes al inicio de tu carrera'),
(13,'Ingenio inicial','Aumenta el ingenio que tienes al inicio de tu carrera'),
(14,'Bono de carrera','Aumenta la ganancia de estadísticas de las carreras '),
(15,'Bono de fans','Aumenta la cantidad de fans que ganas al terminar una carrera'),
(16,'Niveles de pistas','Aumenta el nivel de las pistas que se ganan a través de eventos'),
(17,'Frecuencia de pistas','Aumenta la frecuencia con la que aparecen los eventos con pistas'),
(18,'Prioridad de especialidad','Aumenta la frecuencia con la que los personajes aparecen en su tipo de entrenamiento favorito'),
(19,'Evento de descanso','Aumenta cuanta energía recuperas con los eventos de esta carta'),
(20,'Efectividad de eventos','Aumenta la cantidad de estadísticas que ganas con los eventos de esta carta'),
(21,'Protección de fallo','Disminuye la probabilidad de fallar al entrenar'),
(22,'Ahorro de energia','Disminuye la cantidad de energía que gastas al entrenar juntos'),
(23,'Bonus de puntos de habilidad','Aumenta los puntos de habilidad al entrenar juntos'),
(24,'Recuperación de energía ingeniosa','Aumenta la energía que recuperas al entrenar en ingenio juntos');