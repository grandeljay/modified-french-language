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

$extra_files = auto_include(DIR_WS_LANGUAGES . 'french/extra/', 'php');

foreach ($extra_files as $extra_file) {
    require $extra_file;
}

/**
 * Translations
 */
define('TITLE', STORE_NAME);
define('HEADER_TITLE_TOP', 'Page d\'accueil');
define('HEADER_TITLE_CATALOG', 'Catalogue');

define('MALE', 'Sr.');
define('FEMALE', 'Mme/Mme.');
define('DIVERSE', 'Différents');

/**
 * Boxes
 */
define('IMAGE_REDEEM_GIFT', 'Échangez votre chèque-cadeau');

define('BOX_TITLE_STATISTICS', 'Statistiques :');
define('BOX_ENTRY_CUSTOMERS', 'Clients :');
define('BOX_ENTRY_PRODUCTS', 'Produits :');
define('BOX_ENTRY_REVIEWS', 'Critiques :');
define('TEXT_VALIDATING', 'Non validé');

define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Page d\'accueil de %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Plus de produits');

define('BOX_HEADING_ADD_PRODUCT_ID', 'Ajouter au panier');

define('BOX_LOGINBOX_STATUS', 'Groupe de clients :');
define('BOX_LOGINBOX_DISCOUNT', 'Remise sur le produit');
define('BOX_LOGINBOX_DISCOUNT_TEXT', 'Remise');
define('BOX_LOGINBOX_DISCOUNT_OT', '');

define('BOX_REVIEWS_WRITE_REVIEW', 'Révisez ce produit');
define('BOX_REVIEWS_NO_WRITE_REVIEW', 'Aucune révision n\'est possible.');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '5 étoiles%s !');

define('PULL_DOWN_DEFAULT', 'Veuillez choisir');

define('JS_ERROR', 'Les informations nécessaires sont manquantes. Veuillez tout remplir.');
define('JS_REVIEW_TEXT', '* Le texte doit être composé d\'au moins ' . REVIEW_TEXT_MIN_LENGTH . ' des personnages.');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Choisissez un mode de paiement pour votre commande.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', '* Choisissez un mode de paiement pour votre commande.');
define('JS_ERROR_NO_SHIPPING_MODULE_SELECTED', '* Choisissez un mode d\'expédition pour votre commande.');
define('JS_ERROR_CONDITIONS_NOT_ACCEPTED', '* Si vous ne respectez pas nos conditions générales, nous regrettons de ne pouvoir accepter votre commande.');
define('JS_ERROR_REVOCATION_NOT_ACCEPTED', '* Si vous n\'acceptez pas la renonciation au droit de rétractation pour les biens virtuels, nous regrettons de ne pouvoir accepter votre commande.');
define('JS_ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Si vous ne vous conformez pas à nos règles de protection des données, nous regrettons de ne pouvoir accepter votre commande.');

/**
 * Account forms
 */
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER_ERROR', 'Sélectionnez votre message d\'accueil.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME_ERROR', 'Votre nom doit être composé d\'au moins ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' des personnages.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME_ERROR', 'Votre nom de famille doit être composé d\'au moins ' . ENTRY_LAST_NAME_MIN_LENGTH . ' des personnages.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Votre date de naissance doit être saisie au format JJ.MM.AAAA (par exemple, 21.05.1970).');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (par exemple, 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Votre adresse e-mail doit avoir au moins ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' des personnages.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'L\'adresse e-mail saisie est incorrecte ou déjà enregistrée.');
define('ENTRY_EMAIL_ERROR_NOT_MATCHING', 'Vos adresses e-mail ne sont pas correctes.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'L\'adresse e-mail que vous avez saisie existe déjà - veuillez la vérifier.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS_ERROR', 'La rue/le numéro doit être composé d\'au moins ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' des personnages.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE_ERROR', 'Votre code postal doit être composé d\'au moins ' . ENTRY_POSTCODE_MIN_LENGTH . ' des personnages.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY_ERROR', 'L\'emplacement doit être composé d\'au moins ' . ENTRY_CITY_MIN_LENGTH . ' des personnages.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE_ERROR', 'Votre état doit être composé d\'au moins ' . ENTRY_STATE_MIN_LENGTH . ' des personnages.');
define('ENTRY_STATE_ERROR_SELECT', 'Sélectionnez votre État fédéral dans la liste.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY_ERROR', 'Sélectionnez votre pays dans la liste.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Votre numéro de téléphone doit être composé d\'au moins ' . ENTRY_TELEPHONE_MIN_LENGTH . ' des personnages.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_PASSWORD_ERROR', 'Votre mot de passe doit être au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' des personnages.');
define('ENTRY_PASSWORD_ERROR_MIN_LOWER', 'Votre mot de passe doit contenir au moins %s lettres minuscules.');
define('ENTRY_PASSWORD_ERROR_MIN_UPPER', 'Votre mot de passe doit contenir au moins %s lettres majuscules.');
define('ENTRY_PASSWORD_ERROR_MIN_NUM', 'Votre mot de passe doit contenir au moins le nombre %s.');
define('ENTRY_PASSWORD_ERROR_MIN_CHAR', 'Votre mot de passe doit contenir au moins %s caractères spéciaux.');
define('ENTRY_PASSWORD_ERROR_INVALID_CHAR', 'Votre mot de passe contient des caractères non valides. Veuillez utiliser un mot de passe différent.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Vos mots de passe ne sont pas corrects.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Votre mot de passe actuel ne doit pas être vide.');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Votre nouveau mot de passe doit être au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' des personnages.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Vos mots de passe ne sont pas corrects.');

