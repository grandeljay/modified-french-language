<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Groupes de clients');

define('ENTRY_CUSTOMERS_FSK18', 'Bloquer l\'achat d\'articles FSK18 ?');
define('ENTRY_CUSTOMERS_FSK18_DISPLAY', 'Déploiement des articles FSK18 ?');
define('ENTRY_CUSTOMERS_STATUS_ADD_TAX', 'Afficher la TVA sur la facture');
define('ENTRY_CUSTOMERS_STATUS_MIN_ORDER', 'Valeur minimale de la commande :');
define('ENTRY_CUSTOMERS_STATUS_MAX_ORDER', 'Valeur maximale de la commande :');
define('ENTRY_CUSTOMERS_STATUS_BT_PERMISSION', 'Par débit direct');
define('ENTRY_CUSTOMERS_STATUS_CC_PERMISSION', 'Par carte de crédit');
define('ENTRY_CUSTOMERS_STATUS_COD_PERMISSION', 'Contre-remboursement');
define('ENTRY_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES', 'Réduction');
define('ENTRY_CUSTOMERS_STATUS_PAYMENT_UNALLOWED', 'Introduire des méthodes de paiement non autorisées');
define('ENTRY_CUSTOMERS_STATUS_PUBLIC', 'Public');
define('ENTRY_CUSTOMERS_STATUS_SHIPPING_UNALLOWED', 'Introduire des méthodes d\'expédition non autorisées');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE', 'Prix');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX', 'Les prix incluent la TVA.');
define('ENTRY_CUSTOMERS_STATUS_WRITE_REVIEWS', 'Un groupe de clients est-il autorisé à rédiger des critiques de produits ?');
define('ENTRY_CUSTOMERS_STATUS_READ_REVIEWS', 'Le groupe de clients est-il autorisé à lire les avis sur les produits ?');
define('ENTRY_CUSTOMERS_STATUS_REVIEWS_STATUS', 'Activer automatiquement les avis sur les produits ?');
define('ENTRY_GRADUATED_PRICES', 'Prix échelonnés');
define('ENTRY_NO', 'Non');
define('ENTRY_OT_XMEMBER', 'Remise client sur la valeur totale de la commande ? :');
define('ENTRY_YES', 'Ja');

define('ERROR_REMOVE_DEFAULT_CUSTOMERS_STATUS', 'Erreur : Le groupe de clients par défaut ne peut pas être supprimé. Veuillez d\'abord définir un autre groupe de clients par défaut et réessayer.');
define('ERROR_STATUS_USED_IN_CUSTOMERS', 'Erreur : Ce groupe de clients est actuellement utilisé par des clients.');
define('ERROR_STATUS_USED_IN_HISTORY', 'Erreur : Ce groupe de clients est actuellement utilisé dans l\'aperçu des commandes.');

define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_CUSTOMERS_GRADUATED', 'Prix échelonné');
define('TABLE_HEADING_CUSTOMERS_STATUS', 'Groupe de clients');
define('TABLE_HEADING_CUSTOMERS_UNALLOW', 'Méthodes de paiement non autorisées');
define('TABLE_HEADING_CUSTOMERS_UNALLOW_SHIPPING', 'Méthodes d\'expédition non autorisées');
define('TABLE_HEADING_DISCOUNT', 'Réduction');
define('TABLE_HEADING_TAX_PRICE', 'Prix/TVA');

define('TAX_NO', 'excl.');
define('TAX_YES', 'incl.');

define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_STATUS', 'Groupes de clients existants :');

