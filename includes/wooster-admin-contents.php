<?php

/**
 * Show badges in admin
 */
function show_badge($certificate)
{
    ob_start();
?>
    <style>
        .wooster-wrapper {
            position: relative;
            margin-bottom: 0.5rem;
            padding: 0;
            border-radius: 0 6px 6px 6px;
            /* background: #f8f9fa; */
        }

        .wooster-grid {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            display: flex;
            flex-flow: row wrap;
            gap: 0.9375rem;
        }

        .wooster-box {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 288px;
            flex: 0 0 288px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            /* text-align: center; */
            position: relative;
            margin-bottom: 1rem;
            background: #fff;
            border: 1px solid #b5bfc9;
            border-radius: 6px;
            padding: 1rem;
            align-items: center;
        }

        .wooster-box.dark {
            background: #1d2327;
            color: #f0f0f1;
        }

        .wooster-box.dark h3 {
            color: #f0f0f1;
        }

        .wooster-box-content {
            align-items: center;
        }
    </style>

    <div class="wooster-wrapper">
        <p><?= __('Intégrez facilement le badge où vous le souhaitez grâce aux shortcodes ci-dessous. <br>Nous recommandons de l\'intégrer sur la page d\'accueil. Il permet à vos clients de vérifier la validité de votre certificat de partenariat sur le site <b>wooster.fr</b>.', 'wooster-partner') ?></p>
        <div class="wooster-grid">
            <div class="wooster-box">
                <div class="wooster-box-content">
                    <div class="wooster-box-header">
                        <h3 class="wooster-box-title">Badge clair</h3>
                    </div>
                    <div class="wooster-box-body">
                        <div class="wooster-box-description">
                            <p class="wooster-box-action-button-text-primary">Shortcode pour intégration :</p>
                            <code class="wooster-box-action-button-text-secondary">[wooster-light-badge]</code>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wooster-box">
                <div class="wooster-box-content">
                    <?= wooster_partenaire_badge_light($certificate, 'https://www.wooster.fr/', 'https://www.wooster.fr/?partner-certificate=' . $certificate); ?>
                </div>
            </div>
        </div>
        <div class="wooster-grid">
            <div class="wooster-box dark">
                <div class="wooster-box-content">
                    <div class="wooster-box-header">
                        <h3 class="wooster-box-title">Badge sombre</h3>
                    </div>
                    <div class="wooster-box-body">
                        <div class="wooster-box-description">
                            <p class="wooster-box-action-button-text-primary"><?= __('Shortcode pour intégration :', 'wooster-partner') ?></p>
                            <code class="wooster-box-action-button-text-secondary">[wooster-dark-badge]</code>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wooster-box dark">
                <div class="wooster-box-content">
                    <?= wooster_partenaire_badge_dark($certificate, 'https://www.wooster.fr/', 'https://www.wooster.fr/?partner-certificate=' . $certificate); ?>
                </div>
            </div>
        </div>
    </div>
    <?php add_thickbox(); ?>
    <div id="modal-chatbot" style="display:none;">
        <iframe src="https://wooster.fr/plugin-partenaire/" width="100%" height="591px"></iframe>
    </div>
<?php
    $content = ob_get_clean();
    return $content;
}

/**
 * Show badges in admin
 */
