<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_TITLE', 'Débit direct');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_DESCRIPTION', 'Débit direct');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_INFO', '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK', 'Débit direct');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EMAIL_FOOTER', defined('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE') ? 'Remarque : Vous pouvez télécharger notre formulaire de télécopie à ' . HTTP_SERVER . DIR_WS_CATALOG . MODULE_PAYMENT_TRANSFERT_BANK_URL_NOTE . ' et nous le renvoyer complété.' : '');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_INFO', ((defined('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY') && 'True' !== MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY) ? 'Veuillez noter que le prélèvement automatique sans IBAN/BIC <b>n\'</b> est possible <b>qu\'à</b> partir d\'un <b>compte courant allemand</b>. En spécifiant l\'IBAN/BIC, vous pouvez utiliser la procédure de prélèvement automatique <b>dans toute l\'UE</b>.<br/>' : '') . 'Les champs marqués d\'un (*) sont obligatoires. Pour un IBAN allemand, le BIC est facultatif.<br/><br/>');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER', 'Titulaire du compte:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_OWNER_EMAIL', 'Titulaire du compte e-mail:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NUMBER', 'WhoNr / IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_IBAN', 'IBAN:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BLZ', 'BLZ / BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_BIC', 'BIC:*');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_NAME', 'Banco :');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_FAX', 'L\'autorisation de prélèvement est confirmée par fax.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR', 'ERROR : ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_1', 'Le numéro de compte et le code bancaire ne correspondent pas, veuillez corriger vos informations.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_2', 'Ce numéro de compte n\'est pas vérifiable, veuillez vérifier à nouveau votre entrée pour en être sûr.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_3', 'Ce numéro de compte n\'est pas vérifiable, veuillez vérifier à nouveau votre entrée pour en être sûr.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_4', 'Ce numéro de compte n\'est pas vérifiable, veuillez vérifier à nouveau votre entrée pour en être sûr.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_5', 'Ce code bancaire n\'existe pas, veuillez corriger votre saisie.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_8', 'Vous n\'avez pas saisi un code bancaire correct.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_9', 'Vous n\'avez pas saisi un numéro de compte correct.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_10', 'Vous n\'avez pas spécifié de titulaire de compte.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_11', 'Vous n\'avez pas saisi un BIC correct.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_12', 'Vous n\'avez pas saisi un IBAN correct.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_13', 'Adresse e-mail non valide pour la notification au titulaire du compte.');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_BANK_ERROR_14', 'Il n\'y a pas d\'autorisation de débit direct pour ce pays SEPA.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE', 'Suggestion :');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE2', 'Si, pour des raisons de sécurité, vous ne souhaitez pas transmettre vos coordonnées bancaires via l\'internet<br />, vous pouvez télécharger notre ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE3', 'Faxformulaire');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_NOTE4', ' et renvoyez-le nous complété.');

define('JS_BANK_BLZ', '* Veuillez entrer le BLZ / BIC de votre banque !');
define('JS_BANK_NAME', '* Veuillez entrer le nom de votre banque.');
define('JS_BANK_NUMBER', '* Veuillez saisir votre numéro de compte / numéro IBAN');
define('JS_BANK_OWNER', '* Veuillez saisir le nom du titulaire du compte.');
define('JS_BANK_OWNER_EMAIL', '* Veuillez saisir l\'adresse e-mail du titulaire du compte.');

define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_TITLE', 'Utiliser la consultation de la base de données pour vérifier le code de tri de la banque ?');
define('MODULE_PAYMENT_BANKTRANSFER_DATABASE_BLZ_DESC', 'Voulez-vous utiliser la base de données pour le contrôle de plausibilité du code de tri bancaire ("true") ?<br/>Assurez-vous que les codes de tri bancaire dans la base de données sont à jour.<br/><br/>Si "false" (par défaut), le fichier blz.csv fourni est utilisé, qui peut contenir des entrées obsolètes !');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_TITLE', 'Fax-URL');
define('MODULE_PAYMENT_BANKTRANSFER_URL_NOTE_DESC', 'Le fichier de confirmation de la télécopie. Doit se trouver dans le répertoire du catalogue');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_TITLE', 'Autoriser la confirmation par fax');
define('MODULE_PAYMENT_BANKTRANSFER_FAX_CONFIRMATION_DESC', 'Voulez-vous autoriser la confirmation par fax ?');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_BANKTRANSFER_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_TITLE', 'Définir le statut de la commande');
define('MODULE_PAYMENT_BANKTRANSFER_ORDER_STATUS_ID_DESC', 'Définissez les commandes passées avec ce module à ce statut.');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_TITLE', 'Zone de paiement');
define('MODULE_PAYMENT_BANKTRANSFER_ZONE_DESC', 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_TITLE', 'Zones autorisées');
define('MODULE_PAYMENT_BANKTRANSFER_ALLOWED_DESC', 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_TITLE', 'Autoriser les paiements par virement bancaire');
define('MODULE_PAYMENT_BANKTRANSFER_STATUS_DESC', 'Voulez-vous autoriser les paiements par virement bancaire ?');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_TITLE', 'Conditions de commande');
define('MODULE_PAYMENT_BANKTRANSFER_MIN_ORDER_DESC', 'Le nombre minimum de commandes qu\'un client doit avoir pour que l\'option soit disponible.');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_TITLE', 'Mode IBAN');
define('MODULE_PAYMENT_BANKTRANSFER_IBAN_ONLY_DESC', 'Voulez-vous uniquement autoriser les paiements IBAN ?');

define('MODULE_PAYMENT_BANKTRANSFER_CI_TITLE', 'Numéro d\'identification du créancier (CI)');
define('MODULE_PAYMENT_BANKTRANSFER_CI_DESC', 'Veuillez entrer votre ID de créancier SEPA ici');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_TITLE', 'Préfixe pour la référence du mandat (facultatif)');
define('MODULE_PAYMENT_BANKTRANSFER_REFERENCE_PREFIX_DESC', 'Entrez ici un préfixe pour la référence du mandat');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_TITLE', 'Mature');
define('MODULE_PAYMENT_BANKTRANSFER_DUE_DELAY_DESC', 'Saisissez la période (en jours) après laquelle vous exécuterez le prélèvement automatique.');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_EXTENDED_DESCRIPTION', '<strong><font color="red">ATTENTION :</font></strong> Veuillez mettre à jour les codes bancaires');

define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_SUCCESS', 'Mise à jour des codes bancaires : ');
define('MODULE_PAYMENT_BANKTRANSFER_TEXT_UPDATE_ERROR', 'Les codes bancaires n\'ont pas pu être mis à jour.');
