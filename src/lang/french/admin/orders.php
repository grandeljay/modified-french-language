<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('TEXT_BANK', 'Débit direct');
define('TEXT_BANK_OWNER', 'Titulaire du compte :');
define('TEXT_BANK_NUMBER', 'Numéro de compte :');
define('TEXT_BANK_BLZ', 'BLZ :');
define('TEXT_BANK_NAME', 'Banco :');
define('TEXT_BANK_BIC', 'BIC :');
define('TEXT_BANK_IBAN', 'IBAN :');
define('TEXT_BANK_FAX', 'L\'autorisation de prélèvement est confirmée par fax.');
define('TEXT_BANK_STATUS', 'État des lieux des preuves :');
define('TEXT_BANK_PRZ', 'Méthode d\'essai :');
define('TEXT_BANK_OWNER_EMAIL', 'Adresse e-mail du titulaire du compte :');

define('TEXT_BANK_ERROR_1', 'Le numéro de compte ne correspond pas au code de tri');
define('TEXT_BANK_ERROR_2', 'Aucune procédure de vérification n\'a été définie pour ce numéro de compte.');
define('TEXT_BANK_ERROR_3', 'Numéro de compte non vérifiable Procédure de vérification non appliquée');
define('TEXT_BANK_ERROR_4', 'Numéro de compte techniquement invérifiable');
define('TEXT_BANK_ERROR_5', 'Code bancaire non trouvé !');
define('TEXT_BANK_ERROR_8', 'Aucun code bancaire n\'est fourni');
define('TEXT_BANK_ERROR_9', 'Aucun numéro de compte n\'est indiqué');
define('TEXT_BANK_ERRORCODE', 'Code d\'erreur :');

define('HEADING_TITLE', 'Demandes');
define('HEADING_TITLE_SEARCH', 'N° de commande');
define('HEADING_TITLE_STATUS', 'Statut :');

define('TABLE_HEADING_COMMENTS', 'Comentario');
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDER_TOTAL', 'Valeur totale');
define('TABLE_HEADING_DATE_PURCHASED', 'Date de la commande');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Numéro');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Article no.');
define('TABLE_HEADING_PRODUCTS', 'Article');
define('TABLE_HEADING_TAX', 'IVA');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_STATUS', 'État');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prix (hors taxes)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (incl.)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (excl.)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total');
define('TABLE_HEADING_AFTERBUY', 'Après l\'achat');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Client notifié');
define('TABLE_HEADING_DATE_ADDED', 'ajouté sur :');

define('ENTRY_CUSTOMER', 'Client :');
define('ENTRY_SOLD_TO', 'Adresse de facturation :');
define('ENTRY_TELEPHONE', 'Téléphone :');
define('ENTRY_DELIVERY_TO', 'Adresse de livraison :');
define('ENTRY_SHIP_TO', 'Adresse de livraison :');
define('ENTRY_SHIPPING_ADDRESS', 'Versandadresse :');
define('ENTRY_PICKUP_ADDRESS', 'Abholadresse :');
define('ENTRY_BILLING_ADDRESS', 'Adresse de facturation :');
define('ENTRY_PAYMENT_METHOD', 'Mode de paiement :');
define('ENTRY_SHIPPING_METHOD', 'Méthode d\'expédition :');
define('ENTRY_SUB_TOTAL', 'Sous-total :');
define('ENTRY_TAX', 'TVA :');
define('ENTRY_SHIPPING', 'Frais d\'expédition :');
define('ENTRY_TOTAL', 'Importation totale :');
define('ENTRY_DATE_PURCHASED', 'Date de la commande :');
define('ENTRY_STATUS', 'Statut :');
define('ENTRY_DATE_LAST_UPDATED', 'dernière mise à jour le :');
define('ENTRY_NOTIFY_CUSTOMER', 'Avise le client :');
define('ENTRY_NOTIFY_COMMENTS', 'Envoyez vos commentaires :');
define('ENTRY_PRINTABLE', 'Imprimir factura');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Perce les mots');
define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer cette commande ?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Créditer le nombre d\'articles en stock');
define('TEXT_DATE_ORDER_CREATED', 'créé le :');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'dernier changement :');
define('TEXT_INFO_PAYMENT_METHOD', 'Mode de paiement :');
define('TEXT_INFO_SHIPPING_METHOD', 'Méthode d\'expédition :');

define('TEXT_ALL_ORDERS', 'Toutes les commandes');
define('TEXT_NO_ORDER_HISTORY', 'Aucun historique de commande disponible');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Modifier le statut de votre commande');
define('EMAIL_TEXT_ORDER_NUMBER', 'N° de commande');
define('EMAIL_TEXT_INVOICE_URL', 'Vous pouvez vérifier votre commande à l\'adresse suivante :');
define('EMAIL_TEXT_DATE_ORDERED', 'Date de la commande :');
define('EMAIL_TEXT_STATUS_UPDATE', 'Le statut de votre commande a été mis à jour' . '\n' . 'Nouveau statut : %s' . '\n' . 'Si vous avez des questions concernant votre commande, veuillez répondre à cet e-mail' . "\nCordialement" . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Notes et commentaires sur votre commande:' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Erreur : La commande n\'existe pas !');
define('SUCCESS_ORDER_UPDATED', 'Succès : La commande a été mise à jour avec succès.');
define('WARNING_ORDER_NOT_UPDATED', 'Note : Rien n\'a été modifié. Par conséquent, cet ordre n\'a pas été mis à jour.');

