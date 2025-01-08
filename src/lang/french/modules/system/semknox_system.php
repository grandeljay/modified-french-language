<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

  define('MODULE_SEMKNOX_SYSTEM_TEXT_TITLE', 'Recherche de site Recherche de produits à 360');
  define('MODULE_SEMKNOX_SYSTEM_TEXT_DESCRIPTION', 'Une génération de recherche de produits révolutionnaire pour votre entreprise avec une préparation des données entièrement automatisée.');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_TITLE', 'Statut du module');
  define('MODULE_SEMKNOX_SYSTEM_STATUS_DESC', 'Activer la recherche sur le site 360 Recherche de produits');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_TITLE', 'CSS standard');
  define('MODULE_SEMKNOX_SYSTEM_DEFAULT_CSS_DESC', 'Le CSS standard de Site Search 360 doit-il être chargé ?');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_TITLE', 'Couleur d\'accent');
  define('MODULE_SEMKNOX_SYSTEM_COLOR_DESC', 'Spécifiez la couleur d\'accentuation des titres et des boutons (le paramètre s\'applique uniquement si le CSS standard est chargé).');

$languages = xtc_get_languages();
  foreach ($languages as $language) {
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] API Key');
    define('MODULE_SEMKNOX_SYSTEM_API_'.$language['id'].'_DESC', 'Clé API pour '.strtoupper($language['code']).'');

    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_TITLE', '['.strtoupper($language['code']).'] Project ID');
    define('MODULE_SEMKNOX_SYSTEM_PROJECT_'.$language['id'].'_DESC', 'Project ID pour '.strtoupper($language['code']).'');
  }
