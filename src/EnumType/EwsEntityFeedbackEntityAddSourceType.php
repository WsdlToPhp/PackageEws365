<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EntityFeedbackEntityAddSourceType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEntityFeedbackEntityAddSourceType extends AbstractStructEnumBase
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
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ENTITY_RELEVANCE_API,
            self::VALUE_ACTIVE_DIRECTORY,
            self::VALUE_EXPLICIT_TYPING,
            self::VALUE_PASTE,
            self::VALUE_RECIPIENT_CACHE,
            self::VALUE_OTHER,
        ];
    }
}
