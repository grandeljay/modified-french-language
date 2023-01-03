<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Sauvegarde de la base de données');

define('TABLE_HEADING_TITLE', 'Titre');
define('TABLE_HEADING_FILE_DATE', 'Date');
define('TABLE_HEADING_FILE_SIZE', 'Gr&ouml;sse');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nouveau fusible');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurer localement');
define('TEXT_INFO_NEW_BACKUP', 'Veuillez NE PAS interrompre le processus de sauvegarde. Cela peut prendre plusieurs minutes.');
define('TEXT_INFO_UNPACK', '<br /><br />(après avoir extrait les fichiers de l\'archive)');
define('TEXT_INFO_RESTORE', 'N\'interrompez PAS le processus de restauration.<br /><br />Plus le fichier de sauvegarde est volumineux, plus le processus de restauration sera long.<br /><br />Veuillez utiliser le client mysql si possible.<br /><br />Exemple :<br /><br /><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' &lt; %s %s </b> ');
define('TEXT_INFO_RESTORE_LOCAL', 'N\'interrompez PAS le processus de restauration.<br /><br />Plus le fichier de sauvegarde est volumineux, plus la restauration sera longue !');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Le fichier à télécharger doit être un fichier nommé raw sql (texte uniquement).');
define('TEXT_INFO_DATE', 'Date :');
define('TEXT_INFO_SIZE', 'Talla :');
define('TEXT_INFO_COMPRESSION', 'Comprima :');
define('TEXT_INFO_USE_GZIP', 'Avec GZIP');
define('TEXT_INFO_USE_ZIP', 'Avec ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Non compressé (SQL brut)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Téléchargement uniquement (ne pas enregistrer sur le serveur)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Utilisez une connexion HTTPS sécurisée');
define('TEXT_NO_EXTENSION', 'Aucun');
define('TEXT_BACKUP_DIRECTORY', 'Répertoire de sauvegarde :');
define('TEXT_LAST_RESTORATION', 'Dernière restauration :');
define('TEXT_FORGET', '<u>(omis</u>)');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer cette sauvegarde ?');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le répertoire de sauvegarde n\'existe pas.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Erreur : Le répertoire de sauvegarde est protégé en écriture.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Erreur : Le lien de téléchargement n\'est pas acceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succès : La dernière date de restauration a été supprimée.');
define('SUCCESS_DATABASE_SAVED', 'Succès : La base de données a été sauvegardée.');
define('SUCCESS_DATABASE_RESTORED', 'Succès : La base de données a été restaurée.');
define('SUCCESS_BACKUP_DELETED', 'Succès : Le fichier de sauvegarde a été supprimé.');
define('SUCCESS_BACKUP_UPLOAD', 'Correct : Le fichier de sauvegarde a été téléchargé avec succès.');

define('TEXT_COMPLETE_INSERTS', "<b>Complétez 'INSERT</b><br> - Les noms des champs sont saisis sur chaque ligne INSERT (étend la sauvegarde)");
define('TEXT_INFO_TABLES_IN_BACKUP', '<br />' . "\n" . '<b>tables dans cette sauvegarde:</b>' . "\n");
define('TEXT_INFO_NO_INFORMATION', 'Aucune information disponible');
define('TEXT_CONVERT_TO_UTF', 'Convertir la base de données en UTF-8');
define('TEXT_IMPORT_UTF', 'Restaurer la base de données UTF-8');
define('TEXT_REMOVE_COLLATE', "<b>Pas de codage de caractères 'COLLATE' et 'DEFAULT CHARSET'.</b><br> - Les informations relatives au codage des caractères ne sont pas insérées. Utile lors de la migration vers un autre encodage de caractères de la BD.");
define('TEXT_REMOVE_ENGINE', "<b>Pas de moteurs de stockage MOTOR</b><br> - Les détails du moteur de stockage (MyISAM,InnoDB) ne sont pas insérés.");

define('TEXT_IMPORT_UTF8_NOTICE', '<b>Attention :</b> la base de données sera convertie en UTF-8.');
define('TEXT_INFO_CHARSET', 'Jeu de caractères :');

define('TEXT_TABLES_BACKUP_TYPE', '<b>Copie de sauvegarde</b><br> - Quelles tables doivent être sauvegardées ?');
define('TEXT_BACKUP_ALL', 'Toutes les tables');
define('TEXT_BACKUP_CUSTOM', 'Peintures sélectionnées');
define('TEXT_TABLES_TO_BACKUP', '<b>Les tableaux suivants doivent être conservés :</b>');
define('TEXT_CHECK_ALL_TABLES', 'Sélectionnez toutes les tables');
