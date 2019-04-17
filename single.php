<?php get_header(); ?>
<div class="top-page showme">
    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/char.jpg" alt="myface"></a>
</div>
<div class="top showme">
    <div class="black-st">
        <div class="top-inner">
            <p class="zcoder">Zcoder</p>
            <p class="title-desc">Yeon's Portfolio Art</p>
        </div>
    </div>
</div>
<div class="container showme">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php $image = get_field('image'); ?>
    <div class="row">
        <h1 class="title"><?php echo get_field('title'); ?></h1>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        <p><?php the_content(); ?></p>
        <div class="pagenav clearfix">
            <span class="previous"><?php previous_post_link( '%link', '← PREVIOUS', true ); ?></span>
            <span class="next"><?php next_post_link( '%link', 'NEXT →', true ); ?></span>
        </div>
    </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>