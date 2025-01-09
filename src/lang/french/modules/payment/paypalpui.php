<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'MODULE_PAYMENT_PAYPALPUI_TEXT_TITLE' => 'Factura',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_ADMIN_TITLE' => 'Facture via PayPal',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_INFO' => 'En cliquant sur le bouton, vous acceptez les <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">conditions de paiement</a> de Ratepay <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">et</a> acceptez une <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">vérification des risques</a> par <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Ratepay</a>, notre partenaire. Vous acceptez également la <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">politique de confidentialité</a> de PayPal. Si votre transaction peut être traitée avec succès par achat sur compte, le prix d\'achat est attribué à Ratepay et vous ne pourrez transférer de l\'argent qu\'à Ratepay, et non au commerçant.',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Pour que l\'achat sur compte fonctionne correctement, les webhooks suivants doivent être définis dans les paramètres PayPal pour que le statut change correctement :<ul><li>PAIEMENT.TERMINÉ</li><li>PAIEMENT.CAPTURE.REFUSÉ</li></ul>',
  'MODULE_PAYMENT_PAYPALPUI_ALLOWED_TITLE' => 'Zones autorisées',
  'MODULE_PAYMENT_PAYPALPUI_ALLOWED_DESC' => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
  'MODULE_PAYMENT_PAYPALPUI_STATUS_TITLE' => 'Activer la facture PayPal',
  'MODULE_PAYMENT_PAYPALPUI_STATUS_DESC' => 'Souhaitez-vous accepter le paiement par facture ?',
  'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_PAYPALPUI_SORT_ORDER_DESC' => 'Ordre d\'affichage. Le plus petit chiffre apparaît en premier',
  'MODULE_PAYMENT_PAYPALPUI_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_PAYPALPUI_ZONE_DESC' => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
  'MODULE_PAYMENT_PAYPALPUI_LP' => '<br /><br /><a target="_blank" href="http://www.paypal.com/de/webapps/mpp/referral/paypal-business-account2?partner_id=EHALBVD4M2RQS"><strong>Créez un compte PayPal ici.</strong></a>',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_EXTENDED_DESCRIPTION' => '<strong><font color="red">ATTENTION :</font></strong> Veuillez encore effectuer les réglages sous "Modules partenaires" -> "PayPal" -> <a href="'.xtc_href_link('paypal_config.php').'"><strong>"Configuration PayPal"</strong></a>!',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_ERROR_MESSAGE' => 'Malheureusement, l\'achat sur compte n\'est pas disponible pour le moment, veuillez choisir un autre mode de paiement.',

  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_INFO_CANNOT_BE_VERIFIED' => 'Votre combinaison de nom et d\'adresse n\'a pas pu être validée. Veuillez corriger vos coordonnées et réessayer. Pour plus d\'informations, veuillez consulter la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">politique de confidentialité</a> de Ratepay ou contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">formulaire de contact</a>.',
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_DECLINED_BY_PROCESSOR' => 'Le mode de paiement sélectionné ne peut pas être utilisé. Cette décision est basée sur une procédure de traitement automatisé des données. Pour plus d\'informations, veuillez consulter la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">politique de confidentialité</a> de Ratepay ou contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">formulaire de contact</a>.',
  'MODULE_PAYMENT_PAYPALPUI_PAYMENT_SOURCE_CANNOT_BE_USED' => 'Le mode de paiement sélectionné ne peut pas être utilisé. Cette décision est basée sur une procédure de traitement automatisé des données. Pour plus d\'informations, veuillez consulter la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">politique de confidentialité</a> de Ratepay ou contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">formulaire de contact</a>.',
  'MODULE_PAYMENT_PAYPALPUI_BILLING_ADDRESS_INVALID' => 'Votre adresse de facturation n\'a pas pu être validée.',
  'MODULE_PAYMENT_PAYPALPUI_SHIPPING_ADDRESS_INVALID' => 'Votre adresse de livraison n\'a pas pu être validée.',

  'MALFORMED_REQUEST_JSON' => 'Votre combinaison de nom et d\'adresse n\'a pas pu être validée. Veuillez corriger vos coordonnées et réessayer. Pour plus d\'informations, veuillez consulter la <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">politique de confidentialité</a> de Ratepay ou contacter Ratepay via ce <a target="_blank" href="https://www.ratepay.com/kontakt">formulaire de contact</a>.',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_DOB' => 'Date de naissance (par exemple, 21.05.1970) :',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_TELEPHONE' => 'Numéro de téléphone :',
  'MODULE_PAYMENT_PAYPALPUI_TEXT_SERVICE' => 'Service clientèle : %s',

  'JS_DOB_ERROR' => 'Votre date de naissance doit être saisie au format JJ.MM.AAAA (par exemple, 21.05.1970).',
  'JS_TELEPHONE_ERROR' => 'Pour ce mode de paiement, nous avons besoin de votre numéro de téléphone.',

  'MODULE_PAYMENT_PAYPALPUI_TEXT_LEGAL' => 'En cliquant sur le bouton, vous acceptez les <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">conditions de paiement</a> de Ratepay <a target="_blank" href="https://www.ratepay.com/legal-payment-terms">et</a> acceptez une <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">vérification des risques</a> par <a target="_blank" href="https://www.ratepay.com/legal-payment-dataprivacy">Ratepay</a>, notre partenaire. Vous acceptez également la <a target="_blank" href="https://www.paypal.com/de/webapps/mpp/ua/rechnungskauf-mit-ratepay?locale.x=en_DE&_ga=1.121064910.716429872.1643889674">politique de confidentialité</a> de PayPal. Si votre transaction peut être traitée avec succès par achat sur compte, le prix d\'achat est attribué à Ratepay et vous ne pourrez transférer de l\'argent qu\'à Ratepay, et non au commerçant.',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
