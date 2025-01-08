<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_GLS_TEXT_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_TEXT_DESCRIPTION', 'GLS - Module de livraison à l\'échelle européenne');
define('MODULE_SHIPPING_GLS_TEXT_WAY', 'Expédition vers');
define('MODULE_SHIPPING_GLS_POSTCODE_INFO_TEXT', 'y compris le supplément île');
define('MODULE_SHIPPING_GLS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_GLS_INVALID_ZONE', 'Désolé, l\'expédition vers ce pays n\'est pas possible.');
define('MODULE_SHIPPING_GLS_UNDEFINED_RATE', 'Les frais d\'expédition ne peuvent pas être calculés pour le moment.');

define('MODULE_SHIPPING_GLS_STATUS_TITLE', 'GLS');
define('MODULE_SHIPPING_GLS_STATUS_DESC', 'Souhaitez-vous proposer l\'expédition par GLS ?');
define('MODULE_SHIPPING_GLS_HANDLING_TITLE', 'Frais de traitement');
define('MODULE_SHIPPING_GLS_HANDLING_DESC', 'Frais de manutention pour ce mode d\'expédition en euros');
define('MODULE_SHIPPING_GLS_TAX_CLASS_TITLE', 'Type de taxe');
define('MODULE_SHIPPING_GLS_TAX_CLASS_DESC', 'Sélectionnez le taux de TVA pour cette méthode d\'expédition.');
define('MODULE_SHIPPING_GLS_ZONE_TITLE', 'Zone de répartition');
define('MODULE_SHIPPING_GLS_ZONE_DESC', 'Si vous sélectionnez une zone, ce mode d\'expédition n\'est proposé que dans cette zone.');
define('MODULE_SHIPPING_GLS_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_SHIPPING_GLS_SORT_ORDER_DESC', 'Le plus bas est affiché en premier.');
define('MODULE_SHIPPING_GLS_ALLOWED_TITLE', 'Zones d\'expédition individuelles');
define('MODULE_SHIPPING_GLS_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'expédition doit être possible, par exemple AT,DE');
define('MODULE_SHIPPING_GLS_DISPLAY_TITLE', 'Activer l\'affichage');
define('MODULE_SHIPPING_GLS_DISPLAY_DESC', 'Vous souhaitez indiquer si l\'expédition vers le pays n\'est pas possible ou si les frais d\'expédition ne peuvent être calculés ?');

define('MODULE_SHIPPING_GLS_POSTCODE_TITLE', 'Supplément île GLS - Codes postaux');
define('MODULE_SHIPPING_GLS_POSTCODE_DESC', 'Zones de code postal');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_TITLE', 'Recharge des îles GLS - Costes');
define('MODULE_SHIPPING_GLS_POSTCODE_EXTRA_COST_DESC', 'Supplément île : Indiquez ici le montant qui doit être ajouté aux frais d\'expédition si l\'adresse de livraison se trouve sur une île allemande.');

for ($module_shipping_gls_i = 1; $module_shipping_gls_i <= 6; $module_shipping_gls_i ++) {
  define('MODULE_SHIPPING_GLS_COUNTRIES_'.$module_shipping_gls_i.'_TITLE', '<hr/>Zone '.$module_shipping_gls_i.' Pays');
  define('MODULE_SHIPPING_GLS_COUNTRIES_'.$module_shipping_gls_i.'_DESC', 'Liste de codes ISO de pays (2 caractères) séparés par une virgule, qui font partie de la zone '.$module_shipping_gls_i.' (inscrire WORLD pour le reste du monde.).');
  define('MODULE_SHIPPING_GLS_COST_'.$module_shipping_gls_i.'_TITLE', 'Zone '.$module_shipping_gls_i.' Frais de livraison');
  define('MODULE_SHIPPING_GLS_COST_'.$module_shipping_gls_i.'_DESC', 'Frais d\'expédition par zone '.$module_shipping_gls_i.'. Destinations basées sur un groupe de poids maximum de commande. Exemple : 3:8.50,7:10.50,... Un poids inférieur ou égal à 3 serait de 8.50 pour la zone '.$module_shipping_gls_i.' pays de destination.');
}
