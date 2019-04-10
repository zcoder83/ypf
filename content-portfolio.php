<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="header">
                <h2>Portfolio</h2>
                <h3>Some of my recent work.</h3>
            </div>
            <div class="content clearfix">
                <div class="work-list">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                    <div class="work-item">
                        <a href="">
                            <img class="work-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <div class=""></div>
                        </a>
                        <h2 class="title"><?php echo get_field('title'); ?></h2>
                        <h3 class="subtitle"><?php echo get_field('subtitle'); ?></h3>
                        <?php $image = get_field('image'); ?>
                        
                    </div>
                    <?php endwhile; endif; ?>
                </div><!-- work-list -->
            </div><!-- content -->
        </div>
    </div>
</section>