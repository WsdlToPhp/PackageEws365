<?php

namespace Ews\EnumType;

/**
 * This class stands for InstantSearchResultType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
    const VALUE_ITEMRESULTS = 'ItemResults';
    /**
     * Constant for value 'ConversationResults'
     * @return string 'ConversationResults'
     */
    const VALUE_CONVERSATIONRESULTS = 'ConversationResults';
    /**
     * Constant for value 'Refiners'
     * @return string 'Refiners'
     */
    const VALUE_REFINERS = 'Refiners';
    /**
     * Constant for value 'SearchTerms'
     * @return string 'SearchTerms'
     */
    const VALUE_SEARCHTERMS = 'SearchTerms';
    /**
     * Constant for value 'Errors'
     * @return string 'Errors'
     */
    const VALUE_ERRORS = 'Errors';
    /**
     * Constant for value 'QueryStatistics'
     * @return string 'QueryStatistics'
     */
    const VALUE_QUERYSTATISTICS = 'QueryStatistics';
    /**
     * Constant for value 'CalendarItemResults'
     * @return string 'CalendarItemResults'
     */
    const VALUE_CALENDARITEMRESULTS = 'CalendarItemResults';
    /**
     * Constant for value 'PersonaResults'
     * @return string 'PersonaResults'
     */
    const VALUE_PERSONARESULTS = 'PersonaResults';
    /**
     * Constant for value 'SuggestionsPrimer'
     * @return string 'SuggestionsPrimer'
     */
    const VALUE_SUGGESTIONSPRIMER = 'SuggestionsPrimer';
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
     * @uses self::VALUE_SUGGESTIONS
     * @uses self::VALUE_ITEMRESULTS
     * @uses self::VALUE_CONVERSATIONRESULTS
     * @uses self::VALUE_REFINERS
     * @uses self::VALUE_SEARCHTERMS
     * @uses self::VALUE_ERRORS
     * @uses self::VALUE_QUERYSTATISTICS
     * @uses self::VALUE_CALENDARITEMRESULTS
     * @uses self::VALUE_PERSONARESULTS
     * @uses self::VALUE_SUGGESTIONSPRIMER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SUGGESTIONS,
            self::VALUE_ITEMRESULTS,
            self::VALUE_CONVERSATIONRESULTS,
            self::VALUE_REFINERS,
            self::VALUE_SEARCHTERMS,
            self::VALUE_ERRORS,
            self::VALUE_QUERYSTATISTICS,
            self::VALUE_CALENDARITEMRESULTS,
            self::VALUE_PERSONARESULTS,
            self::VALUE_SUGGESTIONSPRIMER,
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
