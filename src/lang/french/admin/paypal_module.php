<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_MODULE_HEADING_TITLE'              => 'Produits PayPal',

    'TABLE_HEADING_MODULES'                         => 'Module',
    'TABLE_HEADING_FILENAME'                        => 'Nom du module (pour usage interne)',
    'TABLE_HEADING_SORT_ORDER'                      => 'Classement',
    'TABLE_HEADING_STATUS'                          => 'État',
    'TABLE_HEADING_ACTION'                          => 'Action',

    'TABLE_HEADING_WALL_STATUS'                     => 'Affichage sur le mur de paiement',
    'TABLE_HEADING_WALL_DESCRIPTION'                => 'Description',

    'TEXT_PAYPAL_MODULE_PROFILE'                    => 'Profil',
    'TEXT_PAYPAL_NO_PROFILE'                        => 'Pas de profil web',
    'TEXT_PAYPAL_STANDARD_PROFILE'                  => 'Profil Web standard',

    'TEXT_PAYPAL_MODULE_LINK_SUCCESS'               => 'Lien dans la boîte',
    'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO'          => 'Le lien de paiement doit-il apparaître à la caisse ?',

    'TEXT_PAYPAL_MODULE_LINK_ACCOUNT'               => 'Lien vers le compte im',
    'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO'          => 'Le lien de paiement doit-il apparaître sur le compte ?',

    'TEXT_PAYPAL_MODULE_PRODUCT'                    => 'Bouton Article Express',
    'TEXT_PAYPAL_MODULE_PRODUCT_INFO'               => 'Le bouton PayPal Express doit-il apparaître dans les informations sur l\'article ?',

    'TEXT_PAYPAL_MODULE_CART_BNPL'                  => 'Bouton "Payer plus tard" dans le panier d\'achat',
    'TEXT_PAYPAL_MODULE_CART_BNPL_INFO'             => 'Le bouton PayPal Pay Later doit-il apparaître dans le panier d\'achat ?',

    'TEXT_PAYPAL_MODULE_PRODUCT_BNPL'               => 'Bouton de paiement ultérieur par poste',
    'TEXT_PAYPAL_MODULE_PRODUCT_BNPL_INFO'          => 'Le bouton PayPal Pay Later doit-il apparaître dans les informations sur l\'article ?',

    'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL'              => 'Bouton "Payer plus tard" à la caisse',
    'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL_INFO'         => 'Le bouton PayPal Pay Later doit-il apparaître à la caisse ?',

    'TEXT_PAYPAL_MODULE_USE_TABS'                   => 'Accordéon / Tabs',
    'TEXT_PAYPAL_MODULE_USE_TABS_INFO'              => 'Le modèle utilise-t-il un accordéon ou des onglets dans la boîte ?',

    'TEXT_PAYPAL_MODULE_SHIPPING_COST'              => 'Frais d\'expédition provisoires',
    'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO'         => 'Saisissez le montant des frais d\'expédition provisoires.',

    'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED'      => 'Statut de la commande',
    'TEXT_PAYPAL_MODULE_ORDER_STATUS_ACCEPTED_INFO' => 'Sélectionnez le statut de la commande.<br/><b>Important :</b> le nom ne doit pas contenir de caractères.a palabra "pagado".',

    'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT'           => 'Boîte de financement par article',
    'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO'      => 'Les détails du paiement échelonné doivent-ils être affichés avec l\'article ?',

    'TEXT_PAYPAL_MODULE_UPSTREAM_CART'              => 'Panier à provisions Boîte de financement',
    'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO'         => 'Les détails du paiement échelonné doivent-ils apparaître dans le panier d\'achat ?',

    'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT'           => 'Boîte de financement au bureau du caissier',
    'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO'      => 'Les détails du paiement échelonné doivent-ils être affichés à la caisse ?',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
