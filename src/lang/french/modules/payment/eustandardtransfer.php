<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_TITLE', 'Virement bancaire standard de l\'UE');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_DESCRIPTION', '<br />Le mode de paiement le moins cher et le plus simple au sein de l\'UE est le virement bancaire utilisant les codes IBAN et BIC' . '<br />Veuillez utiliser les coordonnées suivantes pour le transfert du montant total :<br />' . (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM') ? '<br />Nom de la banque : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM : '') . (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH') ? '<br />Bénéficiaire : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH : '') . (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM') ? '<br />Code bancaire : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNAM : '') . (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM') ? '<br />Numéro de compte : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCNUM : '') . (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN') ? '<br />IBAN : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN : '') . (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC') ? '<br />BIC/SWIFT : ' . MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC : '') . '<br />Utilisation prévue : %s' . '<br /><br />Les marchandises ne seront livrées que lorsque le montant aura été crédité sur notre compte.<br />');

  if (defined('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS') && MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS == 'True') {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Veuillez transférer le montant de la facture due sur notre compte. Vous recevrez les détails du compte lors de la dernière étape de la commande.');
  } else {
    define('MODULE_PAYMENT_EUSTANDARDTRANSFER_TEXT_INFO', 'Veuillez transférer le montant de la facture due sur notre compte. Vous recevrez les détails du compte lors de la dernière étape de la commande.');
  }
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_TITLE', 'Activez le module de virement bancaire standard de l\'UE');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_STATUS_DESC', 'Souhaitez-vous accepter les virements bancaires ?');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_TITLE', 'Récepteur');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BRANCH_DESC', 'Le destinataire du transfert.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_TITLE', 'Nom de la banque');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKNAM_DESC', 'Le nom complet de la banque.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_TITLE', 'Cuenta bancaria IBAN');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ACCIBAN_DESC', 'International Account ID.<br />(Demandez à votre banque si vous n\'êtes pas sûr).');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_TITLE', 'Banque Bic');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_BANKBIC_DESC', 'ID bancaire international.<br />(Demandez à votre banque si vous n\'êtes pas sûr).');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_TITLE', 'Ordre d\'affichage');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_TITLE', 'Zones autorisées');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_TITLE', 'Zone de paiement');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ZONE_DESC', 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_TITLE', 'Définir le statut de la commande');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_ORDER_STATUS_ID_DESC', 'Définissez les commandes passées avec ce module à ce statut.');

  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_TITLE', 'Afficher les coordonnées bancaires');
  define('MODULE_PAYMENT_EUSTANDARDTRANSFER_SUCCESS_DESC', 'Les coordonnées bancaires doivent-elles apparaître sur la page de réussite ?');
