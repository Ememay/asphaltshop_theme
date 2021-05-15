<?php 
function register_feature() {

    //register menus
    register_nav_menus(array(
        "main-menu" => "منو اصلی",
        "quick-access" => "دسترسی سریع",
    ));

    //register Widgets
      add_theme_support("widgets");

    
    //register custom logo
      add_theme_support("custom-logo");
};
add_action("after_setup_theme","register_feature");

?>
