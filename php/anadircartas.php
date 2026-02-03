<!DOCTYPE html>
<html>

<head>
    <style>
        header {
            margin: 10px;
            grid-column: 1 / span 2;

            display: flex;
            justify-content: space-evenly;
        }

        .container {
            display: flex;
            flex-wrap: nowrap;
        }

        .cartas {
            display: flex;
            flex-direction: column;
        }

        form#principal_form {
            padding: 10px;
            margin: 5px;
            background-color: lightsteelblue;
        }

        input[type="radio"] {
            display: none;
        }

        img {
            width: 48px;
            height: 48px;
            filter: saturate(0);
        }

        .rareza {
            width: 88px;
            height: 36px;
        }

        .aptitudes {
            width: 76px;
            height: 21px;
            border-radius: 5px;
        }

        img:hover {
            filter: saturate(0.5);
        }

        input[type="radio"]:checked+img {
            filter: saturate(1);
        }

        .description {
            height: 100px;
        }
    </style>

    <?php
    session_start();
    // Inicializar las cadenas de sesión si no existen
    if (!isset($_SESSION["cadenaCartas"])) {
        $_SESSION["cadenaCartas"] = "INSERT INTO cartas VALUES ";
    }
    if (!isset($_SESSION["cadenaEfectos"])) {
        $_SESSION["cadenaEfectos"] = "INSERT INTO efectos VALUES ";
    }
    if (!isset($_SESSION["cadenaSkills"])) {
        $_SESSION["cadenaSkills"] = "INSERT INTO skills VALUES ";
    }
    // Procesar los formularios enviados
    if (isset($_POST["env_carta"])) {
        $_SESSION["cadenaCartas"] .= "(\"" . $_POST["nomCarta"] . "\", 
                                    \"" . $_POST["img"] . "\"),";
    }

    if (isset($_POST["env_efecto"])) {
        $_SESSION["cadenaEfectos"] .= "(\"" . $_POST["nomEfecto"] . "\", 
                                    \"" . $_POST["desEfecto"] . "\"),";
    }

    if (isset($_POST["env_skill"])) {
        $_SESSION["cadenaSkills"] .= "(\"" . $_POST["nomSkill"] . "\",
                                    \"" . $_POST["descripcion"] . "\",
                                    \"" . $_POST["Skills"] . "\",
                                    \"" . $_POST["aptitud"] . "\",
                                    \"" . $_POST["rareza"] . "\"),";
    }

    ?>
    <header>
        <a href="../index.html">Inicio</a>
        <a href="../index.html">Foros</a>
        <a href="http://localhost/Uma/php/anadircartas.php">Añadir</a>
        <div>
            <input type="checkbox" id="modo_oscuro">
            <label for="modo_oscuro" id="modo_oscuro">Modo oscuro</label>
        </div>
    </header>
</head>

