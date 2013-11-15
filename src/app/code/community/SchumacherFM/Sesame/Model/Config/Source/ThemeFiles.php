<?php
/**
 * @category    SchumacherFM_Sesame
 * @package     Model
 * @author      Cyrill at Schumacher dot fm / @SchumacherFM
 * @copyright   Copyright (c)
 * @license     The MIT License (MIT)
 */
class SchumacherFM_Sesame_Model_Config_Source_ThemeFiles
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $readDir = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_SKIN) . DS .
            'adminhtml' . DS . 'default' . DS . 'default' . DS . 'sesame' . DS . 'themes' . DS;

        $files = glob($readDir . '*.css');

        $return = array();

        foreach ($files as $file) {
            $bFile    = basename($file);
            $return[] = array('value' => $bFile, 'label' => $bFile);
        }

        return $return;
    }
}
