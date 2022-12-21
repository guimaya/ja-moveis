<?php

/**
 * Theme default by Maya Comunicação
 *
 * @link get_site_url();
 *
 * @package WordPress
 * @subpackage theme slug
 * @since 1.0
 */

setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

function aiwp_scripts(){

    /*-- Js --*/
    wp_enqueue_script( 'aiwp_jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js', array(), '3.5.1', true  );
    wp_enqueue_script( 'aiwp_owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), '4.1.1', true  );
    wp_enqueue_script( 'aiwp_fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array( 'jquery' ), '3.5.7', true  );
		wp_enqueue_script( 'aiwp_scripts', get_template_directory_uri() .'/assets/js/theme-scripts.js', array( 'jquery' ), '1.0', true  );

    /*-- Css --*/
    wp_enqueue_style( 'aiwp_reset', get_template_directory_uri() . '/assets/css/app.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'aiwp_owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all' );
    wp_enqueue_style( 'aiwp_owl.carousel.theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4', 'all' );
    wp_enqueue_style( 'aiwp_menu', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.1', 'all' );
    wp_enqueue_style( 'aiwp_fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css' );

    wp_enqueue_style( 'aiwp_style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );


    /*-- Google fonts --*/
    wp_enqueue_style( 'cdv_google_font', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">' );
}
add_action('wp_enqueue_scripts', 'aiwp_scripts');

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function wp_pagination() {
      global $wp_query;

      $big = 999999999;

      echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
      ) );
};


/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function meu_widget() {

    register_sidebar( array(
        'name' => 'Widgets',
        'id' => 'widgets',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="Widgets">',
        'after_title' => '</h2>',
        'description' => 'área de widgets',
    ) );

}
add_action( 'widgets_init', 'meu_widget' );

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

add_action( 'phpmailer_init', 'setup_phpmailer_init', 10, 1);
function setup_phpmailer_init( $phpmailer ) {
    $phpmailer->Host = 'your smtp'; // for example, smtp.mailtrap.io
    $phpmailer->Port = 587; // set the appropriate port: 465, 2525, etc.
    $phpmailer->Username = 'your e-mail'; // your SMTP username
    $phpmailer->Password = 'password'; // your SMTP password
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = 'none'; //TLS - SSL - none preferable but optional
    $phpmailer->IsSMTP();
    $mailer->SMTPDebug = 2;
    $mailer->CharSet  = "utf-8";
}

/* função para alterar nome e o endereço de e-mail */
function bpc_sender_email ($original_email_address) {
    return 'Add email in reply';
}
function bpc_sender_name ($original_email_from) {
    return 'Your subject';
}
add_filter ('wp_mail_from', 'bpc_sender_email');
add_filter ('wp_mail_from_name', 'bpc_sender_name');


/* Create theme slug */
function cts_add_theme_slug() {
	return 'text-domain';
}

add_action( 'after_setup_theme', 'mytheme_load_textdomain' );

function mytheme_load_textdomain() {
  load_theme_textdomain( cts_add_theme_slug(), get_template_directory() . '/languages');
}

function bt_whatsapp($page_id){
  echo '<div class="whats">
    <a href="https://api.whatsapp.com/send?phone=' . get_field("whatsapp_number", $page_id) . '" target="_blank">
      <svg xmlns="https://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#4BA818"><path d="M12 0a12 12 0 1 1 0 24 12 12 0 0 1 0-24zm.14 4.5a7.34 7.34 0 0 0-6.46 10.82l.15.26L4.5 19.5l4.08-1.3a7.38 7.38 0 0 0 10.92-6.4c0-4.03-3.3-7.3-7.36-7.3zm0 1.16c3.41 0 6.19 2.76 6.19 6.15a6.17 6.17 0 0 1-9.37 5.27l-.23-.15-2.38.76.77-2.28a6.08 6.08 0 0 1-1.17-3.6 6.17 6.17 0 0 1 6.19-6.15zM9.66 8.47a.67.67 0 0 0-.48.23l-.14.15c-.2.23-.5.65-.5 1.34 0 .72.43 1.41.64 1.71l.14.2a7.26 7.26 0 0 0 3.04 2.65l.4.14c1.44.54 1.47.33 1.77.3.33-.03 1.07-.43 1.22-.85.15-.42.15-.78.1-.85-.02-.05-.08-.08-.15-.12l-1.12-.54a5.15 5.15 0 0 0-.3-.13c-.17-.06-.3-.1-.41.09-.12.18-.47.58-.57.7-.1.1-.18.13-.32.08l-.4-.18a4.64 4.64 0 0 1-2.13-1.98c-.1-.18-.01-.28.08-.37l.27-.31c.1-.1.12-.18.18-.3a.3.3 0 0 0 .01-.26l-.1-.23-.48-1.15c-.15-.36-.3-.3-.4-.3l-.35-.02z"/></svg>
    </a>
  </div>';
}
