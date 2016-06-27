<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="row inside">
        <hr>
        <div class="col-3">
            <figure>
              
            </figure>
        </div>
        <article class="col-9">
            <h2><?php the_title() ?></h2>
            <?php the_content() ?></article>
    </section>

<?php endwhile;endif ?>
<?php get_footer(); ?>
