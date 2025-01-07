<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'TEXT_PAYPAL_MODULE_HEADING_TITLE' => 'Produits PayPal',

  'TABLE_HEADING_MODULES' => 'Module',
  'TABLE_HEADING_FILENAME' => 'Nom du module (pour usage interne)',
  'TABLE_HEADING_SORT_ORDER' => 'Classement',
  'TABLE_HEADING_STATUS' => 'État',
  'TABLE_HEADING_ACTION' => 'Action',

  'TABLE_HEADING_WALL_STATUS' => 'Affichage sur le mur de paiement',
  'TABLE_HEADING_WALL_DESCRIPTION' => 'Description',

  'TEXT_PAYPAL_MODULE_PROFILE' => 'Profil',
  'TEXT_PAYPAL_NO_PROFILE' => 'Pas de profil web',
  'TEXT_PAYPAL_STANDARD_PROFILE' => 'Profil Web standard',

  'TEXT_PAYPAL_MODULE_LINK_SUCCESS' => 'Lien dans la boîte',
  'TEXT_PAYPAL_MODULE_LINK_SUCCESS_INFO' => 'Le lien de paiement doit-il apparaître à la caisse ?',

  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT' => 'Lien vers le compte im',
  'TEXT_PAYPAL_MODULE_LINK_ACCOUNT_INFO' => 'Le lien de paiement doit-il apparaître sur le compte ?',

  'TEXT_PAYPAL_MODULE_PRODUCT' => 'Bouton Article Express',
  'TEXT_PAYPAL_MODULE_PRODUCT_INFO' => 'Le bouton PayPal Express doit-il apparaître dans les informations sur l\'article ?',

  'TEXT_PAYPAL_MODULE_CART_BNPL' => 'Bouton "Payer plus tard" dans le panier d\'achat',
  'TEXT_PAYPAL_MODULE_CART_BNPL_INFO' => 'Le bouton PayPal Pay Later doit-il apparaître dans le panier d\'achat ?',

  'TEXT_PAYPAL_MODULE_PRODUCT_BNPL' => 'Bouton de paiement ultérieur par poste',
  'TEXT_PAYPAL_MODULE_PRODUCT_BNPL_INFO' => 'Le bouton PayPal Pay Later doit-il apparaître dans les informations sur l\'article ?',

  'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL' => 'Bouton "Payer plus tard" à la caisse',
  'TEXT_PAYPAL_MODULE_CHECKOUT_BNPL_INFO' => 'Le bouton PayPal Pay Later doit-il apparaître à la caisse ?',

  'TEXT_PAYPAL_MODULE_SAVE_PAYMENT' => 'Enregistrer le mode de paiement dans le checkout (PayPal Vault)',
  'TEXT_PAYPAL_MODULE_SAVE_PAYMENT_INFO' => 'Le mode de paiement utilisé pour PayPal doit-il pouvoir être enregistré pour un passage en caisse plus rapide lors d\'une prochaine commande ?',

  'TEXT_PAYPAL_MODULE_OFFER_SAVE_PAYMENT' => 'Autoriser le mode de paiement enregistré (PayPal Vault)',
  'TEXT_PAYPAL_MODULE_OFFER_SAVE_PAYMENT_INFO' => 'Faut-il autoriser un mode de paiement enregistré pour PayPal pour un passage en caisse plus rapide ?',

  'TEXT_PAYPAL_MODULE_ACDC_EXTEND_CARDS' => 'Autoriser les cartes de crédit sans 3D Secure',
  'TEXT_PAYPAL_MODULE_ACDC_EXTEND_CARDS_INFO' => 'Il n\'y a pas de prise en charge de la responsabilité en cas de paiement sans 3D Secure.',

  'TEXT_PAYPAL_MODULE_USE_TABS' => 'Accordéon / Tabs',
  'TEXT_PAYPAL_MODULE_USE_TABS_INFO' => 'Le modèle utilise-t-il un accordéon ou des onglets dans la boîte ?',

  'TEXT_PAYPAL_MODULE_SHIPPING_COST' => 'Frais d\'expédition provisoires',
  'TEXT_PAYPAL_MODULE_SHIPPING_COST_INFO' => 'Saisissez le montant des frais d\'expédition provisoires.',

  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT' => 'Boîte de financement par article',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PRODUCT_INFO' => 'Les détails du paiement échelonné doivent-ils être affichés avec l\'article ?',

  'TEXT_PAYPAL_MODULE_UPSTREAM_CART' => 'Panier à provisions Boîte de financement',
  'TEXT_PAYPAL_MODULE_UPSTREAM_CART_INFO' => 'Les détails du paiement échelonné doivent-ils apparaître dans le panier d\'achat ?',

  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT' => 'Boîte de financement au bureau du caissier',
  'TEXT_PAYPAL_MODULE_UPSTREAM_PAYMENT_INFO' => 'Les détails du paiement échelonné doivent-ils être affichés à la caisse ?',

  'TEXT_PAYPAL_BUTTON_LAYOUT' => 'Mise en page des boutons',
  'TEXT_PAYPAL_BUTTON_LAYOUT_INFO' => 'Sélectionnez le bouton Mise en page',

  'TEXT_PAYPAL_BUTTON_SHAPE' => 'Forme du bouton',
  'TEXT_PAYPAL_BUTTON_SHAPE_INFO' => 'Sélectionnez le bouton Forme',

  'TEXT_PAYPAL_BUTTON_PRIMARY_COLOR' => 'Bouton Couleur Paypal',
  'TEXT_PAYPAL_BUTTON_PRIMARY_COLOR_INFO' => 'Sélectionnez le bouton Couleur',

  'TEXT_PAYPAL_BUTTON_SECONDARY_COLOR' => 'Bouton Couleur Payer plus tard',
  'TEXT_PAYPAL_BUTTON_SECONDARY_COLOR_INFO' => 'Sélectionnez le bouton Couleur',

  'TEXT_PAYPAL_BUTTON_HEIGHT' => 'Hauteur du bouton',
  'TEXT_PAYPAL_BUTTON_HEIGHT_INFO' => 'Sélectionnez la hauteur du bouton en pixels (min : 22 max : 55)',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
