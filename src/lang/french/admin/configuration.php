<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Nombre');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valeur');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_EDIT_INTRO', 'Veuillez effectuer tous les changements nécessaires');
define('TEXT_INFO_DATE_ADDED', 'ajouté sur :');
define('TEXT_INFO_LAST_MODIFIED', 'dernier changement :');

define('STORE_NAME_TITLE', 'Nom du magasin');
define('STORE_NAME_DESC', 'Le nom de cette boutique en ligne');
define('STORE_OWNER_TITLE', 'Propriétaire');
define('STORE_OWNER_DESC', 'Le nom de l\'exploitant du magasin');
define('STORE_OWNER_EMAIL_ADDRESS_TITLE', 'Adresse e-mail');
define('STORE_OWNER_EMAIL_ADDRESS_DESC', 'L\'adresse e-mail de l\'exploitant du magasin');

define('EMAIL_FROM_TITLE', 'E-mail de');
define('EMAIL_FROM_DESC', 'Adresse e-mail à utiliser pour l\'envoi (sendmail).');

define('STORE_COUNTRY_TITLE', 'Pays');
define('STORE_COUNTRY_DESC', 'L\'emplacement de la boutique en ligne <br /><br /><b>Remarque : N\'oubliez pas de définir correctement la région</b>.');
define('STORE_ZONE_TITLE', 'Région');
define('STORE_ZONE_DESC', 'La région de la boutique en ligne');

define('EXPECTED_PRODUCTS_SORT_TITLE', 'Commande d\'annonces pour des articles');
define('EXPECTED_PRODUCTS_SORT_DESC', 'Il s\'agit de l\'ordre dans lequel les éléments annoncés sont affichés.');
define('EXPECTED_PRODUCTS_FIELD_TITLE', 'Champ de tri pour les annonces d\'articles');
define('EXPECTED_PRODUCTS_FIELD_DESC', 'Il s\'agit de la colonne utilisée pour trier les éléments annoncés.');

define('PRODUCTS_NEW_SORT_TITLE', 'Commander de nouveaux articles');
define('PRODUCTS_NEW_SORT_DESC', 'Il s\'agit de l\'ordre dans lequel les nouveaux éléments sont affichés.');
define('PRODUCTS_NEW_FIELD_TITLE', 'Champ de tri pour les nouveaux éléments');
define('PRODUCTS_NEW_FIELD_DESC', 'Il s\'agit de la colonne utilisée pour trier les nouveaux éléments.');

define('SPECIALS_SORT_TITLE', 'Demander des offres spéciales');
define('SPECIALS_SORT_DESC', 'Il s\'agit de l\'ordre dans lequel les offres spéciales sont affichées.');
define('SPECIALS_FIELD_TITLE', 'Champ de tri pour les offres spéciales');
define('SPECIALS_FIELD_DESC', 'Il s\'agit de la colonne utilisée pour classer les offres spéciales.');

define('USE_DEFAULT_LANGUAGE_CURRENCY_TITLE', 'Passage automatique à la monnaie nationale');
define('USE_DEFAULT_LANGUAGE_CURRENCY_DESC', 'Convertissez automatiquement dans la devise nationale du client, si disponible.');

define('SEND_EXTRA_ORDER_EMAILS_TO_TITLE', 'Envoyez un courriel de commande supplémentaire à :');
define('SEND_EXTRA_ORDER_EMAILS_TO_DESC', 'Si une copie de l\'e-mail de commande doit également être envoyée, veuillez indiquer les adresses de réception comme suit : Nom 1 <email@address1>, Nom 2 <email@address2>.');

define('SEARCH_ENGINE_FRIENDLY_URLS_TITLE', 'Utiliser des URL conviviales pour les moteurs de recherche ?');
define('SEARCH_ENGINE_FRIENDLY_URLS_DESC', 'Les URL des pages peuvent être automatiquement optimisées pour les moteurs de recherche.<br /><br /><strong>Attention :</strong> Pour des URL optimisées pour les moteurs de recherche, le fichier _.htaccess dans le répertoire principal de la boutique doit être activé ou renommé en .htaccess ! En outre, le serveur Web doit prendre en charge <a href="http://www.modrewrite.de/" target="_blank">mod_rewrite</a>! (Demandez à votre fournisseur d\'hébergement Web si vous ne pouvez pas le vérifier).');

define('DISPLAY_CART_TITLE', 'Le panier d\'achat doit-il être affiché après l\'insertion ?');
define('DISPLAY_CART_DESC', 'Après avoir ajouté un article au panier, ou après être revenu à l\'article ?');

define('ALLOW_GUEST_TO_TELL_A_FRIEND_TITLE', 'Permettre aux invités d\'informer leurs connaissances par e-mail ?');
define('ALLOW_GUEST_TO_TELL_A_FRIEND_DESC', 'Permettre aux invités d\'informer leurs connaissances sur les articles par e-mail ?');

define('ADVANCED_SEARCH_DEFAULT_OPERATOR_TITLE', 'Recherche de liens');
define('ADVANCED_SEARCH_DEFAULT_OPERATOR_DESC', 'Opérateur standard pour lier les mots de recherche.');

define('STORE_NAME_ADDRESS_TITLE', 'Adresse et numéro de téléphone de l\'entreprise, etc.');
define('STORE_NAME_ADDRESS_DESC', 'Inscrivez ici l\'adresse de votre entreprise comme vous le feriez sur un papier à en-tête.');

define('SHOW_COUNTS_TITLE', 'Nombre d\'articles derrière les noms de catégories ?');
define('SHOW_COUNTS_DESC', 'Compte récursivement le nombre d\'articles différents par groupe de produits et affiche le nombre (x) après le nom de chaque catégorie.');

define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_TITLE', 'Statut du client (groupe de clients) pour les administrateurs frontaux');
define('DEFAULT_CUSTOMERS_STATUS_ID_ADMIN_DESC', 'Sélectionnez le statut du client (groupe) avec lequel l\'administrateur voit le frontend.');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_TITLE', 'Statut de client (groupe de clients) pour les invités');
define('DEFAULT_CUSTOMERS_STATUS_ID_GUEST_DESC', 'Sélectionnez le statut de client (groupe) pour les invités en fonction de leur ID respective !');
define('DEFAULT_CUSTOMERS_STATUS_ID_TITLE', 'Statut des nouveaux clients');
define('DEFAULT_CUSTOMERS_STATUS_ID_DESC', 'Sélectionnez le statut de client (groupe) pour les nouveaux clients en fonction de l\'ID respectif !<br />ASTUCE : Vous pouvez créer d\'autres groupes dans le menu Groupes de clients et, par exemple, faire des semaines de promotion : Cette semaine, 10% de réduction pour tous les nouveaux clients ?');

define('ALLOW_ADD_TO_CART_TITLE', 'Permet d\'ajouter des articles au panier d\'achat');
define('ALLOW_ADD_TO_CART_DESC', 'Permet d\'ajouter des articles au panier même si "Afficher les prix" est réglé sur "Non" dans le groupe de clients.');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_TITLE', 'Utiliser les remises également sur les attributs des articles ?');
define('ALLOW_DISCOUNT_ON_PRODUCTS_ATTRIBUTES_DESC', 'Permet d\'appliquer la remise de groupe de clients définie également aux attributs de l\'article (uniquement si l\'article n\'est pas désigné comme "offre spéciale").');
define('CURRENT_TEMPLATE_TITLE', 'Jeu de modèles (Tema)');
define('CURRENT_TEMPLATE_DESC', 'Sélectionnez un ensemble de modèles (thème). Le thème doit se trouver dans le dossier www.Ihre-Domain.com/templates/.');

define('ENTRY_FIRST_NAME_MIN_LENGTH_TITLE', 'Nombre');
define('ENTRY_FIRST_NAME_MIN_LENGTH_DESC', 'Longueur minimale du nom');
define('ENTRY_LAST_NAME_MIN_LENGTH_TITLE', 'Apellido');
define('ENTRY_LAST_NAME_MIN_LENGTH_DESC', 'Longueur minimale du nom de famille');
define('ENTRY_DOB_MIN_LENGTH_TITLE', 'Date de naissance');
define('ENTRY_DOB_MIN_LENGTH_DESC', 'Durée minimale de la date de naissance');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_TITLE', 'Adresse e-mail');
define('ENTRY_EMAIL_ADDRESS_MIN_LENGTH_DESC', 'Longueur minimale de l\'adresse e-mail');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_TITLE', 'Calle');
define('ENTRY_STREET_ADDRESS_MIN_LENGTH_DESC', 'Longueur minimale de l\'adresse');
define('ENTRY_COMPANY_MIN_LENGTH_TITLE', 'Entreprise');
define('ENTRY_COMPANY_MIN_LENGTH_DESC', 'Longueur minimale du nom de la société');
define('ENTRY_POSTCODE_MIN_LENGTH_TITLE', 'Code postal');
define('ENTRY_POSTCODE_MIN_LENGTH_DESC', 'Longueur minimale du code postal');
define('ENTRY_CITY_MIN_LENGTH_TITLE', 'Ville');
define('ENTRY_CITY_MIN_LENGTH_DESC', 'Longueur minimale du nom de la ville');
define('ENTRY_STATE_MIN_LENGTH_TITLE', 'État');
define('ENTRY_STATE_MIN_LENGTH_DESC', 'Longueur minimale de l\'état');
define('ENTRY_TELEPHONE_MIN_LENGTH_TITLE', 'Numéro de téléphone');
define('ENTRY_TELEPHONE_MIN_LENGTH_DESC', 'Longueur minimale du numéro de téléphone');
define('ENTRY_PASSWORD_MIN_LENGTH_TITLE', 'Mot de passe');
define('ENTRY_PASSWORD_MIN_LENGTH_DESC', 'Longueur minimale du mot de passe');

define('REVIEW_TEXT_MIN_LENGTH_TITLE', 'Critiques');
define('REVIEW_TEXT_MIN_LENGTH_DESC', 'Longueur minimale de la saisie de texte pour les critiques');

define('MIN_DISPLAY_BESTSELLERS_TITLE', 'Meilleures ventes');
define('MIN_DISPLAY_BESTSELLERS_DESC', 'Nombre minimum de best-sellers à afficher.');
define('MIN_DISPLAY_ALSO_PURCHASED_TITLE', 'Elle a également acheté');
define('MIN_DISPLAY_ALSO_PURCHASED_DESC', 'Nombre minimum d\'articles achetés pour apparaître également dans la vue des articles.');

define('MAX_ADDRESS_BOOK_ENTRIES_TITLE', 'Entrées du carnet d\'adresses');
define('MAX_ADDRESS_BOOK_ENTRIES_DESC', 'Nombre maximal d\'entrées de carnet d\'adresses par client');
define('MAX_DISPLAY_SEARCH_RESULTS_TITLE', 'Articles en quantité');
define('MAX_DISPLAY_SEARCH_RESULTS_DESC', 'Nombre maximal d\'articles à afficher par page dans la liste des produits (pages de catégories)');
define('MAX_DISPLAY_PAGE_LINKS_TITLE', 'Tourner les pages');
define('MAX_DISPLAY_PAGE_LINKS_DESC', 'Nombre de pages individuelles pour lesquelles un lien doit être affiché dans le menu de navigation de la page');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_TITLE', 'Offres spéciales');
define('MAX_DISPLAY_SPECIAL_PRODUCTS_DESC', 'Nombre maximal d\'offres spéciales (specials.php) à afficher par page.');
define('MAX_DISPLAY_NEW_PRODUCTS_TITLE', 'Nouveau module d\'affichage des articles');
define('MAX_DISPLAY_NEW_PRODUCTS_DESC', 'Nombre maximum de nouveaux articles à afficher dans les catégories de produits et en tant que "TOP items" sur la page d\'accueil.');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_TITLE', 'Points prévus Module de visualisation');
define('MAX_DISPLAY_UPCOMING_PRODUCTS_DESC', 'Nombre maximal d\'éléments devant être affichés sur la page d\'accueil.');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_TITLE', 'Liste des fabricants Valeur seuil');
define('MAX_DISPLAY_MANUFACTURERS_IN_A_LIST_DESC', 'Dans la case du fabricant ; si le nombre de fabricants dépasse ce seuil, une liste déroulante ou une boîte de liste apparaîtra au lieu de la liste habituelle de liens (en fonction de ce qui a été saisi sous "Liste des fabricants").');
define('MAX_MANUFACTURERS_LIST_TITLE', 'Liste des fabricants');
define('MAX_MANUFACTURERS_LIST_DESC', 'Dans la boîte du producteur ; Si la valeur est fixée à "1", la boîte du producteur s\'affiche comme une liste déroulante. Sinon, comme une boîte de liste avec le nombre de lignes spécifié.');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_TITLE', 'Longueur du nom du fabricant');
define('MAX_DISPLAY_MANUFACTURER_NAME_LEN_DESC', 'Dans la boîte du fabricant ; longueur maximale des noms dans la boîte du fabricant.');
define('MAX_DISPLAY_NEW_REVIEWS_TITLE', 'Nouvelles révisions');
define('MAX_DISPLAY_NEW_REVIEWS_DESC', 'Nombre maximum de nouvelles critiques à afficher.');
define('MAX_RANDOM_SELECT_REVIEWS_TITLE', 'Examiner le jury de sélection');
define('MAX_RANDOM_SELECT_REVIEWS_DESC', 'Parmi combien d\'avis faut-il choisir ceux qui apparaissent au hasard dans la boîte ?');
define('MAX_RANDOM_SELECT_NEW_TITLE', 'Nouveau pool de sélection d\'articles');
define('MAX_RANDOM_SELECT_NEW_DESC', 'Parmi combien de nouveaux articles doit-on choisir ceux qui apparaissent au hasard dans la boîte ?');
define('MAX_RANDOM_SELECT_SPECIALS_TITLE', 'Sélection d\'offres spéciales piscine');
define('MAX_RANDOM_SELECT_SPECIALS_DESC', 'Parmi combien d\'offres spéciales faut-il choisir celles qui apparaissent aléatoirement dans la boîte ?');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_TITLE', 'Nombre de catégories par ligne');
define('MAX_DISPLAY_CATEGORIES_PER_ROW_DESC', 'Nombre de catégories à afficher par ligne dans les résumés.');
define('MAX_DISPLAY_PRODUCTS_NEW_TITLE', 'Nouvelle liste d\'articles');
define('MAX_DISPLAY_PRODUCTS_NEW_DESC', 'Nombre maximum de nouveaux articles à afficher par page "Nouveaux articles" (products_new.php)".');
define('MAX_DISPLAY_BESTSELLERS_TITLE', 'Meilleures ventes');
define('MAX_DISPLAY_BESTSELLERS_DESC', 'Nombre maximum de best-sellers à afficher.');
define('MAX_DISPLAY_BESTSELLERS_DAYS_TITLE', 'Nombre de jours pour les meilleures ventes');
define('MAX_DISPLAY_BESTSELLERS_DAYS_DESC', 'Nombre maximal de jours pendant lesquels les articles les plus vendus doivent être affichés.');
define('MAX_DISPLAY_ALSO_PURCHASED_TITLE', 'Elle a également acheté');
define('MAX_DISPLAY_ALSO_PURCHASED_DESC', 'Nombre maximum d\'articles également achetés à afficher dans la vue des articles.');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_TITLE', 'Nombre de commandes Également acheté');
define('MAX_DISPLAY_ALSO_PURCHASED_ORDERS_DESC', 'Nombre maximum de commandes recherchées pour déterminer les articles également achetés.');
define('MAX_DISPLAY_CROSS_SELLS_TITLE', 'Ventes croisées');
define('MAX_DISPLAY_CROSS_SELLS_DESC', 'Nombre maximum d\'articles de vente croisée à afficher lors de l\'affichage des articles.<br><b>Remarque :</b> Avec 0, tous les articles attribués sont affichés.');
define('MAX_DISPLAY_REVERSE_CROSS_SELLS_TITLE', 'Vente croisée inversée');
define('MAX_DISPLAY_REVERSE_CROSS_SELLS_DESC', 'Nombre maximum d\'articles de vente croisée inversée à afficher lors de l\'affichage des articles.<br><b>Remarque :</b> Avec 0, tous les articles attribués sont affichés.');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_TITLE', 'Tableau récapitulatif des commandes');
define('MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX_DESC', 'Nombre maximum d\'articles à afficher dans le tableau récapitulatif de la commande personnelle du client.');
define('MAX_DISPLAY_ORDER_HISTORY_TITLE', 'Résumé des ordonnances');
define('MAX_DISPLAY_ORDER_HISTORY_DESC', 'Nombre maximum de commandes à afficher dans l\'aperçu de l\'espace client de la boutique.');
define('MAX_PRODUCTS_QTY_TITLE', 'Nombre maximal de produits');
define('MAX_PRODUCTS_QTY_DESC', 'Nombre maximum d\'un article dans le panier');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_TITLE', 'Nombre de jours pour les nouveaux produits');
define('MAX_DISPLAY_NEW_PRODUCTS_DAYS_DESC', 'Nombre maximal de jours pour l\'affichage des nouveaux éléments.');

