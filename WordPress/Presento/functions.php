<?php
/*
**  1. Theme => ok
        + style.css     => định nghĩa thành phần tên, quản lý theme
        + index.php     => cổng route đầu tiên gọi 
        + functions.php => code php viết vào đây     

    2. Hooks

        https://adambrown.info/p/wp_hooks/hook

        + action        => thực hiện
        + filter        => lọc dữ liệu

    3. Theme (thành phần) => ok
        + Route => Template Hierachy (https://developer.wordpress.org/themes/basics/template-hierarchy/)
        + Controller => Hệ thống điều hướng đến View WordPress tự có 
        + View => Template files (.php)
                  Template Tags (các hàm có sẵn echo để viết nội dung trường dữ liệu)
        + Model => Câu truy vấn (không cần dùng SQL) WordPress Loop Query                

    4. Bộ hàm làm việc với Template (View) => ok
        + wp_head(); => Gắn hooks dành cho xử lý phần Header vào trước thẻ HTML </head>  
        + wp_footer(); => Gắn hook dành cho xử lý phần Footer vào trước thẻ HTML </body>
        + get_header() => include file header.php vào
        + get_footer() => include file footer.php vào

    5. Nguyên tắc code làm việc
        + Định nghĩa thành phần quản trị (Admin) => viết code trong functions.php hoặc 1 plugin nào đó => gắn bằng hook;
        + Chuẩn bị Template (View Frontend) => viết code Template bóc tách, gọi nội dung hiện ra
        + Gọi các thành phần nội dung quản trị (Admin) ra ngoài Template băng lệnh riêng 
            VD: gọi dynamic_sidebar() => hiển thị các widget của Sidebar
                gọi wp_nav_menu() => Menu quản trị ra ngoài vị trí Template
                Nội dung dùng Loop
        + Template Tag
    
    6. Quy trình code giải quyết 
        + Xác định được Route       => URL để gọi tới page cần xem (Permalink)
        + Xác định được Controller  => Logic để lấy dữ liệu Model hiển thị ra View
        + Xác định định View        => Những thành phần cần hiển thị, vị trí hiển thị (Template, Hook, Widget, Menu, ...)
        + Xác định được Model       => Nội dung cần hiển thị (Query, Template Tags, Shortcode)
        + Xác định việc quản trị nội dung (Admin) và phần bên ngoài (Frontend)

    7. Các thành phần nội dung (View)
        + Template Tags             => ok   
        + Shortcode                 => Code thân thiện, code tự tạo chèn trực tiếp vào nội dung HTML [shortcode_name attribute="value"] Nội dung [/shortcode_name]  => ok (có thể tự tạo)
        + Blocked                   => Các khối thành phần trực quan chèn vào content WP (có thể tự tạo)

    8. Custom Element (Admin)
        + Custom Page Template      => Tự tạo mẫu Page riêng có thể tùy chọn không ảnh hưởng Page chuẩn page.php
        + Custom Template Route        
        + Custom Post-Type
        + Custom Taxonomy
        + Custom Meta Fields
        + Custom Settings
        + Custom Menu Admin
        + Custom Widgets

    9. Custom Template (Frontend)
        + Custom Query
        + 
                


*/

// Link tài nguyên JS, CSS, Font => header

// Hàm lệnh cần gắn vào, thực thi
function pre_link_styles() {

    wp_enqueue_style( 'pre-aos-css', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-bootstrap-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-icon-css', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-boxicons-css', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-glightbox-css', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-remixicon-css', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-swiper-css', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), wp_get_theme()->get( 'Version' ));
    wp_enqueue_style( 'pre-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ));

    wp_enqueue_script('pre-aos-js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-bootstrap-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-glightbox-js', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-isotype-js', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-counter-js', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter.js', array(), wp_get_theme()->get( 'Version' ), true);    
    wp_enqueue_script('pre-swipper-js', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), wp_get_theme()->get( 'Version' ), true);
    wp_enqueue_script('pre-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), wp_get_theme()->get( 'Version' ), true);    
 
}

// Ra lệnh móc hàm cần gắn vào đúng vị trí mong muốn (hook)
add_action( 'wp_enqueue_scripts', 'pre_link_styles' );


/**
 * Đăng ký Sidebar
*/

function pre_sidebars() {

    // Thông số chung cho Widget
    $shared_args = array(
		'before_title'  => '<h3 class="sidebar-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<div class="sidebar-item widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

    // Đăng ký sidebar
    register_sidebar(
        array_merge(
            $shared_args,
            array(
                'name'        => __( 'Post Sidebar', 'web21' ),
                'id'          => 'sidebar-right',
                'description' => __( 'Widgets ở đây sẽ xuất hiện cột sidebar bên phải', 'web21' )
            )
        )
    );

    $shared_args2 = array(
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="sidebar-item widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

    // Đăng ký sidebar
    register_sidebar(
        array_merge(
            $shared_args2,
            array(
                'name'        => __( 'Page Sidebar', 'web21' ),
                'id'          => 'sidebar-secondary',
                'description' => __( 'Widgets ở đây sẽ xuất hiện cột sidebar bên phải', 'web21' )
            )
        )
    );
}
add_action('widgets_init', 'pre_sidebars');


/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function presento_register_nav_menus() {

	        
	$presento_menus = array(
		'main_menu' => __( 'MainMenu', 'web21' ),
        'footer_menu' => __( 'FooterMenu', 'web21' ),
	);
	// Register Nav Menus
	register_nav_menus( $presento_menus );

}
add_action( 'init', 'presento_register_nav_menus' );

// Add tính năng hỗ trợ Backend => Frontend của WordPress
function presento_theme_supports() {

    // thumbnails featured
    add_theme_support('post-thumbnails');

    // post format
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ));

}
add_action('after_setup_theme', 'presento_theme_supports');

?>


