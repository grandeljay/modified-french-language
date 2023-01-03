<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define(
    'MODULE_STEP_IMAGE_PROCESS_TEXT_DESCRIPTION',
    'Toutes les images dans les répertoires<br /><br />
        /images/product_images/popup_images/<br />
        /images/product_images/info_images/<br />
        /images/product_images/midi_images/<br />
        /images/product_images/thumbnail_images/<br />
        /images/product_images/mini_images/<br />
        /images/categories/<br />
        /images/manufacturers/<br />
        /images/banner/<br />

    est recréé.<br /> <br />
    Pour ce faire, le script ne traite qu\'un nombre limité d\'images %s et se rappelle ensuite.<br /><br />'
);
define('MODULE_STEP_IMAGE_PROCESS_TEXT_TITLE', 'Traitement des images');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_DESC', 'Statut du module');
define('MODULE_STEP_IMAGE_PROCESS_STATUS_TITLE', 'État');
define('IMAGE_EXPORT', 'Cliquez sur Démarrer pour commencer le traitement par lots. Ce processus peut prendre un certain temps - ne l\'interrompez pas !');
define('IMAGE_EXPORT_TYPE', '<hr noshade><strong>Traitement par lots :</strong>');

define('IMAGE_STEP_INFO', 'Images créées : ');
define('IMAGE_STEP_INFO_READY', ' - ¡Listo !');
define('TEXT_MAX_IMAGES', '<b>Images par rechargement de page :</b>');
define('TEXT_PROCESS_TYPE', '<b>Traitement des images :</b>');
define('TEXT_SETTINGS', '<b>Ajustes :</b>');
define('TEXT_LOGGING', '<b>Enregistrez-vous :</b>');
define('TEXT_ONLY_MISSING_IMAGES', 'Créez uniquement les images manquantes');
define('MODULE_STEP_READY_STYLE_TEXT', '<div class="ready_info">%s</div>');
define('MODULE_STEP_READY_STYLE_BACK', MODULE_STEP_READY_STYLE_TEXT);
define('TEXT_LOWER_FILE_EXT', 'Convertir l\'extension de fichier en minuscule, par exemple : <b> JPG -&gt; jpg</b>');
define('IMAGE_COUNT_INFO', 'Nombre d\'images dans %s : %s pcs. ');

define('TEXT_PRODUCTS_MINI_IMAGES', 'Mini-boxes');
define('TEXT_PRODUCTS_THUMBNAIL_IMAGES', 'Images miniatures');
define('TEXT_PRODUCTS_MIDI_IMAGES', 'Images Midi');
define('TEXT_PRODUCTS_INFO_IMAGES', 'Photos informatives');
define('TEXT_PRODUCTS_POPUP_IMAGES', 'Popup Bilder');

define('TEXT_CATEGORIES_IMAGES', 'Catégorie Images');
define('TEXT_CATEGORIES_LIST_IMAGES', 'Liste des images de la catégorie');
define('TEXT_CATEGORIES_MOBILE_IMAGES', 'Catégorie Photos mobiles');

define('TEXT_BANNERS_IMAGES', 'Images de bannière');
define('TEXT_BANNERS_MOBILE_IMAGES', 'Images de bannières mobiles');

define('TEXT_MANUFACTURERS_IMAGES', 'Images du fabricant');

define('TEXT_PRODUCTS', 'Article');
define('TEXT_CATEGORIES', 'Catégories');
define('TEXT_MANUFACTURERS', 'Fabricant');
define('TEXT_BANNERS', 'Bannière');

define('TEXT_LOGFILE', 'Activez la journalisation, utile pour le dépannage. Le fichier journal est enregistré dans le dossier /log du répertoire d\'origine.');
