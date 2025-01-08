<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Prépaiement/Virement bancaire');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Coordonnées bancaires :<br />' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? nl2br(MODULE_PAYMENT_MONEYORDER_PAYTO) : '') . '<br />Motif du paiement : %s<br /><br />Titulaire du compte :<br />' . nl2br(STORE_OWNER) . '<br /><br />' . 'Votre commande vous sera envoyée dès que l\'argent aura été crédité sur notre compte.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Coordonnées bancaires : " . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\nBut de l'utilisation : %s\n\nTitulaire du compte :\n" . STORE_OWNER . "\n\n" . 'Votre commande vous sera envoyée dès que l\'argent aura été crédité sur notre compte.');
  if (defined('MODULE_PAYMENT_MONEYORDER_SUCCESS') && MODULE_PAYMENT_MONEYORDER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Nous expédions votre commande dès que le paiement a été reçu. Vous recevrez les détails de votre compte par e-mail une fois que votre commande aura été acceptée.');
  } else {
    define('MODULE_PAYMENT_MONEYORDER_TEXT_INFO', 'Nous expédions votre commande dès que le paiement a été reçu. Vous recevrez les détails de votre compte par e-mail une fois que votre commande aura été acceptée.');
  }
  define('MODULE_PAYMENT_MONEYORDER_STATUS_TITLE', 'Activez le module Chèque/Mandat');
  define('MODULE_PAYMENT_MONEYORDER_STATUS_DESC', 'Souhaitez-vous accepter le paiement par chèque/mandat ?');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_TITLE', 'Zones autorisées');
  define('MODULE_PAYMENT_MONEYORDER_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_TITLE', 'Payable à l\'ordre de :');
  define('MODULE_PAYMENT_MONEYORDER_PAYTO_DESC', 'À qui les paiements doivent-ils être versés ?');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_TITLE', 'Ordre d\'affichage');
  define('MODULE_PAYMENT_MONEYORDER_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_TITLE', 'Zone de paiement');
  define('MODULE_PAYMENT_MONEYORDER_ZONE_DESC', 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_TITLE', 'Définir le statut de la commande');
  define('MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID_DESC', 'Définissez les commandes passées avec ce module à ce statut.');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_TITLE', 'Afficher les coordonnées bancaires');
  define('MODULE_PAYMENT_MONEYORDER_SUCCESS_DESC', 'Les coordonnées bancaires doivent-elles apparaître sur la page de réussite ?');