/**
 * Result pages
 */
define('TEXT_RESULT_PAGE', 'Sites :');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur un total de <strong>%d</strong> éléments)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur le total de <strong>%d</strong> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur <strong>%d</strong> vues)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur un total de <strong>%d</strong> nouveaux éléments)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur <strong>%d</strong> offres)');

/**
 * Site navigation
 */
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'page précédente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'page suivante');
define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Pages précédentes %d');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Prochaines %d pages');

/**
 * Product navigation
 */
define('PREVNEXT_BUTTON_PREV', '&laquo;');
define('PREVNEXT_BUTTON_NEXT', '&raquo;');

/**
 * Image buttons
 */
define('IMAGE_BUTTON_ADD_ADDRESS', 'Nouvelle adresse');
define('IMAGE_BUTTON_BACK', 'Volver');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Changement d\'adresse');
define('IMAGE_BUTTON_CHECKOUT', 'Demande');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Acheter');
define('IMAGE_BUTTON_CONTINUE', 'Plus de');
define('IMAGE_BUTTON_DELETE', 'Forets');
define('IMAGE_BUTTON_LOGIN', 'Connectez-vous à');
define('IMAGE_BUTTON_IN_CART', 'Ajouter au panier');
define('IMAGE_BUTTON_SEARCH', 'Recherche');
define('IMAGE_BUTTON_UPDATE', 'Mise à jour');
define('IMAGE_BUTTON_UPDATE_CART', 'Mise à jour du panier d\'achat');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Votre avis');
define('IMAGE_BUTTON_ADMIN', 'Admin');
define('IMAGE_BUTTON_PRODUCT_EDIT', 'Modifier le produit');
define('IMAGE_BUTTON_SEND', 'Envoyer');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continuer les achats');
define('IMAGE_BUTTON_CHECKOUT_STEP2', 'Passez à l\'étape 2');
define('IMAGE_BUTTON_CHECKOUT_STEP3', 'Passez à l\'étape 3');

define('SMALL_IMAGE_BUTTON_DELETE', 'Forets');
define('SMALL_IMAGE_BUTTON_EDIT', 'Changement');
define('SMALL_IMAGE_BUTTON_VIEW', 'Ver');

define('ICON_ARROW_RIGHT', 'Voir plus');
define('ICON_CART', 'Ajouter au panier');
define('ICON_SUCCESS', 'Succès');
define('ICON_WARNING', 'Avertissement');
define('ICON_ERROR', 'Erreur');

define('TEXT_PRINT', 'Imprimir');

define('BUTTON_RESET', 'Réinitialiser');
define('BUTTON_UPDATE', 'Mise à jour');

/**
 * Greetings
 */
define('TEXT_GREETING_PERSONAL', 'C\'est bon de vous revoir, <span class="greetUser">%s !</span> Voulez-vous voir nos <a href="%s">nouveaux articles</a>?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Si vous n\'êtes pas %s, veuillez vous <a href="%s">connecter ici</a> avec vos données d\'accès.</small>');
define('TEXT_GREETING_GUEST', 'Bienvenue à <span class="greetUser">vous</span>, voulez-vous <a href="%s">vous inscrire</a> ou ouvrir un <a href="%s">compte client</a>?');

define('TEXT_SORT_PRODUCTS', 'La classification des articles est la suivante ');
define('TEXT_DESCENDINGLY', 'descendant');
define('TEXT_ASCENDINGLY', 'ascendant');
define('TEXT_BY', ' a ');

define('TEXT_OF_5_STARS', '5 étoiles%s !');
define('TEXT_REVIEW_BY', 'de %s');
define('TEXT_REVIEW_WORD_COUNT', '%s mots');
define('TEXT_REVIEW_RATING', 'Classement : %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Ajouté le : %s');
define('TEXT_NO_REVIEWS', 'Il n\'y a pas encore d\'avis disponibles.');
define('TEXT_NO_NEW_PRODUCTS', 'Aucun nouvel élément n\'est apparu dans le dernier ' . MAX_DISPLAY_NEW_PRODUCTS_DAYS . ' jours. Au lieu de cela, vous pouvez voir ici les articles les plus récemment publiés.');
define('TEXT_UNKNOWN_TAX_RATE', 'Taux d\'imposition inconnu');

/**
 * Warnings
 */
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Avertissement : Le répertoire d\'installation existe toujours dans : %s. Veuillez supprimer le répertoire pour des raisons de sécurité.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Avertissement : Ce logiciel de boutique en ligne modifié peut écrire dans le fichier de configuration : %s. Il s\'agit d\'un risque potentiel pour la sécurité - veuillez définir les autorisations d\'utilisateur correctes sur ce fichier.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Attention : Le répertoire pour les sessions n\'existe pas : ' . xtc_session_save_path() . '. Les sessions ne fonctionneront pas tant que le répertoire n\'aura pas été créé.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warning : Le logiciel de la boutique en ligne modifié ne peut pas écrire dans le répertoire de session : ' . xtc_session_save_path() . '. Les sessions ne fonctionneront pas tant que les autorisations d\'utilisateur correctes n\'auront pas été définies.');
define('WARNING_SESSION_AUTO_START', 'Attention : session.auto_start est activé - Veuillez désactiver cette fonction PHP dans php.ini et redémarrer le serveur WEB.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Attention : Le répertoire pour le téléchargement de l\'article n\'existe pas : ' . DIR_FS_DOWNLOAD . '. Cette fonction ne fonctionnera pas tant que le répertoire n\'aura pas été créé.');

