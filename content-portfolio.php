<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="header hideme">
                <h2>Portfolio</h2>
                <h3>Some of my recent work.</h3>
            </div>
            <div class="content clearfix">
                <div class="work-list">
                <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                <?php if( $wpb_all_query->have_posts()): while($wpb_all_query->have_posts()): $wpb_all_query->the_post(); ?>
                <?php $image = get_field('image'); ?>
                    <div class="work-item hideme">
                        <a class="work-img" href="<?php the_permalink(); ?>">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <div class="black-hover">
                                <i class="fas fa-plus"></i>
                            </div>
                        </a>
                        <div class="work-txt">
                            <h2 class="title"><a href="<?php the_permalink(); ?>"><?php echo get_field('title'); ?></a></h2>
                            <h3 class="subtitle"><?php echo get_field('subtitle'); ?></h3>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div><!-- work-list -->
            </div><!-- content -->
        </div>
    </div>
</section>