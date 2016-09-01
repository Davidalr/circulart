<?php get_header(); ?>

<section class="News">
    <?php global $post;
    $my_query = new WP_Query('category_name=noticias&showposts=3'); ?>
    <ul class="row center">

        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <li class="col-4">
                <figure>
                    <a href="<?php the_permalink(); ?>">  <?php the_post_thumbnail(); ?></a>
                </figure>
                <h2><?php the_title() ?></h2>
                <article>
                    <?php the_excerpt(); ?>
                </article>
            </li>
        <?php endwhile; ?>
    </ul>
</section>
<section>
    <iframe width="100%" height="315" src="https://www.youtube.com/embed/pPvtio-7fSE" frameborder="0"
            allowfullscreen></iframe>
</section>
<!--<section class="row Gallery center">
    <figure>
        <a href="https://www.flickr.com/photos/134400696@N07/" target="_blank"><img
                src="<?php /*bloginfo('template_url') */ ?>/assets/images/1img.png" alt=""></a>
    </figure>
    <figure>
        <a href="https://www.flickr.com/photos/134400696@N07/" target="_blank"><img
                src="<?php /*bloginfo('template_url') */ ?>/assets/images/2img.png" alt=""></a>
    </figure>
    <figure>
        <a href="https://www.flickr.com/photos/134400696@N07/" target="_blank"><img
                src="<?php /*bloginfo('template_url') */ ?>/assets/images/3img.png" alt=""></a>
    </figure>
    <figure>
        <a href="https://www.flickr.com/photos/134400696@N07/" target="_blank"><img
                src="<?php /*bloginfo('template_url') */ ?>/assets/images/4img.png" alt=""></a>
    </figure>
    <figure>
        <a href="https://www.flickr.com/photos/134400696@N07/" target="_blank"><img
                src="<?php /*bloginfo('template_url') */ ?>/assets/images/5img.png" alt=""></a>
    </figure>
</section>-->

<section class="row Spotify center">
    <div class="col-8  cols-12  Spotify-content">
        <div class="row middle Social-content">
            <svg width="34px" height="29px" viewBox="0 0 34 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <path d="M32.532,4.2461 C31.336,4.7761 30.05,5.1341 28.7,5.2981 C30.077,4.4661 31.137,3.1601 31.636,1.6001 C30.343,2.3671 28.915,2.9271 27.393,3.2231 C26.175,1.9231 24.443,1.1121 22.522,1.1121 C18.837,1.1121 15.852,4.1011 15.852,7.7921 C15.852,8.3101 15.909,8.8211 16.021,9.3101 C10.475,9.0291 5.559,6.3731 2.267,2.3381 C1.69,3.3231 1.361,4.4661 1.361,5.6901 C1.361,8.0071 2.541,10.0491 4.329,11.2491 C3.236,11.2141 2.209,10.9131 1.305,10.4101 L1.305,10.4931 C1.305,13.7281 3.608,16.4271 6.661,17.0391 C6.102,17.1931 5.512,17.2741 4.902,17.2741 C4.471,17.2741 4.054,17.2321 3.647,17.1571 C4.495,19.8091 6.961,21.7351 9.883,21.7931 C7.599,23.5821 4.721,24.6511 1.592,24.6511 C1.054,24.6511 0.524,24.6171 0,24.5531 C2.955,26.4481 6.466,27.5521 10.231,27.5521 C22.509,27.5521 29.219,17.3821 29.219,8.5631 C29.219,8.2741 29.216,7.9861 29.199,7.7001 C30.506,6.7611 31.64,5.5811 32.532,4.2461 L32.532,4.2461 Z" stroke="#06918F"></path>
                </g>
            </svg>
            <h4>#ALLATENEMOSQUEOIR</h4>
            <?php echo do_shortcode("[mintweet username=\"Circulart_\" count=\"2\" type=\"user\" ]"); ?>

        </div>
    </div>
    <div class="col-4 cols-12 row center end">
        <iframe src="https://embed.spotify.com/?uri=spotify:user:circulart:playlist:3d9GgpH2QKIFeMD5skNtyj"
                height="380" frameborder="0" allowtransparency="true"></iframe>
    </div>
</section>
<?php get_footer(); ?>
