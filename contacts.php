<?php
/*
Template Name: Контакты
*/
?>
<?php get_header()?>
<div class="wraper">
    <div class="contacts-wrap">
        <h1 class='entry-title'>Контакты</h1>
	    <div class="contacts">
  	        <div class="cont-p"><a href="tel:<?php echo get_option('site_telephone_back'); ?>"><?php echo get_option('site_telephone'); ?></a></div>
  	        <div class="cont-p"><a href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a></div>
  	        <div class="cont-p"><?php echo get_option('site_adress'); ?></div>
	        <div class="cont-p"><?php echo get_option('site_VK'); ?></div>
  	    </div>
	    </div>
    </div>
	<div class="map">
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8e43b9bc4395f408be8f89ddcb8d20f85e4645f49508de107d3162e3863ffcbd&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
	</div>
</div>
    
<?php get_footer()?>
