<?php
require get_template_directory() . '/backend/inc/cpt.php';
require get_template_directory() . '/backend/inc/extra.php';
?>
<?php

/**
 * Thêm logo vào trang quản trị WordPress
 */
// function admin_logo() {
//     echo '<br/> <img src="' .get_template_directory_uri().'/backend/images/logo.png"/>';
// }
// add_action( 'admin_notices', 'admin_logo' );
// End Custom Logo

// Custom Footer Copyright
function admin_footer_credits( $text ) {
    $text = '<p>Design by <a href="'. site_url() .'" target="_blank">RealWork</a></p>';
     return $text;
 }
add_filter( 'admin_footer_text', 'admin_footer_credits' );
// End Custom Footer Copyright

// Register Update Choose Action In Setting Page Wordperss
add_action('admin_init', 'general_section');  
function general_section() {  
    add_settings_section(  
        'settings_section', // Section ID 
        'Setting Update', // Section Title
        'section_options_callback', // Callback
        'general' // What Page?  This makes the section show up on the General Settings Page
    );

    add_settings_field( // Option 1
        'update_option', // Option ID
        'Enable Update', // Label
        'radio_callback', // !important - This is where the args go!
        'general', // Page it will be displayed (General Settings)
        'settings_section', // Name of our section
        array( // The $args
            'update_option' // Should match Option ID
        )  
    ); 

    register_setting('general','update_option', 'esc_attr');
}

function section_options_callback() { // Section Callback
    echo '<pUpdate Setting</p>';  
}

function textbox_callback($args) {  // Textbox Callback
    $option = get_option($args[0]);
    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
}

function radio_callback($args) {  // Radio Callback
    $option = get_option($args[0]);
?>
    Yes <input name="update_option" type="radio" value="yes" <?php checked( 'yes', get_option( 'update_option' ) ); ?> checked />
    No <input name="update_option" type="radio" value="no" <?php checked( 'no', get_option( 'update_option' ) ); ?> />
<?php }

function helper_callback($args) {  // Radio Callback
    $option = get_option($args[0]);
?>
    Yes <input name="helper_option" type="radio" value="yes" <?php checked( 'yes', get_option( 'helper_option' ) ); ?> checked />
    No <input name="helper_option" type="radio" value="no" <?php checked( 'no', get_option( 'helper_option' ) ); ?> />
<?php }

$update_wp = get_option( 'update_option' );
$helper_option = get_option( 'helper_option' );

if($update_wp=='no') {
    // Disable Autoupdate
    add_filter( 'automatic_updater_disabled', '__return_true' );

    function remove_core_updates(){
      global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
    }

    add_filter('pre_site_transient_update_core','remove_core_updates');
    add_filter('pre_site_transient_update_plugins','remove_core_updates');
    add_filter('pre_site_transient_update_themes','remove_core_updates');
}