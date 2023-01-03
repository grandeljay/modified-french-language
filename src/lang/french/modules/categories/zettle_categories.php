<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_TITLE', 'Zettle de PayPal');
define(
    'MODULE_CATEGORIES_ZETTLE_CATEGORIES_DESCRIPTION',
    'Des systèmes de caisse modernes comme application pour l\'acceptation des paiements et le suivi des ventes : facilitez votre vie quotidienne avec Zettle.<br>
    <br>Les fonctions suivantes sont actuellement prises en charge :
    <ul style="padding-left: 20px;">
    <li>Les articles sont transférés de la boutique à Zettle</li>
    <li>Possibilité de créer son propre groupe de clients pour les prix des articles</li>
    <li>Le stock est synchronisé entre la boutique et Zettle sur demande.</li>
    </ul>'
);

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_TITLE', 'Importations en vrac');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BULK_DESC', 'L\'importation en masse doit-elle être activée ?<br><b>Remarque :</b> Cela nécessite qu\'un cronjob soit défini sur l\'URL ' . HTTP_SERVER . DIR_WS_CATALOG . 'api/zettle/cronjob.php est créé.</br>');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_TITLE', 'Clave API');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_API_KEY_DESC', 'Saisissez la clé API de Zettle.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_TITLE', 'Langue');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_LANGUAGE_DESC', 'Sélectionnez la langue de transmission des articles.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_TITLE', 'Groupe de clients');
define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_CUSTOMERS_STATUS_DESC', 'Sélectionnez le groupe de clients pour le transfert de prix.');

define('MODULE_CATEGORIES_ZETTLE_CATEGORIES_BUTTON_API', 'Clé API Zettle erstellen');
