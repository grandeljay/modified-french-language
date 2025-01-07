<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

  define('MODULE_ORDER_TOTAL_COD_FEE_TITLE', 'Frais de contre-remboursement');
  define('MODULE_ORDER_TOTAL_COD_FEE_DESCRIPTION', 'Calcul de la charge C.O.D.');

  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_TITLE', 'Frais de contre-remboursement');
  define('MODULE_ORDER_TOTAL_COD_FEE_STATUS_DESC', 'Calcul de la charge C.O.D.');

  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_TITLE', 'Ordre de classement');
  define('MODULE_ORDER_TOTAL_COD_FEE_SORT_ORDER_DESC', 'Ordre d\'affichage');

  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_TITLE', 'Classe d\'impôt');
  define('MODULE_ORDER_TOTAL_COD_FEE_TAX_CLASS_DESC', 'Choisissez une classe d\'impôt.');

  function define_shipping_titles_cod() {
    $module_keys = str_replace('.php','',MODULE_SHIPPING_INSTALLED);
    $installed_shipping_modules = explode(';',$module_keys);
    $installed_shipping_modules[] = 'free';

    if (count($installed_shipping_modules) > 0) {
      foreach($installed_shipping_modules as $shipping_code) {
        $module_type = 'shipping';
        $file = $shipping_code.'.php';
        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;
        $title = $shipping_code == 'FREE' ? 'Frais de port offerts (résumé du module ot_shipping)' : $title;

        if (defined('DIR_FS_LANGUAGES') && is_file(DIR_FS_LANGUAGES . 'french/modules/' . $module_type . '/' . $file)) {
            include_once(DIR_FS_LANGUAGES . 'french/modules/' . $module_type . '/' . $file);
        $title = $shipping_code == 'FREE' ? 'Frais de port offerts (résumé du module ot_shipping)' : $title;
        }
        $title = $shipping_code == 'FREE' ? 'Frais de port offerts (résumé du module ot_shipping)' : $title;

        $shipping_code = ($shipping_code == 'FREEAMOUNT') ? 'FREEAMOUNT_FREE' : 'FEE_' . $shipping_code;

        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_TITLE', $title);
        define('MODULE_ORDER_TOTAL_COD_'.$shipping_code.'_DESC', '<ISO2-Code>:<Preis>, ....<br /> 00 comme code ISO2 permet l\'envoi contre remboursement dans tous les pays. Si 00 est utilisé, il doit être saisi comme dernier argument. Si aucun 00:9.99 n\'est saisi, l\'envoi contre remboursement à l\'étranger ne sera pas facturé (impossible). Pour exclure un seul pays, ne saisissez aucun coût pour ce pays. Exemple : DE:4.00,CH :,00:9.99<br />-> Explication : Expédition vers DE : 4€ / Expédition vers CH : pas possible / Expédition vers le reste du monde : 9,99€.');
      }
    }
  }
  define_shipping_titles_cod();
