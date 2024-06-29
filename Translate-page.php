 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="language-switcher">
            <form id="language-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <select id="language" name="lang" onchange="document.getElementById('language-form').submit();">
                    <option value="en_US" <?php selected(get_locale(), 'en_US'); ?>>English</option>
                    <option value="fr_FR" <?php selected(get_locale(), 'fr_FR'); ?>>Français</option>
                    <option value="de_DE" <?php selected(get_locale(), 'de_DE'); ?>>Deutsch</option>
                    <!-- Add more languages as needed -->
                </select>
            </form>
        </div>
    </header>
    <!-- Rest of your theme's HTML -->
