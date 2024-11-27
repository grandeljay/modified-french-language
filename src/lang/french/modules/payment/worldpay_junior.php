<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESCRIPTION', '<img src="images/icon_popup.gif" border="0"> <a href="http://www.worldpay.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visitez le site Web de WorldPay</a>');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_WARNING_DEMO_MODE', 'En test : Transaction effectuée en mode démo.');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_SUCCESSFUL_TRANSACTION', 'La transaction de paiement a été effectuée avec succès !');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_UNSUCCESSFUL_TRANSACTION', 'Votre paiement n\'a pas abouti !');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_CONTINUE_BUTTON', 'Cliquez ici pour continuer vers %s');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_TITLE', 'WorldPay Junior');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TEXT_DESC', 'Module de paiement Worldpay');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_TITLE', 'Activez le module WorldPay');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_STATUS_DESC', 'Souhaitez-vous accepter les paiements via WorldPay ?');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_TITLE', 'Zones autorisées');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_TITLE', 'ID des installations Worldpay');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_INSTALLATION_ID_DESC', 'Votre identifiant d\'établissement WorldPay');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_TITLE', 'Mot de passe de réponse au paiement');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_CALLBACK_PASSWORD_DESC', 'Un mot de passe renvoyé dans la réponse du callback (spécifié dans le système de gestion des clients de WorldPay).');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_TITLE', 'Secret MD5 pour le mot de passe de la transaction');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_MD5_PASSWORD_DESC', 'Le mot de passe secret de cryptage MD5 pour valider les réponses aux transactions (spécifié dans le système de gestion des clients de WorldPay).');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_TITLE', 'Méthode de transaction');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TRANSACTION_METHOD_DESC', 'La méthode de traitement à utiliser pour chaque transaction.');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_TITLE', 'Mode test');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_TESTMODE_DESC', 'Effectuer des transactions en mode test ?');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ZONE_DESC', 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_TITLE', 'Statut de l\'ordonnance temporaire');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_PREPARE_ORDER_STATUS_ID_DESC', 'Statut de la commande pour les transactions non encore terminées');

define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_TITLE', 'Définir le statut de la commande');
define('MODULE_PAYMENT_WORLDPAY_JUNIOR_ORDER_STATUS_ID_DESC', 'Définissez les commandes passées avec ce module à ce statut.');
