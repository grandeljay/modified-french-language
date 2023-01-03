<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

require_once DIR_FS_CATALOG . 'api/it-recht-kanzlei/classes/class.api_it_recht_kanzlei.php';

$api_it_recht_kanzlei = new api_it_recht_kanzlei();

define('MODULE_API_IT_RECHT_KANZLEI_TEXT_TITLE', 'IT Law Firm T&amp;C Interface v' . $api_it_recht_kanzlei->modulversion);
define('MODULE_API_IT_RECHT_KANZLEI_TEXT_DESCRIPTION', 'IT-Recht Kanzlei - Auto Updater pour les textes juridiques automatiques<br/><br/><b>IMPORTANT :</b> Avant d'utiliser le module, l'affectation des pages de contenu doit être effectuée.<hr noshade>');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_TITLE', 'État');
define('MODULE_API_IT_RECHT_KANZLEI_STATUS_DESC', 'Statut du module');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_TITLE', 'Jeton d\'authentification');
define('MODULE_API_IT_RECHT_KANZLEI_TOKEN_DESC', 'Jeton d\'authentification que vous fournissez à IT-Recht Kanzlei.');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_TITLE', 'Version de l\'API');
define('MODULE_API_IT_RECHT_KANZLEI_VERSION_DESC', 'Ne le modifiez que si l\'IT-Recht Kanzlei le demande (valeur par défaut : 1.0).');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_TITLE', '<hr noshade>Texte juridique CGV');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_AGB_DESC', 'Veuillez indiquer sur quelle page ce texte juridique doit être inséré automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_TITLE', 'Texte juridique sur la protection des données');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_DSE_DESC', 'Veuillez indiquer sur quelle page ce texte juridique doit être inséré automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_TITLE', 'Abrogation du texte juridique');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_WRB_DESC', 'Veuillez indiquer sur quelle page ce texte juridique doit être inséré automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_TITLE', 'Impression de texte légal');
define('MODULE_API_IT_RECHT_KANZLEI_TYPE_IMP_DESC', 'Veuillez indiquer sur quelle page ce texte juridique doit être inséré automatiquement.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_TITLE', '<hr noshade>Sélection CGV PDF Texte légal');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_AGB_DESC', 'Indiquez si les CGV doivent être mises à disposition au format PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_TITLE', 'Sélection de la protection des données PDF Texte légal');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_DSE_DESC', 'Indiquez si le texte sur la protection des données doit être disponible au format PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_TITLE', 'Révocation de la sélection PDF Texte juridique');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_WRB_DESC', 'Indiquez si le texte de révocation doit être disponible au format PDF.');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_TITLE', '<hr noshade>Entrepôt PDF');
define('MODULE_API_IT_RECHT_KANZLEI_PDF_FILE_DESC', 'Indication de l\'emplacement des textes juridiques en PDF.');
