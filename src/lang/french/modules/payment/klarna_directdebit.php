<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

$klarna_code = 'KLARNA_DIRECTDEBIT';
include(DIR_FS_CATALOG.'lang/french/modules/payment/klarna.php');

$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_TITLE'] = 'Prélèvement automatique Klarna';
$lang_array['MODULE_PAYMENT_'.$klarna_code.'_TEXT_ERROR_MESSAGE'] = 'Le paiement par prélèvement automatique a été annulé.';

foreach ($lang_array as $key => $val) {
  defined($key) || define($key, $val);
}
