<?php
/**
 * Author: Umar Miah
 * URL: extramilecommunications.com |
 * Custom functions, template layout.
 */


// function emc_child_styles() {
//     wp_enqueue_style( 'emc-child', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'emc_child_styles', 999 );

/** Place any new code below this line */
// function cc_mime_types($mimes) {
//   $mimes['svg'] = 'image/svg+xml';
//   return $mimes;
// }
// add_filter('upload_mimes', 'cc_mime_types');

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Topwrap Widget Area
    register_sidebar(array(
        'name' => __('Topwrap', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'topwrap',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Navwrapper Widget Area
    register_sidebar(array(
        'name' => __('Navwrapper', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'navwrapper',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Bannerwrap Widget Area
    register_sidebar(array(
        'name' => __('Homebanner', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'homebanner',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Gridwrap1 Widget Area
    register_sidebar(array(
        'name' => __('Gridwrap1', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'gridwrap1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Gridwrap2 Widget Area
    register_sidebar(array(
        'name' => __('Gridwrap2', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'gridwrap2',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Gridwrap3 Widget Area
    register_sidebar(array(
        'name' => __('Gridwrap3', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'gridwrap3',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Gridwrap4 Widget Area
    register_sidebar(array(
        'name' => __('Gridwrap4', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'gridwrap4',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Gridwrap5 Widget Area
    register_sidebar(array(
        'name' => __('Gridwrap5', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'gridwrap5',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Gridwrap6 Widget Area
    register_sidebar(array(
        'name' => __('Gridwrap6', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'gridwrap6',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));

    // Define Bottomwrap Widget Area
    register_sidebar(array(
        'name' => __('Bottomwrap', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'bottomwrap',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    // Define Footerwrap Widget Area
    register_sidebar(array(
        'name' => __('Footerwrap', 'emc'),
        'description' => __('Description for this widget-area...', 'emc'),
        'id' => 'footerwrap',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<!--h3>',
        'after_title' => '</h3-->'
    ));
}

?>
