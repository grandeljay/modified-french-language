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

define('MODULE_COOKIE_CONSENT_SET_READABLE_COOKIE_DETAIL', 'Si vous utilisez le Google Tag Manager ou un autre logiciel, il ne pourra également insérer des scripts et définir des cookies que si le visiteur l\'autorise. Un cookie supplémentaire lisible peut être défini afin que le gestionnaire de balises puisse lire la demande du client.<br /><br />Configuration dans Google Tag Manager :<br />Allez dans le menu &quot;Variables&quot; et créez une nouvelle variable sous &quot;Variables personnalisées&quot;. Par exemple, nommez-le &quot;Cookieconsent&quot;.<br />Cliquez ensuite sur &quot;Définir une variable&quot; et sélectionnez le type &quot;First-Party-Cookie&quot;. Entrez le nom du cookie &quot;MODOilTrack&quot;.<br /><br />Vous pouvez ensuite modifier son &quot;Trigger&quot;.<br />Définissez le type d\'activation &quot;Appel de page&quot; et sélectionnez l\'option &quot;Certains appels de page&quot;.<br />Comme condition, spécifiez : &quot; <em>Cookieconsent&quot;</em> (nom de variable) contient <em>[&quot;1&quot;:true]</em>. Vous pouvez trouver la valeur contenue par cookie dans la configuration cookieconsent.<br /><br />Vous trouverez des instructions illustrées ici <a href="https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/" target="_blank">: https://www.dair-media.net/blog/dsgvo-cookie-einwilligung-im-google-tag-manager-beruecksichtigen/</a>.');

define('MODULE_COOKIE_CONSENT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENTION :</font></strong> Veuillez continuer à effectuer les réglages sous "Paramètres" -&gt;. <a href="' . ((defined('FILENAME_COOKIE_CONSENT') && function_exists('xtc_href_link')) ? xtc_href_link(FILENAME_COOKIE_CONSENT) : '#') . '"><strong>"Consentement aux cookies".</strong></a> Faites-le !');
define('MODULE_COOKIE_CONSENT_MORE_INFO', 'Plus d\'informations :');
