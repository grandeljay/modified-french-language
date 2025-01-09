<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('ATTENTION_TITLE', 'Attention !');

if (!defined('APS_INSTALL')) {
  define('TEXT_FILE_WARNING_WRITABLE', '<b>AVERTISSEMENT :</b><br />Le serveur peut écrire dans les fichiers suivants. Veuillez modifier les droits d\'accès (permissions) de ce fichier pour des raisons de sécurité. ( <b>444 )</b> sur unix, <b>(lecture seule)</b> sur Win32.');
} else {
  define('TEXT_FILE_WARNING_WRITABLE', '<b>AVERTISSEMENT :</b><br />Les fichiers suivants sont accessibles en écriture par le serveur. Veuillez modifier les droits d\'accès (permissions) de ce fichier pour des raisons de sécurité. <b>(444)</b> dans unix, <b>(lecture seule)</b> dans Win32.<br />Si l\'installation a été effectuée par un progiciel d\'un fournisseur d\'accès, les droits d\'accès doivent éventuellement être modifiés (HostEurope : <b>CHMOD 400</b> ou <b>CHMOD 440</b>).');
}
define('TEXT_FILE_WARNING', '<b>AVERTISSEMENT :</b><br />Le serveur doit pouvoir écrire dans les fichiers suivants. Veuillez modifier les droits d\'accès (permissions) de ces fichiers. <b>(777)</b> sur unix, <b>(read-write)</b> sur Win32.');
define('TEXT_FOLDER_WARNING', '<b>AVERTISSEMENT :</b><br />Le serveur doit pouvoir écrire dans les répertoires suivants. Veuillez modifier les droits d\'accès (permissions) de ces répertoires : <b>(777)</b> sur unix, <b>(read-write)</b> sur Win32.');
define('REPORT_GENERATED_FOR', 'Informe para:');
define('REPORT_GENERATED_ON', 'Créé le :');
define('FIRST_VISIT_ON', 'Première visite :');
define('HEADING_QUICK_STATS', 'Résumé succinct');
define('VISITS_TODAY', 'Visites aujourd\'hui :');
define('UNIQUE_TODAY', 'Visiteurs individuels :');
define('DAILY_AVERAGE', 'Indemnité journalière moyenne :');
define('TOTAL_VISITS', 'Visites au total :');
define('TOTAL_UNIQUE', 'Visiteurs individuels au total :');
define('TOP_REFFERER', 'Top Refferer :');
define('TOP_ENGINE', 'Le meilleur moteur de recherche :');
define('DAY_SUMMARY', 'Résumé à 30 jours :');
define('VERY_LAST_VISITORS', 'Les 10 derniers visiteurs :');
define('TODAY_VISITORS', 'Visiteurs à ce jour :');
define('LAST_VISITORS', 'Les 100 derniers visiteurs :');
define('ALL_LAST_VISITORS', 'Tous les visiteurs :');
define('DATE_TIME', 'Date / Heure :');
define('IP_ADRESS', 'Adresse IP :');
define('OPERATING_SYSTEM', 'Système d\'exploitation :');
define('REFFERING_HOST', 'Hôte expéditeur :');
define('ENTRY_PAGE', 'Page d\'accueil :');
define('HOURLY_TRAFFIC_SUMMARY', 'Résumé des horaires de circulation');
define('WEB_BROWSER_SUMMARY', 'Aperçu du navigateur Web');
define('OPERATING_SYSTEM_SUMMARY', 'Aperçu du système d\'exploitation');
define('TOP_REFERRERS', 'Les 10 premiers expéditeurs');
define('TOP_HOSTS', 'Les dix meilleurs hôtes');
define('LIST_ALL', 'Afficher tous');
define('SEARCH_ENGINE_SUMMARY', 'Aperçu des moteurs de recherche');
define('SEARCH_ENGINE_SUMMARY_TEXT', ' ( Les pourcentages sont basés sur le nombre total de visites via les moteurs de recherche. )');
define('SEARCH_QUERY_SUMMARY', 'Aperçu des requêtes de recherche');
define('SEARCH_QUERY_SUMMARY_TEXT', ' ) ( Les pourcentages sont basés sur le nombre total de recherches qui ont été enregistrées. )');
define('REFERRING_URL', 'Refferrer Url');
define('HITS', 'Hits');
define('PERCENTAGE', 'Pourcentage');
define('HOST', 'Hôte');

define('HEADING_TITLE_SEARCH', 'N° de commande');
define('HEADING_TITLE_STATUS', 'Statut :');
define('TABLE_HEADING_AFTERBUY', 'Après l\'achat');
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDER_TOTAL', 'Valeur totale');
define('TABLE_HEADING_DATE_PURCHASED', 'Date de la commande');
define('TABLE_HEADING_STATUS', 'État');
define('TABLE_HEADING_QUANTITY', 'Numéro');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Article no.');
define('TABLE_HEADING_PRODUCTS', 'Article');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_DATE_ADDED', 'ajouté sur :');
define('ENTRY_CUSTOMER', 'Client :');
define('TEXT_DATE_ORDER_CREATED', 'Date de la commande :');
define('TEXT_INFO_PAYMENT_METHOD', 'Mode de paiement :');
define('TEXT_VALIDATING', 'Non confirmé');
define('TEXT_ALL_ORDERS', 'Toutes les commandes');
define('TEXT_NO_ORDER_HISTORY', 'Aucun historique de commande disponible');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Dernier changement');

