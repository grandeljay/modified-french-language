<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_PAYMENT_BILLPAY_TEXT_TITLE', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_DESCRIPTION', 'BillPay - Factura');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_MESSAGE', 'Message d\'erreur de BillPay');
define('MODULE_PAYMENT_BILLPAY_TEXT_INFO', '<div style="margin-top:6px"><img src="https://www.billpay.de/wp-content/uploads/2011/04/LogoSmall_0.png" alt="BillPay Logo" title="BillPay Logo" /></div>');

define('MODULE_PAYMENT_BILLPAY_ALLOWED_TITLE', 'Zones autorisées');
define('MODULE_PAYMENT_BILLPAY_ALLOWED_DESC', 'Spécifiez individuellement les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).');

define('MODULE_PAYMENT_BILLPAY_LOGGING_TITLE', 'Chemin absolu vers le fichier journal');
define('MODULE_PAYMENT_BILLPAY_LOGGING_DESC', 'Si aucune valeur n\'est définie, la valeur par défaut est d\'écrire dans le répertoire /includes/external/billpay/log (les droits d\'écriture doivent être disponibles).');

define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_TITLE', 'Identification du vendeur');
define('MODULE_PAYMENT_BILLPAY_GS_MERCHANT_ID_DESC', 'Vous recevez ces données de BillPay');

define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_TITLE', 'Définir le statut de la commande');
define('MODULE_PAYMENT_BILLPAY_ORDER_STATUS_DESC', 'Définissez les commandes passées avec ce module à ce statut.');

define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_TITLE', 'ID du portail');
define('MODULE_PAYMENT_BILLPAY_GS_PORTAL_ID_DESC', 'Vous recevez ces données de BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_SECURE_TITLE', 'Clé de sécurité');
define('MODULE_PAYMENT_BILLPAY_GS_SECURE_DESC', 'Vous recevez ces données de BillPay');

define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_TITLE', 'Clé API publique');
define('MODULE_PAYMENT_BILLPAY_GS_PUBLIC_API_KEY_DESC', 'Vous recevez ces données de BillPay');

define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_TITLE', 'Ordre d\'affichage');
define('MODULE_PAYMENT_BILLPAY_SORT_ORDER_DESC', 'Ordre d\'affichage. Le plus petit chiffre est affiché en premier.');

define('MODULE_PAYMENT_BILLPAY_STATUS_TITLE', 'Activé');
define('MODULE_PAYMENT_BILLPAY_STATUS_DESC', 'Voulez-vous autoriser l\'achat sur compte avec BillPay ?');

define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_TITLE', 'Mode transactionnel');
define('MODULE_PAYMENT_BILLPAY_GS_TESTMODE_DESC', 'En mode test, des messages d\'erreur détaillés sont affichés. Pour un fonctionnement productif, le mode direct doit être activé.');

define('MODULE_PAYMENT_BILLPAY_ZONE_TITLE', 'Zona fiscal');
define('MODULE_PAYMENT_BILLPAY_ZONE_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_TITLE', 'Base d\'url API');
define('MODULE_PAYMENT_BILLPAY_GS_API_URL_BASE_DESC', 'Vous recevrez ces données de BillPay (Attention ! Les URL du système de test et du système en direct sont différentes).');

define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_TITLE', 'Base url Test-API');
define('MODULE_PAYMENT_BILLPAY_GS_TESTAPI_URL_BASE_DESC', 'Vous recevrez ces données de BillPay (Attention ! Les URL du système de test et du système en direct sont différentes).');

define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_TITLE', 'Enregistrement activé');
define('MODULE_PAYMENT_BILLPAY_LOGGING_ENABLE_DESC', 'Les demandes adressées à l\'interface de paiement BillPay doivent-elles être écrites dans le fichier journal ?');

define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_TITLE', 'Valeur minimale de la commande');
define('MODULE_PAYMENT_BILLPAY_MIN_AMOUNT_DESC', 'À partir de cette valeur de commande, le mode de paiement est affiché.');

