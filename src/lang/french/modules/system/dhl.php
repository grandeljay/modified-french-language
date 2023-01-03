<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_DHL_TEXT_TITLE', 'Connexion DHL');
define('MODULE_DHL_TEXT_DESCRIPTION', 'Imprimez commodément les étiquettes de colis DHL depuis la boutique.');

define('MODULE_DHL_STATUS_TITLE', 'État');
define('MODULE_DHL_STATUS_DESC', 'Activer le module');
define('MODULE_DHL_USER_TITLE', '<hr noshade>Utilisateur');
define('MODULE_DHL_USER_DESC', 'Nom d\'utilisateur du portail client DHL Business');
define('MODULE_DHL_SIGNATURE_TITLE', 'Mot de passe');
define('MODULE_DHL_SIGNATURE_DESC', 'Mot de passe du portail client DHL Trade');
define('MODULE_DHL_EKP_TITLE', 'EKP');
define('MODULE_DHL_EKP_DESC', 'Numéro de client DHL');
define('MODULE_DHL_ACCOUNT_TITLE', 'Compte');
define('MODULE_DHL_ACCOUNT_DESC', 'ID du compte au format ISO2:ID séparé par des virgules (norme WORLD:01).<br>Si l\'expédition de marchandises a un ID différent, ajoutez PK (colis) ou WP (expédition de marchandises). Exemple : WORLD:01PK,WORLD:02WP</br>');
define('MODULE_DHL_PREFIX_TITLE', 'Préfixe de référence de l\'expéditeur');
define('MODULE_DHL_PREFIX_DESC', 'Entrez un préfixe pour la référence de l\'expéditeur. Le numéro de commande est ajouté automatiquement.');
define('MODULE_DHL_WEIGHT_CN23_TITLE', 'Poids CN23');
define('MODULE_DHL_WEIGHT_CN23_DESC', 'Saisissez le poids de l\'article pour la déclaration de douane si aucun n\'a été stocké avec l\'article.');

define('MODULE_DHL_NOTIFICATION_TITLE', '<hr noshade>Notification');
define('MODULE_DHL_NOTIFICATION_DESC', 'La notification via DHL doit-elle être présélectionnée par défaut ?<br>DHL informera le client de l\'expédition par e-mail.<br><b>Remarque :</b> le client doit fournir une déclaration de consentement à la transmission de l\'adresse e-mail.</br></br>');
define('MODULE_DHL_STATUS_UPDATE_TITLE', 'Notification et mise à jour du statut');
define('MODULE_DHL_STATUS_UPDATE_DESC', 'Le client recevra une notification par courriel avec les informations de suivi et la commande sera déplacée vers ce statut.');
define('MODULE_DHL_CODING_TITLE', 'Guide de codage');
define('MODULE_DHL_CODING_DESC', 'Le code d\'orientation doit-il être présélectionné par défaut ?');
define('MODULE_DHL_PRODUCT_TITLE', 'Produit');
define('MODULE_DHL_PRODUCT_DESC', 'Quel produit doit être présélectionné en standard ?');
define('MODULE_DHL_DISPLAY_LABEL_TITLE', 'Afficher l\'étiquette');
define('MODULE_DHL_DISPLAY_LABEL_DESC', 'L\'étiquette DHL (pop-up) doit-elle apparaître après la création ?');
define('MODULE_DHL_RETOURE_TITLE', 'Retour à l\'étiquette');
define('MODULE_DHL_RETOURE_DESC', 'Une étiquette de retour doit-elle également être générée ?');
define('MODULE_DHL_PERSONAL_TITLE', 'Main propre');
define('MODULE_DHL_PERSONAL_DESC', 'La valeur par défaut doit-elle être "Main propre" ?');
define('MODULE_DHL_BULKY_TITLE', 'Marchandises volumineuses');
define('MODULE_DHL_BULKY_DESC', 'Les marchandises encombrantes doivent-elles être présélectionnées en standard ?');
define('MODULE_DHL_NO_NEIGHBOUR_TITLE', 'Pas de livraison dans le quartier');
define('MODULE_DHL_NO_NEIGHBOUR_DESC', 'La non-livraison dans le quartier doit-elle être présélectionnée par défaut ?');
define('MODULE_DHL_PARCEL_OUTLET_TITLE', 'Routage des filiales');
define('MODULE_DHL_PARCEL_OUTLET_DESC', 'Le routage des branches doit-il être présélectionné par défaut ?');
define('MODULE_DHL_AVS_TITLE', 'Âge Contrôle visuel');
define('MODULE_DHL_AVS_DESC', 'Qu\'est-ce qui doit être présélectionné par défaut pour la vérification de l\'âge (0 est désactivé) ?');
define('MODULE_DHL_IDENT_TITLE', 'Vérification de l\'âge');
define('MODULE_DHL_IDENT_DESC', 'Qu\'est-ce qui doit être présélectionné par défaut pour la vérification de l\'âge (0 est désactivé) ?');
define('MODULE_DHL_PREMIUM_TITLE', 'Premium');
define('MODULE_DHL_PREMIUM_DESC', 'La prime devrait-elle être présélectionnée en règle générale ?');
define('MODULE_DHL_ENDORSEMENT_TITLE', 'Directive anticipée');
define('MODULE_DHL_ENDORSEMENT_DESC', 'Comment traiter les colis internationaux s\'ils ne peuvent être livrés ?');

define('MODULE_DHL_COMPANY_TITLE', '<hr noshade>Détails du client<br/>');
define('MODULE_DHL_COMPANY_DESC', 'Signature :');
define('MODULE_DHL_FIRSTNAME_TITLE', '');
define('MODULE_DHL_FIRSTNAME_DESC', 'Nombre de pila:');
define('MODULE_DHL_LASTNAME_TITLE', '');
define('MODULE_DHL_LASTNAME_DESC', 'Nom de famille :');
define('MODULE_DHL_ADDRESS_TITLE', '');
define('MODULE_DHL_ADDRESS_DESC', 'Adresse :');
define('MODULE_DHL_POSTCODE_TITLE', '');
define('MODULE_DHL_POSTCODE_DESC', 'PLZ :');
define('MODULE_DHL_CITY_TITLE', '');
define('MODULE_DHL_CITY_DESC', 'Ville :');
define('MODULE_DHL_TELEPHONE_TITLE', '');
define('MODULE_DHL_TELEPHONE_DESC', 'Téléphone :');

define('MODULE_DHL_ACCOUNT_OWNER_TITLE', '<hr noshade>Coordonnées bancaires<br/>');
define('MODULE_DHL_ACCOUNT_OWNER_DESC', 'Titulaire du compte :');
define('MODULE_DHL_ACCOUNT_NUMBER_TITLE', '');
define('MODULE_DHL_ACCOUNT_NUMBER_DESC', 'Numéro de compte :');
define('MODULE_DHL_BANK_CODE_TITLE', '');
define('MODULE_DHL_BANK_CODE_DESC', 'Code bancaire :');
define('MODULE_DHL_BANK_NAME_TITLE', '');
define('MODULE_DHL_BANK_NAME_DESC', 'Nom de la banque :');
define('MODULE_DHL_IBAN_TITLE', '');
define('MODULE_DHL_IBAN_DESC', 'IBAN :');
define('MODULE_DHL_BIC_TITLE', '');
define('MODULE_DHL_BIC_DESC', 'BIC :');
