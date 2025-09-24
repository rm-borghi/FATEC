'use strict';

//função para pegar o ID para link de aulas
const list = document.querySelectorAll('.lista-aula');

function activeLink(){
    location.reload();
    document.cookie = `item=${this.id}`;
}

list.forEach((item) => {
    item.addEventListener('click', activeLink);
});