define('MODULE_PAYMENT_BILLPAY_LOGPATH_TITLE', 'Chemin d\'inscription');
define('MODULE_PAYMENT_BILLPAY_LOGPATH_DESC', '');

define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_TITLE', 'X_FORWARDED_FOR activer');
define('MODULE_PAYMENT_BILLPAY_GS_HTTP_X_DESC', 'Activez cette fonction si votre boutique fonctionne sur un système en nuage.');

define('MODULE_PAYMENT_BILLPAY_HTTP_X_TITLE', 'X_FORWARDED_FOR activer');
define('MODULE_PAYMENT_BILLPAY_HTTP_X_DESC', 'Activez cette fonction si votre boutique fonctionne sur un système en nuage.');

define('MODULE_PAYMENT_BILLPAY_TEXT_BIRTHDATE', 'Date de naissance');
define('MODULE_PAYMENT_BILLPAY_TEXT_PHONE', 'Numéro de téléphone');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK', 'J\'accepte que les données nécessaires au traitement de l\'achat sur compte et à un contrôle d\'identité et de crédit soient transmises à <a href="https://www.billpay.de/endkunden/" target="blank">BillPay GmbH</a>. Les <a href="%s" target="_blank">règles de protection des données de</a> BillPay s\'appliquent.');
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_CH', '<label for="billpay_eula">Je confirme par la présente les <a href="https://www.billpay.de/kunden/agb-ch" target="_blank">conditions générales et</a> la <a href="https://www.billpay.de/kunden/agb-ch#datenschutz" target="_blank">politique de confidentialité de</a> BillPay GmbH.</label> <br />');

define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA', "J'accepte que les données nécessaires au traitement du paiement et à un contrôle d'identité et de solvabilité soient transmises à <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a>. La <a href='%s' target='_blank'>politique de confidentialité</a> de BillPay.<br/><br/> J'accorde à BillPay un mandat de prélèvement SEPA<a href='#' class='bpy-btn-details'>(détails</a>) pour recouvrer les paiements dus et je donne instruction à mon établissement de crédit de recouvrer les prélèvements.");
define('MODULE_PAYMENT_BILLPAY_TEXT_EULA_CHECK_SEPA_AT', "J'accepte que les données nécessaires au traitement du paiement et à un contrôle d'identité et de solvabilité soient transmises à <a href='https://www.billpay.de/endkunden/' target='_blank'>BillPay GmbH</a>. La <a href='%s' target='_blank'>politique de confidentialité</a> de BillPay.<br/><br/> J'accorde à BillPay et à <a href='https://www.privatbank1891.com/' target='_blank'>net-m privatbank 1891 AG</a> un mandat de prélèvement SEPA<a href='#' class='bpy-btn-details'>(détails</a>) pour l'encaissement des paiements en souffrance et je donne instruction à mon établissement de crédit d'encaisser les prélèvements.");