define('SUCCESS_ACCOUNT_UPDATED', 'Votre compte a été mis à jour avec succès.');
define('SUCCESS_PASSWORD_UPDATED', 'Votre mot de passe a été modifié avec succès.');
define('ERROR_CURRENT_PASSWORD_NOT_MATCHING', 'Le mot de passe saisi ne correspond pas au mot de passe enregistré. Veuillez réessayer.');
define('TEXT_MAXIMUM_ENTRIES', '<strong>Remarque :</strong> Vous avez %s entrées dans votre carnet d\'adresses.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_DELETED', 'L\'entrée sélectionnée a été supprimée avec succès.');
define('SUCCESS_ADDRESS_BOOK_ENTRY_UPDATED', 'Votre carnet d\'adresses a été mis à jour avec succès.');
define('WARNING_PRIMARY_ADDRESS_DELETION', 'L\'adresse par défaut ne peut pas être supprimée. Veuillez d\'abord sélectionner une autre adresse par défaut. Vous pouvez ensuite supprimer l\'entrée.');
define('ERROR_NONEXISTING_ADDRESS_BOOK_ENTRY', 'Cette entrée du carnet d\'adresses n\'existe pas.');
define('ERROR_ADDRESS_BOOK_FULL', 'Votre carnet d\'adresses ne peut plus contenir d\'adresses. Veuillez supprimer une adresse qui n\'est plus nécessaire. Vous pouvez alors enregistrer une nouvelle entrée.');
define('ERROR_CHECKOUT_SHIPPING_NO_METHOD', 'Aucune méthode d\'expédition n\'a été sélectionnée.');
define('ERROR_CHECKOUT_SHIPPING_NO_MODULE', 'Il n\'y a pas de méthode d\'expédition disponible.');

define('ERROR_CONDITIONS_NOT_ACCEPTED', '* Si vous ne respectez pas nos conditions générales, nous regrettons de ne pouvoir accepter votre commande.');
define('ERROR_REVOCATION_NOT_ACCEPTED', '* A moins que vous n\'acceptiez l\'expiration du droit de rétractation pour les biens virtuels, nous regrettons de ne pouvoir accepter votre commande.');
define('ERROR_PRIVACY_NOTICE_NOT_ACCEPTED', '* Si vous ne vous conformez pas à nos règles de protection des données, nous regrettons de ne pouvoir accepter votre commande.');

define('SUB_TITLE_OT_DISCOUNT', 'Remise :');

define('NOT_ALLOWED_TO_SEE_PRICES', 'Vous ne pouvez pas consulter les prix en tant qu\'invité (ou avec votre statut actuel).');
define('NOT_ALLOWED_TO_SEE_PRICES_TEXT', 'Vous n\'avez pas la permission de voir les prix. Créez un compte client.');

define('TEXT_DOWNLOAD', 'Télécharger');
define('TEXT_VIEW', 'Ver');

define('TEXT_BUY', '%s x \'');
define('TEXT_NOW', 'L\'ordre ');
define('TEXT_GUEST', ' Invité :');
define('TEXT_SEARCH_ENGINE_AGENT', 'Moteur de recherche');

/**
 * Advanced search
 */
define('TEXT_AC_ALL_CATEGORIES', 'Tous');
define('TEXT_ALL_CATEGORIES', 'Toutes les catégories');
define('TEXT_ALL_MANUFACTURERS', 'Tous les fabricants');
define('JS_AT_LEAST_ONE_INPUT', 'Vous devez remplir l\'un des champs suivants:* Mots clés Prix de Prix à');
define('AT_LEAST_ONE_INPUT', 'Vous devez remplir l\'un des champs suivants :<br />Mots-clés avec au moins trois caractères<br />Prix à partir de<br />Prix jusqu\'à<br />');
define('TEXT_SEARCH_TERM', 'Votre recherche pour : ');
define('JS_INVALID_FROM_DATE', '* date invalide (de)');
define('JS_INVALID_TO_DATE', 'date non valide (jusqu\'au)* date non valide (jusqu\'au)* date non valide (jusqu\'au)* date non valide (jusqu\'au)');
define('JS_TO_DATE_LESS_THAN_FROM_DATE', '* La date(from) doit être supérieure ou égale à la date(to).');
define('JS_PRICE_FROM_MUST_BE_NUM', '* Le prix de doit être un nombre.');
define('JS_PRICE_TO_MUST_BE_NUM', '* Le prix jusqu\'à doit être un nombre.');
define('JS_PRICE_TO_LESS_THAN_PRICE_FROM', '* Le prix à la hausse doit être supérieur ou égal au prix à la baisse.');
define('JS_INVALID_KEYWORDS', '* Terme de recherche inadmissible');
define('TEXT_LOGIN_ERROR', '<b>ERREUR :</b> L\'adresse e-mail et/ou le mot de passe saisis ne correspondent pas.');
define('TEXT_RELOGIN_NEEDED', 'Veuillez vous reconnecter.');
define('TEXT_PASSWORD_SENT', 'Un nouveau mot de passe a été envoyé par e-mail.');
define('TEXT_PRODUCT_NOT_FOUND', 'Article non trouvé.');
define('TEXT_MORE_INFORMATION', 'Pour plus d\'informations, veuillez consulter la page d\'<a href="%s" onclick="window.open(this.href); return false;">accueil</a> de cet article.');
define('TEXT_DATE_ADDED', 'Cet article a été ajouté à notre catalogue le %s.');
define('TEXT_DATE_AVAILABLE', '<span class="color_error_message">Ce produit devrait être à nouveau disponible à partir de %s.</span>');
define('SUB_TITLE_SUB_TOTAL', 'Sous-total :');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Les articles marqués de ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont malheureusement pas en stock dans la quantité que vous avez commandée.<br />Veuillez réduire votre quantité de commande pour les articles marqués. Merci beaucoup pour votre commande.');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Les articles marqués de ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont malheureusement pas en stock dans la quantité commandée.<br />Nous livrons la quantité commandée dans les plus brefs délais. Sur demande, nous pouvons également effectuer une livraison partielle.');

