<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <title><?php bloginfo("name"); ?> - <?php bloginfo("description"); ?></title>
    <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
    <?php wp_head(); ?>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            header_menu();
            ?>
        </div>
    </nav>


</header>
<body>