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
    for ($i = 1; $i <= MODULE_SHIPPING_ZONES_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $i . '_TITLE', '<hr/>Zone ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_ZONES_COUNTRIES_' . $i . '_DESC', 'Liste séparée par des virgules des codes pays ISO (2 caractères) qui font partie de la ' . $i . '(Entrez WORLD pour le reste du monde).');
        define('MODULE_SHIPPING_ZONES_COST_' . $i . '_TITLE', 'Zone ' . $i . 'Frais d\'expédition');
        define('MODULE_SHIPPING_ZONES_COST_' . $i . '_DESC', 'Frais d\'expédition par zone ' . $i . ' destinations, sur la base d\'un groupe de poids de commande maximum. Exemple : 3:8.50,7:10.50,.... Un poids inférieur ou égal à 3 coûterait 8,50 par zone ' . $i . ' pays de destination.');
        define('MODULE_SHIPPING_ZONES_HANDLING_' . $i . '_TITLE', 'Area ' . $i . ' Coûts de traitement');
        define('MODULE_SHIPPING_ZONES_HANDLING_' . $i . '_DESC', 'Frais de manutention pour cette zone d\'expédition');
    }
}
