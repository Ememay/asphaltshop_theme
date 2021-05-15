
<?php get_header() ?>
<!--blog layout-->
<section class="whole p10">
    <!--post content-->
    <div class="post-content">
        <?php if (has_post_thumbnail()) { ?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
        <?php } ?>
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>