<?php

namespace Ews\EnumType;

/**
 * This class stands for EntityFeedbackEntityAddSourceType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
    const VALUE_ENTITYRELEVANCEAPI = 'EntityRelevanceApi';
    /**
     * Constant for value 'ActiveDirectory'
     * @return string 'ActiveDirectory'
     */
    const VALUE_ACTIVEDIRECTORY = 'ActiveDirectory';
    /**
     * Constant for value 'ExplicitTyping'
     * @return string 'ExplicitTyping'
     */
    const VALUE_EXPLICITTYPING = 'ExplicitTyping';
    /**
     * Constant for value 'Paste'
     * @return string 'Paste'
     */
    const VALUE_PASTE = 'Paste';
    /**
     * Constant for value 'RecipientCache'
     * @return string 'RecipientCache'
     */
    const VALUE_RECIPIENTCACHE = 'RecipientCache';
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
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ENTITYRELEVANCEAPI
     * @uses self::VALUE_ACTIVEDIRECTORY
     * @uses self::VALUE_EXPLICITTYPING
     * @uses self::VALUE_PASTE
     * @uses self::VALUE_RECIPIENTCACHE
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ENTITYRELEVANCEAPI,
            self::VALUE_ACTIVEDIRECTORY,
            self::VALUE_EXPLICITTYPING,
            self::VALUE_PASTE,
            self::VALUE_RECIPIENTCACHE,
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
