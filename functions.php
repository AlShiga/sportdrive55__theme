<?php
/**
 * testShop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package testShop
 */

add_action( 'wp_enqueue_scripts', 'style_theme' );
add_action( 'wp_footer','scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu');

// подключаем стили
function style_theme() {
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'my-style-reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'my-style-woocommerce', get_template_directory_uri() . '/assets/css/woocommerce.css');
}
// подулючаем скрипты
function scripts_theme() {
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'my-scripts', get_template_directory_uri() . '/assets/js/main.js');
	}
// регистрируем меню
function theme_register_nav_menu(){
	register_nav_menu( 'top_menu', 'Верхнее меню' );
	register_nav_menu( 'catalog_menu', 'Каталог');
	register_nav_menu( 'catalog_menu_mobile', 'Каталог для телефона');
	register_nav_menu( 'catalog_menu1', 'Катало1');

}
/**Добавляем поддержку галереи Woocommerce**/
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}
//что бы товары в корзне сразу обновлялись
add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart_fragment');
function header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;
    ob_start();
    ?>
    <span class="basket-btn_counter">(<?php echo sprintf($woocommerce->cart->cart_contents_count); ?>)</span>
    <?php
    $fragments['.basket-btn_counter'] = ob_get_clean();
    return $fragments;
}

if ( ! function_exists( 'testshop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function testshop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on testShop, use a find and replace
		 * to change 'testshop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'testshop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'testshop' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'testshop_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'testshop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function testshop_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'testshop_content_width', 640 );
}
add_action( 'after_setup_theme', 'testshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/*
function testshop_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'testshop' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'testshop' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'testshop_widgets_init' );
*/
/**
 * Enqueue scripts and styles.
 */
function testshop_scripts() {
	wp_enqueue_style( 'testshop-style', get_stylesheet_uri() );

	wp_enqueue_script( 'testshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'testshop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'testshop_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
   
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

}
add_shortcode('devisesearch', 'get_search_form');



/* Добавляет блок для ввода контактных данных */

function mytheme_customize_register( $wp_customize ) {
    
/*Добавляем секцию в настройки темы*/
$wp_customize->add_section(
'data_site_section',
array(
'title' => 'Контактные данные в шапке сайта',
'capability' => 'edit_theme_options',
'description' => "Тут можно указать контактные данные"    )
);

/*Добавляем поле время работы*/
$wp_customize->add_setting(
// ID
'site_time-work',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
));
$wp_customize->add_control(
// ID
'site_time-work_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Время работы",
'section' => 'data_site_section',
'settings' => 'site_time-work'
));

/*Добавляем поле адрес*/
$wp_customize->add_setting(
// ID
'site_adress',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_adress_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Адрес",
'section' => 'data_site_section',
'settings' => 'site_adress'
)
);

/*Добавляем поле телефона site_telephone*/
$wp_customize->add_setting(
// ID
'site_telephone',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_telephone_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Телефон",
'section' => 'data_site_section',
'settings' => 'site_telephone'
)
);

/*Добавляем поле телефона site_telephone back*/
$wp_customize->add_setting(
// ID
'site_telephone_back',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_telephone_control_back',
// Массив аргументов
array(
'type' => 'text',
'label' => "Телефон в правиьном формате без знаков +7999...",
'section' => 'data_site_section',
'settings' => 'site_telephone_back'
)
);


/*Добавляем поле emain site_email*/
$wp_customize->add_setting(
// ID
'site_email',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_email_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Email",
'section' => 'data_site_section',
'settings' => 'site_email'
)
);


/*Добавляем поле VK site_VK*/
$wp_customize->add_setting(
// ID
'site_VK',
// Массив аргументов
array(
'default' => '',
'type' => 'option'
)
);
$wp_customize->add_control(
// ID
'site_VK_control',
// Массив аргументов
array(
'type' => 'text',
'label' => "Группа VK",
'section' => 'data_site_section',
'settings' => 'site_VK'
)
);

}
add_action( 'customize_register', 'mytheme_customize_register' );



//изменяем разделитель хлебных крошек

add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter' );
function wcc_change_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = " <div class='breadcrumb_separator'>  &#8226; </div> ";
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_delimiter', 20 );

//Подкатегории на странице категории
function mynew_product_subcategories( $args = array() ) {
	$parentid = get_queried_object_id();
	$args = array(
	    'parent' => $parentid
	);
	$terms = get_terms( 'product_cat', $args );
	if ( $terms ) {
	 echo '<div class="product-cats-wrap">';
	    echo '<ul class="product-cats">';
	        foreach ( $terms as $term ) {              
	            echo '<li class="category">';                        
	                
	                echo '<h2>';
	                    echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
	                        echo $term->name;
	                    echo '</a>';
	                echo '</h2>';                                                        
	            echo '</li>';                                                        
	    }
	    echo '</ul>';
	  echo '</div>';
	}
}

 
add_action( 'woocommerce_before_shop_loop', 'mynew_product_subcategories', 50 );


