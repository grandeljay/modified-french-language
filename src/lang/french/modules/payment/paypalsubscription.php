<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_TITLE' => 'Abonnement PayPal',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ADMIN_TITLE' => 'Abonnement PayPal (pour les paiements récurrents)',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'paypal.png', '', 'SSL', false).'" />' : ''),
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_DESCRIPTION' => 'PayPal en tant que lien de paiement qui n\'est disponible pour les clients qu\'après la finalisation de la commande. Décidez vous-même de l\'endroit où le client reçoit la demande de paiement.<br /><br /><strong><font color="red">ATTENTION :</font></strong> Pour que le statut de la commande soit correctement défini, les <a href="'.xtc_href_link('paypal_webhook.php').'">webhooks</a> suivants doivent être configurés dans la configuration PayPal afin que le statut soit correctement changé :<ul><li>BILLING.SUBSCRIPTION.ACTIVATED</li><li>BILLING.SUBSCRIPTION.CANCELLED</li><li>BILLING.SUBSCRIPTION.CREATED</li><li>BILLING.SUBSCRIPTION.EXPIRED</li><li>BILLING.SUBSCRIPTION.PAYMENT.FAILED</li><li>BILLING.SUBSCRIPTION.RE-ACTIVATED</li><li>BILLING.SUBSCRIPTION.RENEWED</li><li>BILLING.SUBSCRIPTION.SUSPENDU</li><li>BILLING.SUBSCRIPTION.UPDATED</li></ul>',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_TITLE' => 'Zones autorisées',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ALLOWED_DESC' => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_TITLE' => 'Activer l\'abonnement PayPal',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_STATUS_DESC' => 'Voulez-vous accepter les paiements d\'abonnement par PayPal ?',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_SORT_ORDER_DESC' => 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_ZONE_DESC' => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Veuillez encore effectuer les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt; <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALSUBSCRIPTION_TEXT_ERROR_MESSAGE' => 'Le paiement de l\'abonnement PayPal a été annulé.',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
