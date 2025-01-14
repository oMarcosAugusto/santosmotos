<?php
// Template Name: Comprar
?>

<?php get_header(); ?>

<body>
    <!-- MENU -->
    <div class="menu_comprar">        
    <nav>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logoSantoMotos.svg" alt="Logo Santos Motos">
        </div>
        <ul>
            <li class="menu_home"><a href="/home/">HOME</a></li>
            <li class="dropdown">
                <a class="menu_motos" href="#">MOTOS</a>
                <ul class="dropdown-menu">
                <li><a href="<?php echo get_permalink( get_page_by_path( 'comprar' ) ); ?>">Comprar</a></li>


                    <li><a href="/vender/">Vender</a></li>
                    <li><a href="<?php echo home_url('/trocar/'); ?>">Trocar</a></li>
                </ul>
            </li>
            <li class="menu_sobrenos"><a href="<?php echo home_url('/sobrenos/'); ?>">SOBRE NÓS</a></li>
            <li class="menu_contato"><a href="<?php echo home_url('/contato/'); ?>">CONTATO</a></li>
        </ul>
    </nav>    
</div>

    <!-- CONTEÚDO -->
    <section class="container_comprar">
        <!-- Card 1 -->
        <div class="card_comprar">
            <div class="carousel_comprar" id="carousel1">
                <!-- Corrigido os caminhos das imagens -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/0fb4f9fe-38bf-419b-8100-7028429c0930.jpg" class="active_comprar" alt="Imagem 1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/12dc96fb-7368-4f0e-bf48-0ae6c1fd604f.jpg" alt="Imagem 2">
                <div class="carousel-indicators_comprar">
                    <div class="dot_comprar"></div>
                    <div class="dot_comprar"></div>
                </div>
            </div>
            <div class="card-content_comprar">
                <div class="card-title_comprar">YAMAHA XMAX ABS</div>
                <div class="card-price_comprar">R$ 31.800</div>
                <div class="card-info_comprar">2024/2024 · 510 Km</div>
                <div class="card-footer_comprar">
                    <a href="#" class="card-button_comprar">Ver parcelas</a>
                    <div class="card-location_comprar">Curitiba - PR</div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card_comprar">
            <div class="carousel_comprar" id="carousel2">
                <!-- Corrigido os caminhos das imagens -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/5f20a9a4-1dc4-47df-b82f-c89fa74ccb22.jpg" class="active_comprar" alt="Imagem 1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/6b13e28a-5a0f-4234-ad36-68fee90e784e.jpeg" alt="Imagem 2">
                <div class="carousel-indicators_comprar">
                    <div class="dot_comprar"></div>
                    <div class="dot_comprar"></div>
                </div>
            </div>
            <div class="card-content_comprar">
                <div class="card-title_comprar">YAMAHA XMAX ABS</div>
                <div class="card-price_comprar">R$ 31.800</div>
                <div class="card-info_comprar">2024/2024 · 510 Km</div>
                <div class="card-footer_comprar">
                    <a href="#" class="card-button_comprar">Ver parcelas</a>
                    <div class="card-location_comprar">Curitiba - PR</div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="card_comprar">
            <div class="carousel_comprar" id="carousel3">
                <!-- Corrigido os caminhos das imagens -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/7b06aeac-f42f-48bb-811a-7f4e12faf561.jpg" class="active_comprar" alt="Imagem 1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/IMG_20241111_112702444.jpg" alt="Imagem 4">
                <div class="carousel-indicators_comprar">
                    <div class="dot_comprar"></div>
                    <div class="dot_comprar"></div>
                </div>
            </div>
            <div class="card-content_comprar">
                <div class="card-title_comprar">YAMAHA XMAX ABS</div>
                <div class="card-price_comprar">R$ 31.800</div>
                <div class="card-info_comprar">2024/2024 · 510 Km</div>
                <div class="card-footer_comprar">
                    <a href="#" class="card-button_comprar">Ver parcelas</a>
                    <div class="card-location_comprar">Curitiba - PR</div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="card_comprar">
            <div class="carousel_comprar" id="carousel4">
                <!-- Corrigido os caminhos das imagens -->
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/IMG_20241111_110459399.jpg" class="active_comprar" alt="Imagem 1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/motos/IMG_20241111_112702444.jpg" alt="Imagem 1">
                <div class="carousel-indicators_comprar">
                    <div class="dot_comprar"></div>
                    <div class="dot_comprar"></div>
                </div>
            </div>
            <div class="card-content_comprar">
                <div class="card-title_comprar">YAMAHA XMAX ABS</div>
                <div class="card-price_comprar">R$ 31.800</div>
                <div class="card-info_comprar">2024/2024 · 510 Km</div>
                <div class="card-footer_comprar">
                    <a href="#" class="card-button_comprar">Ver parcelas</a>
                    <div class="card-location_comprar">Curitiba - PR</div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
