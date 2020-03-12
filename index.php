<?php get_header()?>
	<section class="main container">
		<div class="main-body">
			<div class="categories">
			    <? echo do_shortcode(' [product_categories hide_empty=1 parent=0 columns=5]') ?>
			</div>
		</div>
		<div class="sale">
		    <div class="sale-head" >Скидки</div>
		    <? echo do_shortcode(' [sale_products per_page=4]') ?>
		</div>
<?php get_footer()?>