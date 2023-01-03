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
    'MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_DESCRIPTION',
    'micropaiement&trade; Sofort. Module
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
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_TITLE', 'micropaiement&trade; Sofort.');
define('MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_TITLE_EXTERN', 'Sofort.');
define(
    'MODULE_PAYMENT_MCP_EBANK2PAY_TEXT_INFO',
    '<div style="margin: 10px; height: 140px;">
        <div style="float:right;">
            <img src="./images/micropayment/logo_small.png" width="150" />
        </div>
        <div style="float: left;">
           <b>Veuillez préparer vos données de connexion à la banque en ligne.</b><br />
            Pour compléter votre commande, nous allons maintenant vous rediriger vers le site web<br /> de notre fournisseur de services de paiement micropayment&trade;.<br /><br />
            ✔ sécurisé ✔ simple ✔ sans inscription
        </div>
    </div>'
);
define('MODULE_PAYMENT_MCP_EBANK2PAY_STATUS_TITLE', 'Immédiatement.');
define('MODULE_PAYMENT_MCP_EBANK2PAY_STATUS_DESC', 'Sofort. Module Micropago&trade;.');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MINIMUM_AMOUNT_TITLE', 'Valeur minimale du panier d\'achat');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MINIMUM_AMOUNT_DESC', 'Valeur minimale du panier d\'achat pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MAXIMUM_AMOUNT_TITLE', 'Valeur maximale du panier d\'achat');
define('MODULE_PAYMENT_MCP_EBANK2PAY_MAXIMUM_AMOUNT_DESC', 'Valeur maximale du panier d\'achat pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_SORT_ORDER_TITLE', 'Positionnement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_SORT_ORDER_DESC', 'Positionnement dans le choix du mode de paiement');
define('MODULE_PAYMENT_MCP_EBANK2PAY_ALLOWED_TITLE', 'Sélection du pays');
define('MODULE_PAYMENT_MCP_EBANK2PAY_ALLOWED_DESC', 'Autoriser uniquement les commandes provenant de pays (liste séparée par des virgules, par exemple DE,EN)');
