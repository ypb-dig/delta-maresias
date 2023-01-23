<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Equilíbrio perfeito entre beleza natural, conforto e comodidade, encontre seu novo lugar aqui.">
	<meta name="facebook-domain-verification" content="poqlzwcobkw5rccn9cx9ghxx43pp8i" />
    
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?17">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/imagens/icone-delta.png"/>
    <link rel="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min">
    <link rel="<?php echo get_template_directory_uri(); ?>/js/owl.theme.default.css">
    <title>Delta Maresias</title>
    
    <?php wp_head(); ?>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZHXWY8S76Q"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-ZHXWY8S76Q');
    </script>
	
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '629711758781309'); 
		 fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=629711758781309&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

</head>

<body>
    
    <!-- fundo azul cor #406c9d -->
    <header class="bg-menu text-light fixed-top">
        <div class="container d-none d-sm-block">
            <nav class="menu nav justify-content-between align-items-center py-1">
                <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/logo-delta.png" alt="">
                </a>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link size-20 active text-white" aria-current="page" href="<?php echo get_site_url(); ?>/#empreendimento">O Empreendimento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link size-20 text-white" href="<?php echo get_site_url(); ?>/#galeria">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link size-20 text-white" href="<?php echo get_site_url(); ?>/#lazer">Lazer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link size-20 text-white" href="<?php echo get_site_url(); ?>/#acomodacao">Acomodações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link size-20 text-white" href="<?php echo get_site_url(); ?>/#blog">Blog</a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top d-lg-none bg-menu">
          <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/imagens/logo-delta.png" alt="">
                </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>">O Empreendimento</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/#lazer">Lazer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/#acomodacao">Acomodações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/#galeria">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo get_site_url(); ?>/#blog">Blog</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
    
    <!--menu flutuante lateral-->
    <section class="d-none d-lg-block">
        <div >
            <div class="bg-laranja position-fixed py-3 px-2" style="width: fit-content; right: 0; top: 40vh ">
                <div class="py-2">
                    <a href="https://www.facebook.com/deltamaresiasclub/" target="_blank">
                        <img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/imagens/icone-facebook.png">
                    </a>
                </div>
                <div class="py-2">
                    <a href="https://www.instagram.com/deltamaresias/" target="_blank">
                        <img class="footer-img" src="<?php echo get_template_directory_uri(); ?>/imagens/icone-instagram.png">
                    </a>
                </div>
            </div>
        </div><br>
    </section>
    <!--fim do menu flutuante lateral-->