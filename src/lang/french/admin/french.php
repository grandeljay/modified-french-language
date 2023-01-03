<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

/**
 * Locale
 */
define('HTML_PARAMS', 'dir="ltr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml"');

define('DATE_LOCALE', 'fr_FR');
define('DATE_FORMAT_SHORT', 'd.m.Y');
define('DATE_FORMAT_LONG', 'l d F, Y');
define('DATE_FORMAT', DATE_FORMAT_SHORT);
define('PHP_DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' H:i:s');
define('LANGUAGE_CURRENCY', 'EUR');

setlocale(LC_ALL, DATE_LOCALE);

function xtc_date_raw($date, $reverse = false): string
{
    if ($reverse) {
        return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
    } else {
        return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
    }
}

/**
 * Extra files
 */
require_once DIR_FS_INC . 'auto_include.inc.php';

$extra_files = auto_include(DIR_FS_LANGUAGES . 'french/extra/admin/', 'php');

foreach ($extra_files as $extra_file) {
    require $extra_file;
}

/**
 * Translations
 */
define('TITLE', defined('PROJECT_VERSION') ? PROJECT_VERSION : 'indéfini');

define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Page d\'assistance');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogue en ligne');
define('HEADER_TITLE_ADMINISTRATION', 'Administration');

define('MALE', 'Sr.');
define('FEMALE', 'Mme.');
define('DIVERSE', 'Suckers');

define('DOB_FORMAT_STRING', 'tt.mm.jjjj');

define('BOX_HEADING_CONFIGURATION', 'Konfiguración');
define('BOX_HEADING_MODULES', 'Module');
define('BOX_HEADING_PARTNER_MODULES', 'Modules associés');
define('BOX_HEADING_ZONE', 'Terrains/taxes');
define('BOX_HEADING_CUSTOMERS', 'Clients');
define('BOX_HEADING_PRODUCTS', 'Catalogue');
define('BOX_HEADING_STATISTICS', 'Statistiques');
define('BOX_HEADING_TOOLS', 'Programmes de soutien');
define('BOX_HEADING_LOCALIZATION', 'Langues/Monnaies');
define('BOX_HEADING_TEMPLATES', 'Plantillas');
define('BOX_HEADING_LOCATION_AND_TAXES', 'Terrains/taxes');
define('BOX_HEADING_CATALOG', 'Catalogue');
define('BOX_MODULE_NEWSLETTER', 'Bulletin d\'information');

define('BOX_CONTENT', 'Système de gestion de contenu');
define('TEXT_ALLOWED', 'Permission');
define('TEXT_ACCESS', 'Zone d\'accès');
define('BOX_CONFIGURATION', 'Paramètres de base');
define('BOX_CONFIGURATION_1', 'Ma boutique');
define('BOX_CONFIGURATION_2', 'Valeurs minimales');
define('BOX_CONFIGURATION_3', 'Valeurs maximales');
define('BOX_CONFIGURATION_4', 'Options d\'image');
define('BOX_CONFIGURATION_5', 'Détails du client');
define('BOX_CONFIGURATION_6', 'Options du module');
define('BOX_CONFIGURATION_7', 'Options d\'expédition');
define('BOX_CONFIGURATION_8', 'Options de la liste des éléments');
define('BOX_CONFIGURATION_9', 'Options de gestion d\'entrepôt');
define('BOX_CONFIGURATION_10', 'Options d\'inscription');
define('BOX_CONFIGURATION_11', 'Options de cache');
define('BOX_CONFIGURATION_12', 'Options d\'e-mail');
define('BOX_CONFIGURATION_13', 'Descargar options');
define('BOX_CONFIGURATION_14', 'Compression');
define('BOX_CONFIGURATION_15', 'Sessions');
define('BOX_CONFIGURATION_16', 'Métabalises/moteurs de recherche');
define('BOX_CONFIGURATION_17', 'Modules supplémentaires');
define('BOX_CONFIGURATION_18', 'USt-IdNr.');
define('BOX_CONFIGURATION_19', 'Partenaire');
define('BOX_CONFIGURATION_22', 'Options de recherche');
define('BOX_CONFIGURATION_24', 'Google, Matomo et Facebook');
define('BOX_CONFIGURATION_25', 'Captcha');
define('BOX_CONFIGURATION_31', 'Skrill');
define('BOX_CONFIGURATION_40', 'Options de la fenêtre pop-up');
define('BOX_CONFIGURATION_1000', 'Options de la zone d\'administration');