define('MINIMUM_ORDER_VALUE_NOT_REACHED_1', 'Vous avez atteint la valeur minimale de commande de : ');
define('MINIMUM_ORDER_VALUE_NOT_REACHED_2', ' Malheureusement, cet objectif n\'a pas encore été atteint.<br />Veuillez demander au moins plus : ');
define('MAXIMUM_ORDER_VALUE_REACHED_1', 'Il a une valeur de commande maximale de : ');
define('MAXIMUM_ORDER_VALUE_REACHED_2', 'dépassé.<br /> Veuillez réduire votre commande au moins : ');

define('ERROR_INVALID_PRODUCT', 'L\'article sélectionné n\'a pas été trouvé.');
define('JS_KEYWORDS_MIN_LENGTH', 'Le terme de recherche doit avoir au moins ' . SEARCH_MIN_LENGTH . ' des personnages.');

/**
 * Navbar title
 */
define('NAVBAR_TITLE_ACCOUNT', 'Votre compte');
define('NAVBAR_TITLE_1_ACCOUNT_EDIT', 'Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_EDIT', 'Modifier vos données personnelles');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY', 'Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY', 'Vos commandes passées');
define('NAVBAR_TITLE_1_ACCOUNT_HISTORY_INFO', 'Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_HISTORY_INFO', 'Commande passée');
define('NAVBAR_TITLE_3_ACCOUNT_HISTORY_INFO', 'Numéro de commande %s');
define('NAVBAR_TITLE_1_ACCOUNT_PASSWORD', 'Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_PASSWORD', 'Changement de mot de passe');
define('NAVBAR_TITLE_1_ADDRESS_BOOK', 'Votre compte');
define('NAVBAR_TITLE_2_ADDRESS_BOOK', 'Agenda');
define('NAVBAR_TITLE_1_ADDRESS_BOOK_PROCESS', 'Votre compte');
define('NAVBAR_TITLE_2_ADDRESS_BOOK_PROCESS', 'Agenda');
define('NAVBAR_TITLE_ADD_ENTRY_ADDRESS_BOOK_PROCESS', 'Nouvelle entrée');
define('NAVBAR_TITLE_MODIFY_ENTRY_ADDRESS_BOOK_PROCESS', 'Modifier l\'entrée');
define('NAVBAR_TITLE_DELETE_ENTRY_ADDRESS_BOOK_PROCESS', 'Effacement de l\'entrée');
define('NAVBAR_TITLE_ADVANCED_SEARCH', 'Recherche avancée');
define('NAVBAR_TITLE1_ADVANCED_SEARCH', 'Recherche avancée');
define('NAVBAR_TITLE2_ADVANCED_SEARCH', 'Résultats de la recherche');
define('NAVBAR_TITLE_1_CHECKOUT_CONFIRMATION', 'Demande');
define('NAVBAR_TITLE_2_CHECKOUT_CONFIRMATION', 'Confirmation');
define('NAVBAR_TITLE_1_CHECKOUT_PAYMENT', 'Demande');
define('NAVBAR_TITLE_2_CHECKOUT_PAYMENT', 'Mode de paiement');
define('NAVBAR_TITLE_1_PAYMENT_ADDRESS', 'Demande');
define('NAVBAR_TITLE_2_PAYMENT_ADDRESS', 'Changement d\'adresse de facturation');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING', 'Demande');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING', 'Informations sur l\'expédition');
define('NAVBAR_TITLE_1_CHECKOUT_SHIPPING_ADDRESS', 'Demande');
define('NAVBAR_TITLE_2_CHECKOUT_SHIPPING_ADDRESS', 'Modifier l\'adresse de livraison');
define('NAVBAR_TITLE_1_CHECKOUT_SUCCESS', 'Demande');
define('NAVBAR_TITLE_2_CHECKOUT_SUCCESS', 'Succès');
define('NAVBAR_TITLE_CREATE_ACCOUNT', 'Créer un compte');
define('NAVBAR_TITLE_LOGIN', 'Connectez-vous à');
define('NAVBAR_TITLE_LOGOFF', 'Adiós');
define('NAVBAR_TITLE_PRODUCTS_NEW', 'Nouveaux articles');
define('NAVBAR_TITLE_SHOPPING_CART', 'Panier d\'achat');
define('NAVBAR_TITLE_SPECIALS', 'Offres');
define('NAVBAR_TITLE_COOKIE_USAGE', 'Utilisation des cookies');
define('NAVBAR_TITLE_PRODUCT_REVIEWS', 'Critiques');
define('NAVBAR_TITLE_REVIEWS_WRITE', 'Critiques');
define('NAVBAR_TITLE_REVIEWS', 'Critiques');
define('NAVBAR_TITLE_SSL_CHECK', 'Avis de sécurité');
define('NAVBAR_TITLE_CREATE_GUEST_ACCOUNT', 'L\'adresse de votre client');
define('NAVBAR_TITLE_PASSWORD_DOUBLE_OPT', 'Vous avez oublié votre mot de passe ?');
define('NAVBAR_TITLE_NEWSLETTER', 'Bulletin');
define('NAVBAR_GV_REDEEM', 'Canjear vale');
define('NAVBAR_GV_SEND', 'Envoyer un bon d\'achat');
define('NAVBAR_TITLE_DOWNLOAD', 'Téléchargements');

