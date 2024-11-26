<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

defined('HEADING_TITLE') || define('HEADING_TITLE', 'Système de gestion de contenu');
define('HEADING_CONTENT', 'Pages de contenu');
define('HEADING_PRODUCTS_CONTENT', 'Annexes de l\'article');
define('HEADING_CONTENT_MANAGER_CONTENT', 'Pièces jointes au contenu');
define('HEADING_EMAIL_CONTENT', 'Pièces jointes aux e-mails');
define('TABLE_HEADING_CONTENT_ID', 'ID');
define('TABLE_HEADING_CONTENT_TITLE', 'Titre');
define('TABLE_HEADING_CONTENT_FILE', 'Archives');
define('TABLE_HEADING_CONTENT_STATUS', 'Visible sur la boîte');
define('TABLE_HEADING_CONTENT_BOX', 'Boîte');
define('TABLE_HEADING_PRODUCTS_ID', 'ID');
define('TABLE_HEADING_PRODUCTS', 'Article');
define('TABLE_HEADING_MODEL', 'Numéro d\'article');
defined('TABLE_HEADING_IMAGE') || define('TABLE_HEADING_IMAGE', 'Imagen');
define('TABLE_HEADING_PRODUCTS_CONTENT_ID', 'ID');
define('TABLE_HEADING_CONTENT_MANAGER_ID', 'ID');
define('TABLE_HEADING_CONTENT_MANAGER', 'Pages');
define('TABLE_HEADING_CONTENT_MANAGER_CONTENT_ID', 'ID');
define('TABLE_HEADING_EMAIL_ID', 'ID');
define('TABLE_HEADING_EMAIL', 'Adresse e-mail');
define('TABLE_HEADING_LANGUAGE', 'Langue');
define('TABLE_HEADING_CONTENT_NAME', 'Nombre');
define('TABLE_HEADING_CONTENT_LINK', 'Lien');
define('TABLE_HEADING_CONTENT_HITS', 'Hits');
define('TABLE_HEADING_CONTENT_GROUP', 'coID');
define('TABLE_HEADING_CONTENT_SORT', 'Pida');
defined('TEXT_YES') || define('TEXT_YES', 'Oui');
defined('TEXT_NO') || define('TEXT_NO', 'Non');
define('TABLE_HEADING_CONTENT_ACTION', 'Action');
defined('TEXT_DELETE') || define('TEXT_DELETE', 'Forets');
define('TEXT_EDIT', 'Edite');
define('TEXT_PREVIEW', 'Vue antérieure');
define('CONFIRM_DELETE', 'Voulez-vous vraiment supprimer le contenu ?');
define('CONTENT_NOTE', 'Le contenu marqué d\'un <span class="col-red">*</span> appartient au système et ne peut être supprimé !');

defined('TEXT_DATE_ADDED') || define('TEXT_DATE_ADDED', 'Ajouté le');
defined('TEXT_LAST_MODIFIED') || define('TEXT_LAST_MODIFIED', 'Édité le');
defined('HEADING_TITLE_GOTO') || define('HEADING_TITLE_GOTO', 'Aller à :');
define('TEXT_DISPLAY_NUMBER_OF_CONTENT_MANAGER', 'Montré de <b>%d</b> à <b>%d</b> (sur un total de <b>%d</b> contenus)');
define('TEXT_INFO_HEADING_DELETE_CONTENT_MANAGER', 'Supprimer le contenu');
defined('TEXT_INFO_DELETE_INTRO') || define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer ce contenu ?');
define('TEXT_SEARCH', 'Busque:');