define('TOTAL_CUSTOMERS', 'Total des clients');
define('TOTAL_SUBSCRIBERS', 'Abonnements à la newsletter');
define('TOTAL_PRODUCTS_ACTIVE', 'Articles actifs');
define('TOTAL_PRODUCTS_INACTIVE', 'Articles inactifs');
define('TOTAL_PRODUCTS', 'Total de l\'article');
define('TOTAL_SPECIALS', 'Offres spéciales');
define('UNASSIGNED', 'Non attribué');
define('TURNOVER_TODAY', 'Chiffre d\'affaires aujourd\'hui');
define('TURNOVER_YESTERDAY', 'Chiffre d\'affaires hier');
define('TURNOVER_THIS_MONTH', 'mois actuel');
define('TURNOVER_LAST_MONTH', 'le mois dernier (tous)');
define('TURNOVER_LAST_MONTH_PAID', 'le mois dernier (payé)');
define('TOTAL_TURNOVER', 'Chiffre d\'affaires total');

define('HEADING_TITLE', 'Bienvenue dans la zone d\'administration');
define('TABLE_CAPTION_USERS_ONLINE', 'En ligne');
define('TABLE_CAPTION_USERS_ONLINE_HINT', '***Pour obtenir des informations sur un utilisateur, cliquez sur son nom***.');
define('TABLE_HEADING_USERS_ONLINE_SINCE', 'En ligne à partir de');
define('TABLE_HEADING_USERS_ONLINE_NAME', 'Nombre');
define('TABLE_HEADING_USERS_ONLINE_LAST_CLICK', 'Dernier clic');
define('TABLE_HEADING_USERS_ONLINE_INFO', 'Information');
define('TABLE_CELL_USERS_ONLINE_INFO', 'plus...');
define('TABLE_CAPTION_NEW_CUSTOMERS', 'Clients');
define('TABLE_CAPTION_NEW_CUSTOMERS_COMMENT', '(les 15 derniers)');
define('TABLE_HEADING_NEW_CUSTOMERS_LASTNAME', 'Nombre');
define('TABLE_HEADING_NEW_CUSTOMERS_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_NEW_CUSTOMERS_REGISTERED', 'registered el');
define('TABLE_HEADING_NEW_CUSTOMERS_EDIT', 'éditer');
define('TABLE_HEADING_NEW_CUSTOMERS_ORDERS', 'Demandes');
define('TABLE_CELL_NEW_CUSTOMERS_EDIT', 'éditer...');
define('TABLE_CELL_NEW_CUSTOMERS_DELETE', 'les exercices...');
define('TABLE_CELL_NEW_CUSTOMERS_ORDERS', 'montrer...');
define('TABLE_CAPTION_NEW_ORDERS', 'Demandes');
define('TABLE_CAPTION_NEW_ORDERS_COMMENT', '(les 20 derniers)');
define('TABLE_HEADING_NEW_ORDERS_ORDER_NUMBER', 'Numéro de commande');
define('TABLE_HEADING_NEW_ORDERS_ORDER_DATE', 'Date de la commande');
define('TABLE_HEADING_NEW_ORDERS_CUSTOMERS_NAME', 'Nom du client');
define('TABLE_HEADING_NEW_ORDERS_EDIT', 'éditer');
define('TABLE_HEADING_NEW_ORDERS_DELETE', 'forets');
define('TABLE_CAPTION_NEWSFEED', 'Visite el');
define('TABLE_CAPTION_BIRTHDAYS', 'Liste d\'anniversaires');
define('TABLE_CELL_BIRTHDAYS_TODAY', 'Les clients fêtent leur anniversaire aujourd\'hui');
define('TABLE_CELL_BIRTHDAYS_THIS_MONTH', 'Clients ayant un anniversaire ce mois-ci');
define('HEADING_CAPTION_STATISTIC', 'Statistiques');

define('ERROR_DB_VERSION_UPDATE', '<strong>AVERTISSEMENT :</strong> Votre BD doit être mise à jour, veuillez exécuter le <a href="' . DIR_WS_CATALOG . '_installer/">programme d\'installation</a>:');
define('ERROR_DB_VERSION_UPDATE_INFO', 'La base de données doit être mise à jour de la version %s à %s.');

define('ERROR_EMAIL_CHECK', '<strong>AVERTISSEMENT :</strong> Les adresses e-mail suivantes semblent être incorrectes :');
define('ERROR_EMAIL_CHECK_INFO', '%s : <%s>');

define('WARNING_DB_FILE_PRIVILEGES', '<strong>WARNING :</strong> les privilèges FILE sont activés sur la base de données ' . DB_DATABASE . ' pour l\'utilisateur du magasin ' . DB_SERVER_USERNAME . ' !');

define('WARNING_REGISTER_GLOBALS', '<strong>AVERTISSEMENT :</strong> Cette fonctionnalité est <strong>dépréciée</strong> à partir de PHP 5.3.0 et <strong>supprimée</strong> à partir de PHP 5.4.0. Contactez votre hébergeur pour désactiver "register_globals".');

define('WARNING_DOMAIN_INVALID', '<strong>AVERTISSEMENT :</strong> Le domaine de votre boutique n\'a pas pu être validé (Causes possibles : Erreur de format du domaine ou nom de domaine internationalisé (IDN) - domaine avec trémas).');

define('WARNING_REQUIREMENTS', '<b>%s installé</b>:%s <b>Min</b>:%s <b>Max</b>:%s');
