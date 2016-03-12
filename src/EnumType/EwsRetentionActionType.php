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
    const VALUE_MOVE_TO_DELETED_ITEMS = 'MoveToDeletedItems';
    /**
     * Constant for value 'MoveToFolder'
     * @return string 'MoveToFolder'
     */
    const VALUE_MOVE_TO_FOLDER = 'MoveToFolder';
    /**
     * Constant for value 'DeleteAndAllowRecovery'
     * @return string 'DeleteAndAllowRecovery'
     */
    const VALUE_DELETE_AND_ALLOW_RECOVERY = 'DeleteAndAllowRecovery';
    /**
     * Constant for value 'PermanentlyDelete'
     * @return string 'PermanentlyDelete'
     */
    const VALUE_PERMANENTLY_DELETE = 'PermanentlyDelete';
    /**
     * Constant for value 'MarkAsPastRetentionLimit'
     * @return string 'MarkAsPastRetentionLimit'
     */
    const VALUE_MARK_AS_PAST_RETENTION_LIMIT = 'MarkAsPastRetentionLimit';
    /**
     * Constant for value 'MoveToArchive'
     * @return string 'MoveToArchive'
     */
    const VALUE_MOVE_TO_ARCHIVE = 'MoveToArchive';
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
     * @uses self::VALUE_MOVE_TO_DELETED_ITEMS
     * @uses self::VALUE_MOVE_TO_FOLDER
     * @uses self::VALUE_DELETE_AND_ALLOW_RECOVERY
     * @uses self::VALUE_PERMANENTLY_DELETE
     * @uses self::VALUE_MARK_AS_PAST_RETENTION_LIMIT
     * @uses self::VALUE_MOVE_TO_ARCHIVE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MOVE_TO_DELETED_ITEMS,
            self::VALUE_MOVE_TO_FOLDER,
            self::VALUE_DELETE_AND_ALLOW_RECOVERY,
            self::VALUE_PERMANENTLY_DELETE,
            self::VALUE_MARK_AS_PAST_RETENTION_LIMIT,
            self::VALUE_MOVE_TO_ARCHIVE,
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
