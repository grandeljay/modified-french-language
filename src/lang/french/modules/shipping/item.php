<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_ITEM_TEXT_TITLE', 'Frais d\'expédition par pièce');
define('MODULE_SHIPPING_ITEM_TEXT_DESCRIPTION', 'Frais d\'expédition par pièce');
define('MODULE_SHIPPING_ITEM_TEXT_WAY', 'Le meilleur moyen');
define('MODULE_SHIPPING_ITEM_INVALID_ZONE', 'Désolé, l\'expédition vers ce pays n\'est pas possible.');

define('MODULE_SHIPPING_ITEM_STATUS_TITLE', 'Activer les frais d\'expédition par pièce');
define('MODULE_SHIPPING_ITEM_STATUS_DESC', 'Souhaitez-vous proposer les frais d\'expédition par pièce ?');
define('MODULE_SHIPPING_ITEM_ALLOWED_TITLE', 'Zones d\'embarquement autorisées');
define('MODULE_SHIPPING_ITEM_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'envoi doit être possible (par exemple AT,DE (laissez ce champ vide si vous voulez autoriser toutes les zones)).');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_TITLE', 'Classe d\'impôt');
define('MODULE_SHIPPING_ITEM_TAX_CLASS_DESC', 'Appliquez le taux de taxe suivant aux frais d\'expédition');
define('MODULE_SHIPPING_ITEM_ZONE_TITLE', 'Versandzone');
define('MODULE_SHIPPING_ITEM_ZONE_DESC', 'Lorsqu\'une zone est sélectionnée, cette méthode d\'expédition est utilisée exclusivement pour cette zone.');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_TITLE', 'Ordre de classement');
define('MODULE_SHIPPING_ITEM_SORT_ORDER_DESC', 'Ordre d\'affichage');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_TITLE', 'Nombre de zones');
define('MODULE_SHIPPING_ITEM_NUMBER_ZONES_DESC', 'Nombre de zones planifiées');
define('MODULE_SHIPPING_ITEM_DISPLAY_TITLE', 'Activer l\'affichage');
define('MODULE_SHIPPING_ITEM_DISPLAY_DESC', 'Vous souhaitez indiquer si l\'expédition vers le pays n\'est pas possible ou si les frais d\'expédition ne peuvent être calculés ?');

if (defined('MODULE_SHIPPING_ITEM_NUMBER_ZONES')) {
  for ($module_shipping_item_i = 1; $module_shipping_item_i <= MODULE_SHIPPING_ITEM_NUMBER_ZONES; $module_shipping_item_i ++) {
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_TITLE', '<hr/>Zone '.$module_shipping_item_i.' Pays');
    define('MODULE_SHIPPING_ITEM_COUNTRIES_'.$module_shipping_item_i.'_DESC', 'Liste de codes ISO de pays (2 caractères) séparés par une virgule, qui font partie de la zone '.$module_shipping_item_i.' (inscrire WORLD pour le reste du monde.).');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_TITLE', 'Zone '.$module_shipping_item_i.' Frais de livraison');
    define('MODULE_SHIPPING_ITEM_COST_'.$module_shipping_item_i.'_DESC', 'Les frais de livraison par zone '.$module_shipping_item_i.' sont multipliés par le nombre d\'articles d\'une commande si ce mode de livraison est indiqué.');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_TITLE', 'Zone '.$module_shipping_item_i.' Frais de manutention');
    define('MODULE_SHIPPING_ITEM_HANDLING_'.$module_shipping_item_i.'_DESC', 'Frais de manutention pour cette zone d\'expédition');
  }
}
