<footer class="Footer">


    <div class="Circle">
        <svg  viewBox="0 0 533 180" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">

            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path
                    d="M527.619227,175.849371 C491.524184,76.0523013 388.179265,4 266.322758,4 C144.436654,4 41.0711321,76.0873058 5,175.922092 C16.232425,175.922091 506.610768,175.866013 527.619227,175.849371 Z"
                    id="Oval-1" stroke="#414042" stroke-width="7"></path>
            </g>
        </svg>
    </div>
    <section class="Footer-nav">
        <ul class="row center ">
            <li><a href="<?php bloginfo('url') ?>/noticias">Noticias</a></li>
            <li><a href="<?php bloginfo('url') ?>/medellin">Medellín</a></li>
            <li><a href="<?php bloginfo('url') ?>/aliados">Aliados</a></li>
            <li><a id="contact" href="#">Contacto</a></li>
        </ul>
    </section>
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/footer.png" alt="">
    </figure>
</footer>
</main>
<div class="PopUpBlock">
    <section class="PopUp row middle center hide">
        <span class="buttonClose">X</span>
        <div class="PopUp-content">
            <div class="line"></div>
            <?php if (function_exists('smuzform_render_form')) {
                smuzform_render_form('15');
            } ?>
            <p>O puedes escribirle a...</p>

            <p>
                Información General REDLAT <br>
                info@redlat.org<br>
                Información General CIRCULART<br>
                info@circulart.org
            </p>
        </div>
    </section>
</div>
<?php wp_enqueue_script('load', get_template_directory_uri() . '/assets/js/main .js', array('jquery'), 1, false); ?>
<?php wp_footer(); ?>
</body>
</html>
