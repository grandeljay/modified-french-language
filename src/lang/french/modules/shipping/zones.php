<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_ZONES_TEXT_TITLE', 'Frais d\'expédition par zone');
define('MODULE_SHIPPING_ZONES_TEXT_DESCRIPTION', 'Frais d\'expédition par zone');
define('MODULE_SHIPPING_ZONES_TEXT_WAY', 'Expédition à :');
define('MODULE_SHIPPING_ZONES_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_ZONES_INVALID_ZONE', 'L\'expédition vers ce pays n\'est pas possible !');
define('MODULE_SHIPPING_ZONES_UNDEFINED_RATE', 'Les frais d\'expédition ne peuvent pas être calculés pour le moment.');

define('MODULE_SHIPPING_ZONES_STATUS_TITLE', 'Activer la méthode d\'affranchissement par zones');
define('MODULE_SHIPPING_ZONES_STATUS_DESC', 'Souhaitez-vous proposer des frais de livraison par zone ?');
define('MODULE_SHIPPING_ZONES_ALLOWED_TITLE', 'Zones d\'embarquement autorisées');
define('MODULE_SHIPPING_ZONES_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'envoi doit être possible (par exemple AT,DE (laissez ce champ vide si vous voulez autoriser toutes les zones)).');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_TITLE', 'Classe d\'impôt');
define('MODULE_SHIPPING_ZONES_TAX_CLASS_DESC', 'Appliquez le taux de taxe suivant aux frais d\'expédition');
define('MODULE_SHIPPING_ZONES_ZONE_TITLE', 'Zone de répartition');
define('MODULE_SHIPPING_ZONES_ZONE_DESC', 'Si vous sélectionnez une zone, ce mode d\'expédition n\'est proposé que dans cette zone.');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_TITLE', 'Ordre de classement');
define('MODULE_SHIPPING_ZONES_SORT_ORDER_DESC', 'Ordre d\'affichage');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_TITLE', 'Nombre de zones');
define('MODULE_SHIPPING_ZONES_NUMBER_ZONES_DESC', 'Nombre de zones planifiées');
define('MODULE_SHIPPING_ZONES_DISPLAY_TITLE', 'Activer l\'affichage');
define('MODULE_SHIPPING_ZONES_DISPLAY_DESC', 'Vous souhaitez indiquer si l\'expédition vers le pays n\'est pas possible ou si les frais d\'expédition ne peuvent être calculés ?');

if (defined('MODULE_SHIPPING_ZONES_NUMBER_ZONES')) {
  for ($module_shipping_zones_i = 1; $module_shipping_zones_i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $module_shipping_zones_i ++) {
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_TITLE', '<hr/>Zone '.$module_shipping_zones_i.' Pays');
    define('MODULE_SHIPPING_ZONES_COUNTRIES_'.$module_shipping_zones_i.'_DESC', 'Liste de codes ISO de pays (2 caractères) séparés par une virgule, qui font partie de la zone '.$module_shipping_zones_i.' (inscrire WORLD pour le reste du monde.).');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_TITLE', 'Zone '.$module_shipping_zones_i.' Frais d\'expédition');
    define('MODULE_SHIPPING_ZONES_COST_'.$module_shipping_zones_i.'_DESC', 'Frais de livraison par zone '.$module_shipping_zones_i.' Destinations basées sur un groupe de poids maximum de commande. Exemple : 3:8.50,7:10.50,... Poids inférieur ou égal à 3 serait de 8.50 pour la zone '.$module_shipping_zones_i.' pays de destination.');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_TITLE', 'Zone '.$module_shipping_zones_i.' Frais de manutention');
    define('MODULE_SHIPPING_ZONES_HANDLING_'.$module_shipping_zones_i.'_DESC', 'Frais de manutention pour cette zone d\'expédition');
  }
}