define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_TITLE', 'Activer l\'encodage UTF8');
define('MODULE_PAYMENT_BILLPAY_UTF8_ENCODE_DESC', 'Décochez cette option si vous utilisez l\'encodage UTF-8 dans votre boutique en ligne.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE', 'Saisissez votre date de naissance');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_GENDER', 'Entrez votre sexe');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_TITLE', 'Veuillez entrer votre titre');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_BIRTHDATE_AND_GENDER', 'Saisissez votre date de naissance et votre sexe');
define('MODULE_PAYMENT_BILLPAY_TEXT_ENTER_PHONE', 'Veuillez entrer votre numéro de téléphone');
define('MODULE_PAYMENT_BILLPAY_TEXT_NOTE', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_REQ', '');
define('MODULE_PAYMENT_BILLPAY_TEXT_GENDER', 'Genre');
define('MODULE_PAYMENT_BILLPAY_TEXT_SALUTATION', 'Saludo');
define('MODULE_PAYMENT_BILLPAY_TEXT_MALE', 'homme');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEMALE', 'femme');
define('MODULE_PAYMENT_BILLPAY_TEXT_MR', 'Sr.');
define('MODULE_PAYMENT_BILLPAY_TEXT_MRS', 'Mme.');

define('JS_BILLPAY_EULA', '* Veuillez confirmer les CGV de BillPay !');
define('JS_BILLPAY_DOBDAY', '* Veuillez saisir votre date de naissance.');
define('JS_BILLPAY_DOBMONTH', '* Veuillez saisir votre mois de naissance.');
define('JS_BILLPAY_DOBYEAR', '* Veuillez saisir votre année de naissance.');
define('JS_BILLPAY_GENDER', '* Veuillez entrer votre sexe.');

define('JS_BILLPAY_CODE', '* Veuillez entrer le BIC.');
define('JS_BILLPAY_NUMBER', '* Veuillez entrer votre IBAN.');
define('JS_BILLPAY_NAME', '* Veuillez saisir le nom du titulaire du compte.');
define('JS_BILLPAY_PHONE', '* Veuillez saisir votre numéro de téléphone.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NUMBER', '* Veuillez saisir l\'IBAN.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_CODE', '* Veuillez entrer le BIC.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NAME', '* Saisissez le nom du titulaire du compte.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_PHONE', '* Veuillez saisir votre numéro de téléphone.');

define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_EULA', '* Veuillez accepter les T&amp;C de BillPay !');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB', '* Veuillez saisir votre date de naissance.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DOB_UNDER', 'Vous devez être âgé de 18 ans ou plus pour utiliser BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DEFAULT', 'Une erreur interne s\'est produite. Sélectionnez un autre mode de paiement');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_SHORT', 'Une erreur interne s\'est produite !');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_CREATED_COMMENT', 'Le délai de paiement de la commande a été initié avec succès avec BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_COMMENT', 'La commande a été annulée avec succès avec BillPay.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_DUEDATE', 'L\'objectif de paiement n\'a pas pu être initié car la date d\'échéance est vide.');
define('MODULE_PAYMENT_BILLPAY_TEXT_ERROR_NO_RATEPLAN', 'Demandez un plan d\'échelonnement pour le nombre total d\'échelonnements.');

define('MODULE_PAYMENT_BILLPAY_TEXT_CREATE_INVOICE', 'Activer le délai de paiement BillPay maintenant ?');
define('MODULE_PAYMENT_BILLPAY_TEXT_CANCEL_ORDER', 'Annuler la commande de BillPay maintenant ?');

define('MODULE_PAYMENT_BILLPAY_TEXT_ACCOUNT_HOLDER', 'Titulaire du compte');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN', 'IBAN');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK_NAME', 'Banco');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC', 'BIC');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_REFERENCE', 'Numéro de facture');

define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO', 'Veuillez transférer le montant total, en indiquant le numéro de transaction BillPay dans le motif du paiement (%1$s), sur le compte suivant dans le délai de paiement avant %2$02s.%3$02s.%4$04s :');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_NO_DUEDATE', 'Veuillez transférer le montant total, en indiquant le numéro de transaction BillPay dans le motif du paiement (%1$s), sur le compte suivant dans le délai de paiement jusqu\'à la date d\'échéance, que vous recevrez avec la facture :');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO1', 'Vous avez choisi d\'acheter sur compte avec BillPay. Veuillez transférer le montant total par ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO2', ' au compte suivant : ');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO3', 'Date d\'échéance que vous recevez avec la facture');
define('MODULE_PAYMENT_BILLPAY_TEXT_INVOICE_INFO_MAIL', '<br/>Veuillez transférer le montant total, en indiquant le numéro de transaction BillPay dans le motif du paiement (%s), sur le compte suivant avant la date d\'échéance, que vous recevrez avec la facture :');

define('MODULE_PAYMENT_BILLPAY_TEXT_BANKDATA', 'Veuillez entrer vos coordonnées bancaires.');

define('MODULE_PAYMENT_BILLPAY_DUEDATE_TITLE', 'Date limite de paiement');

define('MODULE_PAYMENT_BILLPAY_TEXT_PURPOSE', 'Utilisation prévue');

