<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

include_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_DESCRIPTION', 'micropayment™ Direct Debit Module <br /><br /> Liens<br /> <b>Outils</b><br /> <a target="_new" href="../callback/micropayment/cleanup.php"> <input type="button" value="Commander" /> </a> <br /><br /> <b>Externe</b><br /> <a href="http://ecommerce.micropayment.de/download/modified/micropayment_modified-shop_2.x.pdf?version=2.1.0"> <input type="button" value="Manuel" /> </a> <a target="_new" href="https://r120.micropayment.de"> <input type="button" value="Enregistrement des micropaiements" /> </a>');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_TITLE', 'micropago™ Cargo');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_TITLE_EXTERN', 'Domiciliación bancaria');
define('MODULE_PAYMENT_MCP_DEBIT_TEXT_INFO', '<div style="margin:10px; height:140px;"> <div style="float: right;"> <img src="./images/micropayment/logo_small.png" width="150"/> </div> <div style="float: left;"> <b>Veuillez préparer les détails de votre compte.</b><br /> Pour compléter votre commande, nous allons maintenant vous rediriger vers le site web<br /> de notre fournisseur de services de paiement micropayment™.<br /><br /> ✔ sécurisé ✔ simple ✔ sans inscription </div> </div>');
define('MODULE_PAYMENT_MCP_DEBIT_STATUS_TITLE', 'Débit direct');
define('MODULE_PAYMENT_MCP_DEBIT_STATUS_DESC', 'Module de débit direct Micropayment™.');
define('MODULE_PAYMENT_MCP_DEBIT_MINIMUM_AMOUNT_TITLE', 'Valeur minimale du panier d\'achat');
define('MODULE_PAYMENT_MCP_DEBIT_MINIMUM_AMOUNT_DESC', 'Valeur minimale du panier d\'achat pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_DEBIT_MAXIMUM_AMOUNT_TITLE', 'Valeur maximale du panier d\'achat');
define('MODULE_PAYMENT_MCP_DEBIT_MAXIMUM_AMOUNT_DESC', 'Valeur maximale du panier d\'achat pour ce mode de paiement');
define('MODULE_PAYMENT_MCP_DEBIT_SORT_ORDER_TITLE', 'Positionnement');
define('MODULE_PAYMENT_MCP_DEBIT_SORT_ORDER_DESC', 'Positionnement dans le choix du mode de paiement');
define('MODULE_PAYMENT_MCP_DEBIT_ALLOWED_TITLE', 'Sélection du pays');
define('MODULE_PAYMENT_MCP_DEBIT_ALLOWED_DESC', 'Autoriser uniquement les commandes provenant de pays (liste séparée par des virgules, par exemple DE,EN)');
