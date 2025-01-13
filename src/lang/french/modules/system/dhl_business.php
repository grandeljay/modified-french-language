<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

  define('MODULE_DHL_BUSINESS_TEXT_TITLE', 'Connexion DHL');
  define('MODULE_DHL_BUSINESS_TEXT_DESCRIPTION', 'Imprimez facilement des étiquettes de colis DHL à partir de la boutique.');

  define('MODULE_DHL_BUSINESS_STATUS_TITLE', 'Statut');
  define('MODULE_DHL_BUSINESS_STATUS_DESC', 'Activer le module');
  define('MODULE_DHL_BUSINESS_USER_TITLE', '<hr noshade>Utilisateur');
  define('MODULE_DHL_BUSINESS_USER_DESC', 'Nom d\'utilisateur du portail clients professionnels DHL');
  define('MODULE_DHL_BUSINESS_SIGNATURE_TITLE', 'Mot de passe');
  define('MODULE_DHL_BUSINESS_SIGNATURE_DESC', 'Mot de passe du portail clients professionnels DHL');
  define('MODULE_DHL_BUSINESS_EKP_TITLE', 'EKP');
  define('MODULE_DHL_BUSINESS_EKP_DESC', 'Numéro de client DHL');
  define('MODULE_DHL_BUSINESS_ACCOUNT_TITLE', 'Compte');
  define('MODULE_DHL_BUSINESS_ACCOUNT_DESC', 'ID de compte au format ISO2:ID séparé par une virgule (par défaut WORLD:01).<br>Si le colis ou le retour a un ID différent, ajoutez PK (colis), WP (colis) ou RT (retour). Exemple : WORLD:01PK,WORLD:02WP,WORLD:03RT');
  define('MODULE_DHL_BUSINESS_PREFIX_TITLE', 'Référence de l\'expéditeur Préfixe');
  define('MODULE_DHL_BUSINESS_PREFIX_DESC', 'Indiquez un préfixe pour la référence de l\'expéditeur. Le numéro de commande sera automatiquement ajouté.');
  define('MODULE_DHL_BUSINESS_WEIGHT_CN23_TITLE', 'Poids CN23');
  define('MODULE_DHL_BUSINESS_WEIGHT_CN23_DESC', 'Indiquez le poids de l\'article pour la déclaration en douane, si aucun n\'est défini pour l\'article.');

  define('MODULE_DHL_BUSINESS_NOTIFICATION_TITLE', '<hr noshade>Notification');
  define('MODULE_DHL_BUSINESS_NOTIFICATION_DESC', 'Faut-il choisir la notification via DHL comme option par défaut ?<br>Le client est informé de l\'expédition par DHL par e-mail.<br><b>Remarque :</b> le client doit donner son accord pour que son adresse e-mail soit transmise.');
  define('MODULE_DHL_BUSINESS_STATUS_UPDATE_TITLE', 'Mise à jour de la notification et du statut');
  define('MODULE_DHL_BUSINESS_STATUS_UPDATE_DESC', 'Le client est averti par e-mail, y compris les informations de suivi, et la commande est placée sous ce statut.');
  define('MODULE_DHL_BUSINESS_CODING_TITLE', 'Codage de guidage');
  define('MODULE_DHL_BUSINESS_CODING_DESC', 'Faut-il présélectionner le code de guidage par défaut ?');
  define('MODULE_DHL_BUSINESS_PRODUCT_TITLE', 'Produit');
  define('MODULE_DHL_BUSINESS_PRODUCT_DESC', 'Quel produit doit être présélectionné par défaut ?');
  define('MODULE_DHL_BUSINESS_DISPLAY_LABEL_TITLE', 'Afficher l\'étiquette');
  define('MODULE_DHL_BUSINESS_DISPLAY_LABEL_DESC', 'L\'étiquette DHL doit-elle être affichée (popup) après la création ?');
  define('MODULE_DHL_BUSINESS_RETOURE_TITLE', 'Étiquette de retour');
  define('MODULE_DHL_BUSINESS_RETOURE_DESC', 'Faut-il également créer une étiquette de retour ?');
  define('MODULE_DHL_BUSINESS_PERSONAL_TITLE', 'En main propre');
  define('MODULE_DHL_BUSINESS_PERSONAL_DESC', 'Faut-il présélectionner le mode manuel par défaut ?');
  define('MODULE_DHL_BUSINESS_BULKY_TITLE', 'Objets encombrants');
  define('MODULE_DHL_BUSINESS_BULKY_DESC', 'Faut-il présélectionner un colis encombrant par défaut ?');
  define('MODULE_DHL_BUSINESS_NO_NEIGHBOUR_TITLE', 'Pas de livraison de proximité');
  define('MODULE_DHL_BUSINESS_NO_NEIGHBOUR_DESC', 'Ne faut-il pas présélectionner une livraison de proximité par défaut ?');
  define('MODULE_DHL_BUSINESS_PARCEL_OUTLET_TITLE', 'Routage des magasins');
  define('MODULE_DHL_BUSINESS_PARCEL_OUTLET_DESC', 'Faut-il présélectionner le routage des points de vente par défaut ?');
  define('MODULE_DHL_BUSINESS_AVS_TITLE', 'Vérification de l\'âge');
  define('MODULE_DHL_BUSINESS_AVS_DESC', 'Qu\'est-ce qui doit être présélectionné par défaut pour la vérification de l\'âge (0 est désactivé) ?');
  define('MODULE_DHL_BUSINESS_IDENT_TITLE', 'Vérification de l\'âge');
  define('MODULE_DHL_BUSINESS_IDENT_DESC', 'Qu\'est-ce qui doit être présélectionné par défaut pour la vérification de l\'âge (0 est désactivé) ?');
  define('MODULE_DHL_BUSINESS_PREMIUM_TITLE', 'Premium');
  define('MODULE_DHL_BUSINESS_PREMIUM_DESC', 'Faut-il présélectionner Premium comme standard ?');
  define('MODULE_DHL_BUSINESS_ENDORSEMENT_TITLE', 'Disposition anticipée');
  define('MODULE_DHL_BUSINESS_ENDORSEMENT_DESC', 'Comment les colis internationaux doivent-ils être traités s\'ils ne peuvent pas être livrés ?');
  define('MODULE_DHL_BUSINESS_DUTYPAID_TITLE', 'Envoi postal dédouané');
  define('MODULE_DHL_BUSINESS_DUTYPAID_DESC', 'La Deutsche Post et l\'expéditeur prennent en charge les droits d\'importation à la place du destinataire.');
  define('MODULE_DHL_BUSINESS_DROPPOINT_TITLE', 'Point de dépôt le plus proche');
  define('MODULE_DHL_BUSINESS_DROPPOINT_DESC', 'Livraison à la station de colisage la plus proche de l\'adresse du destinataire de l\'envoi');
  define('MODULE_DHL_BUSINESS_SIGNED_TITLE', 'Destinataire Signature');
  define('MODULE_DHL_BUSINESS_SIGNED_DESC', 'La livraison doit-elle être signée par le destinataire et non par le chauffeur DHL ?');

  define('MODULE_DHL_BUSINESS_COMPANY_TITLE', '<hr noshade>Détails du client<br/>');
  define('MODULE_DHL_BUSINESS_COMPANY_DESC', 'Société :');
  define('MODULE_DHL_BUSINESS_FIRSTNAME_TITLE', '');
  define('MODULE_DHL_BUSINESS_FIRSTNAME_DESC', 'Prénom :');
  define('MODULE_DHL_BUSINESS_LASTNAME_TITLE', '');
  define('MODULE_DHL_BUSINESS_LASTNAME_DESC', 'Nom de famille :');
  define('MODULE_DHL_BUSINESS_ADDRESS_TITLE', '');
  define('MODULE_DHL_BUSINESS_ADDRESS_DESC', 'Adresse :');
  define('MODULE_DHL_BUSINESS_POSTCODE_TITLE', '');
  define('MODULE_DHL_BUSINESS_POSTCODE_DESC', 'CODE POSTAL :');
  define('MODULE_DHL_BUSINESS_CITY_TITLE', '');
  define('MODULE_DHL_BUSINESS_CITY_DESC', 'Ville :');
  define('MODULE_DHL_BUSINESS_TELEPHONE_TITLE', '');
  define('MODULE_DHL_BUSINESS_TELEPHONE_DESC', 'Téléphone :');

  define('MODULE_DHL_BUSINESS_ACCOUNT_OWNER_TITLE', '<hr noshade>Données bancaires<br/>');
  define('MODULE_DHL_BUSINESS_ACCOUNT_OWNER_DESC', 'Titulaire du compte :');
  define('MODULE_DHL_BUSINESS_ACCOUNT_NUMBER_TITLE', '');
  define('MODULE_DHL_BUSINESS_ACCOUNT_NUMBER_DESC', 'Numéro de compte :');
  define('MODULE_DHL_BUSINESS_BANK_CODE_TITLE', '');
  define('MODULE_DHL_BUSINESS_BANK_CODE_DESC', 'Code bancaire :');
  define('MODULE_DHL_BUSINESS_BANK_NAME_TITLE', '');
  define('MODULE_DHL_BUSINESS_BANK_NAME_DESC', 'Nom de la banque :');
  define('MODULE_DHL_BUSINESS_IBAN_TITLE', '');
  define('MODULE_DHL_BUSINESS_IBAN_DESC', 'IBAN :');
  define('MODULE_DHL_BUSINESS_BIC_TITLE', '');
  define('MODULE_DHL_BUSINESS_BIC_DESC', 'BIC :');
