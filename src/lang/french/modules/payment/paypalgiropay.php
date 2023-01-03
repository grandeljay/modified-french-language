<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_TITLE'                => 'Giropay via PayPal',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ADMIN_TITLE'          => 'Giropay via PayPal',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_INFO'                 => '<img src="https://www.paypalobjects.com/images/checkout/alternative_payments/paypal_giropay_color.svg" />',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_DESCRIPTION'          => 'Après avoir "confirmé", vous serez redirigé vers Giropay pour y payer votre commande.<br />Vous retournerez ensuite dans la boutique et recevrez votre confirmation de commande.<br />Payez maintenant plus rapidement avec la protection d\'achat PayPal illimitée - bien sûr gratuitement.',
    'MODULE_PAYMENT_PAYPALGIROPAY_ALLOWED_TITLE'             => 'Zones autorisées',
    'MODULE_PAYMENT_PAYPALGIROPAY_ALLOWED_DESC'              => 'Indiquez <b>individuellement</b> les zones qui doivent être autorisées pour ce module. (par exemple AT,DE (si vide, toutes les zones sont autorisées))',
    'MODULE_PAYMENT_PAYPALGIROPAY_STATUS_TITLE'              => 'Giropay via PayPal aktivieren',
    'MODULE_PAYMENT_PAYPALGIROPAY_STATUS_DESC'               => 'Souhaitez-vous accepter les paiements par PayPal Giropay ?',
    'MODULE_PAYMENT_PAYPALGIROPAY_SORT_ORDER_TITLE'          => 'Ordre d\'affichage',
    'MODULE_PAYMENT_PAYPALGIROPAY_SORT_ORDER_DESC'           => 'Ordre d\'affichage des chiffres. Le plus petit chiffre est affiché en premier',
    'MODULE_PAYMENT_PAYPALGIROPAY_ZONE_TITLE'                => 'Zone de paiement',
    'MODULE_PAYMENT_PAYPALGIROPAY_ZONE_DESC'                 => 'Si une zone est sélectionnée, le mode de paiement s\'applique uniquement à cette zone.',
    'MODULE_PAYMENT_PAYPALGIROPAY_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créer un compte PayPal maintenant ici.</strong></a>',

    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Veuillez encore effectuer les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt;. <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Configuration PayPal".</strong></a> effectuer !',

    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ERROR_HEADING'        => 'Note',
    'MODULE_PAYMENT_PAYPALGIROPAY_TEXT_ERROR_MESSAGE'        => 'Le paiement par Giropay via PayPal a été annulé',
);


foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
