let numero=2;

const colors = ['#6fc53d','#a1caff', '#f6f655', '#d8d8d8'];

function mudarPlanoDeFundo(numero){
    const fundo=document.querySelector('header');
    fundo.style['background-image']=`url('img/bg-header-${numero}.png')`;
}

function mudarCor(numero){
    const tituloPrincipal = document.querySelector('#titulo-principal h1');
    tituloPrincipal.style['color'] = colors[numero-1];
}

function atualizarFundo(){
    mudarPlanoDeFundo(numero);
    mudarCor(numero)
    if(numero===4)numero=1;else numero++;
}

setInterval(atualizarFundo,2500);

const openNav = $('#open-nav span');
const closeNav = $('#close-nav');
const nav = $('nav');

openNav.on('click', function(){
    $(nav).animate(
        {
            width:'toggle'
        }
    )
    document.querySelector('nav').style.display = 'flex';
});

closeNav.on('click', function(){
    $(nav).animate(
        {
            width:'toggle'
        }
    )
});



