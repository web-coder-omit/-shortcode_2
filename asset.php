<?php
/**
 * Plugin Name: asset management 
 * Plugin URI:  Plugin URL Link
 * Author:      Plugin Author Name
 * Author URI:  Plugin Author Link
 * Description: This plugin make for pratice wich is "Asset Management".
 * Version:     0.1.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: am
*/


function scripts_function() {
    wp_enqueue_script('first_js_file', plugin_dir_url(__FILE__)."asset/JS/main.js",array(),'1.0.0', true);
}

add_action('wp_enqueue_scripts', 'scripts_function');

function style_function(){
    wp_enqueue_style('my_style_files',plugin_dir_url(__FILE__)."asset/style/style.css");
}


add_action('wp_enqueue_scripts','style_function');




function btn_function($att) {
    $default = array(
        'url' => "www.facebook.com",
        'text' => "facebook"
    );
    $att_def = shortcode_atts($default, $att);
    
    // return sprintf("<a class='first' href='%s'>%s</a>", $att_def['url'], $att_def['text']);
    $val = <<<EOD
        <a class='first' href={$att_def['url']}>{$att_def['text']}</a>
    EOD;

return $val;
}

add_shortcode('btn', 'btn_function');



// function style_function() {
//     wp_enqueue_style('my_style_files', plugin_dir_url(__FILE__) . "asset/style/style.css");
// }

// add_action('wp_enqueue_scripts', 'style_function');

// function btn_function($att) {
//     $default = array(
//         'url' => "https://www.facebook.com",
//         'text' => "facebook"
//     );
//     $att_def = shortcode_atts($default, $att);

//     $val = sprintf(
//         "<a class='first' href='%s'>%s</a>", 
//         esc_url($att_def['url']), 
//         esc_html($att_def['text'])
//     );
    
//     return $val;
// }

// add_shortcode('btn', 'btn_function');
                        
























// function your_plugin_enqueue_styles() {
//     wp_enqueue_style(
//         'plugin-style', // Handle for the stylesheet
//         plugins_url('css/plugin-style.css', __FILE__."asset/style/style.css"), // Path to the stylesheet
//         array(), // Dependencies, leave empty if none
//         '1.0', // Version number
//         'all' // Media type
//     );
// }

// // Hook the function to the wp_enqueue_scripts action
// add_action('wp_enqueue_scripts', 'your_plugin_enqueue_styles');








// function custom_function(){
// return 'do somet';
// };
// add_action('custom','custom_function');
// echo do_action('custom');


// function first_function($text){
    
//     // return $text;
//     echo "print these one";
// }
// add_action("my_hooks", "first_function");
// $a = do_action("my_hooks", "Text of all the word");
// echo $a;
// printf($a);
?>