<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Gestionnaire de sauvegarde des bases de données');

define('TEXT_INFO_DO_BACKUP', 'La base de données est sauvegardée !');
define('TEXT_INFO_DO_BACKUP_OK', 'La sauvegarde de la base de données a réussi.');
define('TEXT_INFO_DO_GZIP', 'Le fichier de sauvegarde est emballé !');
define('TEXT_INFO_WAIT', 'Veuillez patienter !');

define('TEXT_INFO_DO_RESTORE', 'La base de données est restaurée !');
define('TEXT_INFO_DO_RESTORE_OK', 'La base de données a été restaurée avec succès !');
define('TEXT_INFO_DO_GUNZIP', 'Le fichier de sauvegarde est dézippé !');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Erreur : le répertoire pour la sauvegarde n'existe pas. Veuillez corriger l'erreur dans votre configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Erreur : Impossible d\'écrire dans le répertoire de sauvegarde.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Erreur : Le lien de téléchargement n\'est pas acceptable.');
define('ERROR_DECOMPRESSOR_NOT_AVAILABLE', 'Erreur : Aucun décompresseur approprié n\'est disponible.');
define('ERROR_UNKNOWN_FILE_TYPE', 'Erreur : Type de fichier inconnu.');
define('ERROR_RESTORE_FAILES', 'Erreur : La restauration a échoué.');
define('ERROR_DATABASE_SAVED', 'Erreur : La base de données n\'a pas pu être sauvegardée.');
define('ERROR_TEXT_PATH', 'Erreur : Le chemin vers mysqldump n\'est pas trouvé ou spécifié !');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Correct : La date de la dernière restauration a été supprimée.');
define('SUCCESS_DATABASE_SAVED', 'Correct : La base de données a été sauvegardée.');
define('SUCCESS_DATABASE_RESTORED', 'Réussi : La base de données a été restaurée.');
define('SUCCESS_BACKUP_DELETED', 'Réussi : la sauvegarde a été supprimée.');

define('TEXT_BACKUP_UNCOMPRESSED', 'Le fichier de sauvegarde a été décompressé : ');

define('TEXT_SIMULATION', '<br>(Simulation avec fichier journal)');