/**
 * Miscellaneous
 */
define('TEXT_NEWSLETTER', 'Voulez-vous toujours être à la page ?<br />Pas de problème, inscrivez-vous à notre newsletter et vous serez toujours au courant.');
define('TEXT_EMAIL_INPUT', 'Votre adresse e-mail a été saisie dans notre système.<br />En même temps, le système vous a envoyé un e-mail avec un lien d\'activation. Après avoir reçu l\'e-mail, cliquez sur le lien pour confirmer votre inscription. Dans le cas contraire, vous ne recevrez pas notre bulletin d\'information.');

define('TEXT_WRONG_CODE', 'Le code de sécurité saisi ne correspond pas au code affiché. Veuillez réessayer.');
define('TEXT_EMAIL_EXIST_NO_NEWSLETTER', 'Cette adresse e-mail existe déjà dans notre base de données, mais n\'est pas encore activée pour recevoir la newsletter.');
define('TEXT_EMAIL_EXIST_NEWSLETTER', 'Cette adresse e-mail existe déjà dans notre base de données et est déjà activée pour recevoir la newsletter.');
define('TEXT_EMAIL_NOT_EXIST', 'Cette adresse e-mail n\'existe pas dans notre base de données.');
define('TEXT_EMAIL_DEL', 'Votre adresse électronique a été supprimée de notre base de données de bulletins d\'information.');
define('TEXT_EMAIL_DEL_ERROR', 'Une erreur s\'est produite, votre adresse e-mail n\'a pas été supprimée !');
define('TEXT_EMAIL_ACTIVE', 'Votre adresse e-mail a été activée avec succès pour recevoir la newsletter.');
define('TEXT_EMAIL_ACTIVE_ERROR', 'Une erreur s\'est produite, votre adresse e-mail n\'a pas été activée !');
define('TEXT_EMAIL_SUBJECT', 'Votre abonnement à la newsletter');

define('TEXT_CUSTOMER_GUEST', ' Invité :');

define('TEXT_LINK_MAIL_SENDED', 'La demande d\'un nouveau mot de passe doit d\'abord être confirmée par vous.<br />Le système vous a donc envoyé un e-mail avec un lien de confirmation. Lorsque vous recevez l\'e-mail, cliquez sur le lien qui vous a été envoyé. Sinon, vous ne pourrez pas attribuer un nouveau mot de passe.<br/><br/>Le lien de confirmation est valable pendant %s minutes.');
define('TEXT_PASSWORD_MAIL_SENDED', 'Vous venez de recevoir un e-mail avec un nouveau mot de passe de connexion.<br />Veuillez changer votre mot de passe comme demandé après votre prochaine connexion.');
define('TEXT_CODE_ERROR', 'Saisissez à nouveau votre adresse e-mail et votre code de sécurité.<br />Attention aux fautes de frappe !');
define('TEXT_EMAIL_ERROR', 'Saisissez à nouveau votre adresse e-mail.<br />Attention aux fautes de frappe !');
define('TEXT_NO_ACCOUNT', 'Nous avons le regret de vous informer que votre demande de nouveau mot de passe de connexion n\'était pas valide ou a expiré.<br />Veuillez réessayer.');
define('HEADING_PASSWORD_FORGOTTEN', 'Vous avez oublié votre mot de passe ?');
define('TEXT_PASSWORD_FORGOTTEN', 'Changez votre mot de passe en trois étapes faciles.');
define('TEXT_EMAIL_PASSWORD_FORGOTTEN', 'Courriel de confirmation de changement de mot de passe');
define('TEXT_EMAIL_PASSWORD_NEW_PASSWORD', 'Votre nouveau mot de passe');
define('ERROR_MAIL', 'Veuillez vérifier les données que vous avez saisies dans le formulaire.');

define('CATEGORIE_NOT_FOUND', 'Catégorie non trouvée');

define('GV_FAQ', 'Vales FAQ');
define('ERROR_NO_REDEEM_CODE', 'Désolé, vous n\'avez pas saisi de code.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Code de bon valable');
define('TABLE_HEADING_CREDIT', 'Crédito');
define('EMAIL_GV_TEXT_SUBJECT', 'Un cadeau de %s');
define('MAIN_MESSAGE', 'Vous avez choisi d\'envoyer un bon d\'achat d\'une valeur de %s à %s, dont l\'adresse e-mail est %s.<br /><br />Le texte suivant apparaît dans votre e-mail :<br /><br />Bonjour %s,<br /><br /> %s vous a envoyé un bon d\'achat d\'une valeur de %s.');
define('REDEEMED_AMOUNT', 'Votre bon d\'achat a été crédité avec succès sur votre compte. Valeur du bon d\'achat : %s');
define('REDEEMED_COUPON', 'Votre bon a été soumis avec succès et sera échangé automatiquement lorsque vous passerez votre commande.');