define('PRODUCT_IMAGE_MINI_WIDTH_TITLE', 'Largeur de la miniature de l\'article');
define('PRODUCT_IMAGE_MINI_WIDTH_DESC', 'Largeur maximale du mini élément en pixels (Par défaut : 80). Pour des valeurs plus importantes, il peut être nécessaire d\'ajuster "productPreviewImage" dans le fichier stylesheet.css du modèle.');
define('PRODUCT_IMAGE_MINI_HEIGHT_TITLE', 'Hauteur de la miniature de l\'article');
define('PRODUCT_IMAGE_MINI_HEIGHT_DESC', 'Hauteur maximale du mini élément en pixels (Par défaut : 80)');

define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_TITLE', 'Largeur de la vignette de l\'article');
define('PRODUCT_IMAGE_THUMBNAIL_WIDTH_DESC', 'Largeur maximale des vignettes d\'éléments en pixels (Par défaut : 240). Pour des valeurs plus importantes, il peut être nécessaire d\'ajuster "productPreviewImage" dans le fichier stylesheet.css du modèle.');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_TITLE', 'Hauteur de la vignette de l\'élément');
define('PRODUCT_IMAGE_THUMBNAIL_HEIGHT_DESC', 'Hauteur maximale des vignettes d\'éléments en pixels (Par défaut : 240)');

define('PRODUCT_IMAGE_MIDI_WIDTH_TITLE', 'Largeur des images midi de l\'article');
define('PRODUCT_IMAGE_MIDI_WIDTH_DESC', 'Largeur maximale de l\'élément midi en pixels (par défaut : 160). Pour des valeurs plus importantes, il peut être nécessaire d\'ajuster "productPreviewImage" dans le fichier stylesheet.css du modèle.');
define('PRODUCT_IMAGE_MIDI_HEIGHT_TITLE', 'Hauteur des images midi de l\'article');
define('PRODUCT_IMAGE_MIDI_HEIGHT_DESC', 'Hauteur maximale de l\'élément midi en pixels (Par défaut : 160)');

define('PRODUCT_IMAGE_INFO_WIDTH_TITLE', 'Largeur des images d\'information de l\'article');
define('PRODUCT_IMAGE_INFO_WIDTH_DESC', 'Largeur maximale des images d\'information sur les éléments en pixels (par défaut : 520).');
define('PRODUCT_IMAGE_INFO_HEIGHT_TITLE', 'Hauteur des images d\'information de l\'article');
define('PRODUCT_IMAGE_INFO_HEIGHT_DESC', 'Hauteur maximale des images d\'information sur les éléments en pixels (Par défaut : 520)');

define('PRODUCT_IMAGE_POPUP_WIDTH_TITLE', 'Largeur des images pop-up dans l\'article');
define('PRODUCT_IMAGE_POPUP_WIDTH_DESC', 'Largeur maximale des images pop-up dans l\'article en pixels (Par défaut : 800)');
define('PRODUCT_IMAGE_POPUP_HEIGHT_TITLE', 'Hauteur des images pop-up dans l\'article');
define('PRODUCT_IMAGE_POPUP_HEIGHT_DESC', 'Hauteur maximale des images pop-up dans l\'article en pixels (Par défaut : 800)');

define('CATEGORIES_IMAGE_WIDTH_TITLE', 'Largeur de la catégorie Images');
define('CATEGORIES_IMAGE_WIDTH_DESC', 'Largeur maximale de la catégorie Images en pixels (Par défaut : 985).');
define('CATEGORIES_IMAGE_HEIGHT_TITLE', 'Hauteur des tables de catégories');
define('CATEGORIES_IMAGE_HEIGHT_DESC', 'Hauteur maximale de la catégorie Images en pixels (Par défaut : 370)');

define('CATEGORIES_IMAGE_MOBILE_WIDTH_TITLE', 'Largeur de la catégorie Images mobiles');
define('CATEGORIES_IMAGE_MOBILE_WIDTH_DESC', 'Largeur maximale de la catégorie Photos mobiles en pixels (Par défaut : 600).');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_TITLE', 'Hauteur de la catégorie Photos mobiles');
define('CATEGORIES_IMAGE_MOBILE_HEIGHT_DESC', 'Hauteur maximale de la catégorie Photos mobiles en pixels (Par défaut : 400)');

define('CATEGORIES_IMAGE_LIST_WIDTH_TITLE', 'Largeur de la catégorie Liste des images');
define('CATEGORIES_IMAGE_LIST_WIDTH_DESC', 'Largeur maximale de la catégorie Liste d\'images en pixels (Par défaut : 225).');
define('CATEGORIES_IMAGE_LIST_HEIGHT_TITLE', 'Liste des images de hauteur de catégorie');
define('CATEGORIES_IMAGE_LIST_HEIGHT_DESC', 'Hauteur maximale de la catégorie Images listée en pixels (Par défaut : 170)');

define('MANUFACTURER_IMAGE_WIDTH_TITLE', 'Largeur des images du fabricant');
define('MANUFACTURER_IMAGE_WIDTH_DESC', 'Largeur maximale des images du fabricant en pixels (Par défaut : 100).');
define('MANUFACTURER_IMAGE_HEIGHT_TITLE', 'Hauteur des images du fabricant');
define('MANUFACTURER_IMAGE_HEIGHT_DESC', 'Hauteur maximale des images du fabricant en pixels (Par défaut : 60)');

define('BANNERS_IMAGE_WIDTH_TITLE', 'Largeur de l\'image de la bannière');
define('BANNERS_IMAGE_WIDTH_DESC', 'Largeur maximale des images de la bannière en pixels (Par défaut : 985).');
define('BANNERS_IMAGE_HEIGHT_TITLE', 'Hauteur des images de la bannière');
define('BANNERS_IMAGE_HEIGHT_DESC', 'Hauteur maximale des images de la bannière en pixels (Par défaut : 400)');

define('BANNERS_IMAGE_MOBILE_WIDTH_TITLE', 'Largeur des images des bannières mobiles');
define('BANNERS_IMAGE_MOBILE_WIDTH_DESC', 'Largeur maximale des images de la bannière mobile en pixels (par défaut : 600).');
define('BANNERS_IMAGE_MOBILE_HEIGHT_TITLE', 'Hauteur des images de la bannière mobile');
define('BANNERS_IMAGE_MOBILE_HEIGHT_DESC', 'Hauteur maximale des images de la bannière mobile en pixels (par défaut : 400).');

define('SMALL_IMAGE_WIDTH_TITLE', 'Largeur de l\'article Images');
define('SMALL_IMAGE_WIDTH_DESC', 'Largeur maximale des images de l\'article en pixels.');
define('SMALL_IMAGE_HEIGHT_TITLE', 'Hauteur de l\'article Images');
define('SMALL_IMAGE_HEIGHT_DESC', 'Hauteur maximale des images de l\'article en pixels.');

define('SUBCATEGORY_IMAGE_WIDTH_TITLE', 'Largeur des images des sous-catégories (groupe de produits)');
define('SUBCATEGORY_IMAGE_WIDTH_DESC', 'Largeur maximale des images de la sous-catégorie (groupe de produits) en pixels.');
define('SUBCATEGORY_IMAGE_HEIGHT_TITLE', 'Hauteur des images dans la sous-catégorie (groupe de produits)');
define('SUBCATEGORY_IMAGE_HEIGHT_DESC', 'Hauteur maximale des images de la sous-catégorie (groupe de produits) en pixels.');

define('MO_PICS_TITLE', 'Nombre d\'images supplémentaires du produit');
define('MO_PICS_DESC', 'Nombre d\'images de produits qui doivent être disponibles en plus de l\'image principale du produit.');

define('PRODUCT_IMAGE_MINI_MERGE_TITLE', 'Article Mini Images:Fusionner<br /><img src="images/config_merge.gif">');
define('PRODUCT_IMAGE_MINI_MERGE_DESC', 'Artikel-Mini Bilder:Merge<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Verwendung :<br />(merge image,start x [neg = from right],start y [neg = from bottom],opacity, transparent colour in merge image)');

define('PRODUCT_IMAGE_THUMBNAIL_MERGE_TITLE', 'Vignettes d\'articles:Fusionner');
define('PRODUCT_IMAGE_THUMBNAIL_MERGE_DESC', 'Artikel-Thumbnails:Merge<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />merge image overlay<br />Verwendung :<br />(merge image,start x [neg = from right],start y [neg = from bottom],opacity, transparent colour in merge image)');

define('PRODUCT_IMAGE_MIDI_MERGE_TITLE', 'Article Midi Images:Merge');
define('PRODUCT_IMAGE_MIDI_MERGE_DESC', 'Artikel-Midi Bilder:Merge<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Verwendung :<br />(merge image,start x [neg = from right],start y [neg = from bottom],opacity, transparent colour in merge image)');

define('PRODUCT_IMAGE_INFO_MERGE_TITLE', 'Informations sur l\'article Images:Fusion');
define('PRODUCT_IMAGE_INFO_MERGE_DESC', 'Artikel-Info Bilder:Merge<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />overlay merge image<br />Verwendung :<br />(merge image,start x [neg = from right],start y [neg = from bottom],opacity,transparent colour in merge image)');

define('PRODUCT_IMAGE_POPUP_MERGE_TITLE', 'Images pop-up d\'articles : fusionner');
define('PRODUCT_IMAGE_POPUP_MERGE_DESC', 'Artikel-Popup Bilder:Merge<br /><br />Standard Wert : (overlay.gif,10,-50,60,FF0000)<br /><br />merge image overlay<br />Verwendung :<br />(merge image,start x [neg = from right],start y [neg = from bottom],opacity,transparent colour in the merge image)');

define('IMAGE_MANIPULATOR_TITLE', 'Traitement GDlib');
define('IMAGE_MANIPULATOR_DESC', 'Manipulateur d\'images pour GD2 ou GD1<br /><br /><b>REMARQUE :</b> image_manipulator_GD2_advanced.php supporte les PNG transparents');

define('IMAGE_TYPE_EXTENSION_TITLE', 'Type d\'image');
define('IMAGE_TYPE_EXTENSION_DESC', 'Quel type d\'image doit être fourni ?<br /><br /><b>REMARQUE :</b> Après la conversion, le traitement des images doit être lancé pour la <a href="' . xtc_href_link(FILENAME_MODULE_EXPORT, 'set=system&module=image_processing_step') . '"><b>génération des images</b></a>.');
define('ACCOUNT_GENDER_TITLE', 'Saludo');
define('ACCOUNT_GENDER_DESC', 'Demander un message d\'accueil lors de l\'ouverture/du traitement d\'un compte');
define('ACCOUNT_DOB_TITLE', 'Date de naissance');
define('ACCOUNT_DOB_DESC', 'Demander la date de naissance lors de l\'ouverture/du traitement d\'un compte');
define('ACCOUNT_COMPANY_TITLE', 'Entreprise');
define('ACCOUNT_COMPANY_DESC', 'Consultez la société lors de l\'ouverture/du traitement du compte');
define('ACCOUNT_SUBURB_TITLE', 'Autre adresse');
define('ACCOUNT_SUBURB_DESC', 'Demander une adresse supplémentaire lors de l\'ouverture/du traitement du compte');
define('ACCOUNT_STATE_TITLE', 'État');
define('ACCOUNT_STATE_DESC', 'Vérifier le statut lors de l\'ouverture/du traitement du compte');

