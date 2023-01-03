<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_ORDER_TOTAL_PS_FEE_TITLE', 'Main propre');
define('MODULE_ORDER_TOTAL_PS_FEE_DESCRIPTION', 'Calcul Main levée');

define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_TITLE', 'Main propre');
define('MODULE_ORDER_TOTAL_PS_FEE_STATUS_DESC', 'Calcul Main levée');

define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_TITLE', 'Ordre de classement');
define('MODULE_ORDER_TOTAL_PS_FEE_SORT_ORDER_DESC', 'Ordre d\'affichage');

define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_TITLE', 'Classe d\'impôt');
define('MODULE_ORDER_TOTAL_PS_FEE_TAX_CLASS_DESC', 'Choisissez une classe d\'impôt.');

$module_keys                  = str_replace('.php', '', MODULE_SHIPPING_INSTALLED);
$installed_shipping_modules   = explode(';', $module_keys);
$installed_shipping_modules[] = 'free';

if (count($installed_shipping_modules) > 0) {
    foreach ($installed_shipping_modules as $shipping_code) {
        $module_type   = 'shipping';
        $file          = $shipping_code . '.php';
        $shipping_code = strtoupper($shipping_code);
        $title         = '';

        if (defined('DIR_FS_LANGUAGES') && file_exists(DIR_FS_LANGUAGES . 'french/modules/' . $module_type . '/' . $file)) {
            include_once DIR_FS_LANGUAGES . 'french/modules/' . $module_type . '/' . $file;

            $title = constant('MODULE_SHIPPING_' . $shipping_code . '_TEXT_TITLE');
        }

        $title = 'FREE' === $shipping_code ? 'Frais de port offerts (résumé du module ot_shipping)' : $title;

        $shipping_code = ('FREEAMOUNT' === $shipping_code) ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_PS_' . $shipping_code . '_TITLE', $title);
        define(
            'MODULE_ORDER_TOTAL_PS_' . $shipping_code . '_DESC',
            '&lt;Code ISO2&gt;:&lt;prix&gt;, ....<br />
            00 car le code ISO2 permet de facturer pour tous les pays. Si
            00, celle-ci doit être saisie comme dernier argument. Si
            00:9.99 n\'est pas saisie, la redevance ne sera pas facturée à l\'étranger (impossible).
            (pas possible). Pour exclure un seul pays, ne saisissez pas de frais pour ce pays.
            pour ce pays. Exemple : DE:4.00,CH :,00:9.99<br />-&gt; Explication : Expédition vers DE : 4.00 /
            Expédition vers CH : non possible / Expédition vers le reste du monde : 9.99&euro;.'
        );
    }
}
