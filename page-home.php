<?php
// Template Name: Home
?>

<?php get_header(); ?>
<body>
    <!-- MENU -->
    <div class="menu">        
    <nav>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logoSantoMotos.svg" alt="Logo Santos Motos">
        </div>
        <ul>
            <li class="menu_home selected"><a href="/home">HOME</a></li>
            <li class="dropdown">
                <a class="menu_motos" href="#">MOTOS</a>
                <ul class="dropdown-menu">
                <li><a href="/comprar">Comprar</a></li>


                    <li><a href="vender/">Vender</a></li>
                    <li><a href="/trocar">Trocar</a></li>
                </ul>
            </li>
            <li class="menu_sobrenos"><a href="/sobrenos>">SOBRE NÓS</a></li>
            <li class="menu_contato"><a href="/contato/">CONTATO</a></li>
        </ul>
    </nav>    
</div>

    <div class="container">
        <!-- BANNER -->
        <section class="banner">
            <img class="banner_img" src="<?php echo get_template_directory_uri(); ?>/img/banner/novidades.svg" alt="Banner">

            <!-- TEXTO QUE FICARÁ FIXO NO BANNER -->
            <div class="content">
                <h1>AQUI<br> CADA MOTO CONTA UM <br> SONHO, <br> <strong>QUAL SERÁ O SEU?</strong></h1>
                <ul class="highlights">
                    <li>MAIS DE 10 <br> ANOS DE <br> EXPERIÊNCIA</li>
                    <br>
                    <li>PROCEDÊNCIA E <br> CONFIANÇA</li>
                    <br>
                    <li>PROFISSIONAIS <br> CAPACITADOS</li>
                </ul>            
            </div>
        </section>

        <!-- CONTEÚDO -->
        <section class="conteudo">
            <!-- Carrossel -->
            <div class="carousel-container">
                <button class="carousel-button prev" id="prevBtn">&#10094;</button>
                    <div class="carousel">
                        <?php 
                            $galeria_motos = get_post_meta(get_the_ID(), 'galeria_motos', true);

                            if (!empty($galeria_motos)) {
                                foreach ($galeria_motos as $moto) {
                                    if (!empty($moto['foto_moto'])) {
                                        ?>
                                        <div class="carousel-item">
                                            <img src="<?php echo esc_url($moto['foto_moto']); ?>" alt="Foto da Moto">
                                        </div>
                                        <?php
                                    }
                                }
                            } else {
                                echo '<div class="carousel-item"><p>Nenhuma imagem disponível.</p></div>';
                            }
                        ?>
                    </div>
                <button class="carousel-button next" id="nextBtn">&#10095;</button>
        </div>



            <div class="btn-container">
                <a href="#" class="btn">Confira as novidades</a>
            </div>
            <a href="https://wa.me/message/H3GLRA6CMSWJO1" class="whatsapp-icon" target="_blank">WhatsApp</a>
        </section>

        <?php get_footer(); ?>

