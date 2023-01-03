<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('IMPORT', 'Importar');
define('EXPORT', 'Exportation');
define('UPLOAD', 'Téléchargez le fichier sur le serveur');
define('SELECT', 'Sélectionnez le fichier à importer et effectuez l\'importation (répertoire /import).');
define('SAVE', 'Sauvegarder sur le serveur (répertoire /export)');
define('LOAD', 'Envoyer le fichier au navigateur');
define('CSV_TEXTSIGN_TITLE', 'Identificateur de texte');
define('CSV_TEXTSIGN_DESC', 'Par exemple, " | <span style="color:#c00;">Si un point-virgule est utilisé comme séparateur, l\'identificateur de texte doit être " !</span>');
define('CSV_SEPERATOR_TITLE', 'Séparateur');
define('CSV_SEPERATOR_DESC', 'Par exemple : ; | <span style="color:#c00;">Si le champ de saisie est laissé vide, la touche Tab (= Tabulateur) sera utilisée par défaut lors de l\'exportation/importation !</span>');
define('COMPRESS_EXPORT_TITLE', 'Kompresión');
define('COMPRESS_EXPORT_DESC', 'Compression des données exportées');
define('CSV_SETUP', 'Juges');
define('TEXT_IMPORT', '');
define('TEXT_PRODUCTS', 'Produits');
define('TEXT_EXPORT', 'Le fichier exporté est enregistré dans le répertoire /export.');
define('CSV_CATEGORY_DEFAULT_TITLE', 'Catégorie d\'importation');
define('CSV_CATEGORY_DEFAULT_DESC', 'Tous les articles qui <b>n\'ont pas</b> été affectés à une catégorie dans le fichier d\'importation CSV et qui n\'existent pas encore dans la boutique seront importés dans cette catégorie.<br/><b>Important :</b> Si vous ne voulez pas importer d\'articles sans catégorie dans le fichier d\'importation CSV, sélectionnez la catégorie "Top", car aucun article de cette catégorie ne sera importé.');
define('CSV_CAT_DEPTH_TITLE', 'Catégories de produits');
define('CSV_CAT_DEPTH_DESC', 'Jusqu\'où doit aller l\'arbre des catégories (par exemple, configuration standard 4 : catégorie principale et trois sous-catégories)<br />Cette configuration est importante pour importer correctement les catégories créées dans le CSV. Il en va de même pour l\'exportation.<br /><span style="color:#c00;">Plus de 4 peut entraîner des pertes de performance et peut ne pas être convivial pour le client.</span>');