define('DEFAULT_CURRENCY_TITLE', 'Monnaie standard');
define('DEFAULT_CURRENCY_DESC', 'Devise utilisée par défaut');
define('DEFAULT_LANGUAGE_TITLE', 'Langue standard');
define('DEFAULT_LANGUAGE_DESC', 'Langue utilisée par défaut');
define('DEFAULT_ORDERS_STATUS_ID_TITLE', 'Statut standard des nouvelles commandes');
define('DEFAULT_ORDERS_STATUS_ID_DESC', 'Lorsqu\'une nouvelle commande est reçue, ce statut est défini comme statut de la commande.');

define('SHIPPING_MAX_WEIGHT_TITLE', 'Poids maximal pouvant être expédié en un seul colis');
define('SHIPPING_MAX_WEIGHT_DESC', 'Les partenaires d\'expédition (Post/UPS, etc.) ont un poids maximal pour les colis. Saisissez une valeur pour cela.');
define('SHIPPING_BOX_WEIGHT_TITLE', 'Poids de la peau de l\'emballage');
define('SHIPPING_BOX_WEIGHT_DESC', 'Quel est le poids moyen d\'un petit ou moyen conteneur vide ?');
define('SHIPPING_BOX_PADDING_TITLE', 'Pour les conteneurs vides plus grands - augmentation du poids en %.');
define('SHIPPING_BOX_PADDING_DESC', 'Pour environ 10 %, entrez 10');
define('SHOW_SHIPPING_TITLE', 'Afficher les frais d\'expédition');
define('SHOW_SHIPPING_DESC', 'Affichage lié de "plus frais d\'expédition".');
define('SHIPPING_INFOS_TITLE', 'Frais d\'expédition');
define('SHIPPING_INFOS_DESC', 'Sélectionnez le contenu pour afficher les frais d\'expédition');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_TITLE', 'Méthode de calcul de la classe d\'impôt standard');
define('SHIPPING_DEFAULT_TAX_CLASS_METHOD_DESC', 'none : n\'affiche aucune taxe d\'expédition<br />auto proportional : affiche la taxe d\'expédition proportionnellement à la commande<br />auto max : affiche le taux de taxe du plus grand groupe de ventes comme taxe d\'expédition');

define('SHOW_SHIPPING_MODULE_TITLE_TITLE', 'Désignation Frais d\'expédition');
define('SHOW_SHIPPING_MODULE_TITLE_DESC', 'Sélectionnez le nom des frais d\'affranchissement dans l\'aperçu');
define('CUSTOM_SHIPPING_TITLE_TITLE', 'Désignation individuelle Frais d\'expédition');
define('CUSTOM_SHIPPING_TITLE_DESC', 'Saisissez une désignation. Ce paramètre n\'est effectif que si la désignation d\'affranchissement est réglée sur "Défini par l\'utilisateur".');
define('CFG_TXT_SHIPPING_DEFAULT', 'Standard');
define('CFG_TXT_SHIPPING_TITLE', 'Titre');
define('CFG_TXT_SHIPPING_CUSTOM', 'Sur mesure');

define('CAPITALIZE_ADDRESS_FORMAT_TITLE', 'Adresse en lettres capitales');
define('CAPITALIZE_ADDRESS_FORMAT_DESC', 'Écrivez les noms des pays et des lieux en lettres majuscules.');

define('PRODUCT_LIST_FILTER_TITLE', 'Apparition de filtres de tri dans les listes de produits ?');
define('PRODUCT_LIST_FILTER_DESC', 'Affichage des filtres de tri par groupes de produits/fabricants, etc. Filtre (false=inactif ; true=actif)');

define('STOCK_CHECK_TITLE', 'Vérification des stocks de marchandises');
define('STOCK_CHECK_DESC', 'Vérifiez s\'il reste suffisamment de stock pour livrer les commandes.');

define('ATTRIBUTE_STOCK_CHECK_TITLE', 'Contrôle du stock d\'attributs d\'articles');
define('ATTRIBUTE_STOCK_CHECK_DESC', 'Vérification du stock de marchandises avec certains attributs d\'articles');
define('STOCK_LIMITED_TITLE', 'Déduire la quantité de marchandises');
define('STOCK_LIMITED_DESC', 'Déduire la quantité de marchandises en stock si les marchandises ont été commandées');
define('STOCK_LIMITED_DOWNLOADS_TITLE', 'Déduire les déchargements de la quantité de marchandises');
define('STOCK_LIMITED_DOWNLOADS_DESC', 'La quantité de marchandises pour le déchargement des articles doit-elle également être déduite ?');
define('STOCK_ALLOW_CHECKOUT_TITLE', 'Permettre l\'achat de produits qui ne sont pas en stock');
define('STOCK_ALLOW_CHECKOUT_DESC', 'Voulez-vous permettre que des commandes soient passées même si certaines marchandises ne sont pas disponibles selon l\'inventaire ?');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_TITLE', 'Marquage des articles en rupture de stock');
define('STOCK_MARK_PRODUCT_OUT_OF_STOCK_DESC', 'Indiquer au client les articles qui ne sont plus disponibles.');
define('STOCK_REORDER_LEVEL_TITLE', 'Message à l\'administrateur indiquant qu\'un article doit être réorganisé');
define('STOCK_REORDER_LEVEL_DESC', 'A partir de quelle quantité ce message doit-il apparaître (FONCTIONNEMENT PLANIFIE) ?');
define('STORE_PAGE_PARSE_TIME_TITLE', 'Gagner du temps dans le calcul de la conception de la page de la boutique');
define('STORE_PAGE_PARSE_TIME_DESC', 'Gagner le temps nécessaire pour calculer les scripts jusqu\'à la sortie de la page');
define('STORE_PARSE_DATE_TIME_FORMAT_TITLE', 'Format de la date dans le fichier journal');
define('STORE_PARSE_DATE_TIME_FORMAT_DESC', 'Le format de la date pour l\'enregistrement (par défaut : Y-m-d H:i:s)');
define('STORE_DB_SLOW_QUERY_TITLE', 'Enregistrement des requêtes lentes');
define('STORE_DB_SLOW_QUERY_DESC', 'Ne faut-il sauvegarder que les requêtes SQL qui prennent beaucoup de temps ?<br/><strong>Attention : La sauvegarde des requêtes de la base de données doit être activée !</strong><br/><strong>Attention : Le fichier peut devenir très volumineux si son exécution prend beaucoup de temps !</strong><br/><br/>Le fichier journal est enregistré dans le dossier /log du répertoire d\'origine.');
define('STORE_DB_SLOW_QUERY_TIME_TITLE', 'Journalisation des requêtes lentes - Temps');
define('STORE_DB_SLOW_QUERY_TIME_DESC', 'Saisissez l\'heure à partir de laquelle les requêtes SQL sont écrites dans le fichier journal.');

define('DISPLAY_PAGE_PARSE_TIME_TITLE', 'Afficher les temps de calcul des pages');
define('DISPLAY_PAGE_PARSE_TIME_DESC', 'Si l\'option d\'enregistrer les temps de calcul des pages est activée, ceux-ci peuvent être affichés dans le pied de page.<br /><strong>désactivé : Désactive</strong> complètement<strong>l\'</strong>affichage<br /><strong>admin</strong>: Seul l\'administrateur voit les temps de calcul<br /><strong>tous</strong>: Tout le monde voit les temps de calcul');
define('STORE_DB_TRANSACTIONS_TITLE', 'Sauvegarde des requêtes de base de données');
define('STORE_DB_TRANSACTIONS_DESC', 'Enregistrez les différentes requêtes de la base de données dans le fichier journal pour les temps de calcul<br/><strong>Attention : Le fichier peut devenir très grand avec des temps d\'exécution plus longs !</strong><br/><br/>Le fichier journal est enregistré dans le dossier /log du répertoire principal.');

define('USE_CACHE_TITLE', 'Utilisation du cache des modèles');
define('USE_CACHE_DESC', 'Utilisez les fonctions de mise en cache des modèles.');

define('DB_CACHE_TITLE', 'Caché de BD');
define('DB_CACHE_DESC', 'Les requêtes de la base de données peuvent être mises en cache par la boutique pour réduire la charge de la base de données et augmenter la vitesse.');

define('DB_CACHE_EXPIRE_TITLE', 'Durée de vie du cache de la BD');
define('DB_CACHE_EXPIRE_DESC', 'Temps en secondes avant que les fichiers de cache soient automatiquement écrasés avec les données de la base de données.');

define('DIR_FS_CACHE_TITLE', 'Carpeta caché');
define('DIR_FS_CACHE_DESC', 'Le dossier dans lequel les fichiers en cache seront stockés.');

define('ACCOUNT_OPTIONS_TITLE', 'Type de création de compte');
define('ACCOUNT_OPTIONS_DESC', 'Comment voulez-vous concevoir la procédure d\'enregistrement dans votre magasin ?<br />Vous pouvez choisir entre les comptes clients normaux et les "commandes uniques" sans créer de compte client (un compte est créé, mais cela n\'est pas évident pour le client).');

define('EMAIL_TRANSPORT_TITLE', 'Méthode de transport du courrier électronique');
define('EMAIL_TRANSPORT_DESC', '<b>Recommandation : smtp</b> - Définit si le serveur utilise une connexion locale au "programme sendmail" ou requiert une connexion SMTP via TCP/IP. Les serveurs fonctionnant sous Windows ou Mac OS doivent utiliser SMTP.');

define('EMAIL_LINEFEED_TITLE', 'Alimentations des lignes de courrier électronique');
define('EMAIL_LINEFEED_DESC', 'Définit les caractères à utiliser pour séparer les en-têtes de courriel.');
define('EMAIL_USE_HTML_TITLE', 'Utilisation du MIME HTML lors de l\'envoi d\'e-mails');
define('EMAIL_USE_HTML_DESC', 'Envoi d\'e-mails au format HTML');
define('ENTRY_EMAIL_ADDRESS_CHECK_TITLE', 'Vérification des adresses e-mail via DNS');
define('ENTRY_EMAIL_ADDRESS_CHECK_DESC', 'Les adresses e-mail peuvent être vérifiées via un serveur DNS.');
define('SEND_EMAILS_TITLE', 'Envoi d\'e-mails');
define('SEND_EMAILS_DESC', 'Envoyer des e-mails aux clients (pour les commandes, etc.)');
define('SENDMAIL_PATH_TITLE', 'La route vers Sendmail');
define('SENDMAIL_PATH_DESC', 'Si vous utilisez Sendmail, entrez ici le chemin d\'accès au programme Sendmail (généralement : /usr/bin/sendmail) :');
define('USE_SENDMAIL_OPTIONS_TITLE', 'Options de Sendmail');
define('USE_SENDMAIL_OPTIONS_DESC', 'Indique que oui mail() utilise un MTA entièrement compatible avec sendmail.');
define('SMTP_MAIN_SERVER_TITLE', 'Adresse du serveur SMTP');
define('SMTP_MAIN_SERVER_DESC', 'Saisissez l\'adresse de votre serveur SMTP primaire.');
define('SMTP_BACKUP_SERVER_TITLE', 'Adresse du serveur de sauvegarde SMTP');
define('SMTP_BACKUP_SERVER_DESC', 'Saisissez l\'adresse de votre serveur SMTP de secours.');
define('SMTP_USERNAME_TITLE', 'Nom d\'utilisateur SMTP');
define('SMTP_USERNAME_DESC', 'Saisissez ici le nom d\'utilisateur de votre compte SMTP.');
define('SMTP_PASSWORD_TITLE', 'Mot de passe SMTP');
define('SMTP_PASSWORD_DESC', 'Saisissez ici le mot de passe de votre compte SMTP.');
define('SMTP_AUTH_TITLE', 'SMTP-Auth');
define('SMTP_AUTH_DESC', 'Le serveur SMTP nécessite-t-il une authentification sécurisée ?');
define('SMTP_AUTH_TYPE_TITLE', 'SMTP AuthType');
define('SMTP_AUTH_TYPE_DESC', 'Geben Sie den Typ der SMTP Authentifizierung an.');
define('SMTP_PORT_TITLE', 'Port SMTP');
define('SMTP_PORT_DESC', 'Entrez le port SMTP de votre serveur SMTP (par défaut : 25) ?');
define('SMTP_AUTO_TLS_TITLE', 'Connexion automatique TLS SMTP');
define('SMTP_AUTO_TLS_DESC', 'Connexion automatique avec STARTTLS si SMTP-SECURE est désactivé ?<br>En cas de problèmes d\'envoi, désactivez la connexion automatique TLS !</br>');
define('SMTP_DEBUG_TITLE', 'Niveau du journal de débogage SMTP');
define('SMTP_DEBUG_DESC', '<b>0</b>: aucune sortie ; <b>1</b>: commandes uniquement ; <b>2</b>: données et commandes ; <b>3</b>: comme 2 plus état de la connexion ; <b>4</b>: comme 3 plus informations Si<br>la valeur est fixée à 2, en</br>cas de problèmes de<br>transmission, un journal sera créé dans le répertoire des journaux</br>.');
define('CFG_TXT_DEFAULT', 'Défaut');

define('EMAIL_SQL_ERRORS_TITLE', 'Envoyer les messages d\'erreur SQL par e-mail');
define('EMAIL_SQL_ERRORS_DESC', 'Si "true", un e-mail contenant le message d\'erreur SQL est envoyé à l\'adresse e-mail de l\'opérateur du magasin. Au lieu de cela, le message d\'erreur SQL est caché au client.<br />Si "false" est sélectionné, le message d\'erreur correspondant est envoyé directement et est visible par tous (par défaut).');

