<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_COOKIE_CONSENT_STATUS_TITLE', 'Module d\'état');
define('MODULE_COOKIE_CONSENT_STATUS_DESC', 'Activer le module ?');
define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_TITLE', 'Définir un cookie lisible');
define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DESC', '');

define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Si vous utilisez le Google Tag Manager ou un autre logiciel, il ne pourra également insérer des scripts et définir des cookies que si le visiteur l\'autorise. Un cookie supplémentaire lisible peut être défini afin que le gestionnaire de balises puisse lire la demande du client.<br /><br />Configuration dans Google Tag Manager :<br />Allez dans le menu "Variables" et créez une nouvelle variable sous "Variables personnalisées". Par exemple, nommez-le "Cookieconsent".<br />Cliquez ensuite sur "Définir une variable" et sélectionnez le type "First-Party-Cookie". Entrez le nom du cookie "MODOilTrack".<br /><br />Vous pouvez ensuite modifier son "Trigger".<br />Définissez le type d\'activation "Appel de page" et sélectionnez l\'option "Certains appels de page".<br />Comme condition, spécifiez : " <em>Cookieconsent"</em> (nom de variable) contient <em>["1":true]</em>. Vous pouvez trouver la valeur contenue par cookie dans la configuration cookieconsent.<br /><br />Vous trouverez des instructions illustrées ici <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">: https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>.');

define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENTION :</font></strong> Veuillez continuer à effectuer les réglages sous "Paramètres" ->. <a href="' . ((defined('FILENAME_COOKIE_CONSENT') && function_exists('xtc_href_link')) ? xtc_href_link(FILENAME_COOKIE_CONSENT) : '#') . '"><strong>"Consentement aux cookies".</strong></a> Faites-le !');
define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Plus d\'informations :');