define('BOX_MODULES', 'Modules de paiement/expédition/facturation');
define('BOX_PAYMENT', 'Méthodes de paiement');
define('BOX_SHIPPING', 'Méthode d\'expédition');
define('BOX_ORDER_TOTAL', 'Resumen');
define('BOX_CATEGORIES', 'Catégories/Articles');
define('BOX_PRODUCTS_ATTRIBUTES', 'Caractéristiques de l\'article');
define('BOX_MANUFACTURERS', 'Fabricant');
define('BOX_REVIEWS', 'Commentaires sur les produits');
define('BOX_CAMPAIGNS', 'Kampagnen');
define('BOX_XSELL_PRODUCTS', 'Marketing cruzado');
define('BOX_SPECIALS', 'Offres spéciales');
define('BOX_PRODUCTS_EXPECTED', 'Articles prévus');
define('BOX_CUSTOMERS', 'Clients');
define('BOX_ACCOUNTING', 'Gestion des droits d\'administrateur');
define('BOX_CUSTOMERS_STATUS', 'Groupes de clients');
define('BOX_ORDERS', 'Demandes');
define('BOX_COUNTRIES', 'Pays');
define('BOX_ZONES', 'États fédéraux');
define('BOX_GEO_ZONES', 'Zones fiscales');
define('BOX_TAX_CLASSES', 'Tramos impositivos');
define('BOX_TAX_RATES', 'Taux d\'imposition');
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_PRODUCTS_VIEWED', 'Articles visités');
define('BOX_STOCK_WARNING', 'Rapport du camp');
define('BOX_PRODUCTS_PURCHASED', 'Articles vendus');
define('BOX_STATS_CUSTOMERS', 'Statistiques sur les commandes des clients');
define('BOX_BACKUP', 'Gestionnaire de base de données');
define('BOX_BANNER_MANAGER', 'Gestionnaire de bannières');
define('BOX_CACHE', 'Control de caché');
define('BOX_DEFINE_LANGUAGE', 'Définir les langues');
define('BOX_FILE_MANAGER', 'Gestionnaire de fichiers');
define('BOX_MAIL', 'Envoyer un e-mail');
define('BOX_NEWSLETTERS', 'Responsable du bulletin d\'information');
define('BOX_SERVER_INFO', 'Informations sur le serveur');
define('BOX_WHOS_ONLINE', 'Qui est en ligne');
define('BOX_TPL_BOXES', 'Séquence des boîtes');
define('BOX_CURRENCIES', 'Divisas');
define('BOX_LANGUAGES', 'Langues');
define('BOX_ORDERS_STATUS', 'Statut de la commande');
define('BOX_ATTRIBUTES_MANAGER', 'Gestion des attributs');
define('BOX_SHIPPING_STATUS', 'État de la livraison');
define('BOX_SALES_REPORT', 'Statistiques sur les rotations');
define('BOX_MODULE_EXPORT', 'Module d\'exportation');
define('BOX_MODULE_SYSTEM', 'Modules du système');
define('BOX_HEADING_GV_ADMIN', 'Bons d\'achat/Coupons');
define('BOX_GV_ADMIN_QUEUE', 'File d\'attente des bons d\'achat');
define('BOX_GV_ADMIN_MAIL', 'Adresse e-mail du bon d\'échange');
define('BOX_GV_ADMIN_SENT', 'Bons d\'achat envoyés');
define('BOX_COUPON_ADMIN', 'Administration des bons d\'achat');
define('BOX_TOOLS_BLACKLIST', 'Liste noire des cartes de crédit');
define('BOX_IMPORT', 'Importation et exportation');
define('BOX_PRODUCTS_VPE', 'Unité d\'emballage');
define('BOX_CAMPAIGNS_REPORT', 'Rapport de campagne');
define('BOX_ORDERS_XSELL_GROUP', 'Groupes de marketing croisé');
define('BOX_REMOVEOLDPICS', 'Supprimer les anciennes images');
define('BOX_JANOLAW', 'janolaw Hébergement AGB');
define('BOX_HAENDLERBUND', 'Servicio H&auml;ndlerbund Conditions générales');
define('BOX_SHOP', 'Boutique');
define('BOX_LOGOUT', 'Déconnexion');
define('BOX_CREDITS', 'Créditos');
define('BOX_UPDATE', 'Vérification de la version');
define('BOX_GV_CUSTOMERS', 'Crédit client');
define('BOX_IT_RECHT_KANZLEI', 'Cabinet d\'avocats spécialisé en informatique');
define('BOX_PROTECTEDSHOPS', 'Magasins protégés - Service AGB');
define('BOX_CLEVERREACH', 'CleverReach');
define('BOX_SUPERMAILER', 'SuperMailer');
define('BOX_OFFLINE', 'Boutique hors ligne');
define('BOX_LOGS', 'Fichiers journaux');
define('BOX_SHIPCLOUD', 'shipcloud');
define('BOX_SHIPCLOUD_PICKUP', 'shipcloud - Collection');
define('BOX_PRODUCTS_TAGS', 'Propriétés de l\'article');
define('BOX_TRUSTEDSHOPS', 'Magasins de confiance');
define('BOX_NEWSLETTER_RECIPIENTS', 'Destinataires du bulletin d\'information');
define('BOX_DSGVO_EXPORT', 'Exportation GDPR');
define('BOX_SUPPORT', 'Soutien');
define('BOX_CACHING', 'Mise en cache');
define('BOX_COOKIE_CONSENT', 'Consentement aux cookies');
define('BOX_SEMKNOX', 'Recherche de site Recherche de produits à 360');
define('BOX_PAGES_CONTENT', 'Pages de contenu');
define('BOX_PRODUCTS_CONTENT', 'Annexes de l\'article');
define('BOX_CONTENT_CONTENT', 'Contenu Anh&auml;nge');
define('BOX_EMAIL_CONTENT', 'Pièces jointes aux e-mails');
define('BOX_DHL', 'Expédition DHL et création d\'étiquettes');

