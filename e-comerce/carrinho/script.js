let carrinho = [];
let tbody = document.getElementById('listaDeProdutos');
let produto1 = document.getElementById('')

function adicionarAoCarrinho88() {

        for (let i = 0; i < carrinho.length; i++) {
            let tr = tbody.insertRow()

            let td_inc = tr.insertCell()
            let td_preco = tr.insertCell()
            let td_quantidade = tr.insertCell()
            let td_remove = tr.insertCell()
        } 
    }

window.onload = function nadaNoCarrinho() {
    if (carrinho.length === 0) {
        tbody.innerHTML = '<p id="paragrafo">Nenhum produto no carrinho</p>';

}
}