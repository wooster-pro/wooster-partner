<?php

/**
 * Display Admin notice
 */
function wooster_plugin_notice()
{
    $url = esc_url(add_query_arg(
        'page',
        'wooster-partenariat',
        get_admin_url() . 'admin.php'
        // get_admin_url() . 'options-general.php'
    ));
?>
    <div class="notice error">
        <p><?php _e('Partenariat Wooster : Votre <a href=' . $url . '>clé de licence de partenariat' . '</a> avec Wooster n\'a pas été renseigné.', 'wooster-badge'); ?></p>
    </div>
<?php
}

/**
 * Define the light badge shortcode function
 */
function wooster_badge_light_shortcode()
{
    // Get the plugin directory url
    $plugin_dir = plugin_dir_url(__FILE__);

    // Get the image URL
    $image_url = 'https://cdn-img.wooster.fr/app/uploads/updater/wooster-badge-partenaire.png';
    // $image_url = $plugin_dir . 'assets/wooster-badge-partenaire.png';

    // Has the partner provided their number?
    if (empty(get_option('partner_license'))) {
        // Construct empty image.
        $image = '<div class="wooster-badge"></div>';
    } else {
        // Construct the image HTML.
        $image = wooster_partenaire_badge_light('856842569', '122301');
    }
    return $image;
}
add_shortcode('wooster-light-badge', 'wooster_badge_light_shortcode');

/**
 * Define the dark badge shortcode function
 */
function wooster_badge_dark_shortcode()
{
    // Get the plugin directory url
    $plugin_dir = plugin_dir_url(__FILE__);

    // Get the image URL
    $image_url = 'https://cdn-img.wooster.fr/app/uploads/updater/wooster-badge-partenaire.png';
    // $image_url = $plugin_dir . 'assets/wooster-badge-partenaire.png';

    // Has the partner provided their number?
    if (empty(get_option('partner_license'))) {
        // Construct empty image.
        $image = '<div class="wooster-badge"></div>';
    } else {
        // Construct the image HTML.
        $image = wooster_partenaire_badge_dark('856842569', '122301');
    }
    return $image;
}
add_shortcode('wooster-dark-badge', 'wooster_badge_dark_shortcode');


// Has the partner provided their number?
if (empty(get_option('partner_license'))) {
    // Show the admin notice
    add_action('admin_notices', 'wooster_plugin_notice');
}


/**
 * Displays the Wooster Badge settings link in the plugins admin page.
 *
 *
 * @param array $links The existing links.
 * @return array The modified links with the settings page link of Wooster Badge plugin.
 */
function wooster_partenariat_settings_link($links)
{
    // Build and escape the URL.
    $url = esc_url(add_query_arg(
        'page',
        'wooster-partenariat',
        get_admin_url() . 'admin.php'
        // get_admin_url() . 'options-general.php'
    ));
    // Create the link to Wooster Badge settings page.
    $settings_link = "<a href='$url'>" . __('Settings') . '</a>';
    // Adds the link to the end of the array.
    array_push(
        $links,
        $settings_link
    );
    return $links;
}
add_filter('plugin_action_links_wooster-badge/wooster-badge.php', 'wooster_partenariat_settings_link');


/**
 * Define the logo shortcode
 *
 * @param array[string] $atts['type']       // Type of image : img or svg
 * @param array[string] $atts['couleur']    // Color of background : clair or sombre
 * @param array[string] $atts['l']          // Width : petit, moyen, grand or custom pixel value
 * @param array[string] $atts['h']          // Height : petit, moyen, grand or custom pixel value
 * @return void
 */
function wooster_logo($atts)
// function wooster_logo($type, $color, $width, $height)
{
    $atts = shortcode_atts(array(
        'type' => '',
        'couleur' => '',
        'l' => '',
        'h' => '',
        'taille' => ''
    ), $atts, 'wooster-logo');
    return wooster_logo_content($atts);
}
add_shortcode('wooster-logo', 'wooster_logo');

/**
 * Construct the logo HTML.
 *
 * @param array[string] $atts['type']       // Type of image : img or svg
 * @param array[string] $atts['couleur']    // Color of background : clair or sombre
 * @param array[string] $atts['l']          // Width custom pixel value
 * @param array[string] $atts['h']          // Height custom pixel value
 * @param array[string] $atts['taille']     // Width fixed value : petit, moyen, grand
 * 
 * @return string       $image              // HTML of the logo
 */
