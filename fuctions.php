 // functions.php
function mytheme_setup() {
    load_theme_textdomain('mytheme', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'mytheme_setup');

function set_theme_locale() {
    if (isset($_GET['lang']) && !empty($_GET['lang'])) {
        $locale = sanitize_text_field($_GET['lang']);
        switch_to_locale($locale);
        setcookie('site_language', $locale, time() + 3600 * 24 * 30, COOKIEPATH, COOKIE_DOMAIN);
    } elseif (isset($_COOKIE['site_language']) && !empty($_COOKIE['site_language'])) {
        $locale = sanitize_text_field($_COOKIE['site_language']);
        switch_to_locale($locale);
    }
}
add_action('init', 'set_theme_locale');
