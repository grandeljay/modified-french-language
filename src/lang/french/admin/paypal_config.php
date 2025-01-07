<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'TEXT_PAYPAL_CONFIG_HEADING_TITLE' => 'Paramètres de PayPal',

  'TEXT_PAYPAL_CONFIG_SECRET_LIVE' => 'Secret en direct :',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE' => 'Cliente ID Live:',
  'TEXT_PAYPAL_CONFIG_CLIENT_LIVE_INFO' => 'Saisissez vos coordonnées PayPal APP ou demandez de nouvelles coordonnées.',

  'TEXT_PAYPAL_CONFIG_SECRET_SANDBOX' => 'Un bac à sable secret :',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX' => 'Sandbox d\'identification des clients :',
  'TEXT_PAYPAL_CONFIG_CLIENT_SANDBOX_INFO' => 'Saisissez vos coordonnées PayPal APP ou demandez de nouvelles coordonnées.',

  'TEXT_PAYPAL_APPINATOR_LIVE' => 'Demander des données en direct',
  'TEXT_PAYPAL_APPINATOR_SANDBOX' => 'Demander les données du bac à sable',

  'TEXT_PAYPAL_CONFIG_MODE' => 'Mode :',
  'TEXT_PAYPAL_CONFIG_MODE_INFO' => '',

  'TEXT_PAYPAL_CONFIG_MERCHANT_ID_LIVE' => 'Live Trader ID :',
  'TEXT_PAYPAL_CONFIG_MERCHANT_ID_SANDBOX' => 'Le bac à sable de l\'identification du trader :',
  'TEXT_PAYPAL_CONFIG_MERCHANT_ID_INFO' => 'Merchant ID de votre compte marchand. Si vous ne l\'avez pas sous la main, veuillez demander à nouveau l\'ID client et les données secrètes. Cela déterminera automatiquement l\'ID du commerçant.',

  'TEXT_PAYPAL_CONFIG_STATUS_ACDC_LIVE' => 'Statut de la carte de crédit en direct :',
  'TEXT_PAYPAL_CONFIG_STATUS_ACDC_SANDBOX' => 'Statut de sandbox des cartes de crédit :',
  'TEXT_PAYPAL_CONFIG_STATUS_ACDC_INFO' => 'Si le statut est jaune, veuillez contacter l\'assistance PayPal. Si l\'état est rouge, le service pour votre compte n\'est pas disponible pour le moment.',

  'TEXT_PAYPAL_CONFIG_STATUS_PUI_LIVE' => 'Achat de statut sur le compte Live :',
  'TEXT_PAYPAL_CONFIG_STATUS_PUI_SANDBOX' => 'Statut Achat dans le compte Sandbox :',
  'TEXT_PAYPAL_CONFIG_STATUS_PUI_INFO' => 'Si le statut est jaune, veuillez contacter l\'assistance PayPal. Si l\'état est rouge, le service pour votre compte n\'est pas disponible pour le moment.',

  'TEXT_PAYPAL_CONFIG_STATUS_APPLEPAY_LIVE' => 'Statut d\'Apple Pay Live :',
  'TEXT_PAYPAL_CONFIG_STATUS_APPLEPAY_SANDBOX' => 'Statut d\'Apple Pay Sandbox :',
  'TEXT_PAYPAL_CONFIG_STATUS_APPLEPAY_INFO' => 'Si le statut est jaune, contactez le support PayPal. Si le statut est rouge, le service n\'est pas disponible pour votre compte pour le moment.',

  'TEXT_PAYPAL_CONFIG_STATUS_GOOGLEPAY_LIVE' => 'État de Google Pay Live :',
  'TEXT_PAYPAL_CONFIG_STATUS_GOOGLEPAY_SANDBOX' => 'Statut de Google Pay Sandbox :',
  'TEXT_PAYPAL_CONFIG_STATUS_GOOGLEPAY_INFO' => 'Si le statut est jaune, contactez le support PayPal. Si le statut est rouge, le service n\'est pas disponible pour votre compte pour le moment.',

  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX' => 'Préfixe du numéro de commande :',
  'TEXT_PAYPAL_CONFIG_INVOICE_PREFIX_INFO' => 'Une chaîne de caractères librement sélectionnable (préfixe) qui précède le numéro de commande et est utilisée pour générer le numéro de facture PayPal.<br />Cela permet à plusieurs boutiques de travailler avec une seule application PayPal. Les conflits avec des numéros de commande identiques sont évités. Chaque commande reçoit son propre numéro de facture dans le compte PayPal.',

  'TEXT_PAYPAL_CONFIG_TRANSACTION' => 'Transaction :',
  'TEXT_PAYPAL_CONFIG_TRANSACTION_INFO' => 'Sélectionnez le type de transaction.<br/><br/><b>Remarque :</b> Avec PayPal Plus et le paiement à tempérament alimenté par PayPal, une vente est toujours effectuée.',

  'TEXT_PAYPAL_CONFIG_CAPTURE' => 'Capturez manuellement :',
  'TEXT_PAYPAL_CONFIG_CAPTURE_INFO' => 'Voulez-vous capturer les paiements manuellement dans PayPal ?<br/><br/><b>Remarque :</b> Pour cela, il faut que la transaction soit réglée sur Autoriser.',

  'TEXT_PAYPAL_CONFIG_CART' => 'Panier d\'achat :',
  'TEXT_PAYPAL_CONFIG_CART_INFO' => 'Le panier d\'achat doit-il être transféré à PayPal ?<br/><br/><b>Remarque :</b> Ce paramètre peut causer des problèmes lors de l\'utilisation des modules ot sous "Modules" -> "Aperçu" qui accordent une remise ou une majoration ("Remise [ot_discount]", "Coupons de remise [ot_coupon]", "Coupons [ot_gv]", "Remise et majoration sur les types de paiement [ot_payment]", etc.)<br/>Réglage recommandé : "Non',

  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY' => 'Paiement en plusieurs fois Banner :',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_DISPLAY_INFO' => 'Le signe de paiement par acomptes doit-il apparaître ?<br/><br/><b>Remarque :</b> Le paiement par acomptes avec PayPal n\'est disponible que si votre compte PayPal est activé.',

  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR' => 'Couleur de la bannière :',
  'TEXT_PAYPAL_INSTALLMENT_BANNER_COLOR_INFO' => 'Sélectionnez la couleur de la bannière.',

  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS' => 'Statut Éxito :',
  'TEXT_PAYPAL_CONFIG_STATE_SUCCESS_INFO' => 'Statut de la commande réussie',

  'TEXT_PAYPAL_CONFIG_STATE_REJECTED' => 'Statut Rejeté :',
  'TEXT_PAYPAL_CONFIG_STATE_REJECTED_INFO' => 'Statut en cas de commande rejetée',

  'TEXT_PAYPAL_CONFIG_STATE_PENDING' => 'État de veille :',
  'TEXT_PAYPAL_CONFIG_STATE_PENDING_INFO' => 'Statut en cas de commande réussie, mais pas encore confirmée par PayPal',

  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED' => 'Statut enregistré :',
  'TEXT_PAYPAL_CONFIG_STATE_CAPTURED_INFO' => 'Statut déclenché par une capture',

  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED' => 'Statut de remboursement :',
  'TEXT_PAYPAL_CONFIG_STATE_REFUNDED_INFO' => 'État causé par un retour',

  'TEXT_PAYPAL_CONFIG_STATE_TEMP' => 'État Temp :',
  'TEXT_PAYPAL_CONFIG_STATE_TEMP_INFO' => 'Statut d\'une commande non confirmée',

  'TEXT_PAYPAL_CONFIG_LOG' => 'Enregistrez-vous :',
  'TEXT_PAYPAL_CONFIG_LOG_INFO' => 'Faut-il écrire un registre ?',

  'TEXT_PAYPAL_CONFIG_LOG_LEVEL' => 'Niveau d\'inscription :',
  'TEXT_PAYPAL_CONFIG_LOG_LEVEL_INFO' => '<b>Remarque :</b> en mode direct, la journalisation ne s\'effectue que jusqu\'au niveau INFO.',

  'BUTTON_PAYPAL_STATUS_INSTALL' => 'Statut de l\'ordre d\'installation',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}

$PAYPAL_INST_ORDER_STATUS_TMP_NAME      = 'PayPal annulé';
$PAYPAL_INST_ORDER_STATUS_SUCCESS_NAME  = 'Payé avec PayPal';
$PAYPAL_INST_ORDER_STATUS_PENDING_NAME  = 'PayPal wartend';
$PAYPAL_INST_ORDER_STATUS_CAPTURED_NAME = 'Inscription à PayPal';
$PAYPAL_INST_ORDER_STATUS_REFUNDED_NAME = 'Remboursements PayPal';
$PAYPAL_INST_ORDER_STATUS_REJECTED_NAME = 'PayPal rejeté';
