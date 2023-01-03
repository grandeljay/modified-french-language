<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALACDC_TEXT_TITLE'                  => 'Carte de crédit',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ADMIN_TITLE'            => 'Carte de crédit (sans référence à PayPal)',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_INFO'                   => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal_creditcard.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALACDC_TEXT_DESCRIPTION'            => 'À la dernière étape de la commande, il vous sera demandé de saisir les détails de votre carte de crédit pour payer la commande.',
    'MODULE_PAYMENT_PAYPALACDC_ALLOWED_TITLE'               => 'Zones autorisées',
    'MODULE_PAYMENT_PAYPALACDC_ALLOWED_DESC'                => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
    'MODULE_PAYMENT_PAYPALACDC_STATUS_TITLE'                => 'Activer la carte de crédit',
    'MODULE_PAYMENT_PAYPALACDC_STATUS_DESC'                 => 'Souhaitez-vous accepter les paiements par carte PayPal ?',
    'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_TITLE'            => 'Ordre d\'affichage',
    'MODULE_PAYMENT_PAYPALACDC_SORT_ORDER_DESC'             => 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier',
    'MODULE_PAYMENT_PAYPALACDC_ZONE_TITLE'                  => 'Zone de paiement',
    'MODULE_PAYMENT_PAYPALACDC_ZONE_DESC'                   => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
    'MODULE_PAYMENT_PAYPALACDC_LP'                          => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXTENDED_DESCRIPTION'   => '<strong><font color="red">ATTENTION :</font></strong> Effectuez les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Paramètres de PayPal".</strong></a> Faites-le !',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_HEADING'          => 'Nota',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MESSAGE'          => 'Paiement par carte de crédit annulé',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_ERROR_MSG'              => 'Malheureusement, le paiement ne peut être effectué.',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER'             => 'Numéro de carte',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDHOLDER'             => 'Titulaire de la carte',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION'             => 'Valable jusqu\'au',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV'                    => 'Chiffre de contrôle',

    'MODULE_PAYMENT_PAYPALACDC_TEXT_CARDNUMBER_PLACEHOLDER' => 'Numéro de carte',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_EXPIRATION_PLACEHOLDER' => 'MM/JJ',
    'MODULE_PAYMENT_PAYPALACDC_TEXT_CVV_PLACEHOLDER'        => 'Chiffre de contrôle',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
