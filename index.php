<?php
    //Template Name: Home
    get_header(); 
?>
    
<!--background imagem header e fundo cor #2292c9-->
<section id="bg-hero" class="bg-pagina">
    <div class="container">
        <div class="row align-items-center" style="height: 100vh">
            <div class="col-md-5 col-sm-12">
                <h1 class="text-white">
                    Equilíbrio perfeito
                    entre beleza
                    natural, conforto
                    e comodidade.
                </h1>
                <div class="rounded-pill cta bg-laranja shadow my-auto">
                    <a href="#" class="nav-link text-white size-25" data-toggle="modal" data-target="#exampleModal">
                        Encontre seu novo lugar aqui
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-sm-">
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/familia-delta.png" style="max-width: 100%" >
            </div>
        </div>
        <div class="py-2" id="empreendimento">
            <div class="text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/imagens/seta.png" alt="." style="width:45px;">
            </div>
        </div>
    </div>
</section>
    
    <!----------------------------------------------------------Texto inicial------------------------------------------->
    <section class="bg-pagina" >
        <div class="container py-5">
            <div class="text-white size-25">
                <p>
                    O Delta Maresias é uma multipropriedade que oferece aos usuários a oportunidade de se tornar proprietário de um confortável apartamento 
                    na mais bela praia do Litoral Norte de São Paulo e desfrutar da vida em um autêntico cenário de natureza. 
                </p>
                <p>
                    Localizado à 5 minutos da praia de Maresias, nós te oferecemos um ambiente relaxante, e funcionários atenciosos, para que você possa 
                    gastar menos e aproveitar mais. Temos um estilo de vida que é perfeito para férias ou mesmo para passar apenas alguns dias longe da correria da vida cotidiana.
                </p>
                <p>
                    Tenha a sua própria unidade fracionada em nosso empreendimento e desfrute de um lugar onde você vai encontrar o equilíbrio perfeito entre estilo e lazer.
                </p>
            </div>
        </div>
        
    </section>
    <div class="bg-ondas">
    </div>
    <!-------------------------------------------------------Fim do texto inicial--------------------------------------->
    
    <!--<section>-->
    <!--    <div class="row">-->
    <!--        <div class="owl-carousel owl-theme d-md-none">-->
    <!--            <div class="item"><h4>1</h4></div>-->
    <!--            <div class="item"><h4>2</h4></div>-->
    <!--            <div class="item"><h4>3</h4></div>-->
    <!--            <div class="item"><h4>4</h4></div>-->
    <!--            <div class="item"><h4>5</h4></div>-->
    <!--            <div class="item"><h4>6</h4></div>-->
    <!--            <div class="item"><h4>7</h4></div>-->
    <!--            <div class="item"><h4>8</h4></div>-->
    <!--            <div class="item"><h4>9</h4></div>-->
    <!--            <div class="item"><h4>10</h4></div>-->
    <!--            <div class="item"><h4>11</h4></div>-->
    <!--            <div class="item"><h4>12</h4></div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    

    <!-------------------------------------------------------------Galeria---------------------------------------------->
    <section class="d-none d-md-block">
        <div class="row qualquer" id="galeria">
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/01.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/01.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/02.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/02.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/03.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/03.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/04.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/04.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/05.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/05.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/06.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/06.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/07.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/07.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-md-3 p-0">
                <div class="galeria">
                    <a href="<?php echo get_template_directory_uri(); ?>/imagens/08.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/08.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------------------------Fim da galeria-------------------------------------------->
    
    <section class="d-block d-md-none">
        <!-- Slider main container -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/01.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/03.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/02.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/04.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/05.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/06.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/07.jpg"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/imagens/08.jpg"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>
    
    <section class="bg-folhas" id="lazer">
        <div class="container py-5">
            <div class="pt-2 pb-5">
                <div class="rounded-pill cta bg-laranja shadow mx-auto text-center">
                    <a href="#" class="nav-link text-white size-25" data-toggle="modal" data-target="#exampleModal">
                        Adquira a sua propriedade agora
                    </a>
                </div>
            </div>
            <div class="py-5">
                <div class="row row-col-2 justify-content-around pt-2 pb-5">
                    <div class="col-md-6 col-12">
                        <div class="size-25">
                            <p><strong style="color:#494949">
                                Nossa estrutura foi projetada para proporcionar a você e sua família
                                uma sensação de lar, mas com todo
                                o conforto e comodidade de um hotel.</strong>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/foto01.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="row justify-content-around pt-2 pb-5">
                    <div class="col-md-6 col-12 d-none d-md-block">
                        <!--tamanho 659 x 549 (colocar como bg?)-->
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/foto02.jpg">
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="size-25">
                            <p>
                                Ao se tornar proprietário de um dos nossos apartamentos do Delta Maresias, você e sua família poderão compartilhar um lugar exclusivo rodeado
                                de paz e tranquilidade, junto a uma grande área verde
                                de 7.000 m² que conta com uma incrível área de lazer com Spa Hidro e Sauna, Salão de Jogos, Piscina, Playground e Relaxing Lounge.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-block d-md-none">
                        <!--tamanho 659 x 549 (colocar como bg?)-->
                        <img class="shadow" src="<?php echo get_template_directory_uri(); ?>/imagens/foto02.jpg">
                    </div>
                </div>
            </div>
            <div class="pt-2 pb-5">
                <div class="rounded-pill cta bg-laranja shadow mx-auto text-center">
                    <a href="#" class="nav-link text-white size-25" data-toggle="modal" data-target="#exampleModal">
                        Conheça o nosso projeto
                    </a>
                </div>            
            </div>
        </div>
    </section>
    
    <div class="bg-ondas">
    </div>
    
    <!--titulo-->
    <section class="bg-titulo" id="acomodacao">
        <div class="container">
            <div class="py-4">
                <div class="text-white text-uppercase text-center">
                    <h1>Sua nova <br><strong>casa de férias na praia</strong> </h1>
                </div>
            </div>
        </div>
    </section>
    <!--Fim do titulo-->
    
    <!--falta arrumar!-->
    <section class="bg-folhas">
        <div class="container py-5 fonte-azul">
            <div class="row text-center align-items-center">
                <div class="col-md-6 col-12">
                    <div class="mb-5">
                        <h2>
                            Planta Suíte <strong>24m²</strong> à <strong>27m²</strong>
                        </h2>
                        <h4>Perfeito para até 3 pessoas</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/imagens/suite-foto1.png" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-12 box-planta">
                    <div class="row text-center">
                        <div class="col-md-12 col-6 pb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/imagens/suite-foto2.png" class="img-fluid">
                        </div>
                        <div class="col-md-12 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/imagens/suite-foto3.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row divider">
                <hr class="mt-5">
            </div>
            <!--tem que montar a linha ainda-->
            
            <div class="row text-center mt-5 align-items-center mb-4">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-12">
                            <h2>
                                Planta Duplex <strong>35m²</strong> à <strong>38m²</strong>
                            </h2>
                            <h4>
                                Perfeito para até 5 pessoas
                            </h4>
                        </div>
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/duplex-foto1.png" class="img-fluid">
                                </div>
                                <div class="col-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/duplex-foto2.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="col-md-6 col-12">
                    <div class="row text-center box-planta">
                        <div class="col-md-12 col-6 pb-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/imagens/duplex-foto3.png" class="img-fluid">
                        </div>
                        <div class="col-md-12 col-6">
                            <img src="<?php echo get_template_directory_uri(); ?>/imagens/duplex-foto4.png" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-5 pb-5">
                <div class="rounded-pill cta bg-laranja shadow mx-auto text-center">
                    <a href="#" class="nav-link text-white size-25 unidade" data-toggle="modal" data-target="#exampleModal">
                        Escolha a unidade perfeita para você
                    </a>
                </div> 
            </div>
        </div>
    </section>
    
    
    <div class="bg-ondas">
    </div>
    
    <section>
        <div>
            <iframe width="100%" height="675" src="https://www.youtube.com/embed/szwSOooba-Y" title="Delta Maresias Club" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    
    <div class="bg-ondas">
    </div>
    
    <!--titulo-->
    <section class="bg-titulo">
        <div class="container">
            <div class="py-4">
                <div class="text-white text-uppercase text-center">
                    <h2>Tenha uma casa de férias à 240m <br><strong>da mais bela praia do Litoral Norte de São Paulo</strong> </h2>
                </div>
            </div>
        </div>
    </section>
    <!--Fim do titulo-->
    <section>
        <div class="shadow">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.729510325834!2d-45.55585518553697!3d-23.792644576057867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94d2811801f45e3f%3A0xb210a5b9f6df7f6b!2sHotel%20Delta%20Maresias!5e0!3m2!1spt-BR!2sbr!4v1659471822627!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            <img src="<?php echo get_template_directory_uri(); ?>/imagens/mapa-delta.jpg" class="img-fluid d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/imagens/mapa-mobile-delta.jpg" class="img-fluid d-block d-md-none">
        </div>
    </section>
    
    
    <!-----------------------------------------------Blog-------------------------------------------->
    <section class="bg-blog"  id="blog">

        <div class="container">
            <div class="py-5">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php if ( have_posts() ) : ?>
                    <?php query_posts("category_name=blog&posts_per_page=3"); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    
                    <div class="col mb-4">
                        <div class="card shadow h-100 text-center">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize"><?php the_title(); ?></h5>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <div class="rounded-pill cta-blog bg-laranja mx-auto">
                                    <a href="<?php the_permalink() ?>" class="text-white nav-link text-uppercase">
                                        Leia Mais    
                                    </a>
                                </div>
                            </div>
                        </div>
                     </div>
                        
                    <?php endwhile; else: ?>
                    <p>Não existe nenhum post.</p>
                    <?php endif; ?>
                    <?php wp_reset_query();?>
                    
                </div>
            </div>
        </div>
    </section>
    
    <?php get_footer(); ?>
    
    <?php get_template_part( 'parts/inc', 'scripts' ); ?>
    
    </body>

</html>
    