<?php
function gr_enqueue()
{
    $uri = get_theme_file_uri();
    $ver = GR_DEV_MODE ? time() : false;


    //Register the stylesheet
    wp_register_style('gr_style_header', $uri . '/style.css', [], $ver);
    wp_register_style('gr_aos', $uri . '/assets/css/aos.css', [], $ver);
    wp_register_style('gr_bootstrap', $uri . '/assets/css/bootstrap.min.css', [], $ver);
    wp_register_style('gr_jq_ui', $uri . '/assets/css/jquery-ui.css', [], $ver);
    wp_register_style('gr_mg_pop', $uri . '/assets/css/magnific-popup.css', [], $ver);
    wp_register_style('gr_owl_c', $uri . '/assets/css/owl.carousel.min.css', [], $ver);
    wp_register_style('gr_owl_t', $uri . '/assets/css/owl.theme.default.min.css', [], $ver);

    //Enqueue the stylesheer
    wp_enqueue_style('gr_style_header');
    wp_enqueue_style('gr_aos');
    wp_enqueue_style('gr_bootstrap');
    wp_enqueue_style('gr_jq_ui');
    wp_enqueue_style('gr_mg_pop');
    wp_enqueue_style('gr_owl_c');
    wp_enqueue_style('gr_owl_t');

    //Register the script files
    wp_register_script('gr_jq_js', $uri . '/src/js/jquery-3.3.1.min.js', [], $ver, true);
    wp_register_script('gr_aos_js', $uri . '/src/js/aos.js', [], $ver, true);
    wp_register_script('gr_bootstrap_js', $uri . '/src/js/bootstrap.min.js', [], $ver, true);
    wp_register_script('gr_jq_ui_js', $uri . '/src/js/jquery_ui.js', [], $ver, true);
    wp_register_script('gr_jq_mg_pop_js', $uri . '/src/js/jquery.magnific-popup.min.js', [], $ver, true);
    wp_register_script('gr_main_js', $uri . '/src/js/main.js', [], $ver, true);
    wp_register_script('gr_owl_c_js', $uri . '/src/js/owl.carousel.min.js', [], $ver, true);
    wp_register_script('gr_popper_js', $uri . '/src/js/popper.min.js', [], $ver, true);


    //Enqueue the script files
    wp_enqueue_script('gr_jq_js');
    wp_enqueue_script('gr_aos_js');
    wp_enqueue_script('gr_bootstrap_js');
    wp_enqueue_script('gr_jq_ui_js');
    wp_enqueue_script('gr_jq_mg_pop_js');
    wp_enqueue_script('gr_main_js');
    wp_enqueue_script('gr_owl_c_js');
    wp_enqueue_script('gr_popper_js');

}
