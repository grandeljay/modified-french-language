<?php

namespace Grandeljay\FrenchLanguage;

if (!\class_exists( __NAMESPACE__ . '\\Constants')) {
    return;
}

if (\rth_is_module_disabled(Constants::MODULE_NAME)) {
    return;
}

if (!\defined('\DIR_FS_CATALOG') || !\defined('\CURRENT_TEMPLATE')) {
    return;
}

if ('tpl_modified_responsive' !== \CURRENT_TEMPLATE) {
    return;
}

$css_file_relative = 'templates/' . \CURRENT_TEMPLATE . '/css/grandeljay_french_language.css';
$css_file_path     = \DIR_FS_CATALOG . $css_file_relative;

if (!\file_exists($css_file_path)) {
    return;
}

$css_file_version = \filemtime($css_file_path);
$css_file_uri     = $css_file_relative;
?>

<link rel="stylesheet" href="<?= $css_file_uri ?>">
