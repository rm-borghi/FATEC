'use strict';

//função para mover o sidebar
const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.querySelector('.toggle-btn');
const list = document.querySelectorAll('.list-item');

toggleBtn.addEventListener('click',() =>{
    sidebar.classList.toggle('active');
  });

function activeLink(){
    list.forEach((item)=>
        item.classList.remove('active'));    
    location.reload();
    document.cookie = `item=${this.id}`;
    this.classList.add('active');
}

list.forEach((item) => {
    item.addEventListener('click', activeLink);
});

//Função para demonstrar qual valor foi selecionado num elemento SELECT HTML
const meuSelect = document.getElementById('meuSelect');
const valorSelecionado = document.getElementById('valorSelecionado');

if (!meuSelect || !valorSelecionado) {
    console.log('Elemento em branco');
} else {
    meuSelect.addEventListener('change', () => {
        const opcaoSelecionada = meuSelect.options[meuSelect.selectedIndex];
        valorSelecionado.textContent = opcaoSelecionada.value;
    });
}

//função para limpar campos
const limpaDados = () =>{
    document.getElementById('logradouro').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('uf').value = '';
    document.getElementById('complemento').value = '';
}

//função para atribuir os valores de cep aos campos
const preenForm = (dados) => {
    document.getElementById('logradouro').value = dados.logradouro;
    document.getElementById('cidade').value = dados.localidade;
    document.getElementById('bairro').value = dados.bairro;
    document.getElementById('uf').value = dados.uf;
}

//função para validar se o cep digitado tem 8 caracteres e é somente números
const validaCep = (cep) => cep.length == 8 && /^[0-9]+$/.test(cep);

//função para buscar cep na API da VIACEP
const pesquisarCep = async() => {
    limpaDados();
    const cep = document.getElementById('cep').value;
    const api = `http://viacep.com.br/ws/${cep}/json/`;
    if (validaCep(cep))
    {
        const r_api = await fetch(api);
        const dados = await r_api.json();
        if (dados.hasOwnProperty('erro')){            
            alert('CEP não registrado na base Correios.');
        }else {preenForm(dados);}
        //usa métodos de callback e da pane algumas vezes por causa da 'promessa' de retorno
        //fetch(api).then(response => response.json()).then(console.log);
    }else{
        alert('CEP digitado está em formato inválido. Somente números e ter 8 caracteres.');
     }
} 


//função para esperar sair de foco do campo CEP e realizar a busca de CEP
const cepInput = document.getElementById('cep');

cepInput.addEventListener('focusout', () => {
    const cepValue = cepInput.value.trim(); // Remove espaços em branco do início e do fim

    if (cepValue === '') {
        console.log('O campo CEP está vazio.');        
    } else {
        pesquisarCep(cepValue); 
    }
});
