
<footer id="footer">

        <div class="footer_sideber">    
            <div class="footer_sideber_1"><?php dynamic_sidebar( 'footer-1' ); ?></div>
            <div class="footer_sideber_2"><?php dynamic_sidebar( 'footer-2' ); ?></div>
            <div class="footer_sideber_3"><?php dynamic_sidebar( 'footer-3' ); ?></div>
        </div>

        <div class="footer_bottom">
            <p><?php echo get_theme_mod('sohag_footer_section');?></p>
        </div>
     </footer>



     <?php wp_footer(); ?>    
</body>
</html>