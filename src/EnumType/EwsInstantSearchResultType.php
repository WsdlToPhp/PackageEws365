<?php

namespace Ews\EnumType;

/**
 * This class stands for InstantSearchResultType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInstantSearchResultType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Suggestions'
     * @return string 'Suggestions'
     */
    const VALUE_SUGGESTIONS = 'Suggestions';
    /**
     * Constant for value 'ItemResults'
     * @return string 'ItemResults'
     */
    const VALUE_ITEM_RESULTS = 'ItemResults';
    /**
     * Constant for value 'ConversationResults'
     * @return string 'ConversationResults'
     */
    const VALUE_CONVERSATION_RESULTS = 'ConversationResults';
    /**
     * Constant for value 'Refiners'
     * @return string 'Refiners'
     */
    const VALUE_REFINERS = 'Refiners';
    /**
     * Constant for value 'SearchTerms'
     * @return string 'SearchTerms'
     */
    const VALUE_SEARCH_TERMS = 'SearchTerms';
    /**
     * Constant for value 'Errors'
     * @return string 'Errors'
     */
    const VALUE_ERRORS = 'Errors';
    /**
     * Constant for value 'QueryStatistics'
     * @return string 'QueryStatistics'
     */
    const VALUE_QUERY_STATISTICS = 'QueryStatistics';
    /**
     * Constant for value 'CalendarItemResults'
     * @return string 'CalendarItemResults'
     */
    const VALUE_CALENDAR_ITEM_RESULTS = 'CalendarItemResults';
    /**
     * Constant for value 'PersonaResults'
     * @return string 'PersonaResults'
     */
    const VALUE_PERSONA_RESULTS = 'PersonaResults';
    /**
     * Constant for value 'SuggestionsPrimer'
     * @return string 'SuggestionsPrimer'
     */
    const VALUE_SUGGESTIONS_PRIMER = 'SuggestionsPrimer';
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
     * @uses self::VALUE_SUGGESTIONS
     * @uses self::VALUE_ITEM_RESULTS
     * @uses self::VALUE_CONVERSATION_RESULTS
     * @uses self::VALUE_REFINERS
     * @uses self::VALUE_SEARCH_TERMS
     * @uses self::VALUE_ERRORS
     * @uses self::VALUE_QUERY_STATISTICS
     * @uses self::VALUE_CALENDAR_ITEM_RESULTS
     * @uses self::VALUE_PERSONA_RESULTS
     * @uses self::VALUE_SUGGESTIONS_PRIMER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SUGGESTIONS,
            self::VALUE_ITEM_RESULTS,
            self::VALUE_CONVERSATION_RESULTS,
            self::VALUE_REFINERS,
            self::VALUE_SEARCH_TERMS,
            self::VALUE_ERRORS,
            self::VALUE_QUERY_STATISTICS,
            self::VALUE_CALENDAR_ITEM_RESULTS,
            self::VALUE_PERSONA_RESULTS,
            self::VALUE_SUGGESTIONS_PRIMER,
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
