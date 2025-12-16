//import {cartas} from "Cards.js";
//import {efectos} from "Cards.js";
//import {skills} from "Cards.js";

imgCards_select()

//eventos
let select = document.querySelectorAll('.card')
let active = null;

//selección de cartas
select.forEach(img => {
    img.addEventListener('click', () => {
        if (active === img) {
            if (active.id == 'card5')
                active.src = 'img/cards/card_friend.png'
            else
                active.src = 'img/cards/card.png'
            active = null
            return;
        }

        if (active != null && active != img) {
            if (active.id == 'card5')
                active.src = 'img/cards/card_friend.png'
            else
                active.src = 'img/cards/card.png'
        }

        img.src = 'img/cards/card_selec.png'

        active = img
    });
});

//cargar suports
function cargarSupports_R() {
    let c=1;
    let Selec_Carta;

    Selec_Carta = document.createElement('img');
    Selec_Carta.src = 'img/supports/support_card_s_' + c+1000 + '.png';
    Selec_Carta.classList.add('support_card');
    Selec_Carta.id = 'support_card' + c;
    document.querySelector('.container_Supportcards').appendChild(Selec_Carta);
}
function cargarSupports_SR() {

}
function cargarSupports_SSR() {

}

function imgCards_select() {
    let c = 0;
    let Selec_Carta;

    while (c < 6) {
        if (c != 5) {
            Selec_Carta = document.createElement('img');
            Selec_Carta.src = 'img/cards/card.png';
            Selec_Carta.classList.add('card');
            Selec_Carta.id = 'card' + c;
            document.querySelector('.container_Selectcards').appendChild(Selec_Carta);
            c++
        }
        else {
            Selec_Carta = document.createElement('img');
            Selec_Carta.src = 'img/cards/card_friend.png';
            Selec_Carta.classList.add('card');
            Selec_Carta.id = 'card' + c;
            document.querySelector('.container_Selectcards').appendChild(Selec_Carta);
            c++
        }
    }
}

function cargarEfectosCartas() {
}

function imgAtributes() {
}



