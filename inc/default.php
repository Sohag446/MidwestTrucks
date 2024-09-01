<?php
//Theme title
add_theme_support('title-tag');
add_theme_support( 'align-wide');

// Thumbnil Image Area
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size('post-thumbnails', 970, 350, true);


// Except to read more btn 40 Word
  function sohag_excerpt_more($more) {
    global $post;
    return '<br><br> <a class="read-more" href="' . get_permalink($post->ID) . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'sohag_excerpt_more');
  
  
  function sohag_excerpt_lenght($length){
    return 40;
  }
  add_filter('excerpt_length', 'sohag_excerpt_lenght', 999);



// Pagenav Function
function sohag_pagenav() {
  global $wp_query, $wp_rewrite;
  
  $pages = '';
  $max = $wp_query->max_num_pages;
  
  if (!$current = get_query_var('paged')) {
      $current = 1;
  }
  
  $args = array(
      'base' => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
      'total' => $max,
      'current' => $current,
      'prev_text' => 'Prev',
      'next_text' => 'Next',
  );

  if ($max > 1) {
      echo '<div class="wp_pagenav">';
      if ($max > 1) {
          $pages = '<p class="pages">Page ' . $current . ' <span> of </span> ' . $max . ' </p>';
      }
      echo $pages . paginate_links($args);
      echo '</div>';
  }
}