define('TEXT_LANGUAGE', 'Langue :');
define('TEXT_STATUS', 'Visible :');
define('TEXT_STATUS_DESCRIPTION', 'Afficher le lien dans la boîte d\'information ?');
define('TEXT_TITLE', 'Titre :');
define('TEXT_TITLE_FILE', 'Titre/dossier :');
define('TEXT_HEADING', 'Titre :');
define('TEXT_CONTENT', 'Texte :');
define('TEXT_UPLOAD_FILE', 'Télécharger le fichier :');
define('TEXT_UPLOAD_FILE_LOCAL', '(à partir de votre système local)');
define('TEXT_CHOOSE_FILE', 'Sélectionnez le fichier :');
define('TEXT_CHOOSE_FILE_DESC', 'Vous pouvez également sélectionner un fichier déjà utilisé dans la liste.');
defined('TEXT_NO_FILE') || define('TEXT_NO_FILE', 'Effacer la sélection');
define('TEXT_CHOOSE_FILE_SERVER', '(Si vous avez enregistré vous-même vos fichiers par FTP sur votre serveur <i>(médias/contenu)</i>, vous pouvez sélectionner le fichier ici.');
define('TEXT_CURRENT_FILE', 'Archives actuelles :');
define('TEXT_FILE_DESCRIPTION', '<b>Informations :</b><br />Vous avez également la possibilité d\'inclure un fichier <b>.html</b> ou <b>.htm</b> comme contenu.<br />Si vous sélectionnez ou téléchargez un fichier, vous avez la possibilité de créer du texte supplémentaire dans le champ de texte.<br />Ce texte apparaîtra alors devant le texte du fichier téléchargé.<br />Si vous ne voulez pas de texte supplémentaire, laissez le champ de texte vide.');
define('ERROR_FILE', 'Format de fichier incorrect (uniquement .html ou .htm)');
define('ERROR_TITLE', 'Veuillez entrer un titre');
define('ERROR_COMMENT', 'Veuillez entrer une description du fichier');
define('TEXT_FILE_FLAG', 'Caja :');
define('TEXT_PARENT', 'Document principal :');
define('TEXT_PARENT_DESCRIPTION', 'Assignez ce document comme sous-contenu');
define('TEXT_PRODUCT', 'Article :');
define('TEXT_LINK', 'Lien :');
defined('TEXT_SORT_ORDER') || define('TEXT_SORT_ORDER', 'Classification :');
define('TEXT_GROUP', 'coID :');
define('TEXT_GROUP_DESC', 'Avec cet identifiant, vous reliez les mêmes sujets de différentes langues les uns aux autres.');

define('TEXT_CONTENT_DESCRIPTION', 'Avec ce gestionnaire de contenu, vous avez la possibilité d\'ajouter tout type de fichier à un article.<br />Par exemple, des descriptions d\'articles, des manuels, des fiches techniques, des échantillons audio, etc. ......<br />Ces éléments sont affichés dans la vue détaillée de l\'article.<br /><br />');
define('TEXT_CONTENT_MANAGER_CONTENT', 'Contenu :');
define('TEXT_CONTENT_MANAGER_DESCRIPTION', 'Avec ce gestionnaire de contenu, vous avez la possibilité d\'ajouter tout type de fichier à un contenu.<br />Par exemple, PDF pour les textes juridiques, etc. .....<br />Ces éléments sont affichés dans la vue du contenu.<br /><br />');
define('TEXT_EMAIL_CONTENT', 'Contenu de l\'e-mail :');
define('TEXT_EMAIL_DESCRIPTION', 'Avec ce gestionnaire de contenu, vous avez la possibilité d\'ajouter tout type de fichier à un e-mail en tant que pièce jointe.<br />Par exemple, PDF pour les textes juridiques, etc. ....<br /><br />');

define('TEXT_FILENAME', 'Utilisez le fichier :');
define('TEXT_FILE_DESC', 'Description :');
define('USED_SPACE', 'Espace de stockage utilisé :');
define('TABLE_HEADING_CONTENT_FILESIZE', 'Taille du fichier');
define('TEXT_CONTENT_NOINDEX', 'noindex (Le robot de recherche ne doit pas inclure le site Web dans l\'index).');
define('TEXT_CONTENT_NOFOLLOW', 'nofollow (Le robot de recherche peut inclure la page Web, mais ne doit pas suivre les hyperliens de la page).');
define('TEXT_CONTENT_NOODP', 'noodp (Le moteur de recherche ne doit pas utiliser les textes de description DMOZ (ODP) sur la page de résultats).');
define('TEXT_CONTENT_META_ROBOTS', 'Meta Robot');

define('TABLE_HEADING_STATUS_ACTIVE', 'État');
define('TEXT_STATUS_ACTIVE', 'Statut actif :');

define('TEXT_STATUS_ACTIVE_DESCRIPTION', 'Activer le contenu ?');

define('TEXT_CONTENT_DOUBLE_GROUP_INDEX', 'Index du groupe de contenu dupliqué ! Veuillez enregistrer à nouveau. Cela réglera automatiquement le problème.');
defined('TEXT_CHARACTERS') || define('TEXT_CHARACTERS', 'Personnages');
define('TEXT_KEEP_FILENAME', 'Conservez le nom du fichier :');
defined('TEXT_IMAGE_NONEXISTENT') || define('TEXT_IMAGE_NONEXISTENT', 'Aucune photo disponible');
define('TEXT_CONTENT_HELP', 'Pour créer une nouvelle annexe, utilisez la recherche');
