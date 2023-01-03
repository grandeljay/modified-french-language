<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_TITLE'                => 'PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ADMIN_TITLE'          => 'Lien de paiement PayPal PLUS (uniquement avec le siège de l\'entreprise en DE<span style="background:#dd2400;color: #fff;font-weight: bold;padding: 2px 5px;border-radius: 4px;margin: 0 0 0 5px;">)ALT</span>',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_INFO'                 => ((!defined('RUN_MODE_ADMIN') && function_exists('xtc_href_link')) ? '<img src="' . xtc_href_link(DIR_WS_ICONS . 'paypal.png', '', 'SSL', false) . '" />' : ''),
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_DESCRIPTION'          => 'PayPal PLUS est un lien de paiement qui n\'est disponible pour le client qu\'une fois la commande terminée. Vous décidez vous-même où le client reçoit la demande de paiement.<br/>PayPal PLUS : les quatre modes de paiement les plus populaires auprès des acheteurs allemands : PayPal, débit direct, carte de crédit et facture.<br/>Vous pouvez trouver plus d\'informations sur PayPal PLUS <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/paypal-plus">ici</a>.',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_TITLE'             => 'Zones autorisées',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ALLOWED_DESC'              => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
    'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_TITLE'              => 'Activer le lien PayPal PLUS',
    'MODULE_PAYMENT_PAYPALPLUSLINK_STATUS_DESC'               => 'Voulez-vous accepter les paiements via PayPal PLUS Link ?',
    'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_TITLE'          => 'Ordre d\'affichage',
    'MODULE_PAYMENT_PAYPALPLUSLINK_SORT_ORDER_DESC'           => 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_TITLE'                => 'Zone de paiement',
    'MODULE_PAYMENT_PAYPALPLUSLINK_ZONE_DESC'                 => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
    'MODULE_PAYMENT_PAYPALPLUSLINK_LP'                        => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Effectuez les réglages sous "Modules partenaires" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal" -&gt; "PayPal". <a href="' . xtc_href_link('paypal_config.php') . '"><strong>"Paramètres de PayPal".</strong></a> Faites-le !',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_HEADING'        => 'Nota',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_ERROR_MESSAGE'        => 'Le paiement PayPal a été annulé',

    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_SUCCESS'              => 'Payez maintenant avec PayPal. Cliquez sur le lien ci-dessous :<br/> %s',
    'MODULE_PAYMENT_PAYPALPLUSLINK_TEXT_COMPLETED'            => 'Merci de payer avec PayPal.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
