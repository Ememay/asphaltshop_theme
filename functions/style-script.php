<?php 
    function insert_theme_style_and_script(){
        //insert style
        wp_enqueue_style("theme-css",get_template_directory_uri() ."/assets/minstyle.css",array(),"9.8","all");
        //insert script
        wp_enqueue_script("theme-script",get_template_directory_uri()."/assets/minscript.js",array(),"3.5",true);
    };
    add_action("wp_enqueue_scripts","insert_theme_style_and_script");    
?>