define('ERROR_INVALID_USES_USER_COUPON', 'Vous pouvez uniquement utiliser le coupon ');
define('ERROR_INVALID_USES_COUPON', 'Les clients peuvent uniquement utiliser ce coupon ');
define('TIMES', ' temps.');
define('ERROR_INVALID_STARTDATE_COUPON', 'Votre coupon n\'est pas encore disponible.');
define('ERROR_INVALID_FINISDATE_COUPON', 'Votre coupon a expiré.');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON', 'Ce bon d\'achat ne peut être utilisé qu\'à partir d\'une valeur de commande minimale de %s !');
define('ERROR_INVALID_MINIMUM_ORDER_COUPON_ADD', '<br/>Vous devrez saisir à nouveau le code du bon lorsque vous atteindrez la valeur minimale de la commande.');
define('ERROR_COUPON_REQUIRES_ACCOUNT', 'Vous avez besoin d\'un compte client pour échanger le bon d\'achat.');
define('PERSONAL_MESSAGE', '%s écrit :');

define('TEXT_LINK_TITLE_INFORMATION', 'Information');

/**
 * Coupon popup
 */
define('TEXT_CLOSE_WINDOW', 'Cerrar ventana [x]');
define('TEXT_COUPON_HELP_HEADER', 'Votre bon/coupon a été réservé avec succès.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nom du bon/coupon : %s');
define('TEXT_COUPON_HELP_SPECIALS', '<br /><br />Votre bon ne peut pas être appliqué aux offres spéciales.');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />La valeur du bon/coupon est de %s ');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />La valeur minimale de la commande est de %s ');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Bon pour la livraison gratuite');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Description du coupon : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Ce coupon est valable de %s à %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restrictions d\'articles / de catégories');
define('TEXT_COUPON_HELP_CATEGORIES', 'Catégorie');
define('TEXT_COUPON_HELP_PRODUCTS', 'Article');
define('ERROR_ENTRY_AMOUNT_CHECK', 'Montant du bon non valide');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Adresse e-mail non valide');
define('TEXT_COUPON_PRODUCTS_RESTRICT', 'Le bon d\'achat est limité à une sélection d\'articles.');
define('TEXT_COUPON_CATEGORIES_RESTRICT', 'Le coupon est limité à une sélection de catégories.');

define('ENTRY_VAT_TEXT', 'Seulement pour l\'Allemagne et l\'UE');
define('ENTRY_VAT_ERROR', 'L\'identifiant saisi n\'est pas valide ou ne peut être vérifié pour le moment. Veuillez saisir un identifiant valide ou laissez le champ vide pour le moment.');
define('MSRP', 'UVP');
define('YOUR_PRICE', 'Son prix ');
define('UNIT_PRICE', 'Prix unitaire ');
define('ONLY', ' Maintenant seulement ');
define('FROM', 'ab ');
define('YOU_SAVE', 'Usted ahorra ');
define('INSTEAD', 'Notre ancien prix ');
define('TXT_PER', ' À ');
define('TAX_INFO_INCL', 'incl. %s IVA.');
define('TAX_INFO_EXCL', 'excl. %s IVA');
define('TAX_INFO_ADD', 'plus % de TVA.');
define('SHIPPING_EXCL', 'plus');
define('SHIPPING_INCL', 'incl.');
define('SHIPPING_COSTS', 'Frais d\'expédition');

define('SHIPPING_TIME', 'Délai de livraison : ');
define('MORE_INFO', '[Plus]');

define('ENTRY_PRIVACY_ERROR', 'Veuillez confirmer que vous avez pris connaissance de notre politique de confidentialité.');
define('TEXT_PAYMENT_FEE', 'Taux de paiement');

define('_MODULE_INVALID_SHIPPING_ZONE', 'Désolé, l\'expédition vers ce pays n\'est pas possible.');
define('_MODULE_UNDEFINED_SHIPPING_RATE', 'Les frais d\'expédition ne peuvent pas être calculés pour le moment.');

define('NAVBAR_TITLE_1_ACCOUNT_DELETE', 'Votre compte');
define('NAVBAR_TITLE_2_ACCOUNT_DELETE', 'Supprimer le compte');

define('ERROR_EMAIL', '<p><b>Votre adresse e-mail :</b> Pas de participation ou participation invalide</p>');
define('ERROR_VVCODE', '<p><b>Code de sécurité :</b> Aucune correspondance, veuillez saisir à nouveau le code de sécurité.</p>');
define('ERROR_MSG_BODY', '<p><b>Votre message</b>: Pas de billets !</p>');

define('HEADER_QTY', 'Numéro');
define('HEADER_ARTICLE', 'Article');
define('HEADER_SINGLE', 'Prix unitaire');
define('HEADER_TOTAL', 'Summe');
define('HEADER_MODEL', 'Article n');

define('ERROR_ADDRESS_NOT_ACCEPTED', '* Si vous n\'acceptez pas votre adresse de facturation et de livraison, nous regrettons de ne pouvoir accepter votre commande !');
define('PAYPAL_EXP_VORL', 'Frais d\'expédition provisoires');

define('BASICPRICE_VPE_TEXT', 'seulement avec ce montant ');
define('GRADUATED_PRICE_MAX_VALUE', 'ab');
define('_SHIPPING_TO', 'Expédition vers ');

define('ERROR_SQL_DB_QUERY', 'Nous sommes désolés, mais il y a eu une erreur dans la base de données.');
define('ERROR_SQL_DB_QUERY_REDIRECT', 'Vous serez redirigé vers notre page d\'accueil dans %s de secondes !');

