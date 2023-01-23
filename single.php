<?php get_header(); ?>
    
    <!----------------------------------------------------------Texto inicial------------------------------------------->
    <section class="bg-pagina bg-white my-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-3">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <div class="bg-ondas">
    </div>

    <?php get_footer(); ?>
