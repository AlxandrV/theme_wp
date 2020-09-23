<?php get_header(); ?>

    <div class="img-home">
        <img src="<?php echo get_template_directory_uri(); ?>/img/home_page.jpg" alt="Logo">
    </div>

    <section id="content-home" class="grid-container">
        <div class="last-post grid-all">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            
            <?php the_content(); ?>
            
            <?php endwhile; endif; ?>
        </div>
    </section>
    
<?php get_footer(); ?>