<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

define('MODULE_EXCLUDE_PAYMENT_TEXT_TITLE', 'Méthodes de paiement en fonction du mode de livraison');
define('MODULE_EXCLUDE_PAYMENT_TEXT_DESCRIPTION', '');
define('MODULE_EXCLUDE_PAYMENT_STATUS_TITLE', 'État');
define('MODULE_EXCLUDE_PAYMENT_STATUS_DESC', 'Activer le module ?');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_TITLE', 'Nombre de méthodes d\'expédition');
define('MODULE_EXCLUDE_PAYMENT_NUMBER_DESC', 'Le nombre de types d\'envois à configurer.');

if (defined('MODULE_EXCLUDE_PAYMENT_NUMBER')) {
    for ($i = 1; $i <= MODULE_EXCLUDE_PAYMENT_NUMBER; $i++) {
        define('MODULE_EXCLUDE_PAYMENT_SHIPPING_' . $i . '_TITLE', '<hr noshade>' . $i . '. Méthode d\'envoi');
        define('MODULE_EXCLUDE_PAYMENT_SHIPPING_' . $i . '_DESC', 'Sélectionnez la méthode d\'expédition pour laquelle vous souhaitez exclure un mode de paiement.');
        define('MODULE_EXCLUDE_PAYMENT_PAYMENT_' . $i . '_TITLE', $i . '. Mode de paiement exclu');
        define('MODULE_EXCLUDE_PAYMENT_PAYMENT_' . $i . '_DESC', 'Sélectionnez le mode de paiement que vous souhaitez exclure.');
    }
}
