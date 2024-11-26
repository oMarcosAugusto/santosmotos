document.querySelectorAll('.carousel_comprar').forEach((carousel, index) => {
    const images = carousel.querySelectorAll('img');
    const carouselIndicators = carousel.querySelector('.carousel-indicators_comprar');
    let currentIndex = 0;

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

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }

    // Inicia o carrossel para o primeiro item
    showImage(currentIndex);

    // Inicia a navegação automática
    setInterval(nextImage, 3000); // Cada 3 segundos, muda a imagem automaticamente
});

