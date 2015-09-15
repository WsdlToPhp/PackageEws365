<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchItemKindType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchItemKindType
{
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'Meetings'
     * @return string 'Meetings'
     */
    const VALUE_MEETINGS = 'Meetings';
    /**
     * Constant for value 'Tasks'
     * @return string 'Tasks'
     */
    const VALUE_TASKS = 'Tasks';
    /**
     * Constant for value 'Notes'
     * @return string 'Notes'
     */
    const VALUE_NOTES = 'Notes';
    /**
     * Constant for value 'Docs'
     * @return string 'Docs'
     */
    const VALUE_DOCS = 'Docs';
    /**
     * Constant for value 'Journals'
     * @return string 'Journals'
     */
    const VALUE_JOURNALS = 'Journals';
    /**
     * Constant for value 'Contacts'
     * @return string 'Contacts'
     */
    const VALUE_CONTACTS = 'Contacts';
    /**
     * Constant for value 'Im'
     * @return string 'Im'
     */
    const VALUE_IM = 'Im';
    /**
     * Constant for value 'Voicemail'
     * @return string 'Voicemail'
     */
    const VALUE_VOICEMAIL = 'Voicemail';
    /**
     * Constant for value 'Faxes'
     * @return string 'Faxes'
     */
    const VALUE_FAXES = 'Faxes';
    /**
     * Constant for value 'Posts'
     * @return string 'Posts'
     */
    const VALUE_POSTS = 'Posts';
    /**
     * Constant for value 'Rssfeeds'
     * @return string 'Rssfeeds'
     */
    const VALUE_RSSFEEDS = 'Rssfeeds';
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
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_MEETINGS
     * @uses self::VALUE_TASKS
     * @uses self::VALUE_NOTES
     * @uses self::VALUE_DOCS
     * @uses self::VALUE_JOURNALS
     * @uses self::VALUE_CONTACTS
     * @uses self::VALUE_IM
     * @uses self::VALUE_VOICEMAIL
     * @uses self::VALUE_FAXES
     * @uses self::VALUE_POSTS
     * @uses self::VALUE_RSSFEEDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
            self::VALUE_MEETINGS,
            self::VALUE_TASKS,
            self::VALUE_NOTES,
            self::VALUE_DOCS,
            self::VALUE_JOURNALS,
            self::VALUE_CONTACTS,
            self::VALUE_IM,
            self::VALUE_VOICEMAIL,
            self::VALUE_FAXES,
            self::VALUE_POSTS,
            self::VALUE_RSSFEEDS,
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
