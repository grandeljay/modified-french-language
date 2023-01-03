<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_SHIPPING_UPS_TEXT_TITLE', 'United Parcel Service Standard');
define('MODULE_SHIPPING_UPS_TEXT_DESCRIPTION', 'United Parcel Service Standard - Versandmodul');
define('MODULE_SHIPPING_UPS_TEXT_WAY', 'Expédition vers');
define('MODULE_SHIPPING_UPS_TEXT_UNITS', 'kg');
define('MODULE_SHIPPING_UPS_TEXT_FREE', 'Ab EUR ' . (((defined('MODULE_SHIPPING_UPS_FREEAMOUNT'))) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ', nous expédierons votre commande sans frais de port !');
define('MODULE_SHIPPING_UPS_TEXT_LOW', 'Ab EUR ' . (((defined('MODULE_SHIPPING_UPS_FREEAMOUNT'))) ? MODULE_SHIPPING_UPS_FREEAMOUNT : '') . ', nous expédierons votre commande avec des frais de port réduits !');
define('MODULE_SHIPPING_UPS_INVALID_ZONE', 'Malheureusement, la livraison dans ce pays n\'est pas possible.');
define('MODULE_SHIPPING_UPS_UNDEFINED_RATE', 'Les frais d\'expédition ne peuvent pas être calculés pour le moment.');

define('MODULE_SHIPPING_UPS_STATUS_TITLE', 'Standard UPS');
define('MODULE_SHIPPING_UPS_STATUS_DESC', 'Souhaitez-vous proposer l\'expédition par UPS Standard ?');
define('MODULE_SHIPPING_UPS_HANDLING_TITLE', 'Surcharge');
define('MODULE_SHIPPING_UPS_HANDLING_DESC', 'Frais de manutention pour ce mode d\'expédition en euros');
define('MODULE_SHIPPING_UPS_TAX_CLASS_TITLE', 'Type de taxe');
define('MODULE_SHIPPING_UPS_TAX_CLASS_DESC', 'Sélectionnez le taux de TVA pour cette méthode d\'expédition.');
define('MODULE_SHIPPING_UPS_ZONE_TITLE', 'Zone de répartition');
define('MODULE_SHIPPING_UPS_ZONE_DESC', 'Si vous sélectionnez une zone, ce mode d\'expédition n\'est proposé que dans cette zone.');
define('MODULE_SHIPPING_UPS_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_SHIPPING_UPS_SORT_ORDER_DESC', 'Le plus bas est affiché en premier.');
define('MODULE_SHIPPING_UPS_ALLOWED_TITLE', 'Zones d\'expédition individuelles');
define('MODULE_SHIPPING_UPS_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones vers lesquelles l\'expédition doit être possible, par exemple AT,DE.');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_TITLE', 'Expédition nationale gratuite');
define('MODULE_SHIPPING_UPS_FREEAMOUNT_DESC', 'Valeur minimale de la commande pour une livraison nationale gratuite et une livraison outre-mer à prix réduit.');

define('MODULE_SHIPPING_UPS_COUNTRIES_1_TITLE', 'Etats pour UPS Standard Zone 1');
define('MODULE_SHIPPING_UPS_COUNTRIES_1_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 1 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_1_TITLE', 'Tarifs pour UPS Standard Zona 1');
define('MODULE_SHIPPING_UPS_COST_1_DESC', 'Frais d\'expédition basés sur le poids dans la zone 1. Exemple : Un envoi entre 0 et 4 kg coûte 5,15 euros = 4:5,15,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_2_TITLE', 'Statut pour UPS Standard Zone 3');
define('MODULE_SHIPPING_UPS_COUNTRIES_2_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 3 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_2_TITLE', 'Tarife pour UPS Standard Zona 3');
define('MODULE_SHIPPING_UPS_COST_2_DESC', 'Frais d\'expédition basés sur le poids dans la zone 3. Exemple : Un envoi entre 0 et 4 kg coûte 13,75 euros = 4:13,75,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_3_TITLE', 'Etats pour UPS Standard Zone 31');
define('MODULE_SHIPPING_UPS_COUNTRIES_3_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 31 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_3_TITLE', 'Tarifs pour UPS Standard Zona 31');
define('MODULE_SHIPPING_UPS_COST_3_DESC', 'Frais d\'expédition basés sur le poids dans la zone 31. Exemple : Un envoi de 0 à 4 kg coûte 23,50 euros = 4:23,50,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_4_TITLE', 'Statut pour UPS Standard Zone 4');
define('MODULE_SHIPPING_UPS_COUNTRIES_4_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 4 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_4_TITLE', 'Tarife pour UPS Standard Zona 4');
define('MODULE_SHIPPING_UPS_COST_4_DESC', 'Frais d\'expédition basés sur le poids dans la zone 4. Exemple : Un envoi de 0 à 4 kg coûte 25,40 euros = 4:25,40,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_5_TITLE', 'Etats pour UPS Standard Zone 41');
define('MODULE_SHIPPING_UPS_COUNTRIES_5_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 41 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_5_TITLE', 'Tarifs pour UPS Standard Zona 41');
define('MODULE_SHIPPING_UPS_COST_5_DESC', 'Frais d\'expédition basés sur le poids dans la zone 41. Exemple : Un envoi entre 0 et 4 kg coûte 30,00 euros = 4:30,00,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_6_TITLE', 'Statut pour UPS Standard Zone 5');
define('MODULE_SHIPPING_UPS_COUNTRIES_6_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 5 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_6_TITLE', 'Tarife pour UPS Standard Zona 5');
define('MODULE_SHIPPING_UPS_COST_6_DESC', 'Frais d\'expédition basés sur le poids dans la zone 5. Exemple : Un envoi de 0 à 4 kg coûte 34,35 euros = 4:34,35,...');

define('MODULE_SHIPPING_UPS_COUNTRIES_7_TITLE', 'Statut pour UPS Standard Zone 6');
define('MODULE_SHIPPING_UPS_COUNTRIES_7_DESC', 'Abréviations ISO, séparées par des virgules, des États de la zone 6 (entrez WORLD pour le reste du monde) :');
define('MODULE_SHIPPING_UPS_COST_7_TITLE', 'Tarife pour UPS Standard Zona 6');
define('MODULE_SHIPPING_UPS_COST_7_DESC', 'Frais d\'expédition basés sur le poids dans la zone 6. Exemple : Un envoi de 0 à 4 kg coûte 37,10 euros = 4:37,10,...');
