<?php

namespace Ews\EnumType;

/**
 * This class stands for ContainmentComparisonType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContainmentComparisonType
{
    /**
     * Constant for value 'Exact'
     * @return string 'Exact'
     */
    const VALUE_EXACT = 'Exact';
    /**
     * Constant for value 'IgnoreCase'
     * @return string 'IgnoreCase'
     */
    const VALUE_IGNORE_CASE = 'IgnoreCase';
    /**
     * Constant for value 'IgnoreNonSpacingCharacters'
     * @return string 'IgnoreNonSpacingCharacters'
     */
    const VALUE_IGNORE_NON_SPACING_CHARACTERS = 'IgnoreNonSpacingCharacters';
    /**
     * Constant for value 'Loose'
     * @return string 'Loose'
     */
    const VALUE_LOOSE = 'Loose';
    /**
     * Constant for value 'IgnoreCaseAndNonSpacingCharacters'
     * @return string 'IgnoreCaseAndNonSpacingCharacters'
     */
    const VALUE_IGNORE_CASE_AND_NON_SPACING_CHARACTERS = 'IgnoreCaseAndNonSpacingCharacters';
    /**
     * Constant for value 'LooseAndIgnoreCase'
     * @return string 'LooseAndIgnoreCase'
     */
    const VALUE_LOOSE_AND_IGNORE_CASE = 'LooseAndIgnoreCase';
    /**
     * Constant for value 'LooseAndIgnoreNonSpace'
     * @return string 'LooseAndIgnoreNonSpace'
     */
    const VALUE_LOOSE_AND_IGNORE_NON_SPACE = 'LooseAndIgnoreNonSpace';
    /**
     * Constant for value 'LooseAndIgnoreCaseAndIgnoreNonSpace'
     * @return string 'LooseAndIgnoreCaseAndIgnoreNonSpace'
     */
    const VALUE_LOOSE_AND_IGNORE_CASE_AND_IGNORE_NON_SPACE = 'LooseAndIgnoreCaseAndIgnoreNonSpace';
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
     * @uses self::VALUE_EXACT
     * @uses self::VALUE_IGNORE_CASE
     * @uses self::VALUE_IGNORE_NON_SPACING_CHARACTERS
     * @uses self::VALUE_LOOSE
     * @uses self::VALUE_IGNORE_CASE_AND_NON_SPACING_CHARACTERS
     * @uses self::VALUE_LOOSE_AND_IGNORE_CASE
     * @uses self::VALUE_LOOSE_AND_IGNORE_NON_SPACE
     * @uses self::VALUE_LOOSE_AND_IGNORE_CASE_AND_IGNORE_NON_SPACE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXACT,
            self::VALUE_IGNORE_CASE,
            self::VALUE_IGNORE_NON_SPACING_CHARACTERS,
            self::VALUE_LOOSE,
            self::VALUE_IGNORE_CASE_AND_NON_SPACING_CHARACTERS,
            self::VALUE_LOOSE_AND_IGNORE_CASE,
            self::VALUE_LOOSE_AND_IGNORE_NON_SPACE,
            self::VALUE_LOOSE_AND_IGNORE_CASE_AND_IGNORE_NON_SPACE,
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