define('CONTACT_US_EMAIL_ADDRESS_TITLE', 'Contact - Adresse e-mail');
define('CONTACT_US_EMAIL_ADDRESS_DESC', 'Saisissez une adresse d\'expéditeur correcte pour envoyer des e-mails via le formulaire "Contact".');
define('CONTACT_US_NAME_TITLE', 'Contact - adresse e-mail, nom');
define('CONTACT_US_NAME_DESC', 'Saisissez un nom d\'expéditeur pour envoyer des e-mails via le formulaire "Contact".');
define('CONTACT_US_FORWARDING_STRING_TITLE', 'Contact - Transfert d\'adresses e-mail');
define('CONTACT_US_FORWARDING_STRING_DESC', 'Saisissez les adresses e-mail supplémentaires auxquelles les messages du formulaire "Contact" seront envoyés (séparées par , ).');
define('CONTACT_US_REPLY_ADDRESS_TITLE', 'Contact - Adresse e-mail de réponse');
define('CONTACT_US_REPLY_ADDRESS_DESC', 'Saisissez une adresse e-mail à laquelle vos clients peuvent répondre.');
define('CONTACT_US_REPLY_ADDRESS_NAME_TITLE', 'Contact - adresse e-mail de réponse, nom');
define('CONTACT_US_REPLY_ADDRESS_NAME_DESC', 'Nom de l\'expéditeur pour les e-mails de réponse.');
define('CONTACT_US_EMAIL_SUBJECT_TITLE', 'Contact - Objet de l\'e-mail');
define('CONTACT_US_EMAIL_SUBJECT_DESC', 'Objet des e-mails du formulaire de contact de la boutique');

define('EMAIL_SUPPORT_ADDRESS_TITLE', 'Assistance technique - Adresse e-mail');
define('EMAIL_SUPPORT_ADDRESS_DESC', 'Saisissez une adresse d\'expéditeur correcte pour envoyer des e-mails via le <b>système de support</b> (création de compte, mot de passe oublié, système de newsletter).');
define('EMAIL_SUPPORT_NAME_TITLE', 'Assistance technique - adresse e-mail, nom');
define('EMAIL_SUPPORT_NAME_DESC', 'Saisissez un nom d\'expéditeur pour envoyer des e-mails via le <b>système d\'assistance</b>.');
define('EMAIL_SUPPORT_FORWARDING_STRING_TITLE', 'Support technique - Transfert d\'adresses e-mail');
define('EMAIL_SUPPORT_FORWARDING_STRING_DESC', 'Saisissez les adresses e-mail supplémentaires auxquelles les e-mails du <b>système d\'assistance</b> seront envoyés (séparées par , ).');
define('EMAIL_SUPPORT_REPLY_ADDRESS_TITLE', 'Support technique - Adresse e-mail de réponse');
define('EMAIL_SUPPORT_REPLY_ADDRESS_DESC', 'Saisissez une adresse e-mail à laquelle vos clients peuvent répondre.');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_TITLE', 'Assistance technique - adresse e-mail pour la réponse, nom');
define('EMAIL_SUPPORT_REPLY_ADDRESS_NAME_DESC', 'Nom de l\'expéditeur pour les e-mails de réponse.');
define('EMAIL_SUPPORT_SUBJECT_TITLE', 'Assistance technique - Objet de l\'e-mail');
define('EMAIL_SUPPORT_SUBJECT_DESC', 'Objet des e-mails du <b>système d\'assistance</b>.');

define('EMAIL_BILLING_ADDRESS_TITLE', 'Règlement - Adresse e-mail');
define('EMAIL_BILLING_ADDRESS_DESC', 'Veuillez saisir une adresse d\'expéditeur correcte pour l\'envoi d\'e-mails via le <b>système de facturation</b> (confirmation de commande, changements d\'état,..).');
define('EMAIL_BILLING_NAME_TITLE', 'Facturation - adresse e-mail, nom');
define('EMAIL_BILLING_NAME_DESC', 'Saisissez un nom d\'expéditeur pour envoyer des e-mails par le biais du <b>système de facturation</b> (confirmation de commande, changements de statut,...).');
define('EMAIL_BILLING_FORWARDING_STRING_TITLE', 'Facturation - Transfert d\'adresses e-mail');
define('EMAIL_BILLING_FORWARDING_STRING_DESC', 'Saisissez les adresses e-mail supplémentaires auxquelles les e-mails du <b>système de comptabilité</b> seront envoyés (séparées par , ).');
define('EMAIL_BILLING_REPLY_ADDRESS_TITLE', 'Règlement - Adresse e-mail de réponse');
define('EMAIL_BILLING_REPLY_ADDRESS_DESC', 'Saisissez une adresse e-mail à laquelle vos clients peuvent répondre.');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_TITLE', 'Compensation - adresse e-mail de réponse, nom');
define('EMAIL_BILLING_REPLY_ADDRESS_NAME_DESC', 'Nom de l\'expéditeur pour les e-mails de réponse.');
define('EMAIL_BILLING_SUBJECT_TITLE', 'Règlement - changement de statut de l\'objet des e-mails');
define('EMAIL_BILLING_SUBJECT_DESC', 'Entrez un sujet pour les courriels du <b>système de facturation</b> (changements d\'état) (par exemple : <b>Votre commande {$nr} de {$date}</b>)<br />Les variables suivantes sont disponibles : {$nr},{$date},{$firstname},{$lastname}');
define('EMAIL_BILLING_SUBJECT_ORDER_TITLE', 'Facturation - Objet de l\'e-mail pour les commandes');
define('EMAIL_BILLING_SUBJECT_ORDER_DESC', 'Veuillez saisir un sujet pour les e-mails relatifs à votre commande (par exemple : <b>Votre commande {$nr} de {$date}</b>)<br />Les variables suivantes sont disponibles : {$nr},{$date},{$firstname},{$lastname}');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_TITLE', 'Facturation - objet de l\'e-mail de confirmation de la commande');
define('MODULE_ORDER_MAIL_STEP_SUBJECT_DESC', 'Entrez un sujet d\'email pour vos messages de confirmation de commande (par exemple : <b>Votre commande {$nr} de {$date}</b>)<br />Les variables suivantes sont disponibles : {$nr},{$date},{$firstName},{$lastName}');

define('DOWNLOAD_ENABLED_TITLE', 'Permettre le téléchargement d\'articles');
define('DOWNLOAD_ENABLED_DESC', 'Activez les fonctions de téléchargement d\'éléments (logiciels, etc.).');
define('DOWNLOAD_BY_REDIRECT_TITLE', 'Téléchargement par redirection');
define('DOWNLOAD_BY_REDIRECT_DESC', 'Utilisez la redirection du navigateur pour les téléchargements d\'articles. Arrêt sur les systèmes non-Linux/Unix.');
define('DOWNLOAD_MAX_DAYS_TITLE', 'Date d\'expiration des liens de téléchargement (jours)');
define('DOWNLOAD_MAX_DAYS_DESC', 'Nombre de jours pendant lesquels un lien de téléchargement reste actif pour le client. 0 signifie illimité.');
define('DOWNLOAD_MAX_COUNT_TITLE', 'Nombre maximal de téléchargements d\'un produit média acheté');
define('DOWNLOAD_MAX_COUNT_DESC', 'Définissez le nombre maximum de téléchargements autorisés pour le client qui a acheté un article de ce type. 0 signifie aucun téléchargement.');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_TITLE', 'Attributs multiples pour les téléchargements');
define('DOWNLOAD_MULTIPLE_ATTRIBUTES_ALLOWED_DESC', 'Faut-il autoriser des attributs multiples pour les articles à télécharger afin que le mode de livraison soit omis ?');

define('GZIP_COMPRESSION_TITLE', 'Activez la compression GZip');
define('GZIP_COMPRESSION_DESC', 'Activez la compression HTTP GZip pour optimiser la vitesse de chargement des pages.');
define('GZIP_LEVEL_TITLE', 'Niveau de compression');
define('GZIP_LEVEL_DESC', 'Sélectionnez un niveau de compression entre 0 et 9 (0 = minimum, 9 = maximum).');

define('SESSION_WARNING', '<br /><br /><span class="col-red"><strong>ATTENTION :</strong></span> Cette fonction peut éventuellement influencer la fonctionnalité de la boutique. Ne changez que si vous êtes conscient des conséquences possibles et si le serveur supporte réellement cette fonction !');

define('SESSION_WRITE_DIRECTORY_TITLE', 'Lieu de la session');
define('SESSION_WRITE_DIRECTORY_DESC', 'Si les sessions doivent être enregistrées sous forme de fichiers, utilisez le dossier suivant.');
define('SESSION_FORCE_COOKIE_USE_TITLE', 'Forcier le cookie de session');
define('SESSION_FORCE_COOKIE_USE_DESC', 'Se connecter si les cookies sont autorisés par le navigateur (par défaut "true").<br/><br/><span class="col-red"><strong>ATTENTION :</strong></span> Cette fonction empêche l\'identifiant de session d\'être présent dans l\'URL.');
define('SESSION_CHECK_SSL_SESSION_ID_TITLE', 'Vérification de l\'identifiant de session SSL');
define('SESSION_CHECK_SSL_SESSION_ID_DESC', 'Vérifiez le SSL_SESSION_ID pour chaque appel à la page HTTPS (par défaut "false").' . SESSION_WARNING);
define('SESSION_CHECK_USER_AGENT_TITLE', 'Vérification de l\'agent utilisateur');
define('SESSION_CHECK_USER_AGENT_DESC', 'Vérifie l\'agent utilisateur du navigateur de l\'utilisateur à chaque affichage de page (par défaut "false").' . SESSION_WARNING);
define('SESSION_CHECK_IP_ADDRESS_TITLE', 'Vérification de l\'adresse IP');
define('SESSION_CHECK_IP_ADDRESS_DESC', 'Vérifier l\'adresse IP de l\'utilisateur à chaque accès à la page (par défaut "false").' . SESSION_WARNING);
define('SESSION_RECREATE_TITLE', 'Renouveler la session');
define('SESSION_RECREATE_DESC', 'Rafraîchissez la session et attribuez un nouvel ID de session dès qu\'un utilisateur se connecte ou s\'enregistre (PHP >=4.1 requis). (par défaut "false")' . SESSION_WARNING);
define('SESSION_DELETE_OLD_COOKIES_TITLE', 'Supprimer le cookie de session');
define('SESSION_DELETE_OLD_COOKIES_DESC', 'Les anciens cookies de session doivent-ils être supprimés ? Après une mise à niveau de la version de la boutique <= 2.0.1.0, il est recommandé d\'activer cette option (par défaut "false").' . SESSION_WARNING);

define('DISPLAY_CONDITIONS_ON_CHECKOUT_TITLE', 'Visualisation de la CTG');
define('DISPLAY_CONDITIONS_ON_CHECKOUT_DESC', 'Consultez les CGV au cours du processus de commande.');
define('SIGN_CONDITIONS_ON_CHECKOUT_TITLE', 'Signature des CGV');
define('SIGN_CONDITIONS_ON_CHECKOUT_DESC', 'Signez les CGV au cours du processus de commande.<br/><b>Remarque :</b> "Afficher GTC" doit être actif.');

define('META_MIN_KEYWORD_LENGTH_TITLE', 'Longueur minimale des méta-mots-clés');
define('META_MIN_KEYWORD_LENGTH_DESC', 'Longueur minimale des méta-mots-clés générés automatiquement (description de l\'article)');
define('META_KEYWORDS_NUMBER_TITLE', 'Nombre de mots-clés méta');
define('META_KEYWORDS_NUMBER_DESC', 'Nombre de mots-clés méta');
define('META_AUTHOR_TITLE', 'auteur');
define('META_AUTHOR_DESC', '<meta name="author">');
define('META_PUBLISHER_TITLE', 'éditeur');
define('META_PUBLISHER_DESC', '<meta name="publisher">');
define('META_COMPANY_TITLE', 'entreprise');
define('META_COMPANY_DESC', '<meta name="company">');
define('META_TOPIC_TITLE', 'page à thème');
define('META_TOPIC_DESC', '<meta name="page-topic">');
define('META_REPLY_TO_TITLE', 'répondeur a');
define('META_REPLY_TO_DESC', '<meta name="reply-to">');
define('META_REVISIT_AFTER_TITLE', 'revisiter-après');
define('META_REVISIT_AFTER_DESC', '<meta name="revisit-after">');
define('META_ROBOTS_TITLE', 'robots');
define('META_ROBOTS_DESC', '<meta name="robots">');
define('META_DESCRIPTION_TITLE', 'Description');
define('META_DESCRIPTION_DESC', '<meta name="description">');
define('META_KEYWORDS_TITLE', 'Mots clés');
define('META_KEYWORDS_DESC', '<meta name="keywords">');

define('MODULE_PAYMENT_INSTALLED_TITLE', 'Modules de paiement installés');
define('MODULE_PAYMENT_INSTALLED_DESC', 'Liste des noms de fichiers du module de paiement (séparés par un point-virgule ( ;)). Il est mis à jour automatiquement, il n\'est donc pas nécessaire de le modifier (exemple : cc.php;cod.php;paypal.php).');
define('MODULE_ORDER_TOTAL_INSTALLED_TITLE', 'Commande installée Total des modules');
define('MODULE_ORDER_TOTAL_INSTALLED_DESC', 'Liste des noms de fichiers du module Ordre-Total (séparés par un point-virgule ( ;)). Il est mis à jour automatiquement, il n\'est donc pas nécessaire de le modifier (exemple : ot_subtotal.php;ot_tax.php;ot_shipping.php;ot_total.php).');
define('MODULE_SHIPPING_INSTALLED_TITLE', 'Modules d\'expédition installés');
define('MODULE_SHIPPING_INSTALLED_DESC', 'Liste des noms de fichiers du module d\'expédition (séparés par un point-virgule ( ;)). Il est mis à jour automatiquement, aucune modification n\'est donc nécessaire (exemple : ups.php;flat.php;item.php).');

