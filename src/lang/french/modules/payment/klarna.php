<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_TITLE'            => '',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_DESCRIPTION'      => 'Avant de pouvoir configurer les méthodes de paiement de Klarna Payments, vous devez ouvrir un compte marchand avec Klarna. Vous recevrez ensuite les informations et les données de connexion nécessaires à la création de votre compte. Si vous avez déjà un numéro de client Klarna, mais que vous n\'êtes pas Kxxxxxx, veuillez envoyer un e-mail à <a href="mailto:vertrieb@klarna.com">vertrieb@klarna.com.</a><br /><br />
    <img src="../lang/french/admin/images/icon.gif" border="0" />
    <a href="https://www.klarna.com/de/verkaeufer/" target="_blank" style="text-decoration: underline; font-weight: bold;">Créez un compte Klarna ici.</a>
    <img src="images/icon_popup.gif" border="0" />',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_INFO'             => '',
    'MODULE_PAYMENT_' . $klarna_code . '_ALLOWED_TITLE'         => 'Zones autorisées',
    'MODULE_PAYMENT_' . $klarna_code . '_ALLOWED_DESC'          => 'Spécifiez <b>individuellement</b> les zones à autoriser pour ce module (par exemple AT,DE (si vide, toutes les zones sont autorisées)).',
    'MODULE_PAYMENT_' . $klarna_code . '_STATUS_TITLE'          => 'Activer le module',
    'MODULE_PAYMENT_' . $klarna_code . '_STATUS_DESC'           => 'Voulez-vous accepter des paiements avec ce module ?',
    'MODULE_PAYMENT_' . $klarna_code . '_SORT_ORDER_TITLE'      => 'Ordre d\'affichage',
    'MODULE_PAYMENT_' . $klarna_code . '_SORT_ORDER_DESC'       => 'Ordre d\'affichage. Le plus petit chiffre apparaît en premier',
    'MODULE_PAYMENT_' . $klarna_code . '_ZONE_TITLE'            => 'Zone de paiement',
    'MODULE_PAYMENT_' . $klarna_code . '_ZONE_DESC'             => 'Lorsqu\'une zone est sélectionnée, le mode de paiement ne s\'applique qu\'à cette zone.',
    'MODULE_PAYMENT_' . $klarna_code . '_ORDER_STATUS_ID_TITLE' => 'Définir le statut de la commande',
    'MODULE_PAYMENT_' . $klarna_code . '_ORDER_STATUS_ID_DESC'  => 'Définissez les commandes passées avec ce module à ce statut.',
    'MODULE_PAYMENT_' . $klarna_code . '_CAPTURE_TITLE'         => 'Actif',
    'MODULE_PAYMENT_' . $klarna_code . '_CAPTURE_DESC'          => 'L\'ordre doit-il être déclenché automatiquement ?',

    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_HEADING'    => 'Klarna',
    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_ERROR_MESSAGE'    => 'Le paiement a été annulé.',

    'MODULE_PAYMENT_' . $klarna_code . '_TEXT_VERSION'          => '<b>Version du module</b><br/>',

    'MODULE_PAYMENT_KLARNA_MERCHANT_ID_TITLE'                   => 'Nom de l\'utilisateur',
    'MODULE_PAYMENT_KLARNA_MERCHANT_ID_DESC'                    => 'Nom d\'utilisateur de l\'API Klarna',
    'MODULE_PAYMENT_KLARNA_SHARED_SECRET_TITLE'                 => 'Mot de passe',
    'MODULE_PAYMENT_KLARNA_SHARED_SECRET_DESC'                  => 'Passeport API Klarna',
    'MODULE_PAYMENT_KLARNA_MODE_TITLE'                          => 'Mode',
    'MODULE_PAYMENT_KLARNA_MODE_DESC'                           => 'Moda Klarna',
    'MODULE_PAYMENT_KLARNA_TEXT'                                => 'Klarna',
);
