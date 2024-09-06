<?php
/* 
*This template for displaying the Header
*/
get_header();
?>
<div class="blog-content-aira">
    <div class="blog_aria-header">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="blog_aria">
                    <div class="post_thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-thumbnails'); ?>
                        </a>
                    </div>
                    <div class="post_details">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile;
        else :
            echo '<p>No posts found</p>';
        endif; ?>
    </div>
    <div class="blog_aria-footer"> 
        <?php get_sidebar(); ?>
    </div>
</div>

<div class="sohag_content">
        <?php the_content();  ?> 
    </div>

    <div id="page_nav">
        <?php if (true) {sohag_pagenav(); } else{ ?>
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>
        <?php } ?>
    </div>


    
    
<?php 
    get_footer();
?>