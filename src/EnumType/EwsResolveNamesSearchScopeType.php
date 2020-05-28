<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResolveNamesSearchScopeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsResolveNamesSearchScopeType extends AbstractStructEnumBase
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
}