define('MODULE_PAYMENT_BILLPAY_TEXT_ADD', 'plus');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE', 'Tarifa');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO1', 'Pour cette commande par facture, des frais de ');
define('MODULE_PAYMENT_BILLPAY_TEXT_FEE_INFO2', ' haut');

define('MODULE_PAYMENT_BILLPAY_TEXT_SANDBOX', 'Il est en mode "sandbox" :');
define('MODULE_PAYMENT_BILLPAY_TEXT_CHECK', 'Vous êtes en mode d\'acceptation :');
define('MODULE_PAYMENT_BILLPAY_UNLOCK_INFO', 'Informations sur le circuit en direct');

define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_TITLE', 'Types de clients autorisés');
define('MODULE_PAYMENT_BILLPAY_B2BCONFIG_DESC', 'Voulez-vous activer le mode de paiement pour les clients privés (B2C), les clients professionnels (B2B) ou les deux (LES DEUX) ?');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_NAME_TEXT', 'Nom de l\'entreprise');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_TEXT', 'Forme juridique');
define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_LEGAL_FORM_SELECT_HTML', "");
define('MODULE_PAYMENT_BILLPAY_B2B_LEGALFORM_VALUES', 'ag:AG (société anonyme) |eg:eG (coopérative enregistrée) |ek:EK (commerçant enregistré) |ev:e.V. (association enregistrée). (association enregistrée)|freelancer:Travailleur indépendant/petit entrepreneur/représentant d\'entreprise|gbr:GbR/BGB (Gesellschaft b&uuml;rgerlichen Rechts)|gmbh:GmbH (société à responsabilité limitée)|gmbh_ig:GmbH in Gr&uuml;ndung|gmbh_co_kg:GmbH &amp; Co. KG|kg:KG (société en commandite)|ltd:Limited|ltd_co_kg:Limited &amp; Co. KG|ohg:OHG (société en nom collectif)|public_inst:Organisme public|misc_capital:Autre société anonyme|misc:Autre société en nom collectif|foundation:Fondation|ug:UG (société à responsabilité limitée)');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_TEXT', 'Numéro du registre du commerce');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_TEXT', 'CIF');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_TEXT', 'Nom du propriétaire');
define('MODULE_PAYMENT_BILLPAY_B2B_CONTACT_PERSON_TEXT', 'Personne de contact');

define('MODULE_PAYMENT_BILLPAY_B2B_CHOOSE_CLIENT_TEXT', 'Type de client');
define('MODULE_PAYMENT_BILLPAY_B2B_PRIVATE_CLIENT_TEXT', 'Clients privés');
define('MODULE_PAYMENT_BILLPAY_B2B_BUSINESS_CLIENT_TEXT', 'Client d\'affaires');

define('MODULE_PAYMENT_BILLPAY_B2B_COMPANY_FIELD_EMPTY', 'Entrez le nom de l\'entreprise');
define('MODULE_PAYMENT_BILLPAY_B2B_LEGAL_FORM_FIELD_EMPTY', 'Saisissez la forme juridique de l\'entreprise');
define('MODULE_PAYMENT_BILLPAY_B2B_HOLDER_NAME_EMPTY', 'Veuillez entrer le nom du propriétaire');
define('MODULE_PAYMENT_BILLPAY_B2B_REGISTER_NUMBER_EMPTY', 'Veuillez saisir le numéro d\'enregistrement du commerce');
define('MODULE_PAYMENT_BILLPAY_B2B_TAX_NUMBER_EMPTY', 'Veuillez saisir votre numéro de TVA');

defined('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL') || define('MODULE_ORDER_TOTAL_BILLPAY_FEE_FROM_TOTAL', 'du montant de la facture');

define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_TITLE', 'Codage régional');
define('MODULE_PAYMENT_BILLPAY_GS_UTF8_ENCODE_DESC', 'Votre site utilise-t-il un encodage régional (autre que UTF-8) ?');


