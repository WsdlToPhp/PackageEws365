<?php

namespace Ews\EnumType;

/**
 * This class stands for RetentionActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRetentionActionType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MoveToDeletedItems'
     * @return string 'MoveToDeletedItems'
     */
    const VALUE_MOVETODELETEDITEMS = 'MoveToDeletedItems';
    /**
     * Constant for value 'MoveToFolder'
     * @return string 'MoveToFolder'
     */
    const VALUE_MOVETOFOLDER = 'MoveToFolder';
    /**
     * Constant for value 'DeleteAndAllowRecovery'
     * @return string 'DeleteAndAllowRecovery'
     */
    const VALUE_DELETEANDALLOWRECOVERY = 'DeleteAndAllowRecovery';
    /**
     * Constant for value 'PermanentlyDelete'
     * @return string 'PermanentlyDelete'
     */
    const VALUE_PERMANENTLYDELETE = 'PermanentlyDelete';
    /**
     * Constant for value 'MarkAsPastRetentionLimit'
     * @return string 'MarkAsPastRetentionLimit'
     */
    const VALUE_MARKASPASTRETENTIONLIMIT = 'MarkAsPastRetentionLimit';
    /**
     * Constant for value 'MoveToArchive'
     * @return string 'MoveToArchive'
     */
    const VALUE_MOVETOARCHIVE = 'MoveToArchive';
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
     * @uses self::VALUE_MOVETODELETEDITEMS
     * @uses self::VALUE_MOVETOFOLDER
     * @uses self::VALUE_DELETEANDALLOWRECOVERY
     * @uses self::VALUE_PERMANENTLYDELETE
     * @uses self::VALUE_MARKASPASTRETENTIONLIMIT
     * @uses self::VALUE_MOVETOARCHIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MOVETODELETEDITEMS,
            self::VALUE_MOVETOFOLDER,
            self::VALUE_DELETEANDALLOWRECOVERY,
            self::VALUE_PERMANENTLYDELETE,
            self::VALUE_MARKASPASTRETENTIONLIMIT,
            self::VALUE_MOVETOARCHIVE,
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
