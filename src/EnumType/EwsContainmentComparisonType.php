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
    const VALUE_IGNORECASE = 'IgnoreCase';
    /**
     * Constant for value 'IgnoreNonSpacingCharacters'
     * @return string 'IgnoreNonSpacingCharacters'
     */
    const VALUE_IGNORENONSPACINGCHARACTERS = 'IgnoreNonSpacingCharacters';
    /**
     * Constant for value 'Loose'
     * @return string 'Loose'
     */
    const VALUE_LOOSE = 'Loose';
    /**
     * Constant for value 'IgnoreCaseAndNonSpacingCharacters'
     * @return string 'IgnoreCaseAndNonSpacingCharacters'
     */
    const VALUE_IGNORECASEANDNONSPACINGCHARACTERS = 'IgnoreCaseAndNonSpacingCharacters';
    /**
     * Constant for value 'LooseAndIgnoreCase'
     * @return string 'LooseAndIgnoreCase'
     */
    const VALUE_LOOSEANDIGNORECASE = 'LooseAndIgnoreCase';
    /**
     * Constant for value 'LooseAndIgnoreNonSpace'
     * @return string 'LooseAndIgnoreNonSpace'
     */
    const VALUE_LOOSEANDIGNORENONSPACE = 'LooseAndIgnoreNonSpace';
    /**
     * Constant for value 'LooseAndIgnoreCaseAndIgnoreNonSpace'
     * @return string 'LooseAndIgnoreCaseAndIgnoreNonSpace'
     */
    const VALUE_LOOSEANDIGNORECASEANDIGNORENONSPACE = 'LooseAndIgnoreCaseAndIgnoreNonSpace';
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
     * @uses self::VALUE_EXACT
     * @uses self::VALUE_IGNORECASE
     * @uses self::VALUE_IGNORENONSPACINGCHARACTERS
     * @uses self::VALUE_LOOSE
     * @uses self::VALUE_IGNORECASEANDNONSPACINGCHARACTERS
     * @uses self::VALUE_LOOSEANDIGNORECASE
     * @uses self::VALUE_LOOSEANDIGNORENONSPACE
     * @uses self::VALUE_LOOSEANDIGNORECASEANDIGNORENONSPACE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXACT,
            self::VALUE_IGNORECASE,
            self::VALUE_IGNORENONSPACINGCHARACTERS,
            self::VALUE_LOOSE,
            self::VALUE_IGNORECASEANDNONSPACINGCHARACTERS,
            self::VALUE_LOOSEANDIGNORECASE,
            self::VALUE_LOOSEANDIGNORENONSPACE,
            self::VALUE_LOOSEANDIGNORECASEANDIGNORENONSPACE,
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
