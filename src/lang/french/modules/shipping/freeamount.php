<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_FREEAMOUNT_TEXT_TITLE', 'Expédition gratuite');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_DESCRIPTION', 'Livraison sans frais d\'expédition');
define('MODULE_SHIPPING_FREEAMOUNT_TEXT_WAY', 'à partir de %s de la valeur de la commande nous expédions votre commande sans frais de port');
define('MODULE_SHIPPING_FREEAMOUNT_INVALID_ZONE', 'Désolé, l\'expédition vers ce pays n\'est pas possible.');

define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_TITLE', 'Zones d\'embarquement autorisées');
define('MODULE_SHIPPING_FREEAMOUNT_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'envoi doit être possible (par exemple AT,DE (laissez ce champ vide si vous voulez autoriser toutes les zones)).');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_TITLE', 'Activer la livraison gratuite');
define('MODULE_SHIPPING_FREEAMOUNT_STATUS_DESC', 'Souhaitez-vous offrir la livraison gratuite ?');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_TITLE', 'Zone de répartition');
define('MODULE_SHIPPING_FREEAMOUNT_ZONE_DESC', 'Si vous sélectionnez une zone, ce mode d\'expédition n\'est proposé que dans cette zone.');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_TITLE', 'Ordre de classement');
define('MODULE_SHIPPING_FREEAMOUNT_SORT_ORDER_DESC', 'Ordre d\'affichage');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_TITLE', 'Nombre de zones');
define('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES_DESC', 'Nombre de zones planifiées');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_TITLE', 'Activer l\'affichage');
define('MODULE_SHIPPING_FREEAMOUNT_DISPLAY_DESC', 'Voulez-vous indiquer si l\'expédition vers le pays n\'est pas possible ou si les frais d\'expédition ne peuvent pas être calculés ?');

if (defined('MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES')) {
  for ($module_shipping_freeamount_i = 1; $module_shipping_freeamount_i <= MODULE_SHIPPING_FREEAMOUNT_NUMBER_ZONES; $module_shipping_freeamount_i ++) {
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_TITLE', '<hr/>Zone '.$module_shipping_freeamount_i.' Pays');
    define('MODULE_SHIPPING_FREEAMOUNT_COUNTRIES_'.$module_shipping_freeamount_i.'_DESC', 'Liste de codes ISO de pays (2 caractères) séparés par une virgule, qui font partie de la zone '.$module_shipping_freeamount_i.' (inscrire WORLD pour le reste du monde.).');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_TITLE', 'Zone '.$module_shipping_freeamount_i.' Montant minimum');
    define('MODULE_SHIPPING_FREEAMOUNT_AMOUNT_'.$module_shipping_freeamount_i.'_DESC', 'Montant minimum de commande pour la zone '.$module_shipping_freeamount_i.' pour que la livraison soit gratuite.');
  }
}
