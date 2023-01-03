<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALLINK_TEXT_TITLE'                => 'PayPal',
    'MODULE_PAYMENT_PAYPALLINK_TEXT_ADMIN_TITLE'          => 'Lien de paiement PayPalALT',
    'MODULE_PAYMENT_PAYPALLINK_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALLINK_TEXT_DESCRIPTION'          => 'PayPal comme lien de paiement qui n\'est disponible pour le client qu\'une fois la commande terminée. Vous décidez vous-même où le client reçoit la demande de paiement.',
    'MODULE_PAYMENT_PAYPALLINK_ALLOWED_TITLE'             => 'Zones autorisées',
    'MODULE_PAYMENT_PAYPALLINK_ALLOWED_DESC'              => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
    'MODULE_PAYMENT_PAYPALLINK_STATUS_TITLE'              => 'Activez le lien PayPal',
    'MODULE_PAYMENT_PAYPALLINK_STATUS_DESC'               => 'Voulez-vous accepter les paiements par le biais de PayPal Link ?',
    'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_TITLE'          => 'Ordre d\'affichage',
    'MODULE_PAYMENT_PAYPALLINK_SORT_ORDER_DESC'           => 'Ordre d\'affichage. Le plus petit chiffre apparaît en premier',
    'MODULE_PAYMENT_PAYPALLINK_ZONE_TITLE'                => 'Zone de paiement',
    'MODULE_PAYMENT_PAYPALLINK_ZONE_DESC'                 => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
    'MODULE_PAYMENT_PAYPALLINK_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

    'MODULE_PAYMENT_PAYPALLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Effectuez les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Paramètres de PayPal".</strong></a> Faites-le !',

    'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALLINK_TEXT_ERROR_MESSAGE'        => 'Le paiement PayPal a été annulé',

    'MODULE_PAYMENT_PAYPALLINK_TEXT_SUCCESS'              => 'Payez maintenant avec PayPal. Cliquez sur le lien ci-dessous :<br/> %s',
    'MODULE_PAYMENT_PAYPALLINK_TEXT_COMPLETED'            => 'Merci de payer avec PayPal.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
