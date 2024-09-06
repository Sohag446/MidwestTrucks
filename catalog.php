<?php


get_header(); ?>

<section id="catalog_aria">
    <div class="container">
        <div class="catalog_body">
            <?php 
            query_posts( 'post_type=truck&post_status=publish&posts_per_page=3&order=ASC&paged='.get_query_var('post') );

            if(have_posts()) :
                while(have_posts()) : the_post();

            ?>
            <div class="catalog_content">
               <div class="catalog_content_body">
                    <h2><?php the_title(); ?></h2>
                    <?php echo the_post_thumbnail('truck'); ?>
                    <?php the_excerpt(  ); ?>
               </div> 

            </div>

            <?php
                endwhile;
                endif;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>