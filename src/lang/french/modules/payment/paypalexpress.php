<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_TITLE' => 'PayPal exprés',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ADMIN_TITLE' => 'PayPal sur la page du panier d\'achat',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_DESCRIPTION' => 'Après avoir "confirmé", vous serez dirigé vers PayPal pour payer votre commande.<br />Vous retournerez ensuite au magasin et recevrez la confirmation de votre commande.<br />Payez plus rapidement grâce à la protection illimitée des acheteurs de PayPal - sans frais, bien sûr.',
  'MODULE_PAYMENT_PAYPALEXPRESS_ALLOWED_TITLE' => 'Zones autorisées',
  'MODULE_PAYMENT_PAYPALEXPRESS_ALLOWED_DESC' => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
  'MODULE_PAYMENT_PAYPALEXPRESS_STATUS_TITLE' => 'Activar PayPal exprés',
  'MODULE_PAYMENT_PAYPALEXPRESS_STATUS_DESC' => 'Voulez-vous accepter les paiements PayPal Express ?',
  'MODULE_PAYMENT_PAYPALEXPRESS_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALEXPRESS_SORT_ORDER_DESC' => 'Ordre d\'affichage. Le plus petit chiffre apparaît en premier',
  'MODULE_PAYMENT_PAYPALEXPRESS_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALEXPRESS_ZONE_DESC' => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
  'MODULE_PAYMENT_PAYPALEXPRESS_SHORT_CHECKOUT_TITLE' => 'Checkout court',
  'MODULE_PAYMENT_PAYPALEXPRESS_SHORT_CHECKOUT_DESC' => 'Voulez-vous que le retour se fasse directement sur la page de résumé de la commande ?',
  'MODULE_PAYMENT_PAYPALEXPRESS_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Veuillez encore effectuer les réglages sous "Modules partenaires" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALEXPRESS_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a été annulé',

  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Nous avons créé un compte client pour vous avec votre adresse e-mail PayPal. Vous pouvez demander le mot de passe de votre nouveau compte client ultérieurement en utilisant la fonction "Mot de passe oublié".',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
