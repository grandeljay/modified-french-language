<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$klarna_code = 'KLARNA_PAYNOW';
include(DIR_FS_CATALOG.'lang/french/modules/payment/klarna.php');

$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE'] = 'Klarna Paiement immédiat';
$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE'] = 'Le paiement par paiement immédiat a été annulé.';

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
