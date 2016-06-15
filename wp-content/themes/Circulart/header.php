<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> <?php the_title(); ?> </title>

    <meta name="description" content="<?php bloginfo('description'); ?>"/>

    <link rel="profile" href="http://gmpg.org/xfn/11">

    <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/assets/images/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> data-urlBody="<?php bloginfo('url') ?>">

<main>

    <header class="Header">
        <nav class="Nav">
            <ul class="row center">
                <li><a href="">FESTIVAL <b>SHOWCASE</b></a></li>
                <li><a href="">ZONA DE <b>NEGOCIOS</b></a></li>
                <li><a href="">ZONA <b>ACADÉMICA</b></a></li>
            </ul>
        </nav>
    </header>