define('TXT_GROUPS', '<b>Groupes</b>:');
define('TXT_SYSTEM', 'Système');
define('TXT_CUSTOMERS', 'Clients/Commandes');
define('TXT_PRODUCTS', 'Articles/Catégories');
define('TXT_STATISTICS', 'Outils statistiques');
define('TXT_TOOLS', 'Programmes supplémentaires');
define('TEXT_ACCOUNTING', 'Paramètres d\'accès pour :');

define('JS_ERROR', 'Des erreurs se sont produites pendant la saisie ! Veuillez corriger ce qui suit.');

define('JS_OPTIONS_VALUE_PRICE', '* Vous devez attribuer un prix à cette valeur.');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', 'Vous devez spécifier un signe pour le prix (+/-)*.');

define('JS_PRODUCTS_NAME', '* Le nouvel article doit avoir un nom.');
define('JS_PRODUCTS_DESCRIPTION', '* Le nouvel élément doit avoir une description.');
define('JS_PRODUCTS_PRICE', '* Le nouvel article doit avoir un prix.');
define('JS_PRODUCTS_WEIGHT', '* Le nouvel article doit avoir une indication de poids.');
define('JS_PRODUCTS_QUANTITY', '* Vous devez allouer une quantité disponible au nouvel article.');
define('JS_PRODUCTS_MODEL', '* Vous devez attribuer un numéro d\'article au nouvel article.');
define('JS_PRODUCTS_IMAGE', '* Vous devez attribuer une image à l\'article.');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Un nouveau prix doit être fixé pour cet article.');

define('JS_ORDER_DOES_NOT_EXIST', 'Le numéro de commande %s n\'existe pas !');

define('CATEGORY_PERSONAL', 'Données personnelles');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Veuillez contacter');
define('CATEGORY_COMPANY', 'Entreprise');
define('CATEGORY_OPTIONS', 'Plus d\'options');

define('ENTRY_GENDER', 'Anrede :');
define('ENTRY_GENDER_ERROR', ' <span class="errorText">apport nécessaire</span>');
define('ENTRY_FIRST_NAME', 'Nombre de pila:');
define('ENTRY_FIRST_NAME_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_FIRST_NAME_MIN_LENGTH') ? ENTRY_FIRST_NAME_MIN_LENGTH : 0) . ' lettres</span>');
define('ENTRY_LAST_NAME', 'Nom de famille :');
define('ENTRY_LAST_NAME_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_LAST_NAME_MIN_LENGTH') ? ENTRY_LAST_NAME_MIN_LENGTH : 0) . ' lettres</span>');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance :');
define('ENTRY_DATE_OF_BIRTH_ERROR', ' <span class="errorText">(par exemple, 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresse électronique :');
define('ENTRY_EMAIL_ADDRESS_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_EMAIL_ADDRESS_MIN_LENGTH') ? ENTRY_EMAIL_ADDRESS_MIN_LENGTH : 0) . ' lettres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', ' <span class="errorText">Adresse e-mail invalide ! (Actuellement, les trémas ne sont pas autorisés dans les adresses e-mail)</span>.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', ' <span class="errorText">Cette adresse e-mail existe déjà !</span>');
define('ENTRY_COMPANY', 'Nom de l\'entreprise :');
define('ENTRY_STREET_ADDRESS', 'Stra&szlig;e :');
define('ENTRY_STREET_ADDRESS_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_STREET_ADDRESS_MIN_LENGTH') ? ENTRY_STREET_ADDRESS_MIN_LENGTH : 0) . ' lettres</span>');
define('ENTRY_SUBURB', 'Autres adresses :');
define('ENTRY_POST_CODE', 'Code postal :');
define('ENTRY_POST_CODE_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_POSTCODE_MIN_LENGTH') ? ENTRY_POSTCODE_MIN_LENGTH : 0) . ' Nombres</span>');
define('ENTRY_CITY', 'Ville :');
define('ENTRY_CITY_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_CITY_MIN_LENGTH') ? ENTRY_CITY_MIN_LENGTH : 0) . ' lettres</span>');
define('ENTRY_STATE', 'Statut :');
define('ENTRY_STATE_ERROR', '<span class="errorText">apport nécessaire</font></small>');
define('ENTRY_COUNTRY', 'Pays :');
define('ENTRY_COUNTRY_ERROR', 'Sélectionnez votre pays dans la liste.');
define('ENTRY_TELEPHONE_NUMBER', 'Numéro de téléphone :');
define('ENTRY_TELEPHONE_NUMBER_ERROR', ' <span class="errorText">au moins "' . (defined('ENTRY_TELEPHONE_MIN_LENGTH') ? ENTRY_TELEPHONE_MIN_LENGTH : 0) . ' Nombres</span>');
define('ENTRY_FAX_NUMBER', 'Numéro de fax :');
define('ENTRY_NEWSLETTER', 'Bulletin d\'information :');
define('ENTRY_CUSTOMERS_STATUS', 'Groupe de clients :');
define('ENTRY_NEWSLETTER_YES', 'souscrit');
define('ENTRY_NEWSLETTER_NO', 'Non inscrit');
define('ENTRY_MAIL_ERROR', 'Veuillez <span class="errorText">faire une sélection</span>');
define('ENTRY_PASSWORD', 'Mot de passe (créé automatiquement)');
define('ENTRY_PASSWORD_ERROR', ' <span class="errorText">Votre mot de passe doit être composé d\'au moins ' . (defined('ENTRY_PASSWORD_MIN_LENGTH') ? ENTRY_PASSWORD_MIN_LENGTH : 0) . 'des personnages.</span>');
define('ENTRY_MAIL_COMMENTS', 'Texte supplémentaire dans l\'e-mail :');

