<?php get_header(); ?>
    <section class="Version">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <figure class=" Version-figure col-4 cols-12">
                    <h1>CIRCULART</h1>
                    <?php the_post_thumbnail(); ?>
                </figure>
                <div class="col-8">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <h2>VERSIONES ANTERIORES</h2>
        <hr>
        <ul class="row center ">
            <li class="col-2"><a href="http://circulart.org/2016/wp-content/uploads/2016/06/Catalogo_MCM_2010.pdf" target="_blank">2010</a></li>
            <li class="col-2"><a href="http://circulart.org/2016/wp-content/uploads/2016/06/Catalogo_MCM_2011_flipping.pdf" target="_blank">2011</a></li>
            <li class="col-2"><a href="http://circulart.org/2016/wp-content/uploads/2016/06/Catalogo_Circulart_2012-oct-25pdf.pdf" target="_blank">2012</a></li>
            <li class="col-2"><a href="http://circulart.org/2016/wp-content/uploads/2016/06/Catalogo_2013_31_Oct.pdf" target="_blank">2013</a></li>
            <li class="col-2"><a href="http://circulart.org/2016/wp-content/uploads/2016/06/CATALOGO_2014_alta.pdf" target="_blank">2014</a></li>
            <li class="col-2"><a href="http://circulart.org/2016/wp-content/uploads/2016/06/CATALOGO_CIRCULART_2015.pdf" target="_blank">2015</a></li>
        </ul>
    </section>

<?php get_footer(); ?>
