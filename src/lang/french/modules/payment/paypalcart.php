<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'MODULE_PAYMENT_PAYPALCART_TEXT_TITLE' => 'PayPal',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ADMIN_TITLE' => 'Bouton PayPal express dans le panier et sur la page de l\'articleALT',
  'MODULE_PAYMENT_PAYPALCART_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
  'MODULE_PAYMENT_PAYPALCART_TEXT_DESCRIPTION' => 'PayPal Express Checkout - le bouton PayPal dans le panier et sur la page de l\'article pour une conversion maximale.<br/>Vous pouvez trouver plus d\'informations sur PayPal Express Checkout <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/express-checkout">ici</a>.',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_TITLE' => 'Zones autorisées',
  'MODULE_PAYMENT_PAYPALCART_ALLOWED_DESC' => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
  'MODULE_PAYMENT_PAYPALCART_STATUS_TITLE' => 'Activar PayPal exprés',
  'MODULE_PAYMENT_PAYPALCART_STATUS_DESC' => 'Voulez-vous accepter les paiements PayPal Express ?',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALCART_SORT_ORDER_DESC' => 'Ordre d\'affichage. Le plus petit chiffre apparaît en premier',
  'MODULE_PAYMENT_PAYPALCART_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALCART_ZONE_DESC' => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
  'MODULE_PAYMENT_PAYPALCART_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALCART_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Veuillez encore effectuer les réglages sous "Modules partenaires" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALCART_TEXT_ERROR_MESSAGE' => 'Le paiement PayPal a été annulé',

  'TEXT_PAYPAL_CART_ACCOUNT_CREATED' => 'Nous avons créé un compte client pour vous avec votre adresse e-mail PayPal. Vous pouvez demander le mot de passe de votre nouveau compte client ultérieurement en utilisant la fonction "Mot de passe oublié".',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