define('CACHE_LIFETIME_TITLE', 'Durée du cache du modèle');
define('CACHE_LIFETIME_DESC', 'Temps en secondes avant que les fichiers de cache des modèles soient automatiquement écrasés.');
define('CACHE_CHECK_TITLE', 'Comprobar caché de plantilla');
define('CACHE_CHECK_DESC', 'Lorsqu\'il est activé, les en-têtes If-Modified-Since sont pris en compte pour le contenu mis en cache et les en-têtes HTTP correspondants sont émis. Cela signifie que les pages consultées régulièrement ne sont pas transmises au client à chaque fois.');

define('PRODUCT_REVIEWS_VIEW_TITLE', 'Commentaires dans les détails de l\'article');
define('PRODUCT_REVIEWS_VIEW_DESC', 'Nombre d\'avis affichés dans la vue détaillée de l\'article');

define('DELETE_GUEST_ACCOUNT_TITLE', 'Suppression des comptes invités');
define('DELETE_GUEST_ACCOUNT_DESC', 'Les comptes invités doivent-ils être supprimés après avoir passé une commande (les données de la commande restent) ?');

define('USE_WYSIWYG_TITLE', 'Activer l\'éditeur WYSIWYG');
define('USE_WYSIWYG_DESC', 'Activer l\'éditeur WYSIWYG pour le CMS et les articles ?');

define('PRICE_IS_BRUTTO_TITLE', 'Admin moche');
define('PRICE_IS_BRUTTO_DESC', 'Permet la saisie des prix bruts dans l\'Admin.');

define('PRICE_PRECISION_TITLE', 'Décimales brutes/netes');
define('PRICE_PRECISION_DESC', 'Précision de conversion (n\'influence pas l\'affichage dans le magasin, 2 décimales sont toujours affichées dans le magasin).');

define('CHECK_CLIENT_AGENT_TITLE', 'Vous évitez les séances d\'araignée ?');
define('CHECK_CLIENT_AGENT_DESC', 'Autorisez les robots d\'indexation des moteurs de recherche connus à accéder au site sans session.');
define('SHOW_IP_LOG_TITLE', 'L\'enregistrement de la propriété intellectuelle dans la boîte ?');
define('SHOW_IP_LOG_DESC', 'Afficher le texte "Votre IP sera enregistré pour des raisons de sécurité" lors du paiement ?');

define('ACTIVATE_GIFT_SYSTEM_TITLE', 'Activer le système de bons d\'achat ?');
define('ACTIVATE_GIFT_SYSTEM_DESC', 'Activer le système de coupons ?<br/><b>Remarque :</b> Le ot_coupon <a href="' . xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_coupon') . '"><b>ici</b></a> et ot_gv <a href="' . xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_gv') . '"><b>ici</b></a> doivent être activés.');

define('SECURITY_CODE_LENGTH_TITLE', 'Longueur du code de bon d\'achat');
define('SECURITY_CODE_LENGTH_DESC', 'Saisissez ici la longueur du code du bon d\'achat (16 caractères maximum).');

define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_TITLE', 'Valeur du chèque-cadeau de bienvenue');
define('NEW_SIGNUP_GIFT_VOUCHER_AMOUNT_DESC', 'Valeur du bon d\'achat du cadeau de bienvenue : Si vous ne souhaitez pas envoyer de bon d\'achat dans votre e-mail de bienvenue, entrez 0 ici, sinon entrez la valeur du bon d\'achat, par exemple 10.00 ou 50.00, mais sans les symboles monétaires. Le code de bon d\'achat sera créé automatiquement par la boutique.<br /><b>Remarque :</b> Sous "Paramètres" -> <a href="' . xtc_href_link(FILENAME_CONFIGURATION, 'gID=12') . '"><strong>Options e-mail", vous devez régler "E-mail à la création du compte" sur "Oui".</strong></a> vous devez régler "Email à la création du compte" sur "Oui".');
define('NEW_SIGNUP_DISCOUNT_COUPON_TITLE', 'Code de réduction de bienvenue');
define('NEW_SIGNUP_DISCOUNT_COUPON_DESC', 'Code de coupon de réduction de bienvenue : Si vous ne souhaitez pas envoyer de coupon dans votre e-mail de bienvenue, laissez ce champ vide ; sinon, saisissez le code de coupon que vous souhaitez utiliser.<br /><b>Remarque :</b> Sous "Paramètres" -> <a href="' . xtc_href_link(FILENAME_CONFIGURATION, 'gID=12') . '"><strong>"Options d\'e-mail".</strong></a> vous devez régler "Email à la création du compte" sur "Oui" et le code du bon d\'achat doit être créé au préalable dans l\'application <a href="' . xtc_href_link(FILENAME_COUPON_ADMIN) . '"><b>Administration des bons d\'achat</b></a> doit être créé.');

define('ACTIVATE_SHIPPING_STATUS_TITLE', 'Activer l\'affichage du statut de l\'envoi ?');
define('ACTIVATE_SHIPPING_STATUS_DESC', 'Activer l\'affichage de l\'état de la livraison ? (Il est possible de définir des délais de livraison différents pour chaque article. Après l\'activation, un nouveau poste <b>Statut de livraison</b> apparaît dans la saisie du poste).');

define('IMAGE_QUALITY_TITLE', 'Qualité de l\'image');
define('IMAGE_QUALITY_DESC', 'Qualité de l\'image (0=compression maximale, 100=meilleure qualité)');

define('GROUP_CHECK_TITLE', 'Contrôle du groupe de clients');
define('GROUP_CHECK_DESC', 'Autoriser seulement certains groupes de clients à accéder à des catégories, produits, articles de contenu individuels ? (Après l\'activation, les options d\'entrée apparaissent pour les articles, les catégories et dans le gestionnaire de contenu).');

define('ACTIVATE_NAVIGATOR_TITLE', 'Activer le navigateur d\'articles ?');
define('ACTIVATE_NAVIGATOR_DESC', 'Activez/désactivez le navigateur d\'éléments dans la vue détaillée des éléments (pour des raisons de performance avec un nombre élevé d\'éléments).');

define('QUICKLINK_ACTIVATED_TITLE', 'Activer la fonction multi-link/copie');
define('QUICKLINK_ACTIVATED_DESC', 'La fonction multilien/copie facilite la copie/lien d\'un article dans plusieurs catégories, grâce à la possibilité de sélectionner des catégories individuelles par case à cocher.');

define('ACTIVATE_REVERSE_CROSS_SELLING_TITLE', 'Marketing cruzado inverso');
define('ACTIVATE_REVERSE_CROSS_SELLING_DESC', 'Activer la fonction de marketing croisé inversé ?');
define('ACTIVATE_CROSS_SELLING_TITLE', 'Marketing croisé');
define('ACTIVATE_CROSS_SELLING_DESC', 'Activer la fonction de marketing croisé ?');

define('DOWNLOAD_UNALLOWED_PAYMENT_TITLE', 'Modules de paiement des téléchargements non autorisés');
define('DOWNLOAD_UNALLOWED_PAYMENT_DESC', 'Les méthodes de paiement <strong>ne</strong> sont <strong>PAS</strong> autorisées pour les produits à télécharger.');
define('DOWNLOAD_MIN_ORDERS_STATUS_TITLE', 'Statut de la commande');
define('DOWNLOAD_MIN_ORDERS_STATUS_DESC', 'Statut de l\'ordre dans lequel les téléchargements demandés sont lancés.');

define('STORE_OWNER_VAT_ID_TITLE', 'Numéro de TVA de l\'exploitant du magasin');
define('STORE_OWNER_VAT_ID_DESC', 'Le numéro de TVA de votre entreprise');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_TITLE', 'Statut du client pour le numéro de TVA des clients vérifiés (à l\'étranger)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_DESC', 'Sélectionnez le statut du client (groupe) pour les clients dont le numéro de TVA est vérifié.');
define('ACCOUNT_COMPANY_VAT_CHECK_TITLE', 'Demander le numéro de TVA');
define('ACCOUNT_COMPANY_VAT_CHECK_DESC', 'Les clients doivent pouvoir saisir le numéro de TVA. Si elle est fausse, le champ de saisie n\'est plus affiché.');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_TITLE', 'Vérifiez en ligne la plausibilité du numéro d\'immatriculation à la TVA');
define('ACCOUNT_COMPANY_VAT_LIVE_CHECK_DESC', 'La plausibilité du numéro d\'immatriculation à la TVA est vérifiée en ligne. Le service web du portail fiscal de l\'UE<a href="http://ec.europa.eu/taxation_customs" style="font-style:italic">(http://ec.europa.eu/taxation_customs)</a> est utilisé à cet effet.<br/>Requiert PHP5 avec le support "SOAP" activé !<br/><br/><span class="messageStackSuccess">Le support SOAP de PHP5 est actuellement ' . (in_array('soap', get_loaded_extensions()) ? '' : '<span class="messageStackError">NOT</span>') . ' enabled !</span><br/><br/>');
define('ACCOUNT_COMPANY_VAT_GROUP_TITLE', 'Ajuster le contrôle des groupes de clients par numéro de TVA ?');
define('ACCOUNT_COMPANY_VAT_GROUP_DESC', 'L\'activation de cette option modifie le groupe de clients après un contrôle positif du numéro de TVA.');
define('ACCOUNT_VAT_BLOCK_ERROR_TITLE', 'Bloquer l\'enregistrement de numéros de TVA incorrects ou non vérifiés ?');
define('ACCOUNT_VAT_BLOCK_ERROR_DESC', 'En activant cette option, seuls les numéros de TVA vérifiés et corrects sont saisis.');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_TITLE', 'Statut du client pour la TVA nombre de clients vérifiés (national)');
define('DEFAULT_CUSTOMERS_VAT_STATUS_ID_LOCAL_DESC', 'Sélectionnez le statut du client (groupe) pour les clients dont le numéro de TVA est vérifié.');

define('GOOGLE_CONVERSION_TITLE', 'Suivi de conversion Google');
define('GOOGLE_CONVERSION_DESC', 'L\'enregistrement des mots-clés de conversion de commande');
define('GOOGLE_CONVERSION_ID_TITLE', 'ID de conversion');
define('GOOGLE_CONVERSION_ID_DESC', 'Votre ID de conversion Google');
define('GOOGLE_LANG_TITLE', 'Langue Google');
define('GOOGLE_LANG_DESC', 'Code ISO de la langue utilisée');
define('GOOGLE_CONVERSION_LABEL_TITLE', 'Balise de conversion Google');
define('GOOGLE_CONVERSION_LABEL_DESC', 'Votre balise de conversion Google');

define('AFTERBUY_ACTIVATED_TITLE', 'Actif');
define('AFTERBUY_ACTIVATED_DESC', 'Activez l\'interface post-achat');
define('AFTERBUY_PARTNERID_TITLE', 'ID de socio');
define('AFTERBUY_PARTNERID_DESC', 'Votre ID partenaire Afterbuy');
define('AFTERBUY_PARTNERPASS_TITLE', 'Mot de passe du membre');
define('AFTERBUY_PARTNERPASS_DESC', 'Votre mot de passe partenaire pour l\'interface XML d\'Afterbuy');
define('AFTERBUY_USERID_TITLE', 'ID utilisateur');
define('AFTERBUY_USERID_DESC', 'Votre ID utilisateur Afterbuy');
define('AFTERBUY_ORDERSTATUS_TITLE', 'Statut de la commande');
define('AFTERBUY_ORDERSTATUS_DESC', 'Statut de l\'ordre après la transmission réussie des données de l\'ordre');
define('AFTERBUY_URL', 'Vous pouvez trouver une description d\'Afterbuy ici <a href="http://www.afterbuy.de" target="new">: http://www.afterbuy.de</a>.');
define('AFTERBUY_DEALERS_TITLE', 'Marquer comme commerçant');
define('AFTERBUY_DEALERS_DESC', 'Saisissez les identifiants de groupe des commerçants qui doivent être saisis comme commerçants dans Afterbuy.<br />Exemple : <em>6,5,8</em>. Il ne doit pas y avoir d\'espace !');
define('AFTERBUY_IGNORE_GROUPE_TITLE', 'Ignorer le groupe de clients');
define('AFTERBUY_IGNORE_GROUPE_DESC', 'Quels groupes de clients doivent être ignorés ?<br />Exemple : <em>6,5,8</em>. Il ne doit pas y avoir d\'espace !');

define('SEARCH_MIN_LENGTH_TITLE', 'Recherche du nombre de caractères');
define('SEARCH_MIN_LENGTH_DESC', 'Nombre minimum de caractères à rechercher');
define('SEARCH_IN_DESC_TITLE', 'Recherche de descriptions de produits');
define('SEARCH_IN_DESC_DESC', 'Activez pour activer la recherche dans les descriptions de produits (courte + longue).');
define('SEARCH_IN_ATTR_TITLE', 'Recherche dans les attributs du produit');
define('SEARCH_IN_ATTR_DESC', 'Activez pour permettre la recherche sur les attributs du produit (par exemple, la couleur, la longueur).');
define('SEARCH_IN_MANU_TITLE', 'Rechercher dans le fabricant');
define('SEARCH_IN_MANU_DESC', 'Activez pour activer la recherche de fabricant.');

define('ADMIN_SEARCH_IN_DESC_TITLE', 'Recherche de descriptions de produits');
define('ADMIN_SEARCH_IN_DESC_DESC', 'Activez pour activer la recherche dans les descriptions de produits (courte + longue).');
define('ADMIN_SEARCH_IN_ATTR_TITLE', 'Recherche dans les attributs du produit');
define('ADMIN_SEARCH_IN_ATTR_DESC', 'Activez pour permettre la recherche sur les attributs du produit (par exemple, la couleur, la longueur).');

