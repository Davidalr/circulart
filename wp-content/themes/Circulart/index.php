<?php get_header(); ?>

<section class="News">
    <?php global $post;
    $my_query = new WP_Query('category_name=noticias&showposts=3'); ?>
    <ul class="row center">

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li class="col-4">
                <figure>
                    <?php the_post_thumbnail(); ?>
                </figure>
                <h2><?php  the_title() ?></h2>
                <article>
                    <?php the_excerpt(); ?>
                </article>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
<section><iframe width="100%" height="315" src="https://www.youtube.com/embed/pPvtio-7fSE" frameborder="0" allowfullscreen></iframe></section>
<section class="row Gallery center">
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/1img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/2img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/3img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/4img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/5img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/6img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/7img.png" alt="">
    </figure>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/1img.png" alt="">
    </figure>
</section>
<?php get_footer(); ?>
