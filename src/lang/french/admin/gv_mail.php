<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('HEADING_TITLE', 'Envoyez le bon d\'achat aux clients');
define('HEADING_COUPON_TITLE', 'Envoyez un coupon aux clients');

define('TEXT_CUSTOMER_GROUP', 'Groupe de clients :');
define('TEXT_SUBJECT', 'Sujet :');
define('TEXT_FROM', 'Remontant :');
define('TEXT_TO', 'E-mail à :');
define('TEXT_AMOUNT', 'Valeur :');
define('TEXT_MESSAGE', 'Message :');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Utilisez ce champ uniquement pour les adresses e-mail uniques ou multiples séparées par des virgules. Sinon, utilisez le champ Groupe de clients.</span>');
define('TEXT_SELECT_CUSTOMER_GROUP', 'Sélectionnez le groupe de clients');
define('TEXT_CUSTOMERS_GROUP_EMAIL', '<span class="smallText">Un bon d\'achat doit-il être envoyé à tous les clients du groupe de clients sélectionné ? Si non, ne sélectionnez rien et remplissez le champ "Email à :". Attention : Si de nombreux e-mails sont envoyés de manière répétée en même temps, l\'adresse e-mail de la boutique peut se retrouver sur des listes noires et être considérée comme un spam. Il est recommandé qu\'un fournisseur de bulletin d\'information s\'en charge.</span>');
define('TEXT_ALL_CUSTOMERS', 'Tous les clients');
define('TEXT_NEWSLETTER_CUSTOMERS', 'À tous les abonnés à la newsletter');

define('NOTICE_EMAIL_SENT_TO', 'Note : L\'e-mail a été envoyé à : %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Erreur : Aucun client n\'a été sélectionné.');
define('ERROR_NO_AMOUNT_SELECTED', 'Erreur : Vous n\'avez pas saisi de montant de bon d\'achat.');

define('TEXT_GV_WORTH', 'La valeur du bon d\'achat est de ');
define('TEXT_TO_REDEEM', 'Pour réserver votre bon d\'achat, veuillez cliquer sur le lien ci-dessous. Veuillez noter votre code de bon personnel pour plus de sécurité.');
define('TEXT_WHICH_IS', 'Votre code de bon est : ');
define('TEXT_IN_CASE', ' Si, contrairement aux attentes, des problèmes devaient survenir dans la comptabilité.');
define('TEXT_OR_VISIT', 'visitez notre site web ');
define('TEXT_ENTER_CODE', ' et saisissez le code du bon d\'achat manuellement ');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Vous avez récemment acheté un bon d\'achat dans notre boutique en ligne, qui n\'a pas été activé immédiatement pour des raisons de sécurité. Ce crédit est maintenant disponible pour vous.');
define('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n" . 'La valeur de votre bon d\'achat est de %s');
define('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n" . 'Vous pouvez maintenant envoyer le bon d\'achat à quelqu\'un via votre compte personnel.');
define('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

define('COUPON_INFO', "\N- Couponwert : ");
define('COUPON_FREE_SHIPPING', 'Expédition gratuite');
define('COUPON_MINORDER_INFO', "\N- Valeur minimale de la commande : ");
define('COUPON_RESTRICT_INFO', "\Ce bon est uniquement valable pour les articles sélectionnés !");