define('TABLE_HEADING_DISCOUNT', 'Rabatt');
define('ENTRY_CUSTOMERS_GROUP', 'Groupe de clients :');
define('TEXT_VALIDATING', 'Non confirmé');

define('TEXT_PRODUCTS', 'Article');

define('COMMENT_SEND_ORDER_BY_ADMIN', 'Envoi de la confirmation de la commande');
define('BUTTON_ORDER_CONFIRMATION', 'Envoyer la confirmation de la commande');
define('SUCCESS_ORDER_SEND', 'Confirmation de commande envoyée avec succès');

define('ENTRY_CUSTOMERS_ADDRESS', 'Adresse du client :');
define('TEXT_ORDER', 'Ordre :');
define('TEXT_ORDER_HISTORY', 'Historique des commandes :');
define('TEXT_ORDER_STATUS', 'Statut de la commande :');

define('TABLE_HEADING_ORDERS_ID', 'Best.Nr.');
define('TEXT_SHIPPING_TO', 'Expédition vers');

define('TABLE_HEADING_COMMENTS_SENT', 'Commentaire envoyé');

define('TABLE_HEADING_TRACK_TRACE', 'Le suivi et le repérage :');
define('TABLE_HEADING_CARRIER', 'Méthode d\'expédition');
define('TABLE_HEADING_PARCEL_LINK', 'Numéro d\'expédition / numéro d\'étiquette de colis / numéro de commande / ID d\'expédition / numéro de suivi');

define('TEXT_INFO_HEADING_REVERSE_ORDER', 'Annuler la commande');
define('TEXT_INFO_REVERSE_INTRO', 'Êtes-vous sûr de vouloir annuler cette commande ?');

define('TABLE_HEADING_SHIPCLOUD', 'Shipcloud :');
define('TABLE_HEADING_PARCEL_ID', 'Numéro d\'étiquette de l\'emballage');
define('TEXT_SHIPCLOUD_STANDARD', 'Standard');
define('TEXT_SHIPCLOUD_ONE_DAY', 'Express');
define('TEXT_SHIPCLOUD_ONE_DAY_EARLY', 'Exprés 10:00');
define('TEXT_SHIPCLOUD_RETURNS', 'Volver');
define('TEXT_SHIPCLOUD_LETTER', 'Résumé du poste');
define('TEXT_SHIPCLOUD_BOOKS', 'Envoi ultérieur du livre');
define('TEXT_SHIPCLOUD_PARCEL_LETTER', 'Livraison postale');
define('TEXT_WEIGHT_PLACEHOLDER', 'Poids / Kg');
define('TEXT_SHIPCLOUD_INSURANCE_NO', 'Assurance plus élevée Non');
define('TEXT_SHIPCLOUD_INSURANCE_YES', 'Assurance plus élevée OUI');
define('TEXT_SHIPCLOUD_BULK', 'Marchandises volumineuses');
define('TEXT_SHIPCLOUD_PARCEL', 'Envase');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST', 'Courrier de marchandises');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST_UNTRACKED', 'Warenpost (pas de suivi)');
define('TEXT_SHIPCLOUD_DPAG_WARENPOST_SIGNATURE', 'Courrier des marchandises (signature)');

define('DOWNLOAD_LABEL', 'Téléchargez l\'étiquette de l\'emballage');
define('CREATE_LABEL', 'Créer une étiquette de colis');
define('TEXT_DELETE_SHIPMENT_SUCCESS', 'L\'étiquette du paquet shipcloud a été retirée.');
define('TEXT_LABEL_CREATED', 'L\'étiquette du paquet a été créée avec succès.');
define('TEXT_CARRIER_ERROR', 'Le fournisseur de services de colis n\'est pas activé dans votre compte shipcloud ou la clé API n\'est pas valide.');
define('TEXT_CARRIER_PLACEHOLDER_1', 'Description du paquet');
define('TEXT_CARRIER_PLACEHOLDER_2', 'Description de l\'envoi');

define('TEXT_DOWNLOADS', 'Téléchargements');
define('TABLE_HEADING_FILENAME', 'Nom du fichier');
define('TABLE_HEADING_EXPIRES', 'Date d\'expiration');
define('TABLE_HEADING_DOWNLOADS', 'Nombre de téléchargements');
define('TABLE_HEADING_DAYS', 'Nombre de jours');

define('ENTRY_SEND_TRACKING_INFO', 'Informations sur l\'expédition :');

define('TEXT_ORDERS_STATUS_FILTER', 'Filtre sur l\'état de la commande');

define('TABLE_HEADING_DATE', 'Date');

define('BUTTON_ORDER_MAIL_STEP', 'Envoyer la confirmation de la commande');
define('COMMENT_SEND_ORDER_MAIL_STEP', 'Envoi de la confirmation de la commande');
define('SUCCESS_ORDER_MAIL_STEP_SEND', 'Confirmation de commande envoyée avec succès');

define('TABLE_HEADING_INVOICE_NUMBER', 'Rg.Nr.');
define('BUTTON_BILL', 'Créer un numéro de facture');
define('NOT_ASSIGNED', 'pas encore alloué !');