<body>
    <div class="container">
        <form method="post" class="cartas" id="principal_form">
            <div>
                <h1>Cartas</h1>
                imagen<br>
                <input type="file" name="img"><br>
                nombre<br>
                <input type="text" name="nomCarta"><br>
                rareza<br>
                <div>
                    <label>
                        <input type="radio" value="R" name="rareza">
                        <img src="../img/types/r.png" class="rareza">
                    </label>
                    <label>
                        <input type="radio" value="SR" name="rareza">
                        <img src="../img/types/sr.png" class="rareza">
                    </label>
                    <label>
                        <input type="radio" value="SSR" name="rareza">
                        <img src="../img/types/ssr.png" class="rareza">
                    </label>
                </div>
                tipos
                <div>
                    <label>
                        <input type="radio" value="vel" name="tipos">
                        <img src="../img/types/vel.png">
                    </label>
                    <label>
                        <input type="radio" value="sta" name="tipos">
                        <img src="../img/types/sta.png">
                    </label>
                    <label>
                        <input type="radio" value="str" name="tipos">
                        <img src="../img/types/str.png">
                    </label>
                    <label>
                        <input type="radio" value="gut" name="tipos">
                        <img src="../img/types/gut.png">
                    </label>
                    <label>
                        <input type="radio" value="wit" name="tipos">
                        <img src="../img/types/wit.png">
                    </label>
                    <label>
                        <input type="radio" value="tra" name="tipos">
                        <img src="../img/types/tra.png">
                    </label>
                    <label>
                        <input type="radio" value="fri" name="tipos">
                        <img src="../img/types/fri.png">
                    </label>
                </div>

                efecto unico 1
                <select class="efectos">
                </select>
                <br>
                efecto unico 2
                <select class="efectos">
                </select>

                <br>
                <br>

                <div>
                    Efectos
                    <select id="efectos" class="efectos" name="efecto">
                    </select>
                    <input type="button" name="añadir_efecto" id="añadir_efecto" value="Añadir">

                    <ol id="efectos_seleccionados"></ol>
                </div>
                <div>
                    <form method="post">
                        skills
                        <select class="skills">
                        </select>
                    </form>
                </div>
                <div>
                    <form method="post">
                        <input type="submit" name="env_carta">
                        <br>
                        <input type="reset" value="Limpiar">
                    </form>
                </div>
            </div>

        </form>

        <form method="post" id="principal_form">
            <h1>Efectos</h1>
            nombre<br>
            <input type="text" name="nomEfecto"><br>
            descripcion<br>
            <textarea class="description" name="desEfecto"></textarea><br>
            <input type="submit" name="env_efecto">
            <br>
            <input type="reset" value="Limpiar">
        </form>

        <form method="post" id="principal_form">
            <h1>Skills</h1>
            nombre<br>
            <input type="text" name="nomSkill"><br>
            descripcion<br>
            <textarea class="description" name="descripcion"></textarea><br>
            <div>
                <label>
                    <input type="radio" value="R" name="rareza">
                    <img src="../img/types/r.png" class="rareza">
                </label>
                <label>
                    <input type="radio" value="SR" name="rareza">
                    <img src="../img/types/sr.png" class="rareza">
                </label>
            </div>
            <b>pasivas</b>
            <div>
                <label>
                    <input type="radio" class="pasivas" value="Runner" name="Skills">
                    <img src="../img/skills/runner.png">
                </label>
                <label>
                    <input type="radio" class="pasivas" value="Track" name="Skills">
                    <img src="../img/skills/track.png">
                </label>
                <label>
                    <input type="radio" class="pasivas" value="Ground" name="Skills">
                    <img src="../img/skills/ground.png">
                </label>
                <label>
                    <input type="radio" class="pasivas" value="Climate" name="Skills">
                    <img src="../img/skills/climate.png">
                </label>
                <label>
                    <input type="radio" class="pasivas" value="Strategy" name="Skills">
                    <img src="../img/skills/strategy.png">
                </label>
                <label>
                    <input type="radio" class="pasivas" value="Lucky" name="Skills">
                    <img src="../img/skills/Lucky.png">
                </label>
            </div>

            <b>recover</b><br>
            <label>
                <input type="radio" class="pasivas" value="recover" name="Skills">
                <img src="../img/skills/recover.png">
            </label>
            <br>
            <b>buffs</b><br>
            <div>
                <label>
                    <input type="radio" class="buffs" value="speed" name="Skills">
                    <img src="../img/skills/speed.png">
                </label>
                <label>
                    <input type="radio" class="buffs" value="acceleration" name="Skills">
                    <img src="../img/skills/acceleration.png">
                </label>
                <label>
                    <input type="radio" class="buffs" value="navigation" name="Skills">
                    <img src="../img/skills/navigation.png">
                </label>
                <label>
                    <input type="radio" class="buffs" value="focus" name="Skills">
                    <img src="../img/skills/focus.png">
                </label>
                <label>
                    <input type="radio" class="buffs" value="buffview" name="Skills">
                    <img src="../img/skills/buffview.png">
                </label>
            </div>
            <b>debuffs</b><br>
            <div>
                <label>
                    <input type="radio" class="debuffs" value="Hesitant" name="Skills">
                    <img src="../img/skills/hesitant.png">
                </label>
                <label>
                    <input type="radio" class="debuffs" value="Movement" name="Skills">
                    <img src="../img/skills/movement.png">
                </label>
                <label>
                    <input type="radio" class="debuffs" value="Frenzied" name="Skills">
                    <img src="../img/skills/frenzied.png">
                </label>
                <label>
                    <input type="radio" class="debuffs" value="Disturb" name="Skills">
                    <img src="../img/skills/disturb.png">
                </label>
                <label>
                    <input type="radio" class="debuffs" value="debuffview" name="Skills">
                    <img src="../img/skills/debuffview.png">
                </label>
            </div>
            <b>debilidades</b>
            <div>
                <label>
                    <input type="radio" class="debilidades" value="acceleration0" name="Skills">
                    <img src="../img/skills/acceleration0.png">
                </label>
                <label>
                    <input type="radio" class="debilidades" value="climate0" name="Skills">
                    <img src="../img/skills/climate0.png">
                </label>
                <label>
                    <input type="radio" class="debilidades" value="focus0" name="Skills">
                    <img src="../img/skills/focus0.png">
                </label>
                <label>
                    <input type="radio" class="debilidades" value="recover0" name="Skills">
                    <img src="../img/skills/recover0.png">
                </label>
                <label>
                    <input type="radio" class="debilidades" value="speed0" name="Skills">
                    <img src="../img/skills/speed0.png">
                </label>
                <label>
                    <input type="radio" class="debilidades" value="strategy0" name="Skills">
                    <img src="../img/skills/strategy0.png">
                </label>
                <label>
                    <input type="radio" class="debilidades" value="track0" name="Skills">
                    <img src="../img/skills/track0.png">
                </label>
            </div>
            <br>
            <div>
                <b>Pista</b>
                <div>
                    <label>
                        <input type="radio" value="dirt" name="aptitud">
                        <img src="../img/types/dirt.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="turf" name="aptitud">
                        <img src="../img/types/turf.png" class="aptitudes">
                    </label>
                </div>
                <b>estrategia</b>
                <div>
                    <label>
                        <input type="radio" value="front" name="aptitud">
                        <img src="../img/types/front.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="pace" name="aptitud">
                        <img src="../img/types/pace.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="late" name="aptitud">
                        <img src="../img/types/late.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="end" name="aptitud">
                        <img src="../img/types/end.png" class="aptitudes">
                    </label>
                </div>
                <b>distancia</b>
                <div>
                    <label>
                        <input type="radio" value="sprint" name="aptitud">
                        <img src="../img/types/sprint.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="mile" name="aptitud">
                        <img src="../img/types/mile.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="medium" name="aptitud">
                        <img src="../img/types/medium.png" class="aptitudes">
                    </label>
                    <label>
                        <input type="radio" value="long" name="aptitud">
                        <img src="../img/types/long.png" class="aptitudes">
                    </label>
                </div>
            </div>
            <input type="submit" name="env_skill">
            <br>
            <input type="reset" value="Limpiar">
        </form>

        <form action="datos.php" method="post" id="principal_form">
            <input type="submit" name="terminar">
        </form>
    </div>
    <script src="../js/form.js"></script>
</body>

</html>