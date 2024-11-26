document.addEventListener('DOMContentLoaded', function () {
    const items = document.querySelectorAll('.carousel-item');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let activeIndex = 2; // Define o terceiro item como o inicial (índice 2)

    // Função para atualizar a exibição do carrossel
    function updateCarousel() {
        items.forEach((item, index) => {
            item.classList.remove('active');

            // Adiciona a classe "active" ao item central
            if (index === activeIndex) {
                item.classList.add('active');
            }
        });

        // Ajusta a transição para exibir três imagens ao mesmo tempo
        const offset = -(activeIndex - 1) * 33.33;
        document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
    }

    // Função para mover o carrossel
    function moveCarousel(direction) {
        activeIndex += direction;

        // Circula o índice
        if (activeIndex < 0) {
            activeIndex = items.length - 1;
        } else if (activeIndex >= items.length) {
            activeIndex = 0;
        }

        updateCarousel();
    }

    // Inicializa o carrossel
    updateCarousel();

    // Eventos para os botões de navegação
    prevBtn.addEventListener('click', function () {
        moveCarousel(-1);
    });

    nextBtn.addEventListener('click', function () {
        moveCarousel(1);
    });

    // Alternância automática do carrossel (opcional)
    setInterval(() => {
        moveCarousel(1);
    }, 3000);
});



console.log("Largura da tela:", window.innerWidth);
console.log("Altura da tela:", window.innerHeight);

