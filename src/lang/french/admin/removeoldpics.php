<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Supprimer les anciennes images d\'articles');
define(
    'LINK_INFO_TEXT',
    '<p>Cette fonction peut être utilisée pour supprimer les images d\'éléments superflus dans les répertoires :</p>
    - /images/product_images/info_images<br/>
    - /images/product_images/midi_images<br/>
    - /images/product_images/mini_images<br/>
    - /images/product_images/original_images<br/>
    - /images/product_images/popup_images<br/>
    - /images/product_images/thumbnail_images<br/>
   <p>seront supprimés du serveur web s\'il n\'y a plus de référence à ces images d\'articles dans la base de données.<br/>Si une image n\'est plus utilisée par aucun produit, elle peut être supprimée du serveur Web en toute sécurité.</p><br/>'
);
define('LINK_ORIGINAL', 'Supprimer les anciennes images originales');
define('LINK_POPUP', 'Supprimer les anciennes images pop-up');
define('LINK_INFO', 'Supprimer les anciennes photos informatives');
define('LINK_MIDI', 'Supprimer les anciennes images Midi');
define('LINK_THUMBNAIL', 'Supprimer les anciennes images miniatures');
define('LINK_MINI', 'Supprimer les anciennes photos du Mini');
define('LINK_MESSAGE', 'Les images superflues ont été supprimées de l\'article dans le répertoire "/images/product_images/%s_images".');
define('LINK_MESSAGE_NO_DELETE', 'Aucune image d\'articles superflus n\'a été trouvée dans le répertoire "/images/product_images/%s_images".');
