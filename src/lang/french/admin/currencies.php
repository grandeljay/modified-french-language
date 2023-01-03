<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Divisas');

define('TABLE_HEADING_CURRENCY_NAME', 'Devise');
define('TABLE_HEADING_CURRENCY_CODES', 'Abréviation');
define('TABLE_HEADING_CURRENCY_VALUE', 'Valeur');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_CURRENCY_STATUS', 'État');

define('TEXT_INFO_EDIT_INTRO', 'Veuillez effectuer tous les changements nécessaires');
define('TEXT_INFO_CURRENCY_TITLE', 'Nom :');
define('TEXT_INFO_CURRENCY_CODE', 'Code devise selon la norme ISO 4217 :');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Symbole à gauche :');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Symbole de droite :');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Point décimal :');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Mille points :');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Décimales :');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'dernier changement :');
define('TEXT_INFO_CURRENCY_VALUE', 'Valeur :');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Exemple :');
define('TEXT_INFO_INSERT_INTRO', 'Veuillez saisir la nouvelle devise avec toutes les données pertinentes.');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer cette devise ?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'nouvelle monnaie');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Modifier la devise');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Moneda de forage');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (une mise à jour manuelle des taux de change est nécessaire).');
define('TEXT_INFO_CURRENCY_UPDATED', 'Le taux de change %s (%s) a été mis à jour correctement.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Erreur : Impossible de supprimer la devise par défaut. Veuillez définir une nouvelle devise par défaut et répéter le processus.');
define('ERROR_CURRENCY_INVALID', 'Erreur : Le taux de change pour %s (%s) n\'a pas été mis à jour. Est-ce une abréviation de devise valide ?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Le service primaire \'%s\' n\'a pas pu déterminer le taux de change %s (%s) ou n\'est pas disponible. Une nouvelle tentative est effectuée via le service secondaire.');
