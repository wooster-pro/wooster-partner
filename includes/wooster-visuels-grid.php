<?php

function wooster_logo_grid($titre, $shortcode_img, $shortcode_svg, $apercu)
{
    if ($apercu['couleur'] == 'sombre') {
        $box_color = 'dark';
    } else {
        $box_color = '';
    }
    ob_start();
?>
    <div class="wooster-grid">
        <div class="wooster-box w-500px">
            <div class="wooster-box-content">
                <div class="wooster-box-header">
                    <h3 class="wooster-box-title"><?= __($titre, 'wooster-badge') ?></h3>
                </div>
                <div class="wooster-box-body">
                    <div class="wooster-box-description">
                        <p class="wooster-box-action-button-text-primary">
                            <b><?= __('PNG, WebP et AVIF', 'wooster-badge') ?></b>
                        </p>
                        <code class="wooster-box-action-button-text-secondary nowrap"><?= $shortcode_img ?></code>
                        <p class="wooster-box-action-button-text-primary">
                            <b>SVG</b>
                        </p>
                        <code class="wooster-box-action-button-text-secondary nowrap" "><?= $shortcode_svg ?></code>
                    </div>
                </div>
            </div>
        </div>
        <div class=" wooster-box center-apercu <?= $box_color; ?>">
            <div class="wooster-box-header">
                <h3 class="wooster-box-title"><?= __('Aperçu', 'wooster-badge') ?></h3>
            </div>
            <div class="wooster-box-content">
                <?= wooster_logo_content($apercu) ?>
            </div>
        </div>
    </div>

    <?php
    return ob_get_clean();
}
