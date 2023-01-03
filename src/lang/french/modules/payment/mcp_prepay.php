<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

require_once 'mcp_service.php';

define(
    'MODULE_PAYMENT_MCP_PREPAY_TEXT_DESCRIPTION',
    'Micropaiement Vorkasse Modul
    <br /><br />
    Liens<br />
    <b>Outils</b><br />
    <a target="_new" href="../callback/micropayment/cleanup.php">
        <input type="button" value="Commander" />
    </a>
    <br /><br />
    <b>Externe</b><br />
    <a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0">
        <input type="button" value="Manuel" />
    </a>

    <a target="_new" href="https://r120.micropayment.de">
        <input type="button" value="Enregistrement des micropaiements" />
    </a>'
);
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE', 'micropago&trade; Paiement anticipé');
define('MODULE_PAYMENT_MCP_PREPAY_TEXT_TITLE_EXTERN', 'Paiement anticipé');
define(
    'MODULE_PAYMENT_MCP_PREPAY_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
        <div style="float:left;font-family: Arial, Helvetica, sans-serif;">
            <b>Le bon de paiement pré-rempli vous sera envoyé par e-mail.</b><br />
            Pour compléter votre commande, nous allons maintenant vous rediriger vers le site web<br /> de notre fournisseur de services de paiement micropayment&trade;.<br /><br />
            ✔ sécurisé ✔ simple ✔ sans inscription
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_TITLE', 'Paiement anticipé');
define('MODULE_PAYMENT_MCP_PREPAY_STATUS_DESC', 'Module prépayé Micropaiement');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_TITLE', 'Valeur minimale du panier d\'achat');
define('MODULE_PAYMENT_MCP_PREPAY_MINIMUM_AMOUNT_DESC', 'Valeur minimale du panier d\'achat pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_TITLE', 'Valeur maximale du panier d\'achat');
define('MODULE_PAYMENT_MCP_PREPAY_MAXIMUM_AMOUNT_DESC', 'Valeur maximale du panier d\'achat pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_TITLE', 'Positionnement');
define('MODULE_PAYMENT_MCP_PREPAY_SORT_ORDER_DESC', 'Positionnement dans le choix du mode de paiement');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_TITLE', 'Sélection du pays');
define('MODULE_PAYMENT_MCP_PREPAY_ALLOWED_DESC', 'Autoriser uniquement les commandes provenant de pays (liste séparée par des virgules, par exemple DE,EN)');

define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_INIT', 'init:Attendez le paiement. Annulation automatique dans %s');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_PAYIN', '%s %s ont été payés.');
define('MODULE_PAYMENT_MCP_PREPAY_COMMENT_EXPIRED', 'Pas de réception du paiement, annulation automatique');

define('MODULE_PAYMENT_MCP_SERVICE_TRANSACTION_CANCELLED', 'annulation:La commande a été annulée.');