define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER', 'La commande n\'a pas encore été activée auprès de BillPay. Veuillez activer la commande immédiatement avant l\'expédition en définissant le statut approprié.');
define('MODULE_PAYMENT_BILLPAY_ACTIVATE_ORDER_WARNING', "Attention : Le délai de paiement n'a pas encore commencé avec BillPay !");

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDRESS', 'L\'ajustement de l\'adresse n\'est pas autorisé pour les commandes BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRODUCT', 'Il n\'est pas permis de commander à nouveau des articles lorsque vous commandez avec BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PAYMENT', 'L\'ajustement du mode de paiement n\'est pas autorisé pour les commandes BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CURRENCY', 'L\'ajustement de la devise n\'est pas autorisé pour les commandes BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_HIGHER_QUANTITY', 'Vous ne pouvez pas commander plus de produits que la commande initiale avec BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_QUANTITY', 'Pour les commandes BillPay, le nombre d\'articles ne doit pas être négatif.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_TAX', 'L\'ajustement du taux d\'imposition n\'est pas autorisé pour les commandes BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_PRICE', 'L\'ajustement du prix du produit n\'est pas autorisé pour les commandes BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ID', 'L\'identification du produit ne peut pas être définie pour les commandes BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ZERO_REDUCTION', 'Veuillez saisir le montant à annuler');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_REDUCTION', 'Il n\'est pas permis de commander à nouveau des articles lorsque vous commandez avec BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_NEGATIVE_SHIPPING', 'Les frais d\'expédition négatifs ne sont pas acceptés pour les commandes avec BillPay.');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_INCREASED_SHIPPING', 'Augmentation des frais d\'expédition non autorisée pour les commandes avec BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADDED_SHIPPING', 'Les frais d\'expédition ne peuvent pas être ajoutés aux commandes BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_FORBIDDEN', 'Action non autorisée pour les commandes avec BillPay');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_NOT_PROCESSED', 'Attention ! L\'ajustement des commandes sans taxe sur les articles n\'est pas automatiquement envoyé à BillPay en raison d\'une erreur dans le logiciel de la boutique, veuillez plutôt ajuster le montant manuellement dans le back-office de BillPay (https://admin.billpay.de) !');
define('MODULE_PAYMENT_BILLPAY_PARTIAL_CANCEL_ERROR_CUSTOMER_CARE', 'Le paramétrage de la commande dans BillPay a échoué. Veuillez contacter immédiatement notre service clientèle (haendler@billpay.de).');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADJUST_CHARGEABLE', 'La personnalisation d\'une option de produit facturable n\'est pas autorisée pour les commandes avec BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_ADD_CHARGEABLE', 'L\'ajout d\'une option de produit facturable n\'est pas autorisé pour les commandes BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_REMOVE_CHARGEABLE', 'Suppression d\'une option de produit facturable non autorisée pour les commandes avec BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_GENERAL', 'Vous ne pouvez pas le faire pour le mode de paiement BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_ERROR_CONTACT_BILLPAY', 'Une erreur s\'est produite ! Veuillez contacter BillPay.');

define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_PARTIAL_CANCEL', 'Annulation partielle envoyée avec succès à BillPay');
define('MODULE_PAYMENT_BILLPAY_HISTORY_INFO_EDIT_CART_CONTENT', 'La modification de la commande a été envoyée avec succès à BillPay.');

define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_TEST', 'Testmodus');
define('MODULE_PAYMENT_BILLPAY_TRANSACTION_MODE_LIVE', 'Livemodus');

define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_EN', 'BillPay en attente');
define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_TITLE_DE', 'BillPay non terminé');

define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_EN', 'BillPay approuvé');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_TITLE_DE', 'BillPay approuvé');

define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_EN', 'BillPay activé');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_TITLE_DE', 'BillPay activé');

define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_EN', 'BillPay annulé');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_TITLE_DE', 'BillPay storniert');

define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_EN', '¡Error en BillPay !');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_TITLE_DE', '¡Error en BillPay !');

