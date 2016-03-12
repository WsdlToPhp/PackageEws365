<?php

namespace Ews\EnumType;

/**
 * This class stands for EntityFeedbackEntityAddSourceType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEntityFeedbackEntityAddSourceType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'EntityRelevanceApi'
     * @return string 'EntityRelevanceApi'
     */
    const VALUE_ENTITY_RELEVANCE_API = 'EntityRelevanceApi';
    /**
     * Constant for value 'ActiveDirectory'
     * @return string 'ActiveDirectory'
     */
    const VALUE_ACTIVE_DIRECTORY = 'ActiveDirectory';
    /**
     * Constant for value 'ExplicitTyping'
     * @return string 'ExplicitTyping'
     */
    const VALUE_EXPLICIT_TYPING = 'ExplicitTyping';
    /**
     * Constant for value 'Paste'
     * @return string 'Paste'
     */
    const VALUE_PASTE = 'Paste';
    /**
     * Constant for value 'RecipientCache'
     * @return string 'RecipientCache'
     */
    const VALUE_RECIPIENT_CACHE = 'RecipientCache';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_ENTITY_RELEVANCE_API
     * @uses self::VALUE_ACTIVE_DIRECTORY
     * @uses self::VALUE_EXPLICIT_TYPING
     * @uses self::VALUE_PASTE
     * @uses self::VALUE_RECIPIENT_CACHE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ENTITY_RELEVANCE_API,
            self::VALUE_ACTIVE_DIRECTORY,
            self::VALUE_EXPLICIT_TYPING,
            self::VALUE_PASTE,
            self::VALUE_RECIPIENT_CACHE,
            self::VALUE_OTHER,
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
