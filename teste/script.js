document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card_comprar");

  // Função para iniciar o carrossel
  function startCarousel(card) {
      const images = card.querySelectorAll(".carousel_comprar img");
      const dots = card.querySelectorAll(".dot_comprar");
      let currentIndex = 0;

      // Função para atualizar a imagem
      function updateImage() {
          images.forEach((img, index) => {
              img.classList.remove("active_comprar");
              dots[index].classList.remove("active");
          });

          images[currentIndex].classList.add("active_comprar");
          dots[currentIndex].classList.add("active");
      }

      // Navegação automática
      const interval = setInterval(() => {
          currentIndex = (currentIndex + 1) % images.length;
          updateImage();
      }, 3000);

      // Funcionalidade de clique nas bolinhas
      dots.forEach((dot, index) => {
          dot.addEventListener("click", function () {
              clearInterval(interval); // Para a navegação automática
              currentIndex = index;
              updateImage();
          });
      });

      // Parar o carrossel quando o mouse sai do card
      card.addEventListener("mouseleave", function () {
          clearInterval(interval); // Para o carrossel quando o mouse sai
      });

      // Iniciar o carrossel
      updateImage();
  }

  // Adicionar o evento de mouse enter
  cards.forEach(card => {
      card.addEventListener("mouseenter", function () {
          startCarousel(card); // Inicia o carrossel ao passar o mouse sobre o card
      });
  });
});
