<?php

namespace Ews\EnumType;

/**
 * This class stands for FileAsMappingType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFileAsMappingType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'LastCommaFirst'
     * @return string 'LastCommaFirst'
     */
    const VALUE_LAST_COMMA_FIRST = 'LastCommaFirst';
    /**
     * Constant for value 'FirstSpaceLast'
     * @return string 'FirstSpaceLast'
     */
    const VALUE_FIRST_SPACE_LAST = 'FirstSpaceLast';
    /**
     * Constant for value 'Company'
     * @return string 'Company'
     */
    const VALUE_COMPANY = 'Company';
    /**
     * Constant for value 'LastCommaFirstCompany'
     * @return string 'LastCommaFirstCompany'
     */
    const VALUE_LAST_COMMA_FIRST_COMPANY = 'LastCommaFirstCompany';
    /**
     * Constant for value 'CompanyLastFirst'
     * @return string 'CompanyLastFirst'
     */
    const VALUE_COMPANY_LAST_FIRST = 'CompanyLastFirst';
    /**
     * Constant for value 'LastFirst'
     * @return string 'LastFirst'
     */
    const VALUE_LAST_FIRST = 'LastFirst';
    /**
     * Constant for value 'LastFirstCompany'
     * @return string 'LastFirstCompany'
     */
    const VALUE_LAST_FIRST_COMPANY = 'LastFirstCompany';
    /**
     * Constant for value 'CompanyLastCommaFirst'
     * @return string 'CompanyLastCommaFirst'
     */
    const VALUE_COMPANY_LAST_COMMA_FIRST = 'CompanyLastCommaFirst';
    /**
     * Constant for value 'LastFirstSuffix'
     * @return string 'LastFirstSuffix'
     */
    const VALUE_LAST_FIRST_SUFFIX = 'LastFirstSuffix';
    /**
     * Constant for value 'LastSpaceFirstCompany'
     * @return string 'LastSpaceFirstCompany'
     */
    const VALUE_LAST_SPACE_FIRST_COMPANY = 'LastSpaceFirstCompany';
    /**
     * Constant for value 'CompanyLastSpaceFirst'
     * @return string 'CompanyLastSpaceFirst'
     */
    const VALUE_COMPANY_LAST_SPACE_FIRST = 'CompanyLastSpaceFirst';
    /**
     * Constant for value 'LastSpaceFirst'
     * @return string 'LastSpaceFirst'
     */
    const VALUE_LAST_SPACE_FIRST = 'LastSpaceFirst';
    /**
     * Constant for value 'DisplayName'
     * @return string 'DisplayName'
     */
    const VALUE_DISPLAY_NAME = 'DisplayName';
    /**
     * Constant for value 'FirstName'
     * @return string 'FirstName'
     */
    const VALUE_FIRST_NAME = 'FirstName';
    /**
     * Constant for value 'LastFirstMiddleSuffix'
     * @return string 'LastFirstMiddleSuffix'
     */
    const VALUE_LAST_FIRST_MIDDLE_SUFFIX = 'LastFirstMiddleSuffix';
    /**
     * Constant for value 'LastName'
     * @return string 'LastName'
     */
    const VALUE_LAST_NAME = 'LastName';
    /**
     * Constant for value 'Empty'
     * @return string 'Empty'
     */
    const VALUE_EMPTY = 'Empty';
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
     * @uses self::VALUE_LAST_COMMA_FIRST
     * @uses self::VALUE_FIRST_SPACE_LAST
     * @uses self::VALUE_COMPANY
     * @uses self::VALUE_LAST_COMMA_FIRST_COMPANY
     * @uses self::VALUE_COMPANY_LAST_FIRST
     * @uses self::VALUE_LAST_FIRST
     * @uses self::VALUE_LAST_FIRST_COMPANY
     * @uses self::VALUE_COMPANY_LAST_COMMA_FIRST
     * @uses self::VALUE_LAST_FIRST_SUFFIX
     * @uses self::VALUE_LAST_SPACE_FIRST_COMPANY
     * @uses self::VALUE_COMPANY_LAST_SPACE_FIRST
     * @uses self::VALUE_LAST_SPACE_FIRST
     * @uses self::VALUE_DISPLAY_NAME
     * @uses self::VALUE_FIRST_NAME
     * @uses self::VALUE_LAST_FIRST_MIDDLE_SUFFIX
     * @uses self::VALUE_LAST_NAME
     * @uses self::VALUE_EMPTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LAST_COMMA_FIRST,
            self::VALUE_FIRST_SPACE_LAST,
            self::VALUE_COMPANY,
            self::VALUE_LAST_COMMA_FIRST_COMPANY,
            self::VALUE_COMPANY_LAST_FIRST,
            self::VALUE_LAST_FIRST,
            self::VALUE_LAST_FIRST_COMPANY,
            self::VALUE_COMPANY_LAST_COMMA_FIRST,
            self::VALUE_LAST_FIRST_SUFFIX,
            self::VALUE_LAST_SPACE_FIRST_COMPANY,
            self::VALUE_COMPANY_LAST_SPACE_FIRST,
            self::VALUE_LAST_SPACE_FIRST,
            self::VALUE_DISPLAY_NAME,
            self::VALUE_FIRST_NAME,
            self::VALUE_LAST_FIRST_MIDDLE_SUFFIX,
            self::VALUE_LAST_NAME,
            self::VALUE_EMPTY,
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
