<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Gestionnaire de bannières');

define('TABLE_HEADING_BANNERS', 'Bannière');
define('TABLE_HEADING_GROUPS', 'Groupe');
define('TABLE_HEADING_STATISTICS', 'Annonces / Clics');
define('TABLE_HEADING_STATUS', 'État');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_LANGUAGE', 'Langue');
define('TABLE_HEADING_SORT', 'Pida');
define('TABLE_HEADING_IMAGE', 'Imagen');

define('TEXT_BANNERS_TITLE', 'Titre de la bannière :');
define('TEXT_BANNERS_URL', 'URL de la bannière :');
define('TEXT_BANNERS_URL_NOTE', 'URL de destination lorsque la bannière est cliquée.');
define('TEXT_BANNERS_REDIRECT', 'Lien direct :');
define('TEXT_BANNERS_REDIRECT_NOTE', 'La bannière est liée directement à l\'URL de la bannière spécifiée et non en utilisant "redirect.php?action=banner&goto=xxx".<br /><strong>ATTENTION :</strong> Les "annonces / clics" ne peuvent plus être comptabilisés si le "lien direct" est activé !');
define('TEXT_BANNERS_GROUP', 'Groupe de bannières :');
define('TEXT_BANNERS_NEW_GROUP', 'Sélectionnez le groupe de bannières souhaité dans la liste déroulante (si disponible) ou saisissez un nouveau groupe de bannières ci-dessous.');
define('TEXT_BANNERS_NEW_GROUP_NOTE', 'Pour qu\'une bannière apparaisse dans le modèle, le modèle doit être développé.<br/>Exemple : le groupe Banner est banner, il peut donc être affiché dans le modèle dans l\'index.html avec {$BANNER}.');
define('TEXT_BANNERS_IMAGE', 'Image (archive) :');
define('TEXT_BANNERS_IMAGE_MOBILE', 'Image en mouvement (archives) :');
define('TEXT_BANNERS_IMAGE_LOCAL', 'Sélectionnez l\'image souhaitée en cliquant sur "Parcourir" ou sélectionnez une bannière existante.<br /><strong>Types de fichiers autorisés :</strong> jpg, jpeg, jpeg, gif, png, bmp, tiff, tif, bmp, swf, cab');
define('TEXT_BANNERS_IMAGE_TARGET', 'Destination de l\'image (Enregistrer dans) :');
define('TEXT_BANNERS_HTML_TEXT', 'Texte HTML :');
define('TEXT_BANNERS_HTML_TEXT_NOTE', 'Ici, vous pouvez saisir directement le code HTML d\'un service d\'affiliation pour l\'affichage de la bannière.');
define('TEXT_BANNERS_EXPIRES_ON', 'Valable jusqu\'au :');
define('TEXT_BANNERS_OR_AT', 'l\'arnaque');
define('TEXT_BANNERS_IMPRESSIONS', 'Imprimés/publicités.');
define('TEXT_BANNERS_SCHEDULED_AT', 'Valable depuis :');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Commentaire de la bannière :</b><ul><li>Vous pouvez utiliser des bannières d\'image ou des bannières de texte HTML, les deux ne sont pas possibles en même temps.</li><li>Si vous utilisez les deux types de bannières en même temps, seule la bannière de texte HTML sera affichée.</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Remarque :</b><ul><li>Vous devez avoir un accès en écriture au répertoire des images.</li><li>Ne remplissez pas le champ "Destination de l\'image (enregistrer sur)" si vous ne souhaitez pas copier une image sur votre serveur (par exemple, si l\'image est déjà sur le serveur).</li><li>Le champ "Image destination (save to)" doit être un répertoire existant avec "/" à la fin (par exemple, banners/).</li></ul>');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Commentaire sur la validité :</b><ul><li>Ne remplissez qu\'un seul champ.</li><li>Si la bannière doit être affichée indéfiniment, ne saisissez rien dans ces champs.</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Valable à partir du commentaire :</b><ul><li>Lorsque vous utilisez cette fonction, la bannière ne sera affichée qu\'à partir de la date spécifiée.</li><li>Toutes les bannières dotées de cette fonction sont affichées comme désactivées jusqu\'à ce qu\'elles soient activées.</li></ul>');
define('TEXT_BANNERS_IMAGE_TITLE', 'Titre de l\'image');
define('TEXT_BANNERS_IMAGE_TITLE_NOTE', '');
define('TEXT_BANNERS_IMAGE_ALT', 'Image Description');
define('TEXT_BANNERS_IMAGE_ALT_NOTE', '');

define('TEXT_BANNERS_DATE_ADDED', 'ajouté sur :');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Validité à partir de : <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Valable jusqu\'à : <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Validité jusqu\'à : <b>%s</b> impressions/annonces');
define('TEXT_BANNERS_STATUS_CHANGE', 'Statut modifié : %s');

define('TEXT_BANNERS_DATA', 'D<br />A<br />T<br />E<br />N');
define('TEXT_BANNERS_LAST_3_DAYS', '3 derniers jours');
define('TEXT_BANNERS_BANNER_VIEWS', 'Annonces');
define('TEXT_BANNERS_BANNER_CLICKS', 'Clics sur la bannière');
define('TEXT_BANNERS_SORT', 'Séquence :');
define('TEXT_BANNERS_SORT_NOTE', 'Cette commande n\'affecte que les curseurs dynamiques et non les bannières statiques.');

define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer cette bannière ?');
define('TEXT_INFO_DELETE_IMAGE', 'Borrar imagen de banner');

define('SUCCESS_BANNER_INSERTED', 'Succès : La bannière a été insérée.');
define('SUCCESS_BANNER_UPDATED', 'Succès : La bannière a été mise à jour.');
define('SUCCESS_BANNER_REMOVED', 'Succès : La bannière a été retirée.');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Succès : Le statut de la bannière a été mis à jour.');

define('ERROR_BANNER_TITLE_REQUIRED', 'Erreur : Un titre de bannière est requis.');
define('ERROR_BANNER_GROUP_REQUIRED', 'Erreur : Un groupe de bannières est requis.');
define('ERROR_BANNER_IMAGE_HTML_REQUIRED', 'Erreur : Une image de bannière ou un texte HTML est requis.');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le répertoire cible %s n\'existe pas.');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Erreur : Le répertoire cible %s n\'est pas accessible en écriture.');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Erreur : L\'image n\'existe pas.');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Erreur : Impossible de supprimer l\'image.');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Erreur : drapeau d\'état inconnu.');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le répertoire \'graphs\' n\'existe pas ! Veuillez créer un répertoire \'graphs\' dans le répertoire \'images\'.');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Erreur : Le répertoire \'graphs\' est protégé en écriture !');

define('TEXT_BANNERS_DATE_FORMAT', 'AAAA-MM-DD');

define('TEXT_BANNERS_LANGUAGE', 'Langue :');
define('TEXT_BANNERS_LANGUAGE_NOTE', 'Dans quelle langue la bannière doit-elle apparaître ?');
define('TEXT_NO_FILE', '-- aucun fichier --');
define('TEXT_BANNERS_LATEST_STATISTICS', '%s jours Statistiques');
