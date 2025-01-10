<?php

/**
 * French language
 *
 * @author  Jay Trees <french-language@grandels.email>
 * @link    https://github.com/grandeljay/modified-french-language
 * @package GrandelJayFrenchLanguage
 *
 * @phpcs:disable PSR1.Classes.ClassDeclaration.MissingNamespace
 * @phpcs:disable Squiz.Classes.ValidClassName.NotCamelCaps
 */

use RobinTheHood\ModifiedStdModule\Classes\StdModule;

class grandeljay_french_language extends StdModule
{
    public const VERSION = '1.0.0';

    public function __construct()
    {
        parent::__construct();

        $this->checkForUpdate(true);
    }

    public function display()
    {
        return $this->displaySaveButton();
    }

    public function install()
    {
        parent::install();

        /** Insert French language */
        $sql_data_array = [
            'name'             => 'French',
            'code'             => 'fr',
            'image'            => 'icon.png',
            'directory'        => 'french',
            'sort_order'       => '3',
            'language_charset' => 'utf-8',
            'status'           => '1',
            'status_admin'     => '1',
        ];

        xtc_db_perform(TABLE_LANGUAGES, $sql_data_array);

        $lID = xtc_db_insert_id();
    }

    protected function updateSteps()
    {
        if (version_compare($this->getVersion(), self::VERSION, '<')) {
            $this->setVersion(self::VERSION);

            return self::UPDATE_SUCCESS;
        }

        return self::UPDATE_NOTHING;
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
