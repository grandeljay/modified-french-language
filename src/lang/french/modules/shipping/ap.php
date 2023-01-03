<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_AP_TEXT_TITLE', 'Poste autrichienne');
define('MODULE_SHIPPING_AP_TEXT_DESCRIPTION', '&Ouml;sterreichische Post AG - Module d\'expédition mondial');
define('MODULE_SHIPPING_AP_TEXT_WAY', 'Expédition vers');
define('MODULE_SHIPPING_AP_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_AP_INVALID_ZONE', 'Désolé, l\'expédition vers ce pays n\'est pas possible.');
define('MODULE_SHIPPING_AP_UNDEFINED_RATE', 'Les frais d\'expédition ne peuvent pas être calculés pour le moment.');

define('MODULE_SHIPPING_AP_STATUS_TITLE', 'Poste autrichienne');
define('MODULE_SHIPPING_AP_STATUS_DESC', 'Souhaitez-vous proposer la livraison par &Ouml;sterreichische Post AG ?');
define('MODULE_SHIPPING_AP_TAX_CLASS_TITLE', 'Type de taxe');
define('MODULE_SHIPPING_AP_TAX_CLASS_DESC', 'Sélectionnez le taux de TVA pour cette méthode d\'expédition.');
define('MODULE_SHIPPING_AP_ZONE_TITLE', 'Zone de répartition');
define('MODULE_SHIPPING_AP_ZONE_DESC', 'Si vous sélectionnez une zone, ce mode d\'expédition n\'est proposé que dans cette zone.');
define('MODULE_SHIPPING_AP_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_SHIPPING_AP_SORT_ORDER_DESC', 'Le plus bas est affiché en premier.');
define('MODULE_SHIPPING_AP_ALLOWED_TITLE', 'Zones d\'expédition individuelles');
define('MODULE_SHIPPING_AP_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'expédition doit être possible, par exemple AT,DE');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_TITLE', 'Nombre de zones');
define('MODULE_SHIPPING_AP_NUMBER_ZONES_DESC', 'Nombre de zones planifiées');
define('MODULE_SHIPPING_AP_DISPLAY_TITLE', 'Activer l\'affichage');
define('MODULE_SHIPPING_AP_DISPLAY_DESC', 'Vous souhaitez indiquer si l\'expédition vers le pays n\'est pas possible ou si les frais d\'expédition ne peuvent être calculés ?');

if (defined('MODULE_SHIPPING_AP_NUMBER_ZONES')) {
    for ($i = 1; $i <= MODULE_SHIPPING_AP_NUMBER_ZONES; $i++) {
        define('MODULE_SHIPPING_AP_COUNTRIES_' . $i . '_TITLE', '<hr/>Zone ' . $i . ' L&auml;nder');
        define('MODULE_SHIPPING_AP_COUNTRIES_' . $i . '_DESC', 'Liste séparée par des virgules des codes pays ISO (2 caractères) qui font partie de la ' . $i . '(Entrez WORLD pour le reste du monde).');
        define('MODULE_SHIPPING_AP_COST_' . $i . '_TITLE', 'Zone ' . $i . 'Tableau des tarifs jusqu\'à 20 kg');
        define('MODULE_SHIPPING_AP_COST_' . $i . '_DESC', 'Frais d\'expédition par zone ' . $i . ' destinations, sur la base d\'un groupe de poids de commande maximum. Exemple : 3:8.50,7:10.50,.... Un poids inférieur ou égal à 3 coûterait 8,50 par zone ' . $i . ' pays de destination.');
        define('MODULE_SHIPPING_AP_HANDLING_' . $i . '_TITLE', 'Area ' . $i . ' Coûts de traitement');
        define('MODULE_SHIPPING_AP_HANDLING_' . $i . '_DESC', 'Frais de manutention pour cette zone d\'expédition');
    }
}