define('TEXT_AGB_CHECKOUT', 'Veuillez prendre connaissance de nos Conditions générales et Informations client %s ainsi que de notre Politique de confidentialité %s.');
define('TEXT_REVOCATION_CHECKOUT', 'notre politique d\'annulation %s');
define('DOWNLOAD_NOT_ALLOWED', '<h1>ProhibitedServer</h1>n\'a pas pu vérifier que vous êtes autorisé à accéder au document demandé. Soit vous avez fourni des informations d\'identification incorrectes (par exemple, un mot de passe incorrect), soit votre navigateur ne comprend pas comment fournir les informations d\'identification requises.');

define('TEXT_INFO_DETAILS', ' Detalles');
define('TEXT_SAVED_BASKET', 'Veuillez vérifier votre panier d\'achat. Il contient encore des éléments d\'une visite précédente.');

define('ERROR_REVIEW_TEXT', 'Le texte de l\'examen doit être composé d\'au moins ' . REVIEW_TEXT_MIN_LENGTH . ' des personnages.');
define('ERROR_REVIEW_RATING', 'Veuillez donner votre appréciation.');
define('ERROR_REVIEW_AUTHOR', 'Veuillez entrer votre nom.');
define('ERROR_REVIEW_PRODUCT_PURCHASED', 'Seuls les articles qui ont également été achetés chez nous peuvent être évalués.');

define('GV_NO_PAYMENT_INFO', '<div class="infomessage">Vous pouvez utiliser votre crédit pour payer la totalité de la commande. Si vous ne souhaitez pas utiliser votre crédit, désactivez la sélection du crédit et choisissez un mode de paiement.</div>');
define('GV_ADD_PAYMENT_INFO', '<div class="errormessage">Votre crédit n\'est pas suffisant ou ne peut être appliqué à tous les articles pour payer la totalité de la commande. Veuillez sélectionner un mode de paiement supplémentaire</div>');

define('_SHIPPING_FREE', 'Expédition gratuite');
define('TEXT_INFO_FREE_SHIPPING_COUPON', 'Les frais d\'expédition sont couverts par votre bon d\'achat.');

define('TEXT_CONTENT_NOT_FOUND', 'Cette page n\'a pas été trouvée.');
define('TEXT_SITE_NOT_FOUND', 'Cette page n\'a pas été trouvée.');

define('MAX_PROD_QTY_EXCEEDED', 'Le nombre maximum autorisé d\'articles par montant de ' . MAX_PRODUCTS_QTY . ' pour <span style="font-style:italic;">\'%s\'</span> a été dépassée.<br />Le nombre d\'articles a été automatiquement réduit au nombre autorisé.');

define('IMAGE_BUTTON_CONTENT_EDIT', 'Modifier le contenu');
define('PRINTVIEW_INFO', 'Imprimer la fiche technique de l\'article');
define('PRODUCTS_REVIEW_LINK', 'Écrire un commentaire');

define('TAX_INFO_SMALL_BUSINESS', 'Prix final selon le &sect; 19 UStG.');
define('TAX_INFO_SMALL_BUSINESS_FOOTER', 'En raison du statut de petite entreprise conformément au &sect; 19 UStG, nous ne facturons pas la TVA et ne l\'indiquons donc pas.');

define('NEED_CHANGE_PWD', 'Veuillez changer votre mot de passe.');
define('TEXT_REQUEST_NOT_VALID', 'Le lien a expiré. Veuillez demander un nouveau mot de passe.');

define('NAVBAR_TITLE_WISHLIST', 'Bloc de notas');
define('TEXT_TO_WISHLIST', 'Sur le bloc-notes');
define('IMAGE_BUTTON_TO_WISHLIST', 'Sur le bloc-notes');

define('GUEST_REDEEM_NOT_ALLOWED', 'Les bons d\'achat ne peuvent pas être échangés par les invités.');
define('GUEST_VOUCHER_NOT_ALLOWED', 'Les bons ne peuvent pas être achetés en tant qu\'invité.');

define('TEXT_FILTER_SETTING_DEFAULT', 'Articles par page');
define('TEXT_FILTER_SETTING', '%s articles par page');
define('TEXT_FILTER_SETTING_ALL', 'Afficher tous les articles');
define('TEXT_SHOW_ALL', ' (montrer tous)');
define('TEXT_FILTER_SORTING_DEFAULT', 'Trier par ...');
define('TEXT_FILTER_SORTING_ABC_ASC', 'De A à Z');
define('TEXT_FILTER_SORTING_ABC_DESC', 'Z et A');
define('TEXT_FILTER_SORTING_PRICE_ASC', 'Precio ascendente');
define('TEXT_FILTER_SORTING_PRICE_DESC', 'Prix en baisse');
define('TEXT_FILTER_SORTING_DATE_DESC', 'Les produits les plus récents en premier');
define('TEXT_FILTER_SORTING_DATE_ASC', 'Les produits plus anciens d\'abord');
define('TEXT_FILTER_SORTING_ORDER_DESC', 'Les meilleurs vendeurs');

