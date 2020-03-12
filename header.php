<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
<!— Yandex.Metrika counter —>
<script type="text/javascript" >
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(57171016, "init", {
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true,
ecommerce:"dataLayer"
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57171016" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!— /Yandex.Metrika counter —>
<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?166",t.onload=function(){VK.Retargeting.Init("VK-RTRG-434205-f7Jco"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-434205-f7Jco" style="position:fixed; left:-999px;" alt=""/></noscript>
</head>
<body>
    
	<header class="header container">
		<div class="header-top">
		 
			                <?php wp_nav_menu( [
                                	'theme_location'  => 'catalog_menu',
                                	'menu'            => '', 
                                	'container'       => '', 
                                	'container_class' => '', 
                                	'container_id'    => '',
                                	'menu_class'      => '', 
                                	'menu_id'         => '',
                                	'echo'            => true,
                                	'fallback_cb'     => 'wp_page_menu',
                                	'before'          => '',
                                	'after'           => '',
                                	'link_before'     => '',
                                	'link_after'      => '',
                                	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                	'depth'           => 0,
                                	'walker'          => '',
                                        ] ); ?>
			<div class="top-menu">
				<?php 
					wp_nav_menu( [
						'theme_location'  => 'top_menu',
						'menu'            => '', 
						'container'       => null, 
						'container_class' => '', 
						'container_id'    => '',
						'menu_class'      => '', 
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					] );
				?>
			</div>
		</div>
		<div class="header-bottom">
		    <div class="logo">
				<a href="<?php bloginfo('url');?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="логотип">
					<img class="img-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.png" alt="">

				</a>
			</div>
			<div class="search"> 
				<?php echo do_shortcode('[wcas-search-form]'); ?>
			 </div>
			 
			<div class="s-header__basket-wr woocommerce">
			    <?php
			    global $woocommerce; ?>
			    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
			        <span class="basket-btn__label">Корзина</span>
			        <span class="basket-btn_counter"><?php echo sprintf ($woocommerce->cart->cart_contents_count); ?></span>
			    </a>
			    <a class="cart-contents" href="/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
		<i class="fa fa-shopping-cart"></i>
		
		</a> 
			</div>
		</div>
		<div class="header-mobile">
		    <div class="logo">
				<a href="<?php bloginfo('url');?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="логотип">
					<img class="img-none" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.png" alt="">

				</a>
			</div>
		<div class="header-mobile-left">
		    	<div class="s-header__basket-wr woocommerce">
			    <?php
			    global $woocommerce; ?>
			    <a href="<?php echo $woocommerce->cart->get_cart_url() ?>" class="basket-btn basket-btn_fixed-xs">
			        <span class="basket-btn__label">Корзина</span>
			        <span class="basket-btn_counter"><?php echo sprintf ($woocommerce->cart->cart_contents_count); ?></span>
			    </a>
			    <a class="cart-contents" href="/cart/" title="<?php _e( 'Перейти в корзину' ); ?>">
	        	<i class="fa fa-shopping-cart"></i>
		        </a> 
			</div>
			<div class="menu-mob">
			    <?php wp_nav_menu( [
                                	'theme_location'  => 'catalog_menu_mobile',
                                	'menu'            => '', 
                                	'container'       => '', 
                                	'container_class' => '', 
                                	'container_id'    => '',
                                	'menu_class'      => '', 
                                	'menu_id'         => '',
                                	'echo'            => true,
                                	'fallback_cb'     => 'wp_page_menu',
                                	'before'          => '',
                                	'after'           => '',
                                	'link_before'     => '',
                                	'link_after'      => '',
                                	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                	'depth'           => 0,
                                	'walker'          => '',
                                        ] ); ?>
			    </div>
	    	</div>
		    <div class="search"> 
				<?php echo do_shortcode('[wcas-search-form]'); ?>
			 </div>
		</div>
	</header>
	<div class='container woocommerce'>