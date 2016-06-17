<?php get_header(); ?>
    <section class="News">
        <?php global $post;
        $my_query = new WP_Query('category_name=noticias&showposts=12'); ?>
        <ul class="row">

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
<?php get_footer(); ?>