define('NAVBAR_TITLE_ACCOUNT_CHECKOUT_EXPRESS_EDIT', 'Paramètres pour mon achat rapide');
define('SUCCESS_CHECKOUT_EXPRESS_UPDATED', 'Mes paramètres d\'achat rapide ont été enregistrés.');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_ADDRESS', 'Sélectionnez une adresse d\'expédition');
define('TEXT_ERROR_CHECKOUT_EXPRESS_SHIPPING_MODULE', 'Sélectionnez une méthode d\'expédition');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_ADDRESS', 'Sélectionnez une adresse de facturation');
define('TEXT_ERROR_CHECKOUT_EXPRESS_PAYMENT_MODULE', 'Sélectionnez un mode de paiement');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK', 'Mon achat rapide');
define('TEXT_CHECKOUT_EXPRESS_INFO_LINK_MORE', 'Plus d\'informations sur My Quick Buy "');
define('TEXT_CHECKOUT_EXPRESS_CHECK_CHEAPEST', 'Choisissez toujours le mode d\'expédition le moins cher');

define('AC_SHOW_PAGE', 'Page ');
define('AC_SHOW_PAGE_OF', ' de ');

define('FREE_SHIPPING_INFO', 'à partir de %s de la valeur de la commande nous expédions votre commande sans frais de port');

define('MANUFACTURER_NOT_FOUND', 'Fabricant non trouvé');
define('ENTRY_TOKEN_ERROR', 'Veuillez vérifier vos entrées.');

define('IMAGE_BUTTON_CONFIRM', 'Confirmez');

/**
 * Bank account
 */
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_0', 'Coordonnées bancaires OK.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1', 'Le numéro de compte et/ou le code de tri ne sont pas valides ou ne correspondent pas.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2', 'Le numéro de compte n\'est pas automatiquement vérifiable.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_3', 'Le numéro de compte n\'est pas vérifiable.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_4', 'Impossible de vérifier le numéro de compte Veuillez vérifier à nouveau vos coordonnées.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_5', 'Ce code bancaire n\'existe pas, veuillez corriger votre saisie.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_8', 'Erreur dans le code de banque ou aucun code de banque n\'a été spécifié.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_9', 'Aucun numéro de compte n\'est indiqué');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_10', 'Vous n\'avez pas spécifié de titulaire de compte.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_128', 'Erreur interne lors de la vérification des coordonnées bancaires.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1000', 'Code pays contenu dans l\'IBAN (1er et 2ème chiffre) inconnu.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1010', 'Longueur incorrecte de l\'IBAN : trop de chiffres ont été saisis.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1020', 'Longueur incorrecte de l\'IBAN : trop peu de chiffres ont été saisis.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1030', 'L\'IBAN ne correspond pas au format spécifié pour le pays.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1040', 'Les chiffres de contrôle de l\'IBAN (chiffres 3 et 4) ne sont pas corrects -&gt; erreur de frappe dans l\'IBAN.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1050', 'Le BIC a un format invalide.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1060', 'Longueur du BIC incorrecte : Trop de caractères ont été saisis. Il faut 8 ou 11 caractères.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1070', 'Longueur du BIC incorrecte : Entrez trop peu de caractères. Il faut 8 ou 11 caractères.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1080', 'La longueur du BIC n\'est pas valable : 8 ou 11 caractères sont nécessaires.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_1200', 'Malheureusement, nous ne pouvons pas accepter les IBAN du pays spécifié (1er et 2ème chiffre de l\'IBAN).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2001', 'Le numéro de compte (chiffres 13 à 22) et/ou le code bancaire (chiffres 5 à 12) contenus dans l\'IBAN ne sont pas valides ou ne correspondent pas.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2002', 'Le numéro de compte dans l\'IBAN (chiffres 13 à 22) ne peut pas être vérifié automatiquement.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2003', 'Aucune procédure de vérification des chiffres n\'est définie pour les numéros de compte contenus dans l\'IBAN (chiffres 13 à 22).');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2004', 'Le numéro de compte dans l\'IBAN (chiffres 13 à 22) ne peut pas être vérifié.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2005', 'Le code bancaire (chiffres 5 à 12 de l\'IBAN) n\'existe pas.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2008', 'Erreur dans le code bancaire (chiffres 5 à 12 de l\'IBAN) ou aucun code bancaire n\'a été spécifié.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2009', 'Le numéro de compte (chiffres 13 à 22 de l\'IBAN) n\'est pas fourni.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2010', 'Le titulaire du compte n\'a pas été spécifié.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2020', 'BIC invalide : Il n\'y a pas de banque avec ce BIC.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_2128', 'Erreur interne lors de la vérification des coordonnées bancaires.');
define('BANKACCOUNT_CHECK_TEXT_BANK_ERROR_UNKNOWN', 'Erreur inconnue lors de la vérification des coordonnées bancaires.');

define('PRODUCT_REVIEWS_SUCCESS', 'Merci pour votre commentaire.');
define('PRODUCT_REVIEWS_SUCCESS_WAITING', 'Merci pour votre commentaire. Il va maintenant être révisé avant d\'être publié.');

define('TITLE_PRODUCTS_NEW', 'Nouveaux articles');
define('TITLE_SPECIALS', 'Ofertas');

define('SITEMAP_ERROR_400', 'Erreur 400 : La demande était syntaxiquement incorrecte.');
define('SITEMAP_ERROR_401', 'Erreur 401 : Erreur d\'authentification.');
define('SITEMAP_ERROR_403', 'Erreur 403 : Le serveur refuse l\'exécution.');
define('SITEMAP_ERROR_404', 'Erreur 404 : La page que vous recherchez n\'a pas été trouvée !');
define('SITEMAP_ERROR_500', 'Erreur 500 : Une erreur de serveur interne s\'est produite.');

define('ERROR_PRODUCTS_MISSING_CONFIGURATION_NOT_ADDED', 'Certains articles de votre commande ne sont plus disponibles dans la configuration souhaitée et n\'ont pas été ajoutés à votre panier.');
