<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_PAYMENT_MONEYBOOKERS_PWY_TEXT_TITLE', 'Przelewy24');
$_var = 'Przelewy24 a través de Skrill';
if (_PAYMENT_MONEYBOOKERS_EMAILID=='') {
  $_var .= '<br /><br /><b><font color="red">Veuillez d\'abord effectuer les réglages sur<br /> Paramètres avancés -> Partenaire -> Skrill.com !</font></b>';
}
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_TEXT_DESCRIPTION', $_var);
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_NOCURRENCY_ERROR', 'Aucune devise acceptée par Skrill n\'est installée.');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ERRORTEXT1', 'payment_error=');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_TEXT_INFO', '');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ERRORTEXT2', '&error=Erreur lors de votre paiement Skrill !');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ORDER_TEXT', 'Date de la commande : ');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_TEXT_ERROR', 'Erreur de paiement !');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_CONFIRMATION_TEXT', 'Merci pour votre commande.');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_TRANSACTION_FAILED_TEXT', 'Votre transaction de paiement avec skrill.com a échoué. Veuillez réessayer ou choisir un autre mode de paiement.');

define('MODULE_PAYMENT_MONEYBOOKERS_PWY_STATUS_TITLE', 'Activer Skrill');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_STATUS_DESC', 'Vous souhaitez accepter les paiements via Skrill ?');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ZONE_DESC', 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ALLOWED_TITLE', 'Zones autorisées');
define('MODULE_PAYMENT_MONEYBOOKERS_PWY_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');
