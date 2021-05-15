<?php
// popup template
function popuptemplate($atts){
	 	  $a = shortcode_atts( array(
   		   'img' => 'world',
			'link' => "link"
  		 ), $atts );

		return '
		<!---popup template--->
		<section class="popup-container">
		<div class="popup-image">
		<img src="'.$a["img"].'" alt=""> // <button class="info">
		<a href="'.$a["link"].'">اطلاعات بیشتر</a>
		</button><button class="close-btn">X</button> // </div>
		</section>
	';
}
add_shortcode("popuptemplate","popuptemplate");



/*insert popups in footer*/
function insert_popups(){
	
/*book popup*/
	if( is_product() && has_term( 33, 'product_cat')) {
    ?>
<?php
		echo do_shortcode( '[popuptemplate img="https://asphaltshop.ir/wp-content/uploads/2021/01/the-way-i-am-eminem-4.jpeg" link="https://asphaltshop.ir/shop/book/eminem-book/the-way-i-am-book/"]' );
		?>
    <?php
	}
}	
/*end book popup*/

add_action('wp_footer', 'insert_popups');
?>