function wooster_logo_content($atts)
// function wooster_logo_content($type, $color, $width, $height)
{
    $type   = $atts['type'];
    $color  = $atts['couleur'];
    $width  = $atts['l'];
    $height = $atts['h'];
    $size   = $atts['taille'];


    // Has the partner provided their number?
    if (empty(get_option('partner_license'))) {
        // Construct empty image.
        $image = '<div class="wooster-logo-' . $color . '"></div>';
    } else {
        // Management of the size of image.
        // User enter the height and the width?
        if ($width && $height) {
            // So, the width is kept and prioritized and the height will adapt to it.
            $height = 'auto';
            // User enter only the width?
        } elseif ($width && empty($height)) {
            $height = 'auto';
            // User enter only the height?
        } elseif (empty($width) && $height) {
            $width = 'auto';
            // User enter nothing?
        } elseif (empty($width) && empty($height) && empty($size)) {
            // The default logo is the small version.
            $size = 'petit';
        }
        // Transforms standard values ​​into pixels.
        if ($size == 'petit') {
            $width = 150;
            $height = 'auto';
        } elseif ($size == 'moyen') {
            $width = 300;
            $height = 'auto';
        } elseif ($size == 'grand') {
            $width = 600;
            $height = 'auto';
        }
        // if ($height == 'petit') {
        //     $height = 50;
        // } elseif ($height == 'moyen') {
        //     $height = 100;
        // } elseif ($height == 'grand') {
        //     $height = 200;
        // }

        // Management of the type of image.
        if ($type == 'img') {
            // Get the image URL
            if ($color == 'sombre') {
                $image_url = 'https://cdn-img.wooster.fr/app/uploads/wooster-badge/wooster-2.1_logo-hexa-blanc_1000.png';
            } else {
                $color = 'clair';   // Default color version.
                $image_url = 'https://cdn-img.wooster.fr/app/uploads/wooster-badge/wooster-2.1_logo-hexa-noir_1000.png';
            }
            // Construct the parameters "w" and "h" for Easy IO CDN.
            $w = $w2 = $w3 = '';
            $h = $h2 = $h3 = '';
            if ($width == 'auto') {
                $w = $w2 = $w3 = '';
            } else {
                $w = '&w=' . $width;
                $w2 = '&w=' . 2 * intval($width);
                $w3 = '&w=' . 3 * intval($width);
            }
            if ($height == 'auto') {
                $h = $h2 = $h3 = '';
            } else {
                $h = '&h=' . $height;
                $h2 = '&h=' . 2 * intval($height);
                $h3 = '&h=' . 3 * intval($height);
            }
            // Construct the image HTML.
            $image = '<div class="wooster-logo-' . $color . '">
                        <picture style="width: ' . $width . 'px; height: ' . $height . 'px;">
                            <source srcset="' . esc_attr($image_url . '?lossy=1&ssl=1' . $w . $h) . ', ' . esc_attr($image_url . '?lossy=1&ssl=1' . $w2 . $h2 . ' 2x') . ', ' . esc_attr($image_url . '?lossy=1&ssl=1' . $w3 . $h3 . ' 3x') . '">
                            <img src="' . esc_attr($image_url . '?lossy=1&ssl=1' . $w . $h) . '" alt="Logo Wooster" width=' . $width . ' height=' . $height . '>
                        </picture>
                    </div>';
        } else {
            // // Get the plugin directory url
            // $plugin_dir = plugin_dir_url(__DIR__);
            // // Get the svg URL
            // if ($color == 'sombre') {
            //     $image_url = $plugin_dir . 'assets/wooster-2.1_logo-hexa-blanc_svg.svg';
            // } else {
            //     $color = 'clair';   // Default color version.
            //     $image_url = $plugin_dir . 'assets/wooster-2.1_logo-hexa-noir_svg.svg';
            // }
            // // Construct the image HTML.
            // $image = '<div class="wooster-logo-' . $color . '">
            //             <img src="' . $image_url . '" alt="Logo Wooster" width=' . $width . ' height=' . $height . '>
            //         </div>';

            // var_dump($color);
            if ($color == 'sombre') {
                $image = wooster_construct_logo_svg_sombre($width, $height);
            } else {
                $image = wooster_construct_logo_svg_clair($width, $height);
            }
        }
    }
    return $image;
}