define('TEXT_INFO_CUSTOMERS_FSK18_DISPLAY_INTRO', '<strong>Article FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_FSK18_INTRO', '<strong>Serrure FSK18</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_ADD_TAX_INTRO', '<strong>Si "Prix incluant la TVA" = "Oui", réglez-le sur "Non".</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MIN_ORDER_INTRO', '<strong>Saisissez une valeur de commande minimale ou laissez ce champ vide.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_MAX_ORDER_INTRO', '<strong>Saisissez une valeur de commande maximale ou laissez ce champ vide.</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_BT_PERMISSION_INTRO', '<strong>Voulez-vous autoriser ce groupe de clients à payer par prélèvement automatique ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_CC_PERMISSION_INTRO', '<strong>Voulez-vous permettre à ce groupe de clients de payer par carte de crédit ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_COD_PERMISSION_INTRO', '<strong>Souhaitez-vous autoriser ce groupe de clients à payer en contre-remboursement ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_ATTRIBUTES_INTRO', '<strong>Remise sur les attributs des</strong> articles<br />(Appliquez une remise de % maximum sur un article)');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_OT_XMEMBER_INTRO', '<strong>Remise sur l\'ensemble de la commande</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE', 'Remise (de 0 à 100%) :');
define('TEXT_INFO_CUSTOMERS_STATUS_DISCOUNT_PRICE_INTRO', '<strong>Remise maximale sur les produits (en fonction de la remise définie sur le produit).</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_GRADUATED_PRICES_INTRO', '<strong>Prix échelonnés</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_IMAGE', '<strong>Image du groupe de clients :</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_NAME', '<strong>Nom du groupe</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PAYMENT_UNALLOWED_INTRO', '<strong>Méthodes de paiement non autorisées</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_PUBLIC_INTRO', '<strong>Groupe public ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHIPPING_UNALLOWED_INTRO', '<strong>Méthodes d\'expédition non autorisées</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_INTRO', '<strong>Affichage des prix dans le magasin</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_INTRO', '<strong>Voulez-vous afficher les prix avec ou sans TVA ?</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_WRITE_REVIEWS_INTRO', '<strong>Rédiger des critiques de produits</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_READ_REVIEWS_INTRO', '<strong>Lire les avis sur les produits</strong>');
define('TEXT_INFO_CUSTOMERS_STATUS_REVIEWS_STATUS_INTRO', '<strong>Déverrouiller les avis sur les produits</strong>');

define('TEXT_INFO_DELETE_INTRO', 'Êtes-vous sûr de vouloir supprimer ce groupe de clients ?');
define('TEXT_INFO_EDIT_INTRO', 'Effectuez tous les ajustements nécessaires');
define('TEXT_INFO_INSERT_INTRO', 'Veuillez créer un nouveau groupe de clients avec les paramètres souhaités.');

define('TEXT_INFO_HEADING_DELETE_CUSTOMERS_STATUS', 'Supprimer le groupe de clients');
define('TEXT_INFO_HEADING_EDIT_CUSTOMERS_STATUS', 'Modifier les données du groupe');
define('TEXT_INFO_HEADING_NEW_CUSTOMERS_STATUS', 'Nouveau groupe de clients');

define('TEXT_INFO_CUSTOMERS_STATUS_BASE', '<strong>Groupe de clients de base pour les prix des articles</strong>');
define('ENTRY_CUSTOMERS_STATUS_BASE', 'Supposez les prix du groupe de clients suivant. Si la sélection est = "Admin", aucun prix n\'est adopté pour le nouveau groupe de clients.');
define('ENTRY_CUSTOMERS_STATUS_BASE_EDIT', 'Supposez des prix pour le groupe de clients suivant. Si la sélection est = "Admin", aucun prix n\'est supposé pour le groupe de clients.<br /><span class="col-red"><strong>ATTENTION :</strong></span> Cela écrase tous les prix existants du groupe de clients !');

define('TEXT_INFO_CUSTOMERS_GROUP_ADOPT_PERMISSION', '<strong>Assumer les droits de visibilité d\'un autre groupe de clients</strong>');
define('ENTRY_CUSTOMERS_GROUP_ADOPT_PERMISSION', 'Assumez les droits de visibilité des catégories, articles et contenus pour le groupe de clients suivant :');
define('CUSTOMERS_GROUP_ADOPT_PERMISSIONS', 'Ne vous arrogez pas de droits');

define('TEXT_INFO_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', '<b>Afficher la TVA du montant de l\'achat</b>');
define('ENTRY_CUSTOMERS_STATUS_SHOW_PRICE_TAX_TOTAL', 'Importation minimale d\'achat');

define('TABLE_HEADING_CUSTOMERS_SPECIALS', 'Offres spéciales');
define('TEXT_INFO_CUSTOMERS_STATUS_SPECIALS_INTRO', '<strong>Offres spéciales</strong>');
define('ENTRY_CUSTOMERS_STATUS_SPECIALS', 'Groupe de clients autorisé à consulter les offres spéciales ?');

define('CUSTOMERS_GROUP_PUBLIC', 'public');
