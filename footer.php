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
				<h4 class="footer-columns__title">Контакты</h4>
				<ul class="footer-columns__list">
					<li class="footer-columns__column">
						<p class="footer-columns__address">
							Наш офис:
							<br>				
							Грузия, г.Тбилиси
							<br>ул. х1, тел: 0574893725</p>
						<p class="footer-columns__question">Есть вопросы?</p>
						<a href="#" class="footer-columns__btn">Написать письмо</a>
					</li>
					<li class="footer-columns__column">
						<p class="footer-columns__order">
							Хотите разместить свою
							<br>				
							рекламу в сети VOST
							<br>тел: 057325143</p>
						<p class="footer-columns__order">
							Желаете заказать
							<br>				
							личный VOST
							<br>тел: 857463527</p>
					</li>
				</ul>
				<div class="created-by">
					<span class="created-by__text">Сайт разработали в</span> 
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
