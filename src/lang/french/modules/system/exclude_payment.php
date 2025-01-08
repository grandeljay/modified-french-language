<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Méthodes de paiement en fonction du mode de livraison');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE', 'État');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC', 'Activer le module ?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE', 'Nombre de méthodes d\'expédition');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC', 'Le nombre de types d\'envois à configurer.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
  for ($module_exclude_payment_i = 1; $module_exclude_payment_i <= (int)MODULE_EXCLUDE_PAYMENT_NUMBER; $module_exclude_payment_i ++) {
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_TITLE', '<hr noshade>'.$module_exclude_payment_i.'. Mode d\'expédition');
    define('MODULE_EXCLUDE_PAYMENT_SHIPPING_'.$module_exclude_payment_i.'_DESC', 'Sélectionnez le mode d\'expédition pour lequel vous souhaitez exclure un mode de paiement.');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_TITLE', $module_exclude_payment_i.'. mode de paiement exclu');
    define('MODULE_EXCLUDE_PAYMENT_PAYMENT_'.$module_exclude_payment_i.'_DESC', 'Sélectionnez le mode de paiement que vous souhaitez exclure.');
  }
}
