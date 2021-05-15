<section class="product">
    <h4>محبوب ترین های آسفالت</h4>
    <div class="product-area">

        <?php
        $theWayIAmbookPostId = "436";
        $arg  = array(
            'post_type'        => 'product',
            'orderby'             => 'date',
            'order'                  => 'desc',
            'posts_per_page' => 16,
            'post__not_in' => array($theWayIAmbookPostId)
        );
        $pro = new WP_Query($arg);
        if ($pro->have_posts()) :
            while ($pro->have_posts()) :
                $pro->the_post();
        ?>
                <a href="<?php the_permalink(); ?>" class="item">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <h2><?php the_title(); ?></h2>
                    <span><?php
                            global $post;
                            $product = new WC_Product($post->ID);
                            echo $product->get_price_html();
                            ?></span>
                </a>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</section>