define('ENTRY_MAIL', 'Envoyer des e-mails protégés par un mot de passe aux clients ?');
define('YES', 'qui');
define('NO', 'pas de');
define('SAVE_ENTRY', 'Enregistrer les changements ?');
define('TEXT_CHOOSE_INFO_TEMPLATE', 'Modèle de détail d\'article');
define('TEXT_CHOOSE_OPTIONS_TEMPLATE', 'Modèle d\'options d\'articles');
define('TEXT_SELECT', 'Veuillez sélectionner -- Veuillez sélectionner -- Veuillez sélectionner -- Veuillez sélectionner -- Veuillez sélectionner -- Veuillez sélectionner');
define('PULL_DOWN_DEFAULT', 'Veuillez sélectionner');

define('ICON_ARROW_RIGHT', 'marques');
define('ICON_BIG_WARNING', 'Attention !');
define('ICON_CROSS', 'Incorrect');
define('ICON_CURRENT_FOLDER', 'Dossier actuel');
define('ICON_DELETE', 'Forets');
define('ICON_EDIT', 'Edite');
define('ICON_ERROR', 'Erreur');
define('ICON_FILE', 'Archives');
define('ICON_FILE_DOWNLOAD', 'Télécharger');
define('ICON_FOLDER', 'Dossier');
define('ICON_LOCKED', 'Bloqué');
define('ICON_POPUP', 'Vue de face de la bannière');
define('ICON_PREVIOUS_LEVEL', 'Niveau précédent');
define('ICON_PREVIEW', 'Vue antérieure');
define('ICON_STATISTICS', 'Statistiques');
define('ICON_SUCCESS', 'Succès');
define('ICON_TICK', 'Verdadero');
define('ICON_UNLOCKED', 'Déverrouillé');
define('ICON_WARNING', 'Avertissement');

define('TEXT_RESULT_PAGE', 'Page %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Affiché de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> bannières)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> pays)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> clients)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> pièces).');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> langues)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> fabricants)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> bulletins)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS_RECIPIENTS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> destinataires de la newsletter).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> commandes).');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> états de commande)');
define('TEXT_DISPLAY_NUMBER_OF_XSELL_GROUP', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> groupes de marketing croisé)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_VPE', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> unités de conditionnement).');
define('TEXT_DISPLAY_NUMBER_OF_SHIPPING_STATUS', 'Affiché de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> statuts de livraison).');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> éléments)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> éléments attendus)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> critiques)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Présenté de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> offres spéciales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> classes d\'impôt)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Affiché de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> zones fiscales).');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Affiché de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> taux d\'imposition).');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> états fédéraux)');
define('TEXT_DISPLAY_NUMBER_OF_WHOS_ONLINE', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> clients qui sont en ligne)');

define('PREVNEXT_BUTTON_PREV', '"');
define('PREVNEXT_BUTTON_NEXT', '"');

define('TEXT_DEFAULT', 'Standard');
define('TEXT_SET_DEFAULT', 'Définir comme standard');
define('TEXT_FIELD_REQUIRED', ' <span class="fieldRequired">* Requis</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erreur : Aucune devise par défaut n\'a été définie. Veuillez définir une devise par défaut sous Administration -&gt; Langues/devises -&gt; Devises.');

define('TEXT_CACHE_CATEGORIES', 'Boîte de catégories');
define('TEXT_CACHE_MANUFACTURERS', 'Boîte du fabricant');
define('TEXT_CACHE_ALSO_PURCHASED', 'Module également acheté');

define('TEXT_NONE', '--non--');
define('TEXT_AUTO_PROPORTIONAL', '--self-proportionnel--');
define('TEXT_AUTO_MAX', '--auto max--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erreur : L\'entrepôt n\'existe pas.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erreur : L\'emplacement de stockage n\'est pas accessible en écriture.');
define('ERROR_FILE_NOT_SAVED', 'Erreur : Le fichier n\'a pas été enregistré.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Erreur : Le type de fichier n\'est pas autorisé.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succès : Le fichier téléchargé a été enregistré avec succès.');
define('WARNING_NO_FILE_UPLOADED', 'Avertissement : Aucun fichier n\'a été téléchargé.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Erreur : Le fichier n\'a pas pu être supprimé.');

