<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_PAYMENT_MCP_SERVICE_TEXT_TITLE', 'micropaiements - Pasarela');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_DESCRIPTION', 'Bla Blub ding dong');
define('MODULE_PAYMENT_MCP_SERVICE_TEXT_INFO', 'INFOTEXT de MCP_SERVICE');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_TITLE', ' État');
define('MODULE_PAYMENT_MCP_SERVICE_STATUS_DESC', 'Mise en service des modules micropayment™.');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_TITLE', ' Positionnement');
define('MODULE_PAYMENT_MCP_SERVICE_SORT_ORDER_DESC', 'Position sur la liste');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_TITLE', '<div style="color:#850000;font-style: italic;">Les paramètres suivants sont valables pour tous les modules de paiement micropayment™ et ne doivent être saisis qu\'une seule fois.</div><br /> ID du compte');
define('MODULE_PAYMENT_MCP_SERVICE_ACCOUNT_ID_DESC', 'Cuenta-ID von micropayment™');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_TITLE', ' Clé d\'accès');
define('MODULE_PAYMENT_MCP_SERVICE_ACCESS_KEY_DESC', 'Access-Key von micropayment™');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_TITLE', ' Code du projet');
define('MODULE_PAYMENT_MCP_SERVICE_PROJECT_CODE_DESC', 'Code du projet Micropayment™.');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_TITLE', ' Texte du paiement');
define('MODULE_PAYMENT_MCP_SERVICE_PAYTEXT_DESC', 'Il apparaît sur la facture ou comme titre dans la fenêtre de paiement. Avec le caractère générique #ORDER#, vous pouvez insérer l\'OrderID de la commande. Par exemple, "Commande #ORDER#" afficherait "Commande 0000023".');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_TITLE', ' Son');
define('MODULE_PAYMENT_MCP_SERVICE_THEME_DESC', 'Thème pour la fenêtre de paiement, la valeur par défaut est x1');
define('MODULE_PAYMENT_MCP_SERVICE_TESTMODE_TITLE', ' Mode de test');
define('MODULE_PAYMENT_MCP_SERVICE_TESTMODE_DESC', 'Activation du mode test');

define('MODULE_PAYMENT_MCP_SERVICE_GFX_TITLE', ' Code du logo');
define('MODULE_PAYMENT_MCP_SERVICE_GFX_DESC', 'Entrez le code de votre logo ici.');

define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_TITLE', ' Code graphique de fond');
define('MODULE_PAYMENT_MCP_SERVICE_BGGFX_DESC', 'Saisissez ici le code du graphique d\'arrière-plan.');

define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_TITLE', ' Couleur de fond');
define('MODULE_PAYMENT_MCP_SERVICE_BGCOLOR_DESC', 'Entrez la couleur de fond ici.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_TITLE', ' Nom du champ de sécurité');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_DESC', 'Pour une communication plus sécurisée entre les serveurs, saisissez un nom connu de vous seul.');

define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_TITLE', ' Valeur du champ de sécurité');
define('MODULE_PAYMENT_MCP_SERVICE_SECRET_FIELD_VALUE_DESC', 'Entrez ici une valeur que le serveur micropayment™ doit donner à votre boutique pour améliorer la sécurité.');

define('MODULE_PAYMENT_MCP_SERVICE_SUCCESS_TRANSACTION', 'La commande a été payée. Le code d\'authentification est : %s');
define('MODULE_PAYMENT_MCP_SERVICE_IP_NOT_ALLOWED', 'The IP-Adress is invalid.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_TERMINATED', 'La demande n\'est pas valide.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_UNKNOWN_ORDER_ID', 'L\'ordre n\'existe pas');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_SECRET_FIELD_MISSMATCH', 'Le champ de sécurité ne correspond pas');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_AMOUNT_MISSMATCH', 'Le total ne correspond pas à la valeur payée ! Réel : %s Objectif : %s');
define('MODULE_PAYMENT_MCP_SERVICE_PAYIN_MESSAGE', '%s %s has been paid.');
define('MODULE_PAYMENT_MCP_SERVICE_UNKNOWN_FUNCTION', 'Sa fonction est inconnue.');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AUTH_CODE', 'Le code d\'authentification est incorrect');
define('MODULE_PAYMENT_MCP_SERVICE_ERROR_INVALID_AMOUNT_VALUE', 'Le montant est incorrect');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_TITLE', ' Statut de la commande : en cours de paiement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ID_DESC', 'Le client paie la commande');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_TITLE', ' Statut de la commande : payé');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ID_DESC', 'Le client a payé correctement.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_TITLE', ' Statut de la commande : Annulé');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ID_DESC', 'Lorsqu\'une commande est annulée, le statut suivant est établi');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_TITLE', ' Statut de la commande : Remboursé');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_REFUNDED_ID_DESC', 'Lorsqu\'un remboursement est déclenché, ce statut est établi');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_TITLE', ' Statut de la commande : Paiement par chèque');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ID_DESC', 'S\'il y a des problèmes, ce statut est activé pour que vous puissiez le vérifier.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_TITLE', ' Statut de la commande : Conflit');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ID_DESC', 'S\'il existe un flux d\'événements déviés, ce statut est activé.');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_TITLE', ' Statut de la commande : Prépayé - Paiement partiel');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ID_DESC', 'Si un reçu de paiement anticipé est notifié mais que la commande n\'est pas entièrement payée, ce statut est activé.');