define('REVOCATION_ID_TITLE', 'Droit de retrait');
define('REVOCATION_ID_DESC', 'Sélectionnez le contenu pour afficher le droit de rétractation.');
define('DISPLAY_REVOCATION_ON_CHECKOUT_TITLE', 'Afficher le droit de rétractation');
define('DISPLAY_REVOCATION_ON_CHECKOUT_DESC', 'Afficher le droit de rétractation dans checkout_confirmation.<br/><b>Remarque :</b> "Afficher les CGV" doit être actif.');

define('USE_ADMIN_TOP_MENU_TITLE', 'Admin Navigation supérieure');
define('USE_ADMIN_TOP_MENU_DESC', 'Activer la navigation supérieure de l\'administrateur ? Sinon, le menu apparaît sur le bord gauche (classique).');

define('USE_ADMIN_LANG_TABS_TITLE', 'Fiches linguistiques pour les catégories/articles');
define('USE_ADMIN_LANG_TABS_DESC', 'Activer les onglets de langue dans les champs de saisie des catégories/articles ?');

define('USE_ADMIN_THUMBS_IN_LIST_TITLE', 'Images de listes de produits');
define('USE_ADMIN_THUMBS_IN_LIST_DESC', 'Afficher une colonne supplémentaire avec les images des catégories / articles dans la liste de produits de l\'administrateur ?');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_TITLE', 'Listes de produits Images Style CSS');
define('USE_ADMIN_THUMBS_IN_LIST_STYLE_DESC', 'Des spécifications de style CSS simples peuvent être saisies ici - par exemple, pour la largeur maximale : max-width:90px ;');
define('DELETE_CACHE_SUCCESSFUL', 'Cache supprimé avec succès.');
define('DELETE_TEMP_CACHE_SUCCESSFUL', 'Cache du modèle supprimé avec succès.');

define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_TITLE', 'Mise à l\'échelle des images à faible résolution');
define('PRODUCT_IMAGE_NO_ENLARGE_UNDER_DEFAULT_DESC', 'Activez l\'option <strong>Non</strong> pour empêcher que les images de produits à faible résolution soient mises à l\'échelle des valeurs de largeur et de hauteur par défaut. Si vous activez l\'option <strong>Oui</strong>, les images de résolution inférieure seront également mises à l\'échelle en fonction des valeurs de taille d\'image standard définies. Dans ce cas, cependant, ces images peuvent être très floues et pixellisées.');
define('SHOW_BUTTON_BUY_NOW_TITLE', 'Afficher le bouton "panier" dans les listes de produits');
define('SHOW_BUTTON_BUY_NOW_DESC', '<span class="col-red"><strong>AVERTISSEMENT :</strong></span> Cela peut entraîner des avertissements si toutes les caractéristiques essentielles de l\'article ne sont pas présentées au client sur les pages de la liste des produits.');

define('MAX_DISPLAY_LIST_PRODUCTS_TITLE', 'Nombre d\'articles par page');
define('MAX_DISPLAY_LIST_PRODUCTS_DESC', 'Nombre maximum d\'éléments à afficher dans le résumé par page.');

define('WHOS_ONLINE_TIME_LAST_CLICK_TITLE', 'Qui est en ligne - période d\'affichage en sec.');
define('WHOS_ONLINE_TIME_LAST_CLICK_DESC', 'Affiche la durée des utilisateurs connectés dans le tableau "Qui est en ligne", après ce temps les entrées sont supprimées (valeur minimale : 900).');

define('SESSION_LIFE_ADMIN_TITLE', 'Durée de la session Admin');
define('SESSION_LIFE_ADMIN_DESC', 'Durée en secondes après laquelle le temps de session pour les admins expire (la session sera déconnectée) - par défaut 7200<br />La valeur définie ici ne s\'applique que si la gestion des sessions est basée sur la base de données. (configure.php => define(\'STORE_SESSIONS\', \'mysql\') ;)<br />Valeur maximale : 14400');
define('SESSION_LIFE_CUSTOMERS_TITLE', 'Durée de la session Clients');
define('SESSION_LIFE_CUSTOMERS_DESC', 'Durée en secondes après laquelle le délai d\'expiration de la session pour les clients expire (la session sera fermée) - par défaut 1440<br />La valeur définie ici ne s\'applique que si la gestion de la session est basée sur la base de données. (configure.php => define(\'STORE_SESSIONS\', \'mysql\') ;)<br />Valeur maximale : 14400');

define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_TITLE', 'Brève description dans la commande/confirmation de la commande et sur la page de confirmation de la commande ?');
define('CHECKOUT_USE_PRODUCTS_SHORT_DESCRIPTION_DESC', 'Si "Oui" est sélectionné, la description courte sera affichée aux points ci-dessus si la description de la commande est vide.<br />Si la description courte est également vide, la description longue est utilisée, raccourcie au nombre de caractères indiqué ci-dessous sous "Longueur de la description si la description courte est vide".');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_TITLE', 'Longueur de la description, si la description courte est vide');
define('CHECKOUT_USE_PRODUCTS_DESCRIPTION_FALLBACK_LENGTH_DESC', 'À quelle longueur la description doit-elle être coupée si aucune description courte n\'est disponible (le texte est complété par [...])<br />Ne s\'applique que si<i>"Description courte dans la confirmation de commande/commande et sur la page de confirmation de commande</i>" est réglé sur "Oui" ci-dessus.');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_TITLE', 'Page de confirmation de commande : Images du produit');
define('CHECKOUT_SHOW_PRODUCTS_IMAGES_DESC', 'Les images des articles doivent-elles être affichées sur la page de confirmation de la commande ?');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_TITLE', 'Page de confirmation de commande : N° d\'article');
define('CHECKOUT_SHOW_PRODUCTS_MODEL_DESC', 'Le numéro d\'article doit-il apparaître sur la page de confirmation de la commande ?');

define('EMAIL_BILLING_ATTACHMENTS_TITLE', 'Facturation des commandes par e-mail ');
define('EMAIL_BILLING_ATTACHMENTS_DESC', 'Exemple pour les pièces jointes - tant que les fichiers sont situés dans le répertoire de la boutique <b>/media/content/</b>. Séparez les pièces jointes multiples par des virgules sans espace :<br />media/content/agb.pdf,media/content/widerruf.pdf,media/content/datenschutz.pdf');

define('SHOW_IMAGES_IN_EMAIL_TITLE', 'Insérer des images d\'articles dans l\'e-mail de commande');
define('SHOW_IMAGES_IN_EMAIL_DESC', 'Insérez des images d\'articles dans l\'e-mail de confirmation de commande en HTML (augmente le risque que l\'e-mail soit classé comme SPAM).');
define('SHOW_IMAGES_IN_EMAIL_DIR_TITLE', 'Dossier d\'images e-mail ');
define('SHOW_IMAGES_IN_EMAIL_DIR_DESC', 'Sélection de dossiers d\'images d\'emails');
define('SHOW_IMAGES_IN_EMAIL_STYLE_TITLE', 'Style CSS des images des e-mails');
define('SHOW_IMAGES_IN_EMAIL_STYLE_DESC', 'Des spécifications de style CSS simples peuvent être saisies ici - par exemple, pour la largeur maximale : max-width:90px ;');

define('POPUP_SHIPPING_LINK_PARAMETERS_TITLE', 'Paramètres URL de la fenêtre pop-up des frais d\'expédition');
define('POPUP_SHIPPING_LINK_PARAMETERS_DESC', 'Les paramètres URL peuvent être saisis ici - par défaut : &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_SHIPPING_LINK_CLASS_TITLE', 'Classe CSS de la fenêtre pop-up des frais de port');
define('POPUP_SHIPPING_LINK_CLASS_DESC', 'Les classes CSS peuvent être saisies ici - par défaut : thickbox');
define('POPUP_CONTENT_LINK_PARAMETERS_TITLE', 'Pages de contenu Fenêtre pop-up Paramètres URL');
define('POPUP_CONTENT_LINK_PARAMETERS_DESC', 'Les paramètres URL peuvent être saisis ici - par défaut : &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_CONTENT_LINK_CLASS_TITLE', 'Classe CSS de la fenêtre pop-up des pages de contenu');
define('POPUP_CONTENT_LINK_CLASS_DESC', 'Les classes CSS peuvent être saisies ici - par défaut : thickbox');
define('POPUP_PRODUCT_LINK_PARAMETERS_TITLE', 'Paramètres URL de la fenêtre pop-up sur les pages de produits');
define('POPUP_PRODUCT_LINK_PARAMETERS_DESC', 'Les paramètres URL peuvent être saisis ici - par défaut : &KeepThis=true&TB_iframe=true&height=450&width=750');
define('POPUP_PRODUCT_LINK_CLASS_TITLE', 'Classe CSS pour la fenêtre pop-up des pages de produits');
define('POPUP_PRODUCT_LINK_CLASS_DESC', 'Les classes CSS peuvent être saisies ici - par défaut : thickbox');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_TITLE', 'Paramètres URL de la pop-up d\'aide aux coupons');
define('POPUP_COUPON_HELP_LINK_PARAMETERS_DESC', 'Les paramètres URL peuvent être saisis ici - par défaut : &KeepThis=true&TB_iframe=true&height=400&width=600');
define('POPUP_COUPON_HELP_LINK_CLASS_TITLE', 'Classe CSS pour la fenêtre pop-up d\'aide aux coupons');
define('POPUP_COUPON_HELP_LINK_CLASS_DESC', 'Les classes CSS peuvent être saisies ici - par défaut : thickbox');

define('POPUP_PRODUCT_PRINT_SIZE_TITLE', 'Produit Vue d\'impression Taille de la fenêtre');
define('POPUP_PRODUCT_PRINT_SIZE_DESC', 'Vous pouvez définir ici la taille de la fenêtre pop-up - par défaut : width=640, height=600');
define('POPUP_PRINT_ORDER_SIZE_TITLE', 'Taille de la fenêtre d\'impression de la commande');
define('POPUP_PRINT_ORDER_SIZE_DESC', 'Vous pouvez définir ici la taille de la fenêtre pop-up - par défaut : width=640, height=600');

define('CONFIRM_SAVE_ENTRY_TITLE', 'Avis de confirmation lors de l\'enregistrement des articles/catégories');
define('CONFIRM_SAVE_ENTRY_DESC', 'Doit-il y avoir une demande de confirmation lors de l\'enregistrement des articles/catégories ? Valeur par défaut : true (oui)');

define('WHOS_ONLINE_IP_WHOIS_SERVICE_TITLE', 'Qui est en ligne - URL de recherche Whois');
define('WHOS_ONLINE_IP_WHOIS_SERVICE_DESC', 'https://utrace.me/?query= o https://whois.domaintools.com/');

define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_TITLE', 'Achèvement de la commande - Désactiver les articles en rupture de stock');
define('STOCK_CHECKOUT_UPDATE_PRODUCTS_STATUS_DESC', 'Un article en rupture de stock (quantité en stock 0) doit-il être automatiquement désactivé à la fin de la commande ? Ensuite, l\'article ne sera plus visible dans la boutique !<br />Pour les articles qui seront bientôt à nouveau disponibles, l\'option doit être réglée sur "false".');

define('SEND_EMAILS_DOUBLE_OPT_IN_TITLE', 'Double opt-in pour l\'inscription à la newsletter');
define('SEND_EMAILS_DOUBLE_OPT_IN_DESC', 'Si "vrai", un e-mail est envoyé au client dans lequel il doit confirmer l\'inscription à la newsletter. Pour ce faire, vous devez activer l\'envoi d\'e-mails.');

define('USE_ADMIN_FIXED_TOP_TITLE', 'Admin Fixer l\'en-tête de la page ?');
define('USE_ADMIN_FIXED_TOP_DESC', 'L\'en-tête de la page doit-il toujours être visible lors du défilement ?');
define('USE_ADMIN_FIXED_SEARCH_TITLE', 'Afficher la barre de recherche de l\'administrateur ?');
define('USE_ADMIN_FIXED_SEARCH_DESC', 'La barre de recherche doit-elle toujours être visible ?');

define('SMTP_SECURE_TITLE', 'SMTP SÉCURISÉ');
define('SMTP_SECURE_DESC', 'Le serveur SMTP nécessite-t-il une connexion sécurisée ? Vous pouvez vous renseigner sur les paramètres nécessaires auprès de votre fournisseur.');

define('DISPLAY_ERROR_REPORTING_TITLE', 'Notification des erreurs');
define('DISPLAY_ERROR_REPORTING_DESC', 'Le rapport de bogue doit-il être affiché sous forme de liste formatée dans le pied de page ?');

define('DISPLAY_ERROR_REPORTING_LEVEL_TITLE', 'Niveau de déclaration des erreurs');
define('DISPLAY_ERROR_REPORTING_LEVEL_DESC', 'Pour quelles erreurs faut-il écrire un journal ?');

define('DISPLAY_BREADCRUMB_OPTION_TITLE', 'Navigation avec fil d\'Ariane');
define('DISPLAY_BREADCRUMB_OPTION_DESC', '<strong>name</strong><strong>:</strong> Le nom complet de l\'article est affiché dans la navigation par fil d\'Ariane.<br /><strong>model :</strong> Le numéro de l\'article est affiché dans la navigation par fil d\'Ariane si disponible. Sinon, retour au nom de l\'élément.');

define('EMAIL_WORD_WRAP_TITLE', 'WordWrap pour les courriers électroniques textuels');
define('EMAIL_WORD_WRAP_DESC', 'Entrez le nombre de caractères sur une ligne dans les e-mails de texte avant que le texte ne soit enveloppé (uniquement les nombres entiers).<br /><strong>Attention :</strong> Un nombre de caractères supérieur à 76 peut faire que les emails de la boutique soient classés comme SPAM par SpamAssassin ! Plus d\'informations <a href="http://wiki.apache.org/spamassassin/Rules/MIME_QP_LONG_LINE" target="_blank">ici</a>.');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_TITLE', 'Filtre de statistiques sur les rotations');
define('ORDER_STATUSES_FOR_SALES_STATISTICS_DESC', 'Sélectionnez les statuts de commande à prendre en compte pour les statistiques de rotation sur la page d\'accueil de l\'administrateur et dans la liste déroulante des statuts lorsque vous utilisez le statut "Filtre des statistiques de rotation".<br />(Pour n\'afficher que la facturation réelle, sélectionnez le statut qui est utilisé lorsque la commande est terminée).<br /><b>Remarque :</b> Au moins deux statuts doivent être sélectionnés pour que le "Filtre des statistiques de facturation" apparaisse dans la liste déroulante des statistiques de facturation. Sinon, le statut souhaité peut être sélectionné directement via la liste déroulante.');

