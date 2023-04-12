<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
        <header class="main-header">
            <?php if (get_field('header_background_image', 'option')) : ?>
                <img src="<?php echo get_field('header_background_image', 'option'); ?>" alt="">
            <?php endif; ?>

            <div class="logo">
                <?php if (get_field('logo', 'option')) : ?>
                    <?php if (is_front_page()) : ?>
                        <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                    <?php else : ?>
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_field('logo', 'option'); ?>" alt="">
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php wp_nav_menu([
                'theme_location'  => 'menu-1',
                'menu'            => '',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'main-menu main-header__main-menu',
                'menu_id'         => 'js-main-menu',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ]); ?>

            <div class="main-header__sandwich sandwitch-wrap" id="js-sandwitch-wrap">
                <div class="sandwitch">
                    <div class="sandwitch__line sandwitch__line--top"></div>
                    <div class="sandwitch__line sandwitch__line--middle"></div>
                    <div class="sandwitch__line sandwitch__line--bottom"></div>
                </div>
            </div>
        </header>