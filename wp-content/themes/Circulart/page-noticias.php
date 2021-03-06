<?php get_header(); ?>
    <section class="News">
        <?php global $post , $paged;
        $my_query = new WP_Query('category_name=noticias&showposts=12&paged='.$paged); ?>
        <ul class="row">

            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <li class="col-4">
                    <figure>
                        <a href="<?php the_permalink(); ?>">   <?php the_post_thumbnail(); ?></a>
                    </figure>
                    <h2><?php  the_title() ?></h2>
                    <article>
                        <?php the_excerpt(); ?>
                    </article>
                </li>

            <?php endwhile;  ?>

        </ul>

        <?php wpex_pagination(); ?>

    </section>
<?php get_footer(); ?>