define('DELETE_ENTRY', '¿Entrée dégagée ?');
define('TEXT_PAYMENT_ERROR', '<b>ATTENTION :</b> Activez un <a href="%s">module de paiement</a>!');
define('TEXT_SHIPPING_ERROR', '<b>AVERTISSEMENT :</b> Activez un <a href="%s">module d\'expédition</a>!');
define('TEXT_PAYPAL_CONFIG', '<b>AVERTISSEMENT :</b> Veuillez configurer le module de paiement PayPal en "mode actif" : <a href="%s"><strong>Partenaire -&gt; PayPal</strong></a>');
define('TEXT_NETTO', 'Petit-fils : ');
define('TEXT_DUPLICATE_CONFIG_ERROR', '<b>AVERTISSEMENT :</b> Duplication de la clé de configuration : ');

define('ENTRY_CID', 'Numéro de client :');
define('IP', 'Pedir IP :');
define('CUSTOMERS_MEMO', 'Mémos :');
define('DISPLAY_MEMOS', 'Visualisation/écriture');
define('TITLE_MEMO', 'Clientes MEMO');
define('ENTRY_LANGUAGE', 'Langue :');
define('CATEGORIE_NOT_FOUND', 'Catégorie non disponible');

define('IMAGE_RELEASE', 'Canjear vale');
define('IMAGE_ICON_STATUS_GREEN_STOCK', 'en stock');
define('IMAGE_ICON_STATUS_GREEN', 'actif');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'actif');
define('IMAGE_ICON_STATUS_RED', 'inactif');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'désactiver');
define('IMAGE_ICON_INFO', 'sélectionnez');

define('_JANUARY', 'Janvier');
define('_FEBRUARY', 'Février');
define('_MARCH', 'Mars');
define('_APRIL', 'Avril');
define('_MAY', 'Mai');
define('_JUNE', 'Junio');
define('_JULY', 'Juillet');
define('_AUGUST', 'Août');
define('_SEPTEMBER', 'Septembre');
define('_OCTOBER', 'Octobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'Décembre');

define('TEXT_NEWSLETTER_REMOVE', 'Pour vous désabonner de notre newsletter, cliquez ici :');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> bons)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Montré <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> coupons)');
define('TEXT_VALID_PRODUCTS_LIST', 'Listes d\'articles');
define('TEXT_VALID_PRODUCTS_ID', 'ID de l\'article');
define('TEXT_VALID_PRODUCTS_NAME', 'Nom de l\'article');
define('TEXT_VALID_PRODUCTS_MODEL', 'Article no.');

define('TEXT_VALID_CATEGORIES_LIST', 'Liste des catégories');
define('TEXT_VALID_CATEGORIES_ID', 'Catégorie ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom de la catégorie');

define('TXT_ALL', 'Tous');

define('HEADING_TITLE_VAT', 'USt-IdNr.');
define('ENTRY_VAT_ID', 'USt-IdNr :');
define('ENTRY_CUSTOMERS_VAT_ID', 'USt-IdNr :');
define('TEXT_VAT_FALSE', '<span class="messageStackError">Vérifié/USt-IdNr. est invalide !</span>');
define('TEXT_VAT_TRUE', '<span class="messageStackSuccess">Audité/USt-IdNr. est valide</span>');
define('TEXT_VAT_UNKNOWN_COUNTRY', '<span class="messageStackError">Non testé/pays inconnu</span>');
define('TEXT_VAT_INVALID_INPUT', '<span class="messageStackError">Non vérifié/Code pays transféré non valide ou numéro d\'identification TVA vide.</span>');
define('TEXT_VAT_SERVICE_UNAVAILABLE', '<span class="messageStackError">Non vérifié/service SOAP non joignable, réessayez plus tard.</span>');
define('TEXT_VAT_MS_UNAVAILABLE', '<span class="messageStackError">Non vérifié/Service de l\'État membre non disponible, réessayez plus tard ou avec un autre État membre.</span>');
define('TEXT_VAT_TIMEOUT', '<span class="messageStackError">Non coché/Incapable de contacter le service de l\'État membre (timeout), veuillez réessayer plus tard ou essayer un autre État membre.</span>');
define('TEXT_VAT_SERVER_BUSY', '<span class="messageStackError">Non coché / Le service ne peut pas traiter votre demande. Veuillez réessayer plus tard.</span>');
define('TEXT_VAT_NO_PHP5_SOAP_SUPPORT', '<span class="messageStackError">Le support SOAP de PHP5 n\'est pas testé/le support n\'est pas disponible !</span>');
define('TEXT_VAT_CONNECTION_NOT_POSSIBLE', '<span class="messageStackError">ERROR : Aucune connexion au service web possible (SOAP ERROR) !</span>');

define('ERROR_GIF_MERGE', 'Support GDlib Gif manquant, pas de filigrane (fusion) possible.');
define('ERROR_GIF_UPLOAD', 'Le support GDlib Gif est absent, les images GIF ne peuvent pas être téléchargées.');

