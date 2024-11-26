const carousel = document.querySelector('.carousel_comprar');
const images = document.querySelectorAll('.carousel_comprar img');
const indicators = document.querySelector('.carousel_comprar-indicators');

let currentIndex = 0;
const totalImages = images.length;

// Criar bolinhas dinamicamente
images.forEach((_, index) => {
  const dot = document.createElement('span');
  dot.classList.add('dot');
  if (index === 0) dot.classList.add('active');
  indicators.appendChild(dot);

  // Navegar para a imagem correspondente
  dot.addEventListener('click', () => {
    updateCarousel(index);
  });
});

// Atualizar carrossel
function updateCarousel(index) {
  images[currentIndex].classList.remove('active');
  indicators.children[currentIndex].classList.remove('active');

  currentIndex = index;

  images[currentIndex].classList.add('active');
  indicators.children[currentIndex].classList.add('active');
}

// Navegação automática
setInterval(() => {
  const nextIndex = (currentIndex + 1) % totalImages;
  updateCarousel(nextIndex);
}, 3000); // Troca a cada 3 segundos