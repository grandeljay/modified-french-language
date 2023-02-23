<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljay_french_language extends StdModule
{
    public const VERSION = '0.1.1';

    public function __construct()
    {
        if (function_exists('parent::__construct()')) {
            parent::__construct();
        } else {
            $this->init('MODULE_' . strtoupper(self::class));
        }
    }

    public function display()
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

        /** Insert French language */
        $sql_data_array = array(
            'name'             => 'French',
            'code'             => 'fr',
            'image'            => 'fr.svg',
            'directory'        => 'french',
            'sort_order'       => '3',
            'language_charset' => 'utf-8',
            'status'           => '1',
            'status_admin'     => '1',
        );

        xtc_db_perform(TABLE_LANGUAGES, $sql_data_array);

        $lID = xtc_db_insert_id();
    }

    public function remove()
    {
        parent::remove();

        /** Remove French language */
        xtc_db_query(
            'DELETE FROM `' . TABLE_LANGUAGES . '`
                   WHERE `code` = "fr"'
        );
    }
}