define('BOX_GOOGLE_SITEMAP', 'Plan du site Google');
define('BOX_PAYPAL', 'PayPal');

define('_PAYMENT_MONEYBOOKERS_EMAILID_TITLE', 'Adresse e-mail de Skrill');
define('_PAYMENT_MONEYBOOKERS_EMAILID_DESC', 'L\'adresse e-mail avec laquelle vous êtes enregistré sur Skrill.com.<br />Si vous n\'avez pas encore de compte, <b>inscrivez-vous</b> dès maintenant à l\'adresse suivante <a href="https://account.skrill.com/signup/page1" target="_blank"><b>Skrill</b></a> <b>gratuitement</b>.');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_TITLE', 'ID du marchand Skrill');
define('_PAYMENT_MONEYBOOKERS_MERCHANTID_DESC', 'Votre identifiant de commerçant Skrill.com');
define('_PAYMENT_MONEYBOOKERS_PWD_TITLE', 'Le mot secret de Skrill');
define('_PAYMENT_MONEYBOOKERS_PWD_DESC', '<span>En saisissant le mot secret, la connexion est cryptée pendant le processus de paiement. Cela garantit le plus haut niveau de sécurité. Saisissez votre mot secret Skrill (pas votre mot de passe !). Le mot secret ne peut être composé que de lettres minuscules et de chiffres. Vous pouvez</span> définir votre<span>mot secret <b><span class="col-red">après l\'activation dans</span></b></span> votre compte utilisateur Skrill (paramètres du commerçant).<br /><br /><span class="col-red">Comment activer votre compte Skrill.com pour le traitement des paiements !</span><br /><br />Envoyez un e-mail avec :<br/>- le domaine de votre boutique<br/>- votre adresse e-mail Skrill<br /><br />A : <a href="mailto:ecommerce@skrill.com?subject=modified eCommerce Shopsoftware: Aktivierung fuer Skrill Quick Checkout">ecommerce@skrill.com</a>');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_TITLE', 'Statut de la commande - Processus de paiement');
define('_PAYMENT_MONEYBOOKERS_TMP_STATUS_ID_DESC', ' Dès que le client clique sur "Envoyer la commande" dans la boutique, une "commande temporaire" est créée. Ceci présente l\'avantage qu\'une commande est enregistrée pour les clients qui annulent le processus de paiement dans Moneybookes.');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_TITLE', 'Statut de la commande - Paiement OK');
define('_PAYMENT_MONEYBOOKERS_PROCESSED_STATUS_ID_DESC', 'Apparaît lorsque le paiement a été confirmé par Skrill.');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_TITLE', 'Statut de la commande - paiement en attente');
define('_PAYMENT_MONEYBOOKERS_PENDING_STATUS_ID_DESC', 'Si le client n\'a pas de fonds sur son compte, le paiement est mis en attente jusqu\'à ce que le compte Skrill soit débloqué.');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_TITLE', 'Statut de la commande - Paiement annulé');
define('_PAYMENT_MONEYBOOKERS_CANCELED_STATUS_ID_DESC', 'Il s\'affiche si, par exemple, une carte de crédit a été refusée.');
define('MB_ERROR_NO_MERCHANT', 'Il n\'y a pas de compte Skrill.com avec cette adresse e-mail.');
define('MB_MERCHANT_OK', 'Compte Skrill.com réussi, Merchant ID %s reçu et stocké par Skrill.com.');
define('MB_INFO', '<img src="../images/icons/moneybookers/MBbanner.jpg" /><br /><br />Vous pouvez désormais accepter directement les cartes de crédit, les débits directs, Sofort, Giropay et toutes les autres options de paiement locales majeures par une simple activation dans la boutique. Avec Skrill comme solution tout-en-un, vous n\'avez pas besoin de conclure des contrats individuels pour chaque méthode de paiement. Vous n\'en avez besoin que d\'un seul <a href="https://account.skrill.com/signup/page1" target="_blank"><b>Compte Skrill gratuit</b></a>d\'accepter toutes les principales options de paiement dans votre boutique. Les modes de paiement supplémentaires sont gratuits, le module ne comprend pas de <b>frais fixes mensuels ni de frais d\'installation</b>.<br /><br /><b>Vos avantages :</b><br />-L\'acceptation des principales options de paiement augmente votre chiffre d\'affaires<br />-Un seul fournisseur réduit vos efforts et vos coûts<br />-Votre client paie directement et sans procédure d\'enregistrement<br />-Activation et intégration en un clic<br />-Très attractif <a href="https://www.skrill.com/de/fees/" target="_blank"><b>Conditions</b></a> <br /> Confirmation immédiate du paiement et vérification des données du client<br />-Traitement des paiements également à l\'étranger et sans frais supplémentaires<br />-6 millions de clients dans le monde font confiance à Skrill');

define('BOX_CUSTOMERS_GROUP', 'Autorisations KG');

define('TEXT_ADMIN_START', 'Début');
define('BOX_HEADING_CONFIGURATION2', 'Configuration avancée');

