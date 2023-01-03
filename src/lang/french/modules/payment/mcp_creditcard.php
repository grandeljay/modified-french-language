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
    'MODULE_PAYMENT_MCP_CREDITCARD_TEXT_DESCRIPTION',
    'micropayment&trade; Kreditkarten Modul
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
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE', 'carte de crédit micropago&trade;');
define('MODULE_PAYMENT_MCP_CREDITCARD_TEXT_TITLE_EXTERN', 'Carte de crédit');
define(
    'MODULE_PAYMENT_MCP_CREDITCARD_TEXT_INFO',
    '<div style="margin:10px; height:140px;">
        <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div>
        <div style="float:left;">
          <b>Veuillez préparer les détails de votre carte de crédit.</b></br />
            Pour compléter votre commande, nous allons maintenant vous rediriger vers le site web<br /> de notre fournisseur de services de paiement micropayment&trade;.<br /><br />
            ✔ sécurisé ✔ simple ✔ sans inscription
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_TITLE', 'Carte de crédit');
define('MODULE_PAYMENT_MCP_CREDITCARD_STATUS_DESC', 'Module de carte de crédit Micropayment&trade;.');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_TITLE', 'Valeur minimale de la commande');
define('MODULE_PAYMENT_MCP_CREDITCARD_MINIMUM_AMOUNT_DESC', 'Valeur minimale de la commande');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_TITLE', 'Valeur maximale de la commande');
define('MODULE_PAYMENT_MCP_CREDITCARD_MAXIMUM_AMOUNT_DESC', 'Valeur maximale de la commande');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_TITLE', 'Positionnement');
define('MODULE_PAYMENT_MCP_CREDITCARD_SORT_ORDER_DESC', 'Position dans la liste des modes de paiement');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_TITLE', 'Sélection du pays');
define('MODULE_PAYMENT_MCP_CREDITCARD_ALLOWED_DESC', 'Autoriser uniquement les commandes provenant de pays (liste séparée par des virgules, par exemple DE,EN)');