function show_visuels()
{
    ob_start();
?>
    <style>
        .wooster-wrapper {
            position: relative;
            margin-bottom: 0.5rem;
            padding: 0;
            border-radius: 0 6px 6px 6px;
            /* background: #f8f9fa; */
        }

        .wooster-grid {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            display: flex;
            flex-flow: row wrap;
            gap: 0.9375rem;
        }

        .w-500px {
            width: 500px;
        }

        .wooster-box {
            -webkit-box-flex: 0;
            /* -ms-flex: 0 0 500px; */
            /* flex: 0 0 445px; */
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            margin: 0;
            /* text-align: center; */
            position: relative;
            margin-bottom: 1rem;
            background: #fff;
            border: 1px solid #b5bfc9;
            border-radius: 6px;
            padding: 1rem;
            align-items: center;
        }

        .wooster-box h3 {
            margin-top: 0;
        }

        .wooster-box input {
            width: 100px;
        }

        .wooster-box.dark {
            background: #1d2327;
            color: #f0f0f1;
        }

        .wooster-box.dark h3 {
            color: #f0f0f1;
        }

        .nowrap {
            white-space: nowrap;
        }

        .center-apercu {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 2rem;
        }

        .center-apercu .wooster-box-header {
            position: absolute;
            top: 15px;
            left: 15px;
        }
    </style>

    <div class="wooster-wrapper">
        <div class="wooster-grid">
            <div>
                <p><?= __('Intégrez facilement le logo de Wooster où vous le souhaitez grâce au shortcode ', 'wooster-partner') ?><code>[wooster-logo]</code></p>
            </div>
            <div>
                <?= wooster_logo_content(array(
                    'type' => '',
                    'couleur' => '',
                    'l' => '',
                    'h' => '',
                    'taille' => ''
                )) ?>
            </div>
        </div>


        <h3><?= __('Shortcode adaptatif', 'wooster-partner') ?></h3>
        <p><?= __('Vous pouvez adapter l\'affichage du logo en modifiant les paramètres du shortcode', 'wooster-partner') ?><code>[wooster-logo]</code><?= __(' comme ci-dessous :', 'wooster-partner') ?></p>
        <ul>
            <li><b><?= __('PNG, WebP et AVIF', 'wooster-partner') ?></b> : <?= __('Le meilleur format est automatiquement distribué par notre CDN.', 'wooster-partner') ?></li>
            <li> <b>SVG</b> : <?= __('Le SVG est intégré en HTML.', 'wooster-partner') ?></li>
        </ul>


        <?= wooster_logo_grid(
            __('Petit logo sur fond clair', 'wooster-partner'),
            '[wooster-logo type="img" couleur="clair" taille="petit"]',
            '[wooster-logo type="svg" couleur="clair" taille="petit"]',
            array(
                'type' => '',
                'couleur' => 'clair',
                'l' => '',
                'h' => '',
                'taille' => 'petit'
            )
        ) ?>
        <?= wooster_logo_grid(
            __('Petit logo sur fond sombre', 'wooster-partner'),
            '[wooster-logo type="img" couleur="sombre" taille="petit"]',
            '[wooster-logo type="svg" couleur="sombre" taille="petit"]',
            array(
                'type' => '',
                'couleur' => 'sombre',
                'l' => '',
                'h' => '',
                'taille' => 'petit'
            )
        ) ?>
        <?= wooster_logo_grid(
            __('Moyen logo sur fond clair', 'wooster-partner'),
            '[wooster-logo type="img" couleur="clair" taille="moyen"]',
            '[wooster-logo type="svg" couleur="clair" taille="moyen"]',
            array(
                'type' => '',
                'couleur' => 'clair',
                'l' => '',
                'h' => '',
                'taille' => 'moyen'
            )
        ) ?>
        <?= wooster_logo_grid(
            __('Moyen logo sur fond sombre', 'wooster-partner'),
            '[wooster-logo type="img" couleur="sombre" taille="moyen"]',
            '[wooster-logo type="svg" couleur="sombre" taille="moyen"]',
            array(
                'type' => '',
                'couleur' => 'sombre',
                'l' => '',
                'h' => '',
                'taille' => 'moyen'
            )
        ) ?>
        <?= wooster_logo_grid(
            __('Grand logo sur fond clair', 'wooster-partner'),
            '[wooster-logo type="img" couleur="clair" taille="grand"]',
            '[wooster-logo type="svg" couleur="clair" taille="grand"]',
            array(
                'type' => '',
                'couleur' => 'clair',
                'l' => '',
                'h' => '',
                'taille' => 'grand'
            )
        ) ?>
        <?= wooster_logo_grid(
            __('Grand logo sur fond sombre', 'wooster-partner'),
            '[wooster-logo type="img" couleur="sombre" taille="grand"]',
            '[wooster-logo type="svg" couleur="sombre" taille="grand"]',
            array(
                'type' => '',
                'couleur' => 'sombre',
                'l' => '',
                'h' => '',
                'taille' => 'grand'
            )
        ) ?>


        <div class="wooster-grid custom-box">
            <div class="wooster-box w-500px">
                <div class="wooster-box-content">
                    <div class="wooster-box-header">
                        <h3 class="wooster-box-title"><?= __('Logo avec largeur personnalisée', 'wooster-partner') ?></h3>
                        <label for="custom-width"><?= __('Largeur', 'wooster-partner') ?></label>
                        <input type="number" name="custom-width" class="custom-width" placeholder="<?= __('ex : 100', 'wooster-partner') ?>" value="200"> px
                    </div>
                    <div class="wooster-box-body">
                        <div class="wooster-box-description">
                            <p class="wooster-box-action-button-text-primary">
                                <b><?= __('PNG, WebP et AVIF', 'wooster-partner') ?></b>
                            </p>
                            <code class="change-code-img wooster-box-action-button-text-secondary nowrap">[wooster-logo type="img" couleur="clair" l=<span class="width-value">200</span>]</code>
                            <p class="wooster-box-action-button-text-primary">
                                <b>SVG</b>
                            </p>
                            <code class="change-code-svg wooster-box-action-button-text-secondary nowrap">[wooster-logo type="svg" couleur="clair" l=<span class="width-value">200</span>]</code>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" wooster-box center-apercu ">
                <div class=" wooster-box-header">
                    <h3 class="wooster-box-title"><?= __('Aperçu', 'wooster-partner') ?></h3>
                </div>
                <div class="wooster-box-content">
                    <?= svg_upgrade('light'); ?>
                </div>
            </div>
        </div>
        <div class="wooster-grid custom-box">
            <div class="wooster-box w-500px">
                <div class="wooster-box-content">
                    <div class="wooster-box-header">
                        <h3 class="wooster-box-title"><?= __('Logo avec largeur personnalisée', 'wooster-partner') ?></h3>
                        <label for="custom-width"><?= __('Largeur', 'wooster-partner') ?></label>
                        <input type="number" name="custom-width" class="custom-width dark" placeholder="<?= __('ex : 100', 'wooster-partner') ?>" value="200"> px
                    </div>
                    <div class="wooster-box-body">
                        <div class="wooster-box-description">
                            <p class="wooster-box-action-button-text-primary">
                                <b><?= __('PNG, WebP et AVIF', 'wooster-partner') ?></b>
                            </p>
                            <code class="change-code-img wooster-box-action-button-text-secondary nowrap">[wooster-logo type="img" couleur="sombre" l=<span class="width-value dark">200</span>]</code>
                            <p class="wooster-box-action-button-text-primary">
                                <b>SVG</b>
                            </p>
                            <code class="change-code-svg wooster-box-action-button-text-secondary nowrap">[wooster-logo type="svg" couleur="sombre" l=<span class="width-value dark">200</span>]</code>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" wooster-box center-apercu dark">
                <div class=" wooster-box-header">
                    <h3 class="wooster-box-title"><?= __('Aperçu', 'wooster-partner') ?></h3>
                </div>
                <div class="wooster-box-content">
                    <?= svg_upgrade('dark'); ?>
                </div>
            </div>
        </div>
        <script>
            // Select the input element and the elements where to display the value
            var inputElement = [];
            var codeElementImg = [];
            var codeElementSvg = [];
            var svgElement = [];
            var inputValue = [];
            var idSelector;
            var parentSelector = document.querySelectorAll('.custom-box');
            var i = 0;
            NodeList.prototype.forEach = Array.prototype.forEach;
            Array.prototype.forEach.call(parentSelector, function(element) {
                element.setAttribute('id', 'wooster-custom-box-' + i);
                idSelector = document.querySelector('#wooster-custom-box-' + i).id;
                inputElement[i] = document.querySelector('#' + idSelector + ' .custom-width');
                codeElementImg[i] = document.querySelector('#' + idSelector + ' .change-code-img .width-value');
                codeElementSvg[i] = document.querySelector('#' + idSelector + ' .change-code-svg .width-value');
                svgElement[i] = document.querySelector('#' + idSelector + ' .change-svg');

                i++;
            });
            for (let i = 0; i < parentSelector.length; i++) {
                inputElement[i].addEventListener('input', function() {
                    // Updates text in code with current value
                    codeElementImg[i].textContent = inputElement[i].value;
                    codeElementSvg[i].textContent = inputElement[i].value;

                    // Updates the width of the SVG
                    svgElement[i].style.width = inputElement[i].value + 'px';
                });
            }
        </script>



        <h3><?= __('Personnalisation avancée du shortcode ', 'wooster-partner') ?><code>[wooster-logo]</code></h3>
        <table class="wp-list-table widefat striped table-view-list" style="margin: 30px 0;">
            <thead>
                <tr>
                    <th style="padding-left: 10px;"><span><?= __('Paramètre', 'wooster-partner') ?></span></th>
                    <th><?= __('Description', 'wooster-partner') ?></th>
                    <th><?= __('Valeurs possibles', 'wooster-partner') ?></th>
                    <th><?= __('Exemples', 'wooster-partner') ?></th>
                </tr>
            </thead>

            <tbody id="the-list">
                <tr>
                    <td><strong><code>type</code></strong></td>
                    <td style="max-width: 250px;"><strong><?= __('Type d\'image du logo', 'wooster-partner') ?></strong><br>
                        <?= __('Le logo est disponible aux formats :', 'wooster-partner') ?>
                        <ul style="padding-left: 20px; list-style-type: disc;">
                            <li><?= __('PNG, WebP et AVIF.', 'wooster-partner') ?> : <?= __('Le meilleur format est automatiquement distribué par notre CDN.', 'wooster-partner') ?></li>
                            <li><?= __('SVG', 'wooster-partner') ?> : <?= __('Le SVG est intégré en HTML.', 'wooster-partner') ?></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><code>img</code> <?= __('pour les format PNG, WebP ou AVIF.', 'wooster-partner') ?></li>
                            <li><code>svg</code> <?= __('pour le format SVG.', 'wooster-partner') ?></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li style="list-style-type: none;"><code>[wooster-logo type=img]</code></li>
                            <li style="list-style-type: none;"><code>[wooster-logo type=svg]</code></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong><code>couleur</code></strong></td>
                    <td style=" max-width: 250px;"><strong><?= __('Version du logo', 'wooster-partner') ?></strong><br>
                        <?= __('Sélectionner la version du logo adaptée à un fond clair ou sombre.', 'wooster-partner') ?><br>
                    </td>
                    <td>
                        <ul>
                            <li><code>clair</code> <?= __('pour l\'affichage du logo sur un fond clair.', 'wooster-partner ') ?></li>
                            <li><code>sombre</code> <?= __('pour l\'affichage du logo sur un fond sombre.', 'wooster-partner') ?></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><code>[wooster-logo couleur=clair]</code></li>
                            <li><code>[wooster-logo couleur=sombre]</code></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong><code>taille</code></strong></td>
                    <td style=" max-width: 250px;">
                        <strong><?= __('Dimmension du logo', 'wooster-partner') ?></strong><br>
                        <?= __('Choisir une taille prédéfinie.', 'wooster-partner') ?>
                    </td>
                    <td>
                        <ul>
                            <li><code>petit</code> (150px)</li>
                            <li><code>moyen</code> (300px)</li>
                            <li><code>grand</code> (600px)</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><code>[wooster-logo l=petit]</code></li>
                            <li><code>[wooster-logo l=moyen]</code></li>
                            <li><code>[wooster-logo l=grand]</code></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong><code>l</code></strong></td>
                    <td style=" max-width: 250px;">
                        <strong><?= __('Largeur du logo', 'wooster-partner') ?></strong><br>
                        <?= __('Lorsque vous indiquez une largeur et une hauteur en même temps dans le shortcode, la hauteur est automatiquement réécrite pour conserver les proportions du logo.', 'wooster-partner') ?>
                    </td>
                    <td>
                        <ul>
                            <li><code>xxx</code> (xxx px) : <?= __('largeur personnalisée en px', 'wooster-partner') ?></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><code>[wooster-logo l=100]</code></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><strong><code>h</code></strong></td>
                    <td>
                        <strong><?= __('Hauteur du logo', 'wooster-partner') ?></strong><br>
                        <?= __('N\'indiquez pas de largeur si vous souhaitez que la hauteur soit appliquée.', 'wooster-partner') ?>
                    </td>
                    <td>
                        <ul>
                            <li><code>xxx</code> (xxx px) : <?= __('hauteur personnalisée en px', 'wooster-partner') ?></li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><code>[wooster-logo h=100]</code></li>
                        </ul>
                    </td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <th><span><?= __('Paramètre', 'wooster-partner') ?></span></th>
                    <th><?= __('Description', 'wooster-partner') ?></th>
                    <th><?= __('Valeurs possibles', 'wooster-partner') ?></th>
                    <th><?= __('Exemples', 'wooster-partner') ?></th>
                </tr>
            </tfoot>
        </table>

    </div>

    <?php add_thickbox(); ?>
    <div id="modal-chatbot" style="display:none;">
        <iframe src="https://wooster.fr/plugin-partenaire/" width="100%" height="591px"></iframe>
    </div>

<?php
    $content = ob_get_clean();
    return $content;
}
