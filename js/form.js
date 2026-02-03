window.onload = function () {
    cargarEfectos()
    cargarSkills()
}

function cargarEfectos() {
    let efectos = document.getElementsByClassName('efectos');

    fetch("../php/consultas.php?accion=efectos")
        .then(response => response.json())
        .then(data => {
            for (e in efectos) {

                if (e == "length") break;

                data.forEach(element => {
                    let option = document.createElement('option');
                    option.value = element.nombre;
                    option.text = element.nombre;
                    efectos[e].append(option);
                });
            }
        })
        .catch(error => {
            console.error("Error al cargar efectos:", error);
        });
}

function cargarSkills() {
    let skills = document.getElementsByClassName('skills');

    fetch("../php/consultas.php?accion=skills")
        .then(response => response.json())
        .then(data => {
            for (e in skills) {

                if (e == "length") break;

                data.forEach(element => {
                    let option = document.createElement('option');
                    option.value = element.nombre;
                    option.text = element.nombre;
                    efectos[e].append(option);
                });
            }
        })
        .catch(error => {
            console.error("Error al cargar efectos:", error);
        });
}

let arrEfectos = [];
function añadirEfecto() {
    //<li id="efecto">Efecto<input id="efecto" type="button" value="Eliminar"></li>
    let select = document.getElementById('efectos')


    if (arrEfectos.includes(select.value)) {
        alert("Efecto ya añadido");
        return;
    }
    arrEfectos.push(select.value);
    
    if (arrEfectos.length >= 10) {
        alert("No se pueden añadir más de 10 efectos");
        return;
    }

    let del = document.createElement('input')
    del.value = 'Eliminar'
    del.type = 'button'

    del.addEventListener('click', function () {
        // elimina el <li> padre del botón
        arrEfectos = arrEfectos.filter(e => e !== li.id);
        this.parentElement.remove();
    });

    let ol = document.getElementById('efectos_seleccionados');
    let li = document.createElement('li')
    
    li.textContent = select.value
    li.id = select.value

    li.prepend(" ")
    li.prepend(del)
    ol.append(li)
}

document.getElementById("añadir_efecto").addEventListener("click", añadirEfecto);




