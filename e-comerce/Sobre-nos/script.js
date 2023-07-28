let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let nomeDoProduct = document.querySelector("#nomeProduct")
let descDoProdct = document.querySelector("#descDoProdct")
let PreçoDoProduct = document.querySelector("#PreçoDoProduct")

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open');
}

function openPhone(anything) {
    document.querySelector('.navegação').style.width = '50%';
    document.querySelector('.bx-x').style.display = 'flex';
    document.querySelector('.bx-menu').style.display = 'none';
    document.querySelector('.content').style.display = 'flex';
    document.querySelector('.content2').style.display = 'flex';
    document.querySelector('.content3').style.display = 'flex';
    document.querySelector('.content4').style.display = 'flex';
    document.querySelector('.content').style.opacity = '100%';
    document.querySelector('.content2').style.opacity = '100%';
    document.querySelector('.content3').style.opacity = '100%';
    document.querySelector('.content4').style.opacity = '100%';

}

function closePhone(anything) {
    document.querySelector('.navegação').style.width = '0%';
    document.querySelector('.bx-menu').style.display = 'flex';
    document.querySelector('.bx-x').style.display = 'none';
    document.querySelector('.content').style.display = 'none';
    document.querySelector('.content2').style.display = 'none';
    document.querySelector('.content3').style.display = 'none';
    document.querySelector('.content4').style.display = 'none';
}