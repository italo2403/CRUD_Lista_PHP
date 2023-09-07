// No JavaScript da index.html
function mostrar() {
    let cad = document.querySelector('#nome').value;
    // Redirecione para a teste.html passando o valor como parâmetro na URL
    window.location.href = `teste.html?nome=${cad}`;
}
const urlParams = new URLSearchParams(window.location.search);
    const nome = urlParams.get('nome');
    document.querySelector('#mostrar').textContent = nome;