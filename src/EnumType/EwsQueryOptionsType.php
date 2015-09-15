<?php

namespace Ews\EnumType;

/**
 * This class stands for QueryOptionsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsQueryOptionsType
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
     * Constant for value 'Results'
     * @return string 'Results'
     */
    const VALUE_RESULTS = 'Results';
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
     * Constant for value 'ExplicitSearch'
     * @return string 'ExplicitSearch'
     */
    const VALUE_EXPLICITSEARCH = 'ExplicitSearch';
    /**
     * Constant for value 'SuggestionsPrimer'
     * @return string 'SuggestionsPrimer'
     */
    const VALUE_SUGGESTIONSPRIMER = 'SuggestionsPrimer';
    /**
     * Constant for value 'AllowFuzzing'
     * @return string 'AllowFuzzing'
     */
    const VALUE_ALLOWFUZZING = 'AllowFuzzing';
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
     * @uses self::VALUE_RESULTS
     * @uses self::VALUE_REFINERS
     * @uses self::VALUE_SEARCHTERMS
     * @uses self::VALUE_EXPLICITSEARCH
     * @uses self::VALUE_SUGGESTIONSPRIMER
     * @uses self::VALUE_ALLOWFUZZING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SUGGESTIONS,
            self::VALUE_RESULTS,
            self::VALUE_REFINERS,
            self::VALUE_SEARCHTERMS,
            self::VALUE_EXPLICITSEARCH,
            self::VALUE_SUGGESTIONSPRIMER,
            self::VALUE_ALLOWFUZZING,
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