define('MODULE_PAYMENT_MCP_SERVICE_REFUND_COMMENT', 'Un remboursement a été déclenché.');
define('MODULE_PAYMENT_MCP_SERVICE_PENDING_PAYMENT', 'Paiement en attente. Annulation automatique %s');
define('MODULE_PAYMENT_MCP_PREPAY_EXPIRED', 'Pas de réception du paiement, annulation automatique');

define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_TITLE', 'Effacer les créances impayées');
define('MODULE_PAYMENT_MCP_SERVICE_EXPIRE_DAYS_DESC', 'Combien de temps une commande peut-elle rester en statut "En attente de paiement" avant d\'être retirée du bouton "Effacer la commande" ? Veuillez définir le nombre de jours. IMPORTANT : Cela ne supprimera pas les commandes prépayées.');

define('MODULE_PAYMENT_MCP_SERVICE_NEW_VERSION', 'Une<div class="mcp_notice_register">nouvelle version du module micropayment™ avec de nouvelles fonctions et caractéristiques pour votre système de boutique</div><div class="mcp_notice_register">est maintenant</div> disponible.<div class="mcp_notice_register"> <a href="http://ecommerce.micropayment.de/modifiedshop/" target="_new">Vers la nouvelle version du module.</a></div>');

define('MODULE_PAYMENT_MCP_SERVICE_NO_ACCOUNT', 'Pour que les modules de<div class="mcp_notice_register">paiement Micropayment™ fonctionnent, vous devez créer un compte Micropayment™ et créer un projet. <a href="https://%s.micropayment.de" target="blank">Cliquez ici pour vous inscrire.</a></div>');
define('MODULE_PAYMENT_MCP_SERVICE_CSS', '<style type="text/css"> .mcp_notice_register { margin-bottom: 5px; background-image: url("../images/micropayment/logo_small.png");
  background-position: 10px 10px;
  background-color: #ffdede;
  background-repeat: no-repeat;
  background-size: 100px;
  height: 40px;
	padding-left:130px;
	padding-top: 24px;
	border: 1px #cdcdcd solid;
	font-family: verdana, tahoma, sans-serif;
	font-size: 12px;
}
.mcp_notice_register a {
  font-family: verdana, tahoma, sans-serif;
  font-size: 12px;
  font-weight: bold;
  color: #8d005d;
}
</style>
');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_GERMAN_TITLE', 'paiement en attente');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_GERMAN_TITLE', 'prepay, partpay');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_GERMAN_TITLE', 'processing');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_GERMAN_TITLE', 'cancelled');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_GERMAN_TITLE', 'revue de paiement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_GERMAN_TITLE', 'event-conflict !');

define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PENDING_PAYMENT_ENGLISH_TITLE', 'en attente de paiement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PARTPAY_ENGLISH_TITLE', 'payer à l\'avance, payer en partie');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PROCESSING_ENGLISH_TITLE', 'traitement');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CANCELLED_ENGLISH_TITLE', 'annulé');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_PAYMENT_REVIEW_ENGLISH_TITLE', 'révision des paiements');
define('MODULE_PAYMENT_MCP_SERVICE_ORDER_STATUS_CONFLICT_ENGLISH_TITLE', 'événement-conflit !');
