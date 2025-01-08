<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_DP_TEXT_TITLE', 'Poste allemande');
define('MODULE_SHIPPING_DP_TEXT_DESCRIPTION', 'Deutsche Post - Module de livraison mondiale');
define('MODULE_SHIPPING_DP_TEXT_WAY', 'Expédition vers');
define('MODULE_SHIPPING_DP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_DP_INVALID_ZONE', 'Désolé, l\'expédition vers ce pays n\'est pas possible.');
define('MODULE_SHIPPING_DP_UNDEFINED_RATE', 'Les frais d\'expédition ne peuvent pas être calculés pour le moment.');

define('MODULE_SHIPPING_DP_STATUS_TITLE', 'Courrier WorldNet allemand');
define('MODULE_SHIPPING_DP_STATUS_DESC', 'Souhaitez-vous proposer la livraison par la poste allemande ?');
define('MODULE_SHIPPING_DP_HANDLING_TITLE', 'Frais de traitement');
define('MODULE_SHIPPING_DP_HANDLING_DESC', 'Frais de manutention pour ce mode d\'expédition en euros');
define('MODULE_SHIPPING_DP_TAX_CLASS_TITLE', 'Classe d\'impôt');
define('MODULE_SHIPPING_DP_TAX_CLASS_DESC', 'Appliquez le taux de taxe suivant aux frais d\'expédition.');
define('MODULE_SHIPPING_DP_ZONE_TITLE', 'Zone de répartition');
define('MODULE_SHIPPING_DP_ZONE_DESC', 'Si vous sélectionnez une zone, ce mode d\'expédition n\'est proposé que dans cette zone.');
define('MODULE_SHIPPING_DP_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_SHIPPING_DP_SORT_ORDER_DESC', 'Le plus bas est affiché en premier.');
define('MODULE_SHIPPING_DP_ALLOWED_TITLE', 'Zones d\'expédition individuelles');
define('MODULE_SHIPPING_DP_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'expédition doit être possible, par exemple AT,DE');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_TITLE', 'Nombre de zones');
define('MODULE_SHIPPING_DP_NUMBER_ZONES_DESC', 'Nombre de zones planifiées');
define('MODULE_SHIPPING_DP_DISPLAY_TITLE', 'Activer l\'affichage');
define('MODULE_SHIPPING_DP_DISPLAY_DESC', 'Vous souhaitez indiquer si l\'expédition vers le pays n\'est pas possible ou si les frais d\'expédition ne peuvent être calculés ?');

if (defined('MODULE_SHIPPING_DP_NUMBER_ZONES')) {
  for ($module_shipping_dp_i = 1; $module_shipping_dp_i <= MODULE_SHIPPING_DP_NUMBER_ZONES; $module_shipping_dp_i ++) {
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_TITLE', '<hr/>DP Zone '.$module_shipping_dp_i.' Pays');
    define('MODULE_SHIPPING_DP_COUNTRIES_'.$module_shipping_dp_i.'_DESC', 'Liste séparée par des virgules des codes pays ISO à 2 chiffres de la zone '.$module_shipping_dp_i.' (Inscrire WORLD pour le reste du monde.)');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_TITLE', 'DP Zone '.$module_shipping_dp_i.' Tableau d\'expédition');
    define('MODULE_SHIPPING_DP_COST_'.$module_shipping_dp_i.'_DESC', 'Frais d\'expédition de la zone '.$module_shipping_dp_i.' par rapport au poids de la commande. Beispiel: 3:8.50,7:10.50,99999:12.00... Les poids supérieurs à 0 et inférieurs à 3 coûtent 8.50, ceux inférieurs à 7 coûtent 10.50 pour la zone '.$module_shipping_dp_i);
  }
}
