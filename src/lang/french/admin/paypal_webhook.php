<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'TEXT_PAYPAL_WEBHOOK_HEADING_TITLE' => 'Webhooks de PayPal',

  'TEXT_PAYPAL_WEBHOOK_STATUS_NOT_DEFINED' => 'Non configuré',
  'TEXT_PAYPAL_WEBHOOK_INFO' => '<ul><li>Pas de webhooks disponibles</li><li>Avec les Webhooks, vous recevrez des mises à jour du statut des commandes et des paiements.</li><li>Pour utiliser les Webhooks, il est obligatoire que vous disposiez d\'un certificat SSL valide.</li></ul>',
  'TEXT_PAYPAL_WEBHOOK_CREDENTIAL_INFO' => 'Impossible de recevoir les webhooks disponibles de PayPal. Veuillez vérifier vos paramètres.',

  'TABLE_HEADING_URL' => 'URL',
  'TABLE_HEADING_WEBHOOK' => 'Gancho web',
  'TABLE_HEADING_STATUS' => 'État',
  'TABLE_HEADING_DESCRIPTION' => 'Description',

);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