define('MODULE_PAYMENT_BILLPAY_STATUS_PENDING_DESC', 'BillPay - En attente de confirmation');
define('MODULE_PAYMENT_BILLPAY_STATUS_APPROVED_DESC', 'BillPay - Confirmé');
define('MODULE_PAYMENT_BILLPAY_STATUS_ACTIVATED_DESC', 'BillPay - Activado');
define('MODULE_PAYMENT_BILLPAY_STATUS_CANCELLED_DESC', 'BillPay - Cancelado');
define('MODULE_PAYMENT_BILLPAY_STATUS_ERROR_DESC', 'BillPay - En raison d\'une erreur, cette commande nécessite une correction manuelle. Veuillez contacter l\'assistance BillPay.');

define('MODULE_PAYMENT_BILLPAY_SALUTATION_MALE', MODULE_PAYMENT_BILLPAY_TEXT_MR);
define('MODULE_PAYMENT_BILLPAY_SALUTATION_FEMALE', MODULE_PAYMENT_BILLPAY_TEXT_MRS);

define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION', "Le numéro d'identification du créancier de BillPay est DE19ZZ00000237180. Le numéro de référence du mandat me sera ensuite envoyé par e-mail avec un modèle de mandat écrit. Je signerai également ce mandat écrit et l'enverrai à BillPay.<br/><br/>Remarque : je peux demander le remboursement du montant dû dans les huit semaines suivant la date du débit. Les conditions convenues avec mon institution financière s'appliquent. Veuillez noter que le montant dû reste exigible même si la note de débit est retournée. Pour plus d'informations, veuillez consulter le site <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa.</a>");
define('MODULE_PAYMENT_BILLPAY_TEXT_SEPA_INFORMATION_AT', "Le numéro d'identification du créancier de BillPay est DE19ZZ00000237180, le numéro d'identification du créancier de net-m privatbank AG est DE62ZZ000009232. Le numéro de référence du mandat me sera ensuite envoyé par e-mail, accompagné d'un modèle de mandat écrit. Je signerai également ce mandat écrit et l'enverrai à BillPay.<br/><br/>Remarque : je peux demander le remboursement du montant dû dans les huit semaines suivant la date du débit. Les conditions convenues avec mon institution financière s'appliquent. Veuillez noter que la dette impayée demeure même si la note de débit est retournée. Pour plus d'informations, veuillez consulter le site <a href='https://www.billpay.de/sepa' target='_blank'>https://www.billpay.de/sepa.</a>");

define('MODULE_PAYMENT_BILLPAY_THANK_YOU_TEXT', 'Merci d\'avoir choisi BillPay Invoice pour votre achat.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT', 'Veuillez transférer le montant de %1$s %2$s sur le compte suivant par %3$s, en indiquant l\'objet du paiement :');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_NO_DUE_DATE', 'Veuillez transférer le montant de %1$s %2$s dans le délai de paiement, en indiquant l\'objet du paiement, sur le compte suivant.');
define('MODULE_PAYMENT_BILLPAY_PAY_UNTIL_TEXT_ADD_CH', 'Des frais supplémentaires s\'appliquent aux dépôts effectués au guichet de la poste. Veuillez transférer un %1$s %2$s supplémentaire si vous payez par bulletin de versement.');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE', 'Bénéficiaire');
define('MODULE_PAYMENT_BILLPAY_TEXT_PAYEE_CH', 'Succursale suisse (Regensdorf)');
define('MODULE_PAYMENT_BILLPAY_TEXT_IBAN_CH', 'Numéro de compte');
define('MODULE_PAYMENT_BILLPAY_TEXT_BIC_CH', 'Numéro BC');
define('MODULE_PAYMENT_BILLPAY_TEXT_BANK', 'Kreditinstitut');
define('MODULE_PAYMENT_BILLPAY_TEXT_TOTAL_AMOUNT', 'Importation');
define('MODULE_PAYMENT_BILLPAY_UPDATE_AVAILABLE', 'La version %2s$ du plugin des modes de paiement BillPay est disponible (actuellement installée : %1s$). Cliquez <a href="%3s$">ici</a> pour télécharger.');