define('SAVE_IP_LOG_TITLE', 'Sauvegarder l\'adresse IP');
define('SAVE_IP_LOG_DESC', 'L\'adresse IP doit-elle être stockée dans la base de données ?<br/>Avec l\'option xxx, les derniers chiffres de l\'IP sont anonymisés.');

define('META_MAX_KEYWORD_LENGTH_TITLE', 'Longueur maximale des méta-mots-clés');
define('META_MAX_KEYWORD_LENGTH_DESC', 'Longueur maximale des méta-mots-clés générés automatiquement (description de l\'article)');
define('META_DESCRIPTION_LENGTH_TITLE', 'Longueur de la méta-description');
define('META_DESCRIPTION_LENGTH_DESC', 'Longueur maximale de la description (en lettres)');
define('META_STOP_WORDS_TITLE', 'Mots clés');
define('META_STOP_WORDS_DESC', 'Entrez ici les mots-clés sous forme de liste séparée par des virgules qui ne doivent pas être utilisés.');
define('META_GO_WORDS_TITLE', 'Aller aux mots');
define('META_GO_WORDS_DESC', 'Entrez ici les mots-clés sous la forme d\'une liste séparée par des virgules qui sont explicitement autorisés.');

define('CSV_TEXTSIGN_TITLE', 'Identificateur de texte');
define('CSV_TEXTSIGN_DESC', 'Par exemple, " | <span style="color:#c00;">Si un point-virgule est utilisé comme séparateur, l\'identificateur de texte doit être " !</span>');
define('CSV_SEPERATOR_TITLE', 'Séparateur');
define('CSV_SEPERATOR_DESC', 'Par exemple : ; | <span style="color:#c00;">Si le champ de saisie est laissé vide, la tabulation sera utilisée par défaut lors de l\'exportation/importation !</span>');
define('COMPRESS_EXPORT_TITLE', 'Kompresión');
define('COMPRESS_EXPORT_DESC', 'Compression des données exportées');
define('CSV_CATEGORY_DEFAULT_TITLE', 'Catégorie d\'importation');
define('CSV_CATEGORY_DEFAULT_DESC', 'Tous les articles qui <b>n\'ont pas</b> été affectés à une catégorie dans le fichier d\'importation CSV et qui n\'existent pas encore dans la boutique seront importés dans cette catégorie.<br/><b>Important :</b> Si vous ne voulez pas importer d\'articles sans catégorie dans le fichier d\'importation CSV, sélectionnez la catégorie "Top", car aucun article de cette catégorie ne sera importé.');
define('CSV_CAT_DEPTH_TITLE', 'Catégories de produits');
define('CSV_CAT_DEPTH_DESC', 'Jusqu\'où doit aller l\'arbre des catégories (par exemple, configuration standard 4 : catégorie principale et trois sous-catégories)<br />Cette configuration est importante pour importer correctement les catégories créées dans le CSV. Il en va de même pour l\'exportation.<br /><span style="color:#c00;">Plus de 4 peut entraîner des pertes de performance et peut ne pas être convivial pour le client.</span>');

define('MIN_GROUP_PRICE_STAFFEL_TITLE', 'Numéro supplémentaire Barème de prix');
define('MIN_GROUP_PRICE_STAFFEL_DESC', 'Nombre supplémentaire de prix gradués affichés');

define('MODULE_CAPTCHA_ACTIVE_TITLE', 'Captcha activieren');
define('MODULE_CAPTCHA_ACTIVE_DESC', 'Pour quelles sections de la boutique le captcha doit-il être activé ?');
define('MODULE_CAPTCHA_LOGGED_IN_TITLE', 'Clients enregistrés');
define('MODULE_CAPTCHA_LOGGED_IN_DESC', 'Affichage du Captcha pour les clients enregistrés.');
define('MODULE_CAPTCHA_LOGIN_NUM_TITLE', 'Nombre de tentatives de connexion');
define('MODULE_CAPTCHA_LOGIN_NUM_DESC', 'Nombre de tentatives de connexion échouées avant l\'affichage du captcha.');
define('CAPTCHA_MOD_CLASS_TITLE', 'Module Captcha');
define('CAPTCHA_MOD_CLASS_DESC', 'Sélectionnez le module captcha à utiliser. Assurez-vous que le module est également installé.');
define('CFG_TXT_MODIFIED_CAPTCHA', 'Standard');
define('CFG_TXT_PHP_CAPTCHA', 'PhpCaptcha');

define('SHIPPING_STATUS_INFOS_TITLE', 'Délai de livraison');
define('SHIPPING_STATUS_INFOS_DESC', 'Sélectionnez le contenu pour afficher les informations sur le délai de livraison.');

define('USE_SHORT_DATE_FORMAT_TITLE', 'Afficher la date en format court');
define('USE_SHORT_DATE_FORMAT_DESC', 'Toujours afficher la date au format court : <b>01.03.2014</b> au lieu de <b>samedi, 01 mars 2014</b><br />Recommandé en cas d\'erreurs d\'affichage avec le format long de la date, comme une langue incorrecte ou des trémas !');

define('MAX_DISPLAY_PRODUCTS_CATEGORY_TITLE', 'Nombre maximal d\'articles');
define('MAX_DISPLAY_PRODUCTS_CATEGORY_DESC', 'Nombre maximum d\'articles dans la même catégorie.');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_TITLE', 'Nombre de résultats de recherche');
define('MAX_DISPLAY_ADVANCED_SEARCH_RESULTS_DESC', 'Nombre maximal d\'éléments à afficher par page dans les résultats de la recherche (advanced_search_result.php).');
define('MAX_DISPLAY_PRODUCTS_HISTORY_TITLE', 'Numéro d\'historique');
define('MAX_DISPLAY_PRODUCTS_HISTORY_DESC', 'Affiche le nombre maximum d\'éléments qui ont été visités en dernier dans le compte.');
define('MAX_DISPLAY_SEARCH_AC_RESULTS_TITLE', 'Nombre de résultats de recherche autocomplete');
define('MAX_DISPLAY_SEARCH_AC_RESULTS_DESC', 'Nombre maximum de résultats de la recherche par saisie semi-automatique.');

define('SEARCH_RESULTS_SORT_TITLE', 'Ordre des résultats de recherche');
define('SEARCH_RESULTS_SORT_DESC', 'C\'est l\'ordre dans lequel les résultats de recherche sont affichés.');
define('SEARCH_RESULTS_FIELD_TITLE', 'Zone de tri pour les résultats de recherche');
define('SEARCH_RESULTS_FIELD_DESC', 'Il s\'agit de la colonne utilisée pour trier les résultats de la recherche.');

define('PRODUCT_IMAGE_SHOW_NO_IMAGE_TITLE', 'Article noimage.gif');
define('PRODUCT_IMAGE_SHOW_NO_IMAGE_DESC', 'Affichage du fichier noimage.gif si aucune image de l\'article n\'a été spécifiée.');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_TITLE', 'Catégorie noimage.gif');
define('CATEGORIES_IMAGE_SHOW_NO_IMAGE_DESC', 'Affichage du fichier noimage.gif si aucune image de catégorie n\'a été spécifiée.');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_TITLE', 'Fabricant noimage.gif');
define('MANUFACTURER_IMAGE_SHOW_NO_IMAGE_DESC', 'Affichage de l\'image noimage.gif si aucune image du producteur n\'a été spécifiée.');

define('MODULE_SMALL_BUSINESS_TITLE', 'Petites entreprises');
define('MODULE_SMALL_BUSINESS_DESC', 'Le magasin doit-il être transformé en une petite entreprise conformément à l\'article 19 UStG ?<br /><b>Important :</b> Sous "Modules" -> "Aperçu", le module "ot_tax" doit être <a href="' . xtc_href_link(FILENAME_MODULES, 'set=ordertotal&module=ot_tax') . '"><b>aquí</b></a> doit être désactivé ou désinstallé. En outre, dans l\'individu <a href="' . xtc_href_link(FILENAME_CUSTOMERS_STATUS, '') . '"><b>Groupes de clients</b></a> "Prix incluant la TVA" doit être réglé sur "Non".');

define('COMPRESS_HTML_OUTPUT_TITLE', 'Compression HTML');
define('COMPRESS_HTML_OUTPUT_DESC', 'La sortie HTML du modèle doit-elle être livrée compressée ?');
define('COMPRESS_STYLESHEET_TITLE', 'Compression CSS');
define('COMPRESS_STYLESHEET_DESC', 'Une feuille de style compressée doit-elle être livrée ?<br/><b>Attention :</b> ne fonctionne qu\'avec un modèle compatible avec la version 2.0.0.0 ou supérieure de la boutique !');
define('COMPRESS_JAVASCRIPT_TITLE', 'Compression JavaScript');
define('COMPRESS_JAVASCRIPT_DESC', 'Un fichier JavaScript compressé doit-il être livré ?<br/><b>Attention :</b> Cela ne fonctionne qu\'avec un modèle compatible à partir de la version 2.0.1.0 de la boutique !');

define('USE_ATTRIBUTES_IFRAME_TITLE', 'Attributs et propriétés dans l\'iframe');
define('USE_ATTRIBUTES_IFRAME_DESC', 'Ouvre la gestion des attributs et des propriétés des articles dans la vue de la catégorie/article dans une iframe.');

define('ADMIN_HEADER_X_FRAME_OPTIONS_TITLE', 'Admin Clickjacking Schutz');
define('ADMIN_HEADER_X_FRAME_OPTIONS_DESC', 'Protégez la zone d\'administration avec l\'en-tête "X-Frame-Options : SAMEORIGIN<br>"Navigateurs compatibles</br><br>: FF 3.6.9+ Chrome 4.1.249.1042+ IE 8+ Safari 4.0+ Opera 10.50+</br>.');

define('SEND_MAIL_ACCOUNT_CREATED_TITLE', 'Email de création de compte');
define('SEND_MAIL_ACCOUNT_CREATED_DESC', 'Un courriel doit-il être envoyé au client lorsqu\'un nouveau compte client est créé ?');

define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_TITLE', 'Courriel sur le changement de statut');
define('STATUS_EMAIL_SENT_COPY_TO_ADMIN_DESC', 'Un e-mail doit-il être envoyé à l\'administrateur lorsque le statut d\'une commande est modifié ?');

define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_TITLE', 'Confirmation de la commande par e-mail à l\'Admin');
define('ORDER_EMAIL_SEND_COPY_TO_ADMIN_DESC', 'Une copie de la confirmation de la commande doit-elle être envoyée à l\'administrateur ?');

define('STOCK_CHECK_SPECIALS_TITLE', 'Consultez les offres spéciales');
define('STOCK_CHECK_SPECIALS_DESC', 'Vérifiez s\'il y a encore suffisamment d\'offres spéciales disponibles pour livrer la commande.<br/><br/><b>ATTENTION :</b> S\'il n\'y a pas assez d\'offres spéciales disponibles, la commande ne peut être complétée que lorsque la quantité a été réduite.');

define('DOWNLOAD_SHOW_LANG_DROPDOWN_TITLE', 'Liste déroulante des pays dans le panier d\'achat');
define('DOWNLOAD_SHOW_LANG_DROPDOWN_DESC', 'La liste déroulante des pays doit-elle être affichée dans le panier d\'achat lorsque seuls des articles à télécharger sont achetés ?');

define('GUEST_ACCOUNT_EDIT_TITLE', 'Modifier les comptes invités');
define('GUEST_ACCOUNT_EDIT_DESC', 'Les invités peuvent-ils voir et modifier les détails de votre compte ?');

define('EMAIL_SIGNATURE_ID_TITLE', 'Signature de l\'e-mail');
define('EMAIL_SIGNATURE_ID_DESC', 'Sélectionnez le contenu à utiliser comme signature dans les e-mails de la boutique.');

define('POLICY_MIN_LOWER_CHARS_TITLE', 'Mot de passe en minuscules');
define('POLICY_MIN_LOWER_CHARS_DESC', 'Combien de lettres minuscules le mot de passe doit-il comporter au minimum ?');
define('POLICY_MIN_UPPER_CHARS_TITLE', 'Changement de mot de passe');
define('POLICY_MIN_UPPER_CHARS_DESC', 'Combien de lettres majuscules le mot de passe doit-il comporter au minimum ?');
define('POLICY_MIN_NUMERIC_CHARS_TITLE', 'Numéros de mot de passe');
define('POLICY_MIN_NUMERIC_CHARS_DESC', 'Combien de chiffres au minimum le mot de passe doit-il comporter ?');
define('POLICY_MIN_SPECIAL_CHARS_TITLE', 'Caractères spéciaux dans le mot de passe');
define('POLICY_MIN_SPECIAL_CHARS_DESC', 'Combien de caractères spéciaux le mot de passe doit-il contenir au minimum ?');

define('SHOW_SHIPPING_EXCL_TITLE', 'Frais d\'expédition plus.');
define('SHOW_SHIPPING_EXCL_DESC', 'Affichage des frais d\'expédition en plus ou en moins');

define('ACCOUNT_TELEPHONE_OPTIONAL_TITLE', 'Numéro de téléphone facultatif');
define('ACCOUNT_TELEPHONE_OPTIONAL_DESC', 'Le numéro de téléphone doit-il être demandé uniquement en option ?');

