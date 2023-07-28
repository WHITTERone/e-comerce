let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
let nomeDoProduct = document.querySelector("#nomeProduct");
let descDoProdct = document.querySelector("#descDoProdct");
let PreçoDoProduct = document.querySelector("#PreçoDoProduct");
let navega = document.querySelector('.navegação')
  
function slider(anything) {
    document.querySelector('.one').src = anything;
    nomeDoProduct.innerHTML = "Redragon HYLAS H260 RGB Gaming Cor Preto" // nome do produto
    PreçoDoProduct.innerHTML = "R$ 121,20" // preço do produto

};

function slider2(anything) {
    document.querySelector('.one').src = anything;
    nomeDoProduct.innerHTML = "Redragon HYLAS H260 RGB Gaming Cor Branco" // nome do produto
    PreçoDoProduct.innerHTML = "R$ 126,81" // preço do produto

};

function slider3(anything) {
    document.querySelector('.one').src = anything;
    nomeDoProduct.innerHTML = "Headset Gamer RGB" // nome do produto
    PreçoDoProduct.innerHTML = "R$ 150,20" // preço do produto

};

function slider4(anything) {
    document.querySelector('.one').src = anything;
    nomeDoProduct.innerHTML = "Headset Gamer RGB" // nome do produto
    PreçoDoProduct.innerHTML = "R$ 150,20" // preço do produto

};

function slider5(anything) {
    document.querySelector('.one').src = anything;
    nomeDoProduct.innerHTML = "Headset Gamer RGB" // nome do produto
    PreçoDoProduct.innerHTML = "R$ 150,20" // preço do produto

};

function slider6(anything) {
    document.querySelector('.one').src = anything;
    nomeDoProduct.innerHTML = "Headset Gamer RGB" // nome do produto
    PreçoDoProduct.innerHTML = "R$ 150,20" // preço do produto

};

function mais(anything) {
    document.querySelector('.row4').style.display = 'inline-flex'
    document.querySelector('.row5').style.display = 'inline-flex'
    document.querySelector('.row6').style.display = 'inline-flex'
    document.querySelector('.row3').style.display = 'none'
    document.querySelector('.row2').style.display = 'none'
    document.querySelector('.row').style.display = 'none'
    document.querySelector('.mais-opcoes').style.display = 'none'
    document.querySelector('.menos-opcoes').style.display = 'flex'

}

function menos(anything) {
    document.querySelector('.row4').style.display = 'none'
    document.querySelector('.row5').style.display = 'none'
    document.querySelector('.row6').style.display = 'none'
    document.querySelector('.row3').style.display = 'inline-flex'
    document.querySelector('.row2').style.display = 'inline-flex'
    document.querySelector('.row').style.display = 'inline-flex'
    document.querySelector('.mais-opcoes').style.display = 'flex'
    document.querySelector('.menos-opcoes').style.display = 'none'
}

class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${
            index / 7 + 0.3
          }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
);
mobileNavbar.init();