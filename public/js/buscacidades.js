
window.onload = () => {
    const estadoBusca = document.getElementById('estado');
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                estado.innerHTML += `<option value="${item.id}">${item.nome}</option>`;
            })
        })
}
estado.onblur = () => {
    //uma função que busca em uma api todas as cidades do estado selecionado e retorna em um array em javascript puro
    const cidade = document.getElementById('cidade');
    const idEstado = estado.value;
    cidade.innerHTML = `<option value="">Selecione uma cidade</option>`;
    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${idEstado}/municipios`)
        .then(response => response.json())
        .then(data => {
            data.forEach(item => {
                cidade.innerHTML += `<option value="${item.nome}">${item.nome}</option>`;
            });
        })
        
}