define('NEW_ATTRIBUTES_STYLING_TITLE', 'Stylisation de la gestion des attributs');
define('NEW_ATTRIBUTES_STYLING_DESC', 'Activer le style des cases à cocher/descentes dans la gestion des attributs ? Définissez no/false s\'il y a de nombreux attributs et des problèmes de performance.');

define('DB_CACHE_TYPE_TITLE', 'Moteur de cache');
define('DB_CACHE_TYPE_DESC', 'Sélectionnez l\'un des moteurs de mise en cache disponibles.');

define('META_PRODUCTS_KEYWORDS_LENGTH_TITLE', 'Longueur des termes de recherche supplémentaires');
define('META_PRODUCTS_KEYWORDS_LENGTH_DESC', 'Longueur maximale des termes de recherche supplémentaires (en lettres).');
define('META_KEYWORDS_LENGTH_TITLE', 'Longueur du méta-mot clé');
define('META_KEYWORDS_LENGTH_DESC', 'Longueur maximale des mots-clés (en lettres).');
define('META_TITLE_LENGTH_TITLE', 'Longueur Méta-Titre');
define('META_TITLE_LENGTH_DESC', 'Longueur maximale du titre (en lettres).');
define('META_CAT_SHOP_TITLE_TITLE', 'Catégories de rubriques de magasin');
define('META_CAT_SHOP_TITLE_DESC', 'Ajouter le titre de la boutique aux catégories ?');
define('META_PROD_SHOP_TITLE_TITLE', 'Acheter des produits du titre');
define('META_PROD_SHOP_TITLE_DESC', 'Ajouter le titre de la boutique aux produits ?');
define('META_CONTENT_SHOP_TITLE_TITLE', 'Contenu du titre de la boutique');
define('META_CONTENT_SHOP_TITLE_DESC', 'Ajouter le titre de la boutique au contenu ?');
define('META_SPECIALS_SHOP_TITLE_TITLE', 'Offres spéciales du titre de la boutique');
define('META_SPECIALS_SHOP_TITLE_DESC', 'Attacher le titre de la boutique aux offres spéciales ?');
define('META_NEWS_SHOP_TITLE_TITLE', 'Titre du magasin Nouveaux produits');
define('META_NEWS_SHOP_TITLE_DESC', 'Ajouter le titre de la boutique aux nouveaux produits ?');
define('META_SEARCH_SHOP_TITLE_TITLE', 'Recherche de titres dans la boutique');
define('META_SEARCH_SHOP_TITLE_DESC', 'Ajouter le titre de la boutique dans les résultats de recherche de la boutique ?');
define('META_OTHER_SHOP_TITLE_TITLE', 'Titre de la boutique autres pages');
define('META_OTHER_SHOP_TITLE_DESC', 'Ajouter le titre de la boutique à toutes les autres pages ?');
define('META_GOOGLE_VERIFICATION_KEY_TITLE', 'Clé de vérification Google');
define('META_GOOGLE_VERIFICATION_KEY_DESC', '<meta name="google-site-verification">');
define('META_BING_VERIFICATION_KEY_TITLE', 'Clé de vérification Bing');
define('META_BING_VERIFICATION_KEY_DESC', '<meta name="msvalidate.01">');

define('NEW_SELECT_CHECKBOX_TITLE', 'Style de la zone d\'administration');
define('NEW_SELECT_CHECKBOX_DESC', 'Dans l\'espace d\'administration, activez le style pour les cases à cocher/downs ?');
define('CSRF_TOKEN_SYSTEM_TITLE', 'Système de jetons d\'administration');
define('CSRF_TOKEN_SYSTEM_DESC', 'Le système de jetons doit-il être utilisé dans l\'administration ?<br/><b>Attention :</b> Le système de jetons a été introduit pour renforcer la sécurité.');

define('DISPLAY_FILTER_INDEX_TITLE', 'Afficher les filtres par page - Article');
define('DISPLAY_FILTER_INDEX_DESC', 'Saisissez les valeurs possibles de la sélection en les séparant par une virgule. Pour tous les articles, entrez tous.<br/>Ex : 3,12,27,tous');
define('DISPLAY_FILTER_SPECIALS_TITLE', 'Affichage du filtre par page - Offres spéciales');
define('DISPLAY_FILTER_SPECIALS_DESC', 'Saisissez les valeurs possibles de la sélection en les séparant par une virgule. Pour tous les articles, entrez tous.<br/>Ex : 3,12,27,tous');
define('DISPLAY_FILTER_PRODUCTS_NEW_TITLE', 'Afficher les filtres par page - Nouveaux articles');
define('DISPLAY_FILTER_PRODUCTS_NEW_DESC', 'Saisissez les valeurs possibles de la sélection en les séparant par une virgule. Pour tous les articles, entrez tous.<br/>Ex : 3,12,27,tous');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_TITLE', 'Afficher les filtres par page - Résultats de la recherche');
define('DISPLAY_FILTER_ADVANCED_SEARCH_RESULT_DESC', 'Saisissez les valeurs possibles de la sélection en les séparant par une virgule. Pour tous les articles, entrez tous.<br/>Ex : 4,12,32,tous');

define('USE_BROWSER_LANGUAGE_TITLE', 'Passage automatique à la langue du navigateur');
define('USE_BROWSER_LANGUAGE_DESC', 'Changez automatiquement la langue en fonction de la langue du navigateur du client.');

define('WYSIWYG_SKIN_TITLE', 'Piel del éditeur WYSIWYG');
define('WYSIWYG_SKIN_DESC', 'Sélectionnez le skin de l\'éditeur WYSIWYG.');

define('CHECK_CHEAPEST_SHIPPING_MODUL_TITLE', 'Présélectionnez la méthode d\'expédition la moins chère');
define('CHECK_CHEAPEST_SHIPPING_MODUL_DESC', 'La méthode d\'expédition la moins chère pour le client doit-elle être présélectionnée à la caisse ?');

define('DISPLAY_PRIVACY_CHECK_TITLE', 'Signature de la protection des données');
define('DISPLAY_PRIVACY_CHECK_DESC', 'Confidentialité de la signature lors de la création du compte, du formulaire de contact, de l\'abonnement à la newsletter et du paiement ?');

define('SHOW_SELFPICKUP_FREE_TITLE', 'Module d\'expédition "enlèvement automatique" pour "sans frais d\'expédition".');
define('SHOW_SELFPICKUP_FREE_DESC', 'Le module d\'expédition "selfpickup" doit-il être affiché lorsque le montant défini dans le module "frais d\'expédition (ot_shiping)" pour la "livraison gratuite" est atteint ?');

define('CHECK_FIRST_PAYMENT_MODUL_TITLE', 'Présélectionnez la première option de paiement');
define('CHECK_FIRST_PAYMENT_MODUL_DESC', 'Le premier mode de paiement doit-il être présélectionné pour le client lors du passage à la caisse ?');

define('ATTRIBUTES_VALID_CHECK_TITLE', 'Attribut validieren');
define('ATTRIBUTES_VALID_CHECK_DESC', 'Vérifie les articles du panier du client pour détecter les attributs qui ne sont plus valides.<br/>(Cela peut se produire si un client revient dans la boutique après une longue période et veut acheter un article qui a été laissé dans le panier lors d\'une visite précédente).<br/><b>Remarque :</b> cette vérification doit être désactivée pour les extensions qui étendent ultérieurement les attributs, par exemple le champ de texte.');

define('ATTRIBUTE_MODEL_DELIMITER_TITLE', 'N° d\'article/attribut Séparateur');
define('ATTRIBUTE_MODEL_DELIMITER_DESC', 'Séparateur entre le numéro d\'article et le numéro d\'article de l\'attribut.');

define('STORE_PAGE_PARSE_TIME_THRESHOLD_TITLE', 'Valeur seuil pour économiser le temps de calcul de la mise en page');
define('STORE_PAGE_PARSE_TIME_THRESHOLD_DESC', 'Définit la valeur seuil en secondes au-delà de laquelle une entrée doit être écrite pour le temps de calcul de la mise en page.');

define('SEARCH_IN_FILTER_TITLE', 'Recherche dans les propriétés des articles');
define('SEARCH_IN_FILTER_DESC', 'Activez pour activer la recherche dans les propriétés de l\'élément.');
define('SEARCH_AC_STATUS_TITLE', 'Autocompletar Suche');
define('SEARCH_AC_STATUS_DESC', 'Activez pour activer la recherche autocomplète.<br/><b>Attention :</b> ne fonctionne qu\'avec un modèle compatible avec la version 2.0.0.0 ou supérieure de la boutique !');
define('SEARCH_AC_MIN_LENGTH_TITLE', 'Nombre de caractères de la recherche autocomplète');
define('SEARCH_AC_MIN_LENGTH_DESC', 'À partir de quel nombre de caractères les premiers résultats de la recherche doivent-ils être affichés ?<br/><b>Attention :</b> Cela ne fonctionne qu\'avec un modèle compatible avec la version 2.0.0.0.0 de la boutique !');
define('SEARCH_AC_CATEGORIES_TITLE', 'Liste déroulante des catégories dans le champ de recherche');
define('SEARCH_AC_CATEGORIES_DESC', 'Activez cette option pour afficher une liste déroulante de catégories dans le champ de recherche avant le champ de recherche.');

define('DISPLAY_PRIVACY_ON_CHECKOUT_TITLE', 'Affichage de la protection des données dans la boîte');
define('DISPLAY_PRIVACY_ON_CHECKOUT_DESC', 'Une note sur la protection des données doit-elle également figurer dans l\'encadré ?<br/><b>Attention :</b> Si une case à cocher doit être affichée en plus, l\'option "Signer la confidentialité" doit être réglée sur "Oui".');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_TITLE', 'Afficher le droit de rétractation Téléchargements');
define('DISPLAY_REVOCATION_VIRTUAL_ON_CHECKOUT_DESC', 'Devrait-il y avoir une case à la caisse indiquant que le droit de rétractation expire ?');
define('ORDER_STATUSES_DISPLAY_DEFAULT_TITLE', 'Afficher les commandes');
define('ORDER_STATUSES_DISPLAY_DEFAULT_DESC', 'Les commandes dont le statut doit être affiché par défaut ?');

define('INVOICE_INFOS_TITLE', 'Détails de la facture');
define('INVOICE_INFOS_DESC', 'Sélectionnez une page de contenu. Le contenu apparaît sur l\'impression de la facture.');

define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_TITLE', 'Afficher les éléments de la sous-catégorie');
define('CATEGORIES_SHOW_PRODUCTS_SUBCATS_DESC', 'Tous les éléments des sous-catégories existantes doivent-ils être répertoriés ?');

define('SEO_URL_MOD_CLASS_TITLE', 'Module URL');
define('SEO_URL_MOD_CLASS_DESC', 'Sélectionnez un module URL.');

define('MODULE_BANNER_MANAGER_STATUS_TITLE', 'Gestionnaire de bannières');
define('MODULE_BANNER_MANAGER_STATUS_DESC', 'Activer Banner Manager ?');

define('MODULE_NEWSLETTER_STATUS_TITLE', 'Bulletin d\'information');
define('MODULE_NEWSLETTER_STATUS_DESC', 'Activer le système de bulletin ?');

define('EMAIL_ARCHIVE_ADDRESS_TITLE', 'Archives - Adresse e-mail');
define('EMAIL_ARCHIVE_ADDRESS_DESC', 'Saisissez une adresse e-mail pour archiver tous les messages sortants. Ceci envoie les e-mails à une boîte aux lettres d\'archives via BCC.');

define('DISPLAY_HEADQUARTER_ON_CHECKOUT_TITLE', 'Siège social dans le bureau du caissier');
define('DISPLAY_HEADQUARTER_ON_CHECKOUT_DESC', 'Le siège social de l\'entreprise doit-il figurer sur la caisse enregistreuse ?');

define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_TITLE', 'Valeur du coupon de la newsletter');
define('MODULE_NEWSLETTER_VOUCHER_AMOUNT_DESC', 'Pour un bon d\'achat lors de l\'inscription à la newsletter, entrez la valeur du bon d\'achat, sinon entrez 0 ici.');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_TITLE', 'Code promo de la newsletter');
define('MODULE_NEWSLETTER_DISCOUNT_COUPON_DESC', 'Pour obtenir un bon d\'achat lors de l\'inscription à la newsletter, saisissez le code du bon d\'achat, sinon laissez ce champ vide.');
define('MODULE_NEWSLETTER_INFOS_TITLE', 'Informations sur le bulletin d\'information');
define('MODULE_NEWSLETTER_INFOS_DESC', 'Sélectionnez le contenu à afficher comme information de bulletin.');

define('ADMIN_START_TAB_SELECTED_TITLE', 'Page d\'accueil des onglets');
define('ADMIN_START_TAB_SELECTED_DESC', 'Quel onglet de la page d\'accueil doit être sélectionné par défaut ?');

define('CACHE_LIFETIME_NOTE', '<b>Attention :</b> Si le cache est activé, les modifications ne seront visibles dans la boutique qu\'après l\'expiration de la durée de vie du cache !');

define('REVIEWS_PURCHASED_ONLY_TITLE', 'Vérifier les classements');
define('REVIEWS_PURCHASED_ONLY_DESC', 'Les avis ne devraient-ils être possibles que si un client a également acheté l\'article ?');
define('REVIEWS_PURCHASED_INFOS_TITLE', 'Information');
define('REVIEWS_PURCHASED_INFOS_DESC', 'Sélectionnez le contenu que vous souhaitez afficher en tant qu\'information de notation sur son authenticité.');

define('CAT_VIEW_DROPDOWN_TITLE', 'Catégorie Dropdown pour les catégories/articles');
define('CAT_VIEW_DROPDOWN_DESC', 'Activer le menu déroulant de navigation pour les catégories/articles ?');

define('DISPLAY_PRODUCTS_ADDED_TITLE', 'Annonce Article ajouté');
define('DISPLAY_PRODUCTS_ADDED_DESC', 'Voulez-vous que l\'article indique la date à laquelle il a été ajouté au catalogue ?');
