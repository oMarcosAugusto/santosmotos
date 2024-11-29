document.querySelectorAll('.carousel_comprar').forEach((carousel) => {
    const images = carousel.querySelectorAll('img');
    const carouselIndicators = carousel.querySelector('.carousel-indicators_comprar');
    let currentIndex = 0;
    let interval; // Variável para armazenar o intervalo

    // Gerar as bolinhas dinamicamente
    for (let i = 0; i < images.length; i++) {
        const dot = document.createElement('div');
        dot.classList.add('dot_comprar');
        carouselIndicators.appendChild(dot);
    }

    const dots = carouselIndicators.querySelectorAll('.dot_comprar');

    function showImage(index) {
        images.forEach((image, i) => {
            image.classList.remove('active_comprar');
            dots[i].classList.remove('active_comprar');
        });
        images[index].classList.add('active_comprar');
        dots[index].classList.add('active_comprar');
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    function startCarousel() {
        if (!interval) {
            interval = setInterval(nextImage, 2000); // Cada 3 segundos, muda a imagem automaticamente
        }
    }

    function stopCarousel() {
        if (interval) {
            clearInterval(interval);
            interval = null;
        }
    }

    // Inicia o carrossel para o primeiro item
    showImage(currentIndex);

    // Adiciona os eventos de mouseover e mouseout
    carousel.addEventListener('mouseover', () => {
        startCarousel(); // Inicia o carrossel ao passar o mouse
    });

    carousel.addEventListener('mouseout', () => {
        stopCarousel(); // Para o carrossel ao remover o mouse
    });
});
