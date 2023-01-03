<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_TITLE'                => 'PayPal',
    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ADMIN_TITLE'          => 'PayPalALT',
    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_DESCRIPTION'          => 'Après avoir "confirmé", vous serez dirigé vers PayPal pour payer votre commande.<br />Vous retournerez ensuite au magasin et recevrez la confirmation de votre commande.<br />Payez plus rapidement grâce à la protection illimitée des acheteurs de PayPal - sans frais, bien sûr.',
    'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_TITLE'             => 'Zones autorisées',
    'MODULE_PAYMENT_PAYPALCLASSIC_ALLOWED_DESC'              => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
    'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_TITLE'              => 'Activer PayPal',
    'MODULE_PAYMENT_PAYPALCLASSIC_STATUS_DESC'               => 'Voulez-vous accepter les paiements via PayPal ?',
    'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_TITLE'          => 'Ordre d\'affichage',
    'MODULE_PAYMENT_PAYPALCLASSIC_SORT_ORDER_DESC'           => 'Ordre d\'affichage. Le plus petit chiffre apparaît en premier',
    'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_TITLE'                => 'Zone de paiement',
    'MODULE_PAYMENT_PAYPALCLASSIC_ZONE_DESC'                 => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
    'MODULE_PAYMENT_PAYPALCLASSIC_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Effectuez les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Paramètres de PayPal".</strong></a> Faites-le !',

    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALCLASSIC_TEXT_ERROR_MESSAGE'        => 'Le paiement PayPal a été annulé',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
