<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset");?>">
        <title><?php bloginfo("name"); ?> - <?php bloginfo("description"); ?></title>
        <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
        <?php wp_head(); ?>
    </head>
    <header>
        <nav>
            <?php
            header_menu();
            ?>
        </nav>
    </header>
    <body>