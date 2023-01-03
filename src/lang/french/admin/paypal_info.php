<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$lang_array = array(
    'TEXT_PAYPAL_INFO_HEADING_TITLE' => 'Informations sur PayPal',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
