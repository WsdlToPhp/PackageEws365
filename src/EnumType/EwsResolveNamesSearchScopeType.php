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
    const VALUE_ACTIVEDIRECTORY = 'ActiveDirectory';
    /**
     * Constant for value 'ActiveDirectoryContacts'
     * @return string 'ActiveDirectoryContacts'
     */
    const VALUE_ACTIVEDIRECTORYCONTACTS = 'ActiveDirectoryContacts';
    /**
     * Constant for value 'Contacts'
     * @return string 'Contacts'
     */
    const VALUE_CONTACTS = 'Contacts';
    /**
     * Constant for value 'ContactsActiveDirectory'
     * @return string 'ContactsActiveDirectory'
     */
    const VALUE_CONTACTSACTIVEDIRECTORY = 'ContactsActiveDirectory';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ACTIVEDIRECTORY
     * @uses self::VALUE_ACTIVEDIRECTORYCONTACTS
     * @uses self::VALUE_CONTACTS
     * @uses self::VALUE_CONTACTSACTIVEDIRECTORY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ACTIVEDIRECTORY,
            self::VALUE_ACTIVEDIRECTORYCONTACTS,
            self::VALUE_CONTACTS,
            self::VALUE_CONTACTSACTIVEDIRECTORY,
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