define('ASB_QUICK_SEARCH_CUSTOMER', 'Recherche de clients...');
define('ASB_QUICK_SEARCH_ORDER', 'Ordre de recherche...');
define('ASB_QUICK_SEARCH_ORDER_ID', 'Recherchez le numéro de commande...');
define('ASB_QUICK_SEARCH_ARTICLE', 'Rechercher un article/catégorie...');
define('ASB_QUICK_SEARCH_EMAIL', 'Trouver l\'adresse e-mail...');
define('ASB_QUICK_SEARCH_ARTICLE_ID', 'Rechercher l\'article/catégorie ID...');
define('ASB_QUICK_SEARCH_ORDER_OR_INVOICE', 'Numéro du mandat de recherche /Rg.No....');

define('BUTTON_SET', 'Activez tous');
define('BUTTON_UNSET', 'Désactiver tous');

define('TEXT_ROWS', 'Ligne');
define('TABLE_HEADING_RESET', 'Réinitialisation des statistiques');

define('BUTTON_CLOSE_WINDOW', 'Fenêtre de fermeture');

define('ENTRY_INVOICE_NUMBER', 'Numéro de facture :');
define('ENTRY_INVOICE_DATE', 'Date de la facture :');

define('ENTRY_VAT_ERROR', ' <span class="errorText">Numéro de TVA en cours de validité</span>');

define('CONFIG_INT_VALUE_ERROR', '"%s" ERROR : Entrez uniquement des chiffres ! L\'entrée %s a été ignorée !');
define('CONFIG_MAX_VALUE_WARNING', '"%s" AVERTISSEMENT : L\'entrée %s a été ignorée ! [Maximum : %s]');
define('CONFIG_MIN_VALUE_WARNING', '"%s" AVERTISSEMENT : L\'entrée %s a été ignorée ! [Minimum : %s]');

define('WHOS_ONLINE_TIME_LAST_CLICK_INFO', 'Période d\'affichage en secondes : %s. Après ce délai, les entrées sont supprimées.');

define('TEXT_GLOBAL_PRODUCTS_MODEL', 'Article no.');

define('TEXT_INFO_MODULE_RESTORE', 'Voulez-vous restaurer les paramètres enregistrés ?<br /><br /><b>AVERTISSEMENT</b>: Tous les paramètres actuels seront écrasés !');
define('TEXT_INFO_MODULE_REMOVE', 'Voulez-vous désinstaller le module ?<br /><br /><b>ATTENTION</b>: Tous les paramètres du module seront également supprimés !');
define('TEXT_INFO_MODULE_BACKUP', 'Voulez-vous enregistrer la configuration du module ?');
define('MODULE_BACKUP_CONFIRM', 'Les paramètres du module ont été enregistrés avec succès !');
define('MODULE_RESTORE_CONFIRM', 'Les paramètres du module ont été restaurés avec succès !');
define('MODULE_UPDATE_CONFIRM', 'La configuration du module a été mise à jour avec succès !');

define('BOX_HEADING_MAGNALISTER', 'magnalister');
define('BOX_MAGNALISTER', 'magnalister Admin');

define('CHARS_LEFT', 'Caractères restants');
define('CHARS_MAX', 'de max.');

define('DISPLAY_PER_PAGE', 'Affichage par page : ');

define('SPECIALS_DATE_START_TT', 'Les offres commencent à 00:00:00');
define('SPECIALS_DATE_END_TT', 'Les offres se terminent à minuit (23:59:59)');

define('BOX_PARCEL_CARRIERS', 'Service de livraison de colis');
define('TEXT_DISPLAY_NUMBER_OF_CARRIERS', 'Affichage de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> prestataires de services de colis)');

define('RSS_FEED_TITLE', 'Aktuelle Information von modified eCommerce Shopsoftware Blog');
define('RSS_FEED_DESCRIPTION', 'Aktuelle Information von modified eCommerce Shopsoftware Support Forum');
define('RSS_FEED_LINK', 'http://www.modified-shop.org/blog');
define('RSS_FEED_ALTERNATIVE', 'Malheureusement, les dernières nouvelles ne peuvent pas être affichées dans le flux RSS. Veuillez consulter notre blog à l\'adresse <a href="' . RSS_FEED_LINK . '">www.modified-shop.org/blog</a> pour obtenir des informations importantes sur ces sujets pour les gérants de boutique : <ul><li>Mises à jour et corrections importantes</li><li>Améliorations fonctionnelles</li><li>Jurisprudence</li><li>Actualités</li><li>Rumeurs et potins</li></ul>');
define('RSS_FEED_NOT_REACHABLE', 'Le flux d\'actualités n\'a pas pu être mis à jour depuis un certain temps.<br>Ne manquez pas les nouvelles importantes, les offres, etc. et rendez-vous sur <a target="_blank" href="https://www.modified-shop.org/blog">www.modified-shop.org/blog</a><br></br>');
define('TEXT_DISPLAY_NUMBER_OF_NEWSFEED', 'Affichage de <b>%d</b> à <b>%d</b> (sur un total <b> de %d</b> actualités)');

