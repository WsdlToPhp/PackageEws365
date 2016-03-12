<?php

namespace Ews\EnumType;

/**
 * This class stands for ResolveNamesSearchScopeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResolveNamesSearchScopeType
{
    /**
     * Constant for value 'ActiveDirectory'
     * @return string 'ActiveDirectory'
     */
    const VALUE_ACTIVE_DIRECTORY = 'ActiveDirectory';
    /**
     * Constant for value 'ActiveDirectoryContacts'
     * @return string 'ActiveDirectoryContacts'
     */
    const VALUE_ACTIVE_DIRECTORY_CONTACTS = 'ActiveDirectoryContacts';
    /**
     * Constant for value 'Contacts'
     * @return string 'Contacts'
     */
    const VALUE_CONTACTS = 'Contacts';
    /**
     * Constant for value 'ContactsActiveDirectory'
     * @return string 'ContactsActiveDirectory'
     */
    const VALUE_CONTACTS_ACTIVE_DIRECTORY = 'ContactsActiveDirectory';
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
     * @uses self::VALUE_ACTIVE_DIRECTORY
     * @uses self::VALUE_ACTIVE_DIRECTORY_CONTACTS
     * @uses self::VALUE_CONTACTS
     * @uses self::VALUE_CONTACTS_ACTIVE_DIRECTORY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVE_DIRECTORY,
            self::VALUE_ACTIVE_DIRECTORY_CONTACTS,
            self::VALUE_CONTACTS,
            self::VALUE_CONTACTS_ACTIVE_DIRECTORY,
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
