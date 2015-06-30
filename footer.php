<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Vost
 */

?>

	<footer class="site-footer">
		<div class="site-footer__left">
			<div class="footer-columns">
				<h4 class="footer-columns__title">
					<?php the_field('footer-columns__title') ?>
				</h4>
				<ul class="footer-columns__list">
					<li class="footer-columns__column">
						<p class="footer-columns__address">
							<?php the_field('footer-columns__address') ?>
							
						<p class="footer-columns__question"><?php the_field('footer-columns__question') ?></p>
						<a href="#" class="footer-columns__btn"><?php the_field('footer-columns__btn') ?></a>
					</li>
					<li class="footer-columns__column">
					<?php 
	                    if( have_rows('content-block-1-list__item') ):
	                         // loop through the rows of data
	                        while ( have_rows('footer-columns__order') ) : the_row();
	                            ?>
                            <p class="footer-columns__order">
							<?php 
							// сожержимое суб-поля 
	                            the_sub_field('footer-columns__order'); ?>
                            </p>
	                        <?php endwhile;
	                    else :
	                        // no rows found
	                    endif; 
	                ?>
					</li>
				</ul>
				<div class="created-by">
					<span class="created-by__text"><?php the_field('created-by__text') ?></span> 
					<a href="http://heartbeat.ua" target="_blank" class="created-by__heartbeat" title="Heartbeat agency – design, prototyping, website design, usability, startups and apps"></a>
				</div>
			</div><!-- footer-columns -->
		</div><!-- site-footer__left -->

		<div class="site-footer__right">
			<div class="map" id="footer__map"></div>
			<div class="footer-violet">
				<div class="footer-violet__point ">
					<i class="icon"></i>
				</div>
			</div>
		</div><!-- site-footer__right -->
	</footer>

<?php wp_footer(); ?>

</body>
</html>
