'use strict';

console.log('TRUUUCCCO');

//Variaveis
let firstName = 'eu';
let lastName = 'mesmo';

console.log(firstName,lastName);

let preco = 30;
preco = 20;
const precoDois = 50;
console.log(preco,precoDois);

//Objetos
let caneta = {
    itemNome: 'bic',
    itemPreco: 30,
    itemDisponivel: true,
    itemCor: 'Vermelho'
}

caneta.itemCor = 'Azul';

console.log(caneta);

//Arrays
let lista = [1,2,3,4,5];
console.log(lista);

//funções
function validacaoVendas(status) {
    console.log('Vai na fé: ' + status );
}

validacaoVendas('que vai da certo!');

function disconto(valor,descont) {
    let precoFinal = valor - (valor * descont);
    return precoFinal;    
}

console.log(disconto(100,0.1));

//Incremento e Decremento
let numA = 1;
let numB = 2;
let totalAB = numA + numB;

console.log(totalAB);
console.log(++totalAB);
console.log(totalAB++);
console.log(--totalAB);
console.log(totalAB--);
console.log(totalAB);

//lambda > redução de código IF
let driver = 90;
//IF(){cod}else{cod};
let speed = driver > 100 ? 'Acima' : 'Below';
console.log(speed);

//condicional IF
let driverA = 100;
if (driver >= 100) {
    console.log('Vai bater!');
} else {
    console.log('Vai suave!');
}; 

//switch
let nomeAero = 'JFK';

switch (nomeAero) {
    case 'JFK':
        console.log('Rico');
        break;
    case 'GUA':
        console.log('Hummm');
        break;
    case 'JAM':
        console.log('Maconhaa');
        break;

    default:
        console.log('Oi??');
        break;
}

//for
let fimFor = 10;
//padrão
for (let iniFor = 0; iniFor <= fimFor; iniFor++) {
    console.log('Magia: ' + iniFor)
};

//em conjunto com objeto
for (let i in caneta) {
    console.log(i, caneta[i]);

}

//For Of em listas ou objetos, traz o valor direto do parâmetro
let numLista = [1,2,3,4];
for (const i of numLista) {
    console.log(i);
}

//alteração do texto
let idTextoPadrao = document.getElementById('textoPadrao'); //localiza o elemento do html
console.log(idTextoPadrao); // só demonstra no log
idTextoPadrao.innerHTML = 'seila'; // altera o valor do elemento

let idTesteAdd = document.getElementById('testeAdd').innerHTML = 'Added';
console.log(idTesteAdd);

//OOP

const livros = {
    livroNome: 'Não Sei',
    livroAutor: 'Boa pergunta',
    livroPagina: 1000,
    livroEdicao: 666,
    livroCaptulos:{
        cap1: '1 mesmo',
        cap2: '2 sempre',
        cap3: '3 ....'
    },
    imprimir: function (){
        console.log('sem imaginação é osso.....');
    }
}

console.log(livros);
livros.imprimir();

//factory > classe?
//similar a classe precisa lembrar de dar return para "armazenar"
function livrosFactory(nome, autor, paginas) {
    const livroDetail = {
        lvNome: nome,
        lvautor: autor,
        lvpag: paginas,
        lvImprime: function (){
            console.log('Imprimindo o mundo...');
        }
    }
    return livroDetail;
}

const livroUm = livrosFactory('teste','testado',100);
livroUm.lvCor = 'Branco';
const livroDois = livrosFactory('teste1','testado2',200);
console.log(livroUm);
console.log(livroDois);
livroUm.lvImprime();

//Construtores
//Usa Pascal notation para nome, cada palavra com letra maiuscula
//usa o THIS e não é necessário return
function CriaLivro(nome, autor, paginas) {
    this.lvNome = nome;
    this.lvAutor = autor;
    this.lvpag = paginas;    
}

const livroTres = new CriaLivro('teste3','testado3',300);
console.log(livroTres);

//built-in methods
let numLista2 = [1231,1412,212,4512,123,412,2314];

let minimo = Math.min(...numLista2);
console.log(minimo);

//usando prompt
let msgDigitado = Number(prompt('Digita algo ai filhão: '));

//usando if
if(isNaN(msgDigitado)){
    document.getElementById('digitado').innerHTML = 'Não é numero!';
} else if (msgDigitado >= 50) {
    document.getElementById('digitado').innerHTML = 'Maior ou igual que 50';
}else{
    document.getElementById('digitado').innerHTML = 'Menor que 50';
}

console.log(msgDigitado);
console.log(typeof(msgDigitado));

//usando function
function validaValor(valor) {
    let retornoValor = '';
    if(isNaN(msgDigitado)){
        retornoValor = 'Não é numero!';
    } else if (msgDigitado >= 50) {
        retornoValor = 'Maior ou igual que 50';
    }else{
        retornoValor = 'Menor que 50';
    }
    return retornoValor;
}

document.getElementById('digitado2').innerHTML = validaValor(msgDigitado);

//uso de find em textos
//array 
let objtFilme = [
    {id: 1, nome: 'Sei la'},
    {id: 2, nome: 'Menos ainda'},
    {id: 3, nome: 'É talvez'},
    {id: 4, nome: 'Vemos isso'}
];

console.log(objtFilme);

let msgDigitado1 = prompt('Procura filme: ');

console.log(typeof(msgDigitado1));
console.log(msgDigitado1);

//detalhado
console.log(objtFilme.find(function (filme) {
    return filme.nome == msgDigitado1;
    } ) );

//resumido com arrow
console.log(objtFilme.find(filme => filme.nome == msgDigitado1));

 
//inclusão de um gráfico simples
const ctx = document.getElementById('graficoBarras').getContext('2d');
let meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril','Maio','Junho','Julho', 'Agosto'];
let valores = [120, 190, 300, 150, 200, 75, 50, 80];
let cores = ['#3498db']//, '#e74c3c', '#2ecc71', '#f1c40f','#f1c4','rgba(241, 255, 238, 0.8)'];
const grafico = new Chart(ctx, {
    type: 'line',
    data: {
    labels: meses,
    datasets: [{
        label: 'Vendas (em unidades)',
        data: valores,
        backgroundColor: cores,          
        borderColor: '#333',
        hoverBackgroundColor: '#555',
        pointStyle: 'rect',
        borderWidth: 1
    }]
    },
    options: {
    responsive: true,
    scales: {
        y: {
        beginAtZero: true
        }
    }
    }
});