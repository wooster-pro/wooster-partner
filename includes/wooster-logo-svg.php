<?php

function wooster_construct_logo_svg_clair($width, $height)
{
    if ($width == 'auto' || empty($width)) {
        $w_unit = '';
    } else {
        $w_unit = 'px';
    }
    if ($height == 'auto' || empty($height)) {
        $h_unit = '';
    } else {
        $h_unit = 'px';
    }


    ob_start();
?>
    <svg id="a" data-name="Calque 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 203.11 62.78" style="width:<?= $width . $w_unit ?>; height:<?= $height . $h_unit ?>;">
        <defs>
            <style>
                .ca {
                    fill: #1f1e21;
                }

                .ca,
                .da,
                .ea {
                    stroke-width: 0px;
                }

                .da {
                    fill: #fff;
                }

                .ea {
                    fill: url(#b);
                }
            </style>
            <radialGradient id="b" data-name="Dégradé sans nom 24" cx="13.6" cy="69.87" fx="13.6" fy="69.87" r="83.9" gradientUnits="userSpaceOnUse">
                <stop offset=".1" stop-color="#7e2ccf" />
                <stop offset=".9" stop-color="#4f2ccf" />
            </radialGradient>
        </defs>
        <g>
            <path class="ea" d="m57.25,21.08v20.62c0,3.85-2.05,7.4-5.38,9.32l-8.93,5.16-8.93,5.16c-3.33,1.92-7.44,1.92-10.77,0l-8.93-5.16-8.93-5.16C2.05,49.1,0,45.55,0,41.7v-10.31s0-10.31,0-10.31C0,17.23,2.05,13.68,5.38,11.75l8.93-5.16L23.24,1.44c3.33-1.92,7.44-1.92,10.77,0l8.93,5.16,8.93,5.16c3.33,1.92,5.38,5.48,5.38,9.32Z" />
            <path class="da" d="m31.12,19.22c.59-.01,1,.2,1.25.75.79,1.7,6.37,13.61,8.4,17.85.32.66.35,1.23.02,1.91-1.02,2.07-1.98,4.18-2.98,6.27-.12.25-.29.5-.5.67-.57.45-1.26.26-1.61-.46-.44-.9-11.86-25.22-11.92-25.36-.34-.86.1-1.57,1.02-1.59,1.09-.03,5.31,0,6.32-.03Z" />
            <path class="da" d="m17.05,19.22c.59-.01,1,.2,1.25.75.79,1.7,6.37,13.61,8.4,17.85.32.66.35,1.23.02,1.91-1.02,2.07-1.98,4.18-2.98,6.27-.12.25-.29.5-.5.67-.57.45-1.26.26-1.61-.46-.44-.9-11.86-25.22-11.92-25.36-.34-.86.1-1.57,1.02-1.59,1.09-.03,5.31,0,6.32-.03Z" />
            <circle class="da" cx="43.6" cy="23.33" r="4.06" />
        </g>
        <g>
            <path class="ca" d="m98.45,18.65c.24-.79.99-1.39,1.87-1.39h1.11c.95,0,1.59.52,1.59,1.47,0,.2-.04.44-.12.72l-6.92,24.25c-.24.8-.99,1.39-1.87,1.39h-1.63c-.87,0-1.67-.56-1.95-1.39l-6.24-18.72-6.16,18.72c-.24.83-1.03,1.39-1.91,1.39h-1.67c-.87,0-1.63-.6-1.91-1.39l-7.23-24.25c-.04-.2-.08-.36-.08-.56,0-.87.6-1.63,1.55-1.63h1.91c.87,0,1.63.6,1.87,1.39l5.21,18.44,5.76-18.44c.24-.79,1.03-1.39,1.91-1.39h1.91c.87,0,1.67.56,1.91,1.39l5.92,18.48,5.17-18.48Z" />
            <path class="ca" d="m102.46,36.14c0-5.37,3.82-9.38,9.74-9.38s9.74,4.01,9.74,9.38-3.82,9.38-9.74,9.38-9.74-4.01-9.74-9.38Zm4.89,0c0,2.98,2.07,5.13,4.85,5.13s4.89-2.03,4.89-5.13-2.11-5.09-4.89-5.09-4.85,1.99-4.85,5.09Z" />
            <path class="ca" d="m117.09,36.14c0-5.37,3.82-9.38,9.74-9.38s9.74,4.01,9.74,9.38-3.82,9.38-9.74,9.38-9.74-4.01-9.74-9.38Zm4.89,0c0,2.98,2.07,5.13,4.85,5.13s4.89-2.03,4.89-5.13-2.11-5.09-4.89-5.09-4.85,1.99-4.85,5.09Z" />
            <path class="ca" d="m140.38,40.47c.28-.36.6-.52.95-.52.4,0,.8.16,1.19.44,1.27.84,2.7,1.31,4.41,1.31,1.31,0,2.35-.56,2.35-1.67,0-2.9-9.66-1.31-9.66-7.83,0-3.5,2.86-5.45,6.56-5.45,2.62,0,4.53.75,5.96,1.67.36.24.6.72.6,1.19,0,.28-.08.56-.24.8l-.44.64c-.32.44-.68.64-1.11.64-.32,0-.64-.12-.99-.28-1.07-.56-2.19-.83-3.54-.83s-2.23.75-2.23,1.55c0,2.98,9.66,1.35,9.66,7.67,0,3.54-2.86,5.72-7.23,5.72-2.78,0-4.81-.83-6.68-2.46-.32-.28-.44-.64-.44-.99,0-.28.08-.6.28-.83l.6-.76Z" />
            <path class="ca" d="m168.05,42.34c.12.2.2.44.2.68,0,.52-.24,1.03-.68,1.27-1.35.8-2.7,1.19-4.49,1.19-4.05,0-5.57-2.62-5.57-7.19v-14.59c0-.8.68-1.47,1.47-1.47h1.63c.79,0,1.47.68,1.47,1.47v3.5h4.29c.79,0,1.47.68,1.47,1.47v1.35c0,.8-.68,1.47-1.47,1.47h-4.29v6.52c0,1.95.64,3.22,2.15,3.22.48,0,.91-.08,1.27-.2.36-.12.64-.2.91-.2.52,0,.91.24,1.23.8l.4.72Z" />
            <path class="ca" d="m183.75,40.95c.32-.16.63-.28.91-.28.44,0,.83.24,1.15.68l.36.52c.16.24.24.52.24.8,0,.48-.24.95-.64,1.19-1.91,1.19-4.01,1.67-6,1.67-5.76,0-9.62-3.74-9.62-9.38,0-5.21,3.58-9.38,9.46-9.38,4.61,0,8.47,3.3,8.47,8.31,0,.4,0,.72-.04,1.03-.04.68-.83,1.43-1.55,1.43h-11.61c.4,2.7,2.54,4.17,5.37,4.17,1.47,0,2.5-.28,3.5-.76Zm-.24-6.48v-.08c0-2.15-1.51-3.82-4.09-3.82-2.74,0-4.21,1.55-4.69,3.89h8.78Z" />
            <path class="ca" d="m199.49,31.17c-1.51,0-2.34.87-2.86,1.91v10.53c0,.8-.68,1.47-1.47,1.47h-1.63c-.79,0-1.47-.68-1.47-1.47v-14.95c0-.8.68-1.47,1.47-1.47h1.63c.8,0,1.47.68,1.47,1.59.83-.99,1.95-1.91,4.09-1.91.52,0,1.07.08,1.55.28.6.24.84.68.84,1.15,0,.2-.04.4-.12.56l-.6,1.27c-.36.8-.87,1.15-1.63,1.15-.16,0-.32,0-.52-.04-.2-.04-.48-.08-.75-.08Z" />
        </g>
    </svg>

<?php
    return ob_get_clean();
}
function wooster_construct_logo_svg_sombre($width, $height)
{
    if ($width == 'auto' || empty($width)) {
        $w_unit = '';
    } else {
        $w_unit = 'px';
    }
    if ($height == 'auto' || empty($height)) {
        $h_unit = '';
    } else {
        $h_unit = 'px';
    }
    // var_dump($color);


    ob_start();
?>
    <svg id="a" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 203.11 62.78" style="width:<?= $width . $w_unit ?>; height:<?= $height . $h_unit ?>;">
        <defs>
            <style>
                .c {
                    fill: #fff;
                }

                .c,
                .d {
                    stroke-width: 0px;
                }

                .d {
                    fill: url(#b);
                }
            </style>
            <radialGradient id="b" data-name="Dégradé sans nom 24" cx="13.6" cy="69.87" fx="13.6" fy="69.87" r="83.9" gradientUnits="userSpaceOnUse">
                <stop offset=".1" stop-color="#7e2ccf" />
                <stop offset=".9" stop-color="#4f2ccf" />
            </radialGradient>
        </defs>
        <g>
            <path class="d" d="m57.25,21.08v20.62c0,3.85-2.05,7.4-5.38,9.32l-8.93,5.16-8.93,5.16c-3.33,1.92-7.44,1.92-10.77,0l-8.93-5.16-8.93-5.16C2.05,49.1,0,45.55,0,41.7v-10.31s0-10.31,0-10.31C0,17.23,2.05,13.68,5.38,11.75l8.93-5.16L23.24,1.44c3.33-1.92,7.44-1.92,10.77,0l8.93,5.16,8.93,5.16c3.33,1.92,5.38,5.48,5.38,9.32Z" />
            <path class="c" d="m31.12,19.22c.59-.01,1,.2,1.25.75.79,1.7,6.37,13.61,8.4,17.85.32.66.35,1.23.02,1.91-1.02,2.07-1.98,4.18-2.98,6.27-.12.25-.29.5-.5.67-.57.45-1.26.26-1.61-.46-.44-.9-11.86-25.22-11.92-25.36-.34-.86.1-1.57,1.02-1.59,1.09-.03,5.31,0,6.32-.03Z" />
            <path class="c" d="m17.05,19.22c.59-.01,1,.2,1.25.75.79,1.7,6.37,13.61,8.4,17.85.32.66.35,1.23.02,1.91-1.02,2.07-1.98,4.18-2.98,6.27-.12.25-.29.5-.5.67-.57.45-1.26.26-1.61-.46-.44-.9-11.86-25.22-11.92-25.36-.34-.86.1-1.57,1.02-1.59,1.09-.03,5.31,0,6.32-.03Z" />
            <circle class="c" cx="43.6" cy="23.33" r="4.06" />
        </g>
        <g>
            <path class="c" d="m98.45,18.65c.24-.79.99-1.39,1.87-1.39h1.11c.95,0,1.59.52,1.59,1.47,0,.2-.04.44-.12.72l-6.92,24.25c-.24.8-.99,1.39-1.87,1.39h-1.63c-.87,0-1.67-.56-1.95-1.39l-6.24-18.72-6.16,18.72c-.24.83-1.03,1.39-1.91,1.39h-1.67c-.87,0-1.63-.6-1.91-1.39l-7.23-24.25c-.04-.2-.08-.36-.08-.56,0-.87.6-1.63,1.55-1.63h1.91c.87,0,1.63.6,1.87,1.39l5.21,18.44,5.76-18.44c.24-.79,1.03-1.39,1.91-1.39h1.91c.87,0,1.67.56,1.91,1.39l5.92,18.48,5.17-18.48Z" />
            <path class="c" d="m102.46,36.14c0-5.37,3.82-9.38,9.74-9.38s9.74,4.01,9.74,9.38-3.82,9.38-9.74,9.38-9.74-4.01-9.74-9.38Zm4.89,0c0,2.98,2.07,5.13,4.85,5.13s4.89-2.03,4.89-5.13-2.11-5.09-4.89-5.09-4.85,1.99-4.85,5.09Z" />
            <path class="c" d="m117.09,36.14c0-5.37,3.82-9.38,9.74-9.38s9.74,4.01,9.74,9.38-3.82,9.38-9.74,9.38-9.74-4.01-9.74-9.38Zm4.89,0c0,2.98,2.07,5.13,4.85,5.13s4.89-2.03,4.89-5.13-2.11-5.09-4.89-5.09-4.85,1.99-4.85,5.09Z" />
            <path class="c" d="m140.38,40.47c.28-.36.6-.52.95-.52.4,0,.8.16,1.19.44,1.27.84,2.7,1.31,4.41,1.31,1.31,0,2.35-.56,2.35-1.67,0-2.9-9.66-1.31-9.66-7.83,0-3.5,2.86-5.45,6.56-5.45,2.62,0,4.53.75,5.96,1.67.36.24.6.72.6,1.19,0,.28-.08.56-.24.8l-.44.64c-.32.44-.68.64-1.11.64-.32,0-.64-.12-.99-.28-1.07-.56-2.19-.83-3.54-.83s-2.23.75-2.23,1.55c0,2.98,9.66,1.35,9.66,7.67,0,3.54-2.86,5.72-7.23,5.72-2.78,0-4.81-.83-6.68-2.46-.32-.28-.44-.64-.44-.99,0-.28.08-.6.28-.83l.6-.76Z" />
            <path class="c" d="m168.05,42.34c.12.2.2.44.2.68,0,.52-.24,1.03-.68,1.27-1.35.8-2.7,1.19-4.49,1.19-4.05,0-5.57-2.62-5.57-7.19v-14.59c0-.8.68-1.47,1.47-1.47h1.63c.79,0,1.47.68,1.47,1.47v3.5h4.29c.79,0,1.47.68,1.47,1.47v1.35c0,.8-.68,1.47-1.47,1.47h-4.29v6.52c0,1.95.64,3.22,2.15,3.22.48,0,.91-.08,1.27-.2.36-.12.64-.2.91-.2.52,0,.91.24,1.23.8l.4.72Z" />
            <path class="c" d="m183.75,40.95c.32-.16.63-.28.91-.28.44,0,.83.24,1.15.68l.36.52c.16.24.24.52.24.8,0,.48-.24.95-.64,1.19-1.91,1.19-4.01,1.67-6,1.67-5.76,0-9.62-3.74-9.62-9.38,0-5.21,3.58-9.38,9.46-9.38,4.61,0,8.47,3.3,8.47,8.31,0,.4,0,.72-.04,1.03-.04.68-.83,1.43-1.55,1.43h-11.61c.4,2.7,2.54,4.17,5.37,4.17,1.47,0,2.5-.28,3.5-.76Zm-.24-6.48v-.08c0-2.15-1.51-3.82-4.09-3.82-2.74,0-4.21,1.55-4.69,3.89h8.78Z" />
            <path class="c" d="m199.49,31.17c-1.51,0-2.34.87-2.86,1.91v10.53c0,.8-.68,1.47-1.47,1.47h-1.63c-.79,0-1.47-.68-1.47-1.47v-14.95c0-.8.68-1.47,1.47-1.47h1.63c.8,0,1.47.68,1.47,1.59.83-.99,1.95-1.91,4.09-1.91.52,0,1.07.08,1.55.28.6.24.84.68.84,1.15,0,.2-.04.4-.12.56l-.6,1.27c-.36.8-.87,1.15-1.63,1.15-.16,0-.32,0-.52-.04-.2-.04-.48-.08-.75-.08Z" />
        </g>
    </svg>
<?php
    return ob_get_clean();
}
