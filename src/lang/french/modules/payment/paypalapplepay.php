<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_TITLE' => 'Apple Pay via PayPal',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_ADMIN_TITLE' => 'Apple Pay via PayPal',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_INFO' => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="'.xtc_href_link(DIR_WS_ICONS.'applepay.png', '', 'SSL', false).'" style="max-height: 60px;" />' : ''),
  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_DESCRIPTION' => 'Après avoir "confirmé", l\'acheteur est dirigé vers Apple Pay pour y payer sa commande.<br />Il retourne ensuite dans la boutique et reçoit votre confirmation de commande.<br />Payez maintenant plus rapidement avec la protection illimitée des acheteurs PayPal - gratuitement bien sûr.<br /><br /><strong><font color="red">ATTENTION :</font></strong> Apple Pay ne fonctionne qu\'avec les navigateurs Safari et les versions suivantes des systèmes d\'exploitation sur les appareils Apple :<br />- macOS 10.14.1 et versions ultérieures<br />- iOS 12.1 et supérieur<br /><br /><strong><font color="red">ATTENTION :</font></strong> Pour que le statut de la commande soit correctement défini, les <a href="'.xtc_href_link('paypal_webhook.php').'">webhooks</a> suivants doivent être configurés dans la configuration PayPal afin que le statut soit correctement changé :<ul><li>PAYMENT.CAPTURE.COMPLETED</li><li>PAYMENT.CAPTURE.DECLINED</li><li>PAYMENT.CAPTURE.DENIED</li><li>PAYMENT.CAPTURE.PENDING</li></ul>',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_ALLOWED_TITLE' => 'Zones autorisées',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_ALLOWED_DESC' => 'Le module peut être utilisé pour les zones suivantes.',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_STATUS_TITLE' => 'Activer Apple Pay via PayPal',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_STATUS_DESC' => 'Souhaitez-vous accepter les paiements par PayPal Apple Pay ?',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_SORT_ORDER_DESC' => 'Ordre d\'affichage des chiffres. Le plus petit chiffre est affiché en premier',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_ZONE_DESC' => 'Si une zone est sélectionnée, le mode de paiement s\'applique uniquement à cette zone.',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_LP' => '<br /><br />Pour ce mode de paiement, vous devez disposer d\'un compte marchand PayPal.<br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créer un compte PayPal maintenant ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Veuillez encore effectuer les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt; <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_ERROR_HEADING' => 'Note',
  'MODULE_PAYMENT_PAYPALAPPLEPAY_TEXT_ERROR_MESSAGE' => 'Le paiement avec Apple Pay via PayPal a été annulé',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