define('CFG_TXT_YES', 'Ja');
define('CFG_TXT_NO', 'Non');
define('CFG_TXT_OR', 'ou');
define('CFG_TXT_AND', 'und');
define('CFG_TXT_ASC', 'par ordre croissant');
define('CFG_TXT_DESC', 'décroissant');
define('CFG_TXT_PRODUCTS_NAME', 'Nom de l\'article');
define('CFG_TXT_PRODUCTS_MODEL', 'Numéro d\'article');
define('CFG_TXT_DATE_EXPECTED', 'disponible à partir de');
define('CFG_TXT_ACCOUNT', 'Compte client');
define('CFG_TXT_GUEST', 'Compte d\'invité');
define('CFG_TXT_BOTH', 'les deux');
define('CFG_TXT_NONE', 'désactivé');
define('CFG_TXT_ADMIN', 'Admin');
define('CFG_TXT_ALL', 'alle');
define('CFG_TXT_WEIGHT', 'Poids');
define('CFG_TXT_PRICE', 'Prix');
define('CFG_TXT_ITEM', 'Pièce');
define('CFG_TXT_WHOS_ONLINE', 'En ligne');
define('CFG_TXT_ORDERS', 'Commandes');
define('CFG_TXT_CUSTOMERS', 'Clients');
define('CFG_TXT_SALES_REPORT', 'Statistiques');
define('CFG_TXT_BLOG', 'Blog');
define('CFG_TXT_P.PRODUCTS_PRICE', 'Prix');
define('CFG_TXT_PD.PRODUCTS_NAME', 'Nom de l\'article');
define('CFG_TXT_P.PRODUCTS_DATE_ADDED', 'Date de réglage');
define('CFG_TXT_P.PRODUCTS_MODEL', 'Numéro d\'article');
define('CFG_TXT_P.PRODUCTS_ORDERED', 'Articles commandés');
define('CFG_TXT_P.PRODUCTS_SORT', 'Ordre de tri');
define('CFG_TXT_P.PRODUCTS_WEIGHT', 'Poids');
define('CFG_TXT_P.PRODUCTS_QUANTITY', 'En stock');
define('CFG_TXT_S.SPECIALS_DATE_ADDED', 'Date de réglage');

define('CSRF_TOKEN_MANIPULATION', 'Manipulation CSRFToken (pour des raisons de sécurité, il n\'est plus autorisé de travailler dans différents onglets dans la zone d\'administration).');
define('CSRF_TOKEN_NOT_DEFINED', 'CSRFToken non défini (pour des raisons de sécurité, il n\'est plus autorisé de travailler dans différents onglets dans la zone d\'administration).');

define('TEXT_ACCOUNTING_INFO', 'L\'administrateur principal [1] ne peut pas être privé de ses droits d\'accès !');

define('JAVASCRIPT_DISABLED_INFO', 'JavaScript est désactivé dans votre navigateur. Activez JavaScript pour utiliser toutes les fonctionnalités de ce site et voir tout son contenu.');

define('BOX_MODULE_TYPE', 'Modules d\'extension de classe');

define('MULTIPLE_INSTALLATION', '<span style="color:red">[Installation multiple : %s]</span>');

define('FILEUPLOAD_INPUT_TXT', 'Aucun fichier');
define('FILEUPLOAD_BTN_TXT', 'Parcourir');

define('CHECK_LABEL_PRICE', 'Consulter le prix');

define('TEXT_PAYPAL_TAB_CONFIG', 'Konfiguration de PayPal');
define('TEXT_PAYPAL_TAB_PROFILE', 'Profil PayPal');
define('TEXT_PAYPAL_TAB_WEBHOOK', 'Webhook PayPal');
define('TEXT_PAYPAL_TAB_MODULE', 'PayPal Produkte');
define('TEXT_PAYPAL_TAB_INFO', 'Informations sur PayPal');

define('TEXT_DEFAULT_SORT_ORDER_TITLE', 'Ordre de tri');
define('TEXT_DEFAULT_SORT_ORDER_DESC', 'Ordre de traitement des données. Le plus petit chiffre est exécuté en premier.');
define('TEXT_DEFAULT_STATUS_TITLE', 'Activer le module ?');
define('TEXT_DEFAULT_STATUS_DESC', 'Module d\'état');

define('TEXT_HOUR', 'Heure');
define('TEXT_HOURS', 'Heures');

define('DELETE_LOGS_SUCCESSFUL', 'Fichiers journaux supprimés avec succès.');

define('BOX_BLACKLIST_LOGS', 'Journaux de la liste noire');

define('CONTINUE_WITHOUT_SAVE', 'Les modifications non enregistrées seront perdues.');

define('TEXT_SORT_ASC', 'par ordre croissant');
define('TEXT_SORT_DESC', 'décroissant');

define('MSRP', 'UVP');
define('YOUR_PRICE', 'Votre prix ');
define('UNIT_PRICE', 'Prix unitaire ');
define('ONLY', ' Maintenant seulement ');
define('FROM', 'ab ');
define('YOU_SAVE', 'Vous économisez ');
define('INSTEAD', 'Notre prix actuel ');
define('TXT_PER', ' Pour ');
define('TEXT_NO_PAYMENT', 'Aucun mode de paiement');
