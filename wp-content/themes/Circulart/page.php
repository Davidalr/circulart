<?php get_header(); ?>

<?php if( is_page( array( 'aliados' )) ):?>
    <section class="row inside">
        <hr>
        <div class="col-3">

        </div>
        <article class="col-9">
            <h2>Organiza</h2>
            <img src="<?php bloginfo('template_url') ?>/assets/images/Logo-aliados.png" alt="">
        </article>
    </section>
<?php endif ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="row inside">
        <hr>
        <div class="col-3">
            <figure>
                <?php the_post_thumbnail(); ?>
            </figure>
        </div>
        <article class="col-9">
            <h2><?php the_title() ?></h2>
            <?php the_content() ?></article>
    </section>

<?php endwhile;endif ?>
<?php get_footer(); ?>


