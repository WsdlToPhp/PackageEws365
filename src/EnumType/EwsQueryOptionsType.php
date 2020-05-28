<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for QueryOptionsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsQueryOptionsType extends AbstractStructEnumBase
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
    const VALUE_SEARCH_TERMS = 'SearchTerms';
    /**
     * Constant for value 'ExplicitSearch'
     * @return string 'ExplicitSearch'
     */
    const VALUE_EXPLICIT_SEARCH = 'ExplicitSearch';
    /**
     * Constant for value 'SuggestionsPrimer'
     * @return string 'SuggestionsPrimer'
     */
    const VALUE_SUGGESTIONS_PRIMER = 'SuggestionsPrimer';
    /**
     * Constant for value 'AllowFuzzing'
     * @return string 'AllowFuzzing'
     */
    const VALUE_ALLOW_FUZZING = 'AllowFuzzing';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SUGGESTIONS
     * @uses self::VALUE_RESULTS
     * @uses self::VALUE_REFINERS
     * @uses self::VALUE_SEARCH_TERMS
     * @uses self::VALUE_EXPLICIT_SEARCH
     * @uses self::VALUE_SUGGESTIONS_PRIMER
     * @uses self::VALUE_ALLOW_FUZZING
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SUGGESTIONS,
            self::VALUE_RESULTS,
            self::VALUE_REFINERS,
            self::VALUE_SEARCH_TERMS,
            self::VALUE_EXPLICIT_SEARCH,
            self::VALUE_SUGGESTIONS_PRIMER,
            self::VALUE_ALLOW_FUZZING,
        );
    }
}
