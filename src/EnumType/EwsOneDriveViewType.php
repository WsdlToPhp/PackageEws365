<?php

namespace Ews\EnumType;

/**
 * This class stands for OneDriveViewType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOneDriveViewType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'SharedWithMe'
     * @return string 'SharedWithMe'
     */
    const VALUE_SHARED_WITH_ME = 'SharedWithMe';
    /**
     * Constant for value 'MyDocuments'
     * @return string 'MyDocuments'
     */
    const VALUE_MY_DOCUMENTS = 'MyDocuments';
    /**
     * Constant for value 'RecycleBin'
     * @return string 'RecycleBin'
     */
    const VALUE_RECYCLE_BIN = 'RecycleBin';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SHARED_WITH_ME
     * @uses self::VALUE_MY_DOCUMENTS
     * @uses self::VALUE_RECYCLE_BIN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SHARED_WITH_ME,
            self::VALUE_MY_DOCUMENTS,
            self::VALUE_RECYCLE_BIN,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
