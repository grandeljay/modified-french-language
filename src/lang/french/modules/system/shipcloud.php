<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

if (defined('_VALID_XTC')) {
define('MODULE_SHIPCLOUD_TEXT_TITLE', 'shipcloud - la nouvelle génération d\'expédition de colis');
define('MODULE_SHIPCLOUD_TEXT_DESCRIPTION', 'Imprimez commodément des étiquettes de colis depuis la boutique.');
define('MODULE_SHIPCLOUD_STATUS_TITLE', 'État');
define('MODULE_SHIPCLOUD_STATUS_DESC', 'Activer le module');
define('MODULE_SHIPCLOUD_API_TITLE', '<hr noshade>API');
define('MODULE_SHIPCLOUD_API_DESC', 'Clave API de shipcloud');
define('MODULE_SHIPCLOUD_PARCEL_TITLE', '<hr noshade>Taille des conteneurs');
define('MODULE_SHIPCLOUD_PARCEL_DESC', 'Veuillez saisir les mesures des conteneurs en cm comme indiqué ci-dessous : Longueur,Largeur,Hauteur ;<br/>Vous pouvez séparer plusieurs tailles de parcelles par un point-virgule ( ;). Par exemple : 20,40,30;15,20,20,20,20 ;');
define('MODULE_SHIPCLOUD_COMPANY_TITLE', '<hr noshade>Détails du client<br/>');
define('MODULE_SHIPCLOUD_COMPANY_DESC', 'Signature :');
define('MODULE_SHIPCLOUD_FIRSTNAME_TITLE', '');
define('MODULE_SHIPCLOUD_FIRSTNAME_DESC', 'Nombre de pila:');
define('MODULE_SHIPCLOUD_LASTNAME_TITLE', '');
define('MODULE_SHIPCLOUD_LASTNAME_DESC', 'Nom de famille :');
define('MODULE_SHIPCLOUD_ADDRESS_TITLE', '');
define('MODULE_SHIPCLOUD_ADDRESS_DESC', 'Adresse :');
define('MODULE_SHIPCLOUD_POSTCODE_TITLE', '');
define('MODULE_SHIPCLOUD_POSTCODE_DESC', 'PLZ :');
define('MODULE_SHIPCLOUD_CITY_TITLE', '');
define('MODULE_SHIPCLOUD_CITY_DESC', 'Ville :');
define('MODULE_SHIPCLOUD_TELEPHONE_TITLE', '');
define('MODULE_SHIPCLOUD_TELEPHONE_DESC', 'Téléphone :');
define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_TITLE', '');
define('MODULE_SHIPCLOUD_ACCOUNT_IBAN_DESC', 'IBAN :');
define('MODULE_SHIPCLOUD_ACCOUNT_BIC_TITLE', '');
define('MODULE_SHIPCLOUD_ACCOUNT_BIC_DESC', 'BIC :');
define('MODULE_SHIPCLOUD_BANK_NAME_TITLE', '<hr noshade>Coordonnées bancaires<br/>');
define('MODULE_SHIPCLOUD_BANK_NAME_DESC', 'Banco :');
define('MODULE_SHIPCLOUD_BANK_HOLDER_TITLE', '');
define('MODULE_SHIPCLOUD_BANK_HOLDER_DESC', 'Titulaire du compte :');
define('MODULE_SHIPCLOUD_LOG_TITLE', '<hr noshade>Registro');
define('MODULE_SHIPCLOUD_LOG_DESC', 'le fichier journal est stocké dans le dossier /log.');
define('MODULE_SHIPCLOUD_EMAIL_TITLE', '<hr noshade>Notification par e-mail');
define('MODULE_SHIPCLOUD_EMAIL_DESC', 'Le client doit-il être informé par e-mail ?');
define('MODULE_SHIPCLOUD_EMAIL_TYPE_TITLE', '<hr noshade>Notification');
define('MODULE_SHIPCLOUD_EMAIL_TYPE_DESC', 'Le client doit-il être informé par le magasin ou par shipcloud ?<br><b><Note:</b>Pour recevoir une notification de la boutique, un webhook doit être défini sur cette URL:</br>' . (((defined('RUN_MODE_ADMIN') && function_exists('xtc_catalog_href_link'))) ? xtc_catalog_href_link('callback/shipcloud/callback.php', '', 'SSL', false) : '') . ' ont été définis dans shipcloud.');
}

define('SHIPMENT.TRACKING.SHIPCLOUD_LABEL_CREATED', 'Étiquette de colis créée dans shipcloud');
define('SHIPMENT.TRACKING.LABEL_CREATED', 'Création d\'une étiquette de paquet');
define('SHIPMENT.TRACKING.PICKED_UP', 'Colis récupéré par le livreur');
define('SHIPMENT.TRACKING.TRANSIT', 'Le paquet est en route');
define('SHIPMENT.TRACKING.OUT_FOR_DELIVERY', 'Le paquet est livré');
define('SHIPMENT.TRACKING.DELIVERED', 'Paquet entrelacé');
define('SHIPMENT.TRACKING.AWAITS_PICKUP_BY_RECEIVER', 'En attente de collecte par les clients');
define('SHIPMENT.TRACKING.CANCELED', 'L\'étiquette sur le paquet était polie');
define('SHIPMENT.TRACKING.DELAYED', 'Livraison retardée');
define('SHIPMENT.TRACKING.EXCEPTION', 'Un problème a été détecté');
define('SHIPMENT.TRACKING.NOT_DELIVERED', 'non délivré');
define('SHIPMENT.TRACKING.NOTIFICATION', 'Message interne : les événements ultérieurs au sein de l\'envoi nécessitent des informations plus élaborées.');
define('SHIPMENT.TRACKING.UNKNOWN', 'Statut inconnu');
