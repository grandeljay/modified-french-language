<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
  'TEXT_PAYPAL_PROFILE_HEADING_TITLE' => 'Perfil de PayPal',

  'TEXT_PAYPAL_PROFILE_STATUS' => 'Standard :',
  'TEXT_PAYPAL_PROFILE_STATUS_INFO' => 'Ce profil doit-il être utilisé par défaut ?<br/><br/><b>Remarque :</b> un profil différent peut être attribué à chaque module en fonction de la langue.',

  'TEXT_PAYPAL_PROFILE_NAME' => 'Nom interne :',
  'TEXT_PAYPAL_PROFILE_NAME_INFO' => '',

  'TEXT_PAYPAL_PROFILE_BRAND' => 'Nom affiché :',
  'TEXT_PAYPAL_PROFILE_BRAND_INFO' => 'Ce nom sera affiché au client sur PayPal (127 caractères maximum).',

  'TEXT_PAYPAL_PROFILE_LOGO' => 'URL du logo :',
  'TEXT_PAYPAL_PROFILE_LOGO_INFO' => 'URL complet (max. 127 caractères)<br/><br/><b>Remarque :</b> Pour que le logo soit affiché, l\'URL doit être saisi avec https://.',

  'TEXT_PAYPAL_PROFILE_LOCALE' => 'Langue :',
  'TEXT_PAYPAL_PROFILE_LOCALE_INFO' => '',

  'TEXT_PAYPAL_PROFILE_PAGE' => 'Page :',
  'TEXT_PAYPAL_PROFILE_PAGE_INFO' => '<b>Valeur par défaut :</b> Connexion<br/><br/>Le paiement sans compte client est présélectionné pour la facturation.',

  'TEXT_PAYPAL_PROFILE_ADDRESS' => 'Adresse d\'écrasement :',
  'TEXT_PAYPAL_PROFILE_ADDRESS_INFO' => 'Faut-il prendre l\'adresse de livraison de PayPal ?',

  'TEXT_PAYPAL_PROFILE_INFO' => 'Il n\'y a pas de profil PayPal disponible.<br/><br/>Avec un profil PayPal, vous pouvez :<ul><li>changer le nom affiché sur PayPal</li><li>ajouter un logo à la page PayPal</li><li>définissez la page de renvoi sur PayPal</li></ul>',
  'TEXT_PAYPAL_PROFILE_INFO_DEPRECATED' => 'Les profils PayPal ne sont disponibles que pour les modules PayPal obsolètes.',
);

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
