	</div>
  	<footer class="footer container">
  	    <div class="footertrtr">
  	        <div class="cont phone"><a href="tel:<?php echo get_option('site_telephone_back'); ?>"><?php echo get_option('site_telephone'); ?></a></div>
  	        <div class="cont email"><a href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a></div>
  	    </div>
  	    <div class="footertrtr">
  	        <div class="cont adress"><?php echo get_option('site_adress'); ?></div>
	        <div class="cont VK"><a href="<?php echo get_option('site_VK'); ?>"><?php echo get_option('site_VK'); ?></a>					</div>
  	    </div>
	 
	 <div class="pa">© 2019 Цены, указанные на сайте не являются публичной офертой</div>
    </footer>
  	<?php wp_footer();?>
</body>
</html>