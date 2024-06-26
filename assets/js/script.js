// querySelector(classe ou id HTML) - Busca elemento no HTML
const spinnerWrapperEl = document.querySelector('.spinner-wrapper');


window.addEventListener('load', () => { // Verificação de evento da janela(nesse caso, evento load)
    spinnerWrapperEl.style.opacity = '0'; // Defini opacidade à folha de estilos como 0

    setTimeout(() => {
        spinnerWrapperEl.style.display = 'none'; // Defini o display do CSS como none
    }, 200); // Tempo de carregamento de 200ms(0.2s)
})