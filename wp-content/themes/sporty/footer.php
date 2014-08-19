<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package sporty
 * @since sporty 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
    
    <div class="section group">
    
	<div class="col span_1_of_3">
    <?php if ( is_active_sidebar( 'left_column' ) && dynamic_sidebar('left_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'sporty') . '</h4>'; ?>
            <?php echo '<p>' . __('This left column is widget ready! Add one in the admin panel.', 'sporty') . '</p>'; ?>
            </div>     
	<?php endif; ?>  
		</div>
        
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'center_column' ) && dynamic_sidebar('center_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'sporty') . '</h4>'; ?>
            <?php echo '<p>' . __('This center column is widget ready! Add one in the admin panel.', 'sporty') . '</p>'; ?>
            </div>     
	<?php endif; ?> 

	</div>
    
	<div class="col span_1_of_3">
	<?php if ( is_active_sidebar( 'right_column' ) && dynamic_sidebar('right_column') ) : else : ?>
         <div class="widget">
			<?php echo '<h4>' . __('Widget Ready', 'sporty') . '</h4>'; ?>
            <?php echo '<p>' . __('This right column is widget ready! Add one in the admin panel.', 'sporty') . '</p>'; ?>
            </div>     
	<?php endif; ?> 
	</div>
	</div>

		<div class="site-info">
			<!--Rafael López-->
			<?php printf( __( 'Copyright © '.date('Y').' Sitio Oficial de CD UES, desarrollado por Rafael Vásquez UES' ),'<a href="" target=""></a>', '<a href="" target="">Diseñado por:</a>', 'Rafael López' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->
</div><!-- end of wrapper -->
<?php wp_footer(); ?>

</body>
</html>