<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'MODULE_PAYMENT_EASYCREDIT_TEXT_TITLE' => 'achat à tempérament por easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_INFO' => '',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_DESCRIPTION' => '',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_TITLE' => 'Zones autorisées',
  'MODULE_PAYMENT_EASYCREDIT_ALLOWED_DESC' => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_TITLE' => 'Activer le module',
  'MODULE_PAYMENT_EASYCREDIT_STATUS_DESC' => 'Voulez-vous accepter les paiements avec ratenkauf par easyCredit ?',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_TITLE' => 'Ordre d\'affichage',
  'MODULE_PAYMENT_EASYCREDIT_SORT_ORDER_DESC' => 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_TITLE' => 'Zone de paiement',
  'MODULE_PAYMENT_EASYCREDIT_ZONE_DESC' => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_TITLE' => 'Statut de l\'ordonnance temporaire',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_ID_DESC' => 'Indiquez le statut de la commande pour les commandes non confirmées.',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_TITLE' => 'Statut satisfaisant de la commande',
  'MODULE_PAYMENT_EASYCREDIT_ORDER_STATUS_SUCCESS_ID_DESC' => 'Indiquez le statut de la commande pour les commandes réussies.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_TITLE' => 'ID du magasin',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_ID_DESC' => 'Vous pouvez trouver l\'ID de votre boutique en ligne dans l\'interface marchand d\'easyCredit, sous Administration de la boutique.',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_TITLE' => 'Mot de passe API',
  'MODULE_PAYMENT_EASYCREDIT_SHOP_TOKEN_DESC' => 'Vous définissez vous-même votre mot de passe API dans l\'interface marchand d\'easyCredit, dans la sous-section Administration de la boutique.',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_TITLE' => 'Niveau d\'inscription',
  'MODULE_PAYMENT_EASYCREDIT_LOG_LEVEL_DESC' => 'Spécifiez le niveau du journal. Valeur par défaut : "error',

  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_HEADING' => 'Nota',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_MESSAGE' => 'Le paiement avec ratenkauf par easyCredit a été annulé.',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_ERROR_CHECKBOX' => 'Veuillez accepter les accords supplémentaires nécessaires pour le ratenkauf par easyCredit',
  'MODULE_PAYMENT_EASYCREDIT_TEXT_LEGAL' => 'Informations précontractuelles sur la location-vente disponibles ici',

  'TEXT_EASYCREDIT_TBAID' => 'Identificateur de processus',
  'TEXT_EASYCREDIT_RATING_PLAN' => 'Financement à partir de %s en %s versements avec location-vente par easyCredit',
  'TEXT_EASYCREDIT_RATING_PLAN_SHORT' => 'Financement à partir de %s par mois',
  'TEXT_EASYCREDIT_RATING_PLAN_CALC' => 'plus d\'informations sur la location-vente',
  'TEXT_EASYCREDIT_LEGAL' => 'Exemple représentatif selon § 6a PAngV',
  'TEXT_EASYCREDIT_NOMINAL_RATE' => 'Taux d\'emprunt p.a. fixe pour toute la durée du prêt',
  'TEXT_EASYCREDIT_EFFECTIVE_RATE' => 'taux de pourcentage annuel',
  'TEXT_EASYCREDIT_TOTAL_COST' => 'Importation totale',
  'TEXT_EASYCREDIT_TOTAL_NETTO' => 'Montant net du prêt',
  'TEXT_EASYCREDIT_TOTAL_INTEREST' => 'Montant des intérêts',
  'TEXT_EASYCREDIT_MONTHLY_PAYMENT' => 'Des versements mensuels s\'élevant à',
  'TEXT_EASYCREDIT_LAST_PAYMENT' => 'dernier versement',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
