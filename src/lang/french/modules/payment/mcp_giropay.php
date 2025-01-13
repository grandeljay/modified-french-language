<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

include_once('mcp_service.php');
define('MODULE_PAYMENT_MCP_GIROPAY_TEXT_DESCRIPTION', 'micropayment™ Module Giropay <br /><br /> Liens<br /> <b>Outils</b><br /> <a target="_new" href="../callback/micropayment/cleanup.php"> <input type="button" value="Bestellungen aufräumen"> </a><br /> <br /> <b>Externe</b><br /> <a href="https://www.micropayment.de/products/plugins/modified/?_r=gst&_src=ctor"> <input type="button" value="Handbuch"> </a>  <a target="_new" href="https://r120.micropayment.de"> <input type="button" value="Micropayment Registrierung"> </a>');
define('MODULE_PAYMENT_MCP_GIROPAY_TEXT_TITLE', 'micropayment™ Giropay');
define('MODULE_PAYMENT_MCP_GIROPAY_TEXT_TITLE_EXTERN', 'Giropay');
define('MODULE_PAYMENT_MCP_GIROPAY_TEXT_INFO', ' <div style="margin:10px; height:140px;"> <div style="float:right;"><img src="./images/micropayment/logo_small.png" width="150"/></div> <div style="float:left;"> <b>Veuillez préparer vos données Giropay.</b></br /> Pour finaliser votre commande, nous vous redirigeons maintenant vers le site web<br /> de notre prestataire de services de paiement micropayment™.<br /><br /> ✔ sûr ✔ simple ✔ sans enregistrement </div> </div>');
define('MODULE_PAYMENT_MCP_GIROPAY_STATUS_TITLE', 'Giropay');
define('MODULE_PAYMENT_MCP_GIROPAY_STATUS_DESC', 'Module Giropay de micropayment™');
define('MODULE_PAYMENT_MCP_GIROPAY_MINIMUM_AMOUNT_TITLE', 'Valeur minimale de commande');
define('MODULE_PAYMENT_MCP_GIROPAY_MINIMUM_AMOUNT_DESC', 'Valeur minimale de commande');
define('MODULE_PAYMENT_MCP_GIROPAY_MAXIMUM_AMOUNT_TITLE', 'Valeur maximale de la commande');
define('MODULE_PAYMENT_MCP_GIROPAY_MAXIMUM_AMOUNT_DESC', 'Valeur maximale de la commande');
define('MODULE_PAYMENT_MCP_GIROPAY_SORT_ORDER_TITLE', 'Positionnement');
define('MODULE_PAYMENT_MCP_GIROPAY_SORT_ORDER_DESC', 'Position dans la liste des modes de paiement');
define('MODULE_PAYMENT_MCP_GIROPAY_ALLOWED_TITLE', 'Sélection de pays');
define('MODULE_PAYMENT_MCP_GIROPAY_ALLOWED_DESC', 'Autoriser les commandes uniquement depuis les pays (liste séparée par des virgules, par ex. DE,EN)');
