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
    const VALUE_LASTCOMMAFIRST = 'LastCommaFirst';
    /**
     * Constant for value 'FirstSpaceLast'
     * @return string 'FirstSpaceLast'
     */
    const VALUE_FIRSTSPACELAST = 'FirstSpaceLast';
    /**
     * Constant for value 'Company'
     * @return string 'Company'
     */
    const VALUE_COMPANY = 'Company';
    /**
     * Constant for value 'LastCommaFirstCompany'
     * @return string 'LastCommaFirstCompany'
     */
    const VALUE_LASTCOMMAFIRSTCOMPANY = 'LastCommaFirstCompany';
    /**
     * Constant for value 'CompanyLastFirst'
     * @return string 'CompanyLastFirst'
     */
    const VALUE_COMPANYLASTFIRST = 'CompanyLastFirst';
    /**
     * Constant for value 'LastFirst'
     * @return string 'LastFirst'
     */
    const VALUE_LASTFIRST = 'LastFirst';
    /**
     * Constant for value 'LastFirstCompany'
     * @return string 'LastFirstCompany'
     */
    const VALUE_LASTFIRSTCOMPANY = 'LastFirstCompany';
    /**
     * Constant for value 'CompanyLastCommaFirst'
     * @return string 'CompanyLastCommaFirst'
     */
    const VALUE_COMPANYLASTCOMMAFIRST = 'CompanyLastCommaFirst';
    /**
     * Constant for value 'LastFirstSuffix'
     * @return string 'LastFirstSuffix'
     */
    const VALUE_LASTFIRSTSUFFIX = 'LastFirstSuffix';
    /**
     * Constant for value 'LastSpaceFirstCompany'
     * @return string 'LastSpaceFirstCompany'
     */
    const VALUE_LASTSPACEFIRSTCOMPANY = 'LastSpaceFirstCompany';
    /**
     * Constant for value 'CompanyLastSpaceFirst'
     * @return string 'CompanyLastSpaceFirst'
     */
    const VALUE_COMPANYLASTSPACEFIRST = 'CompanyLastSpaceFirst';
    /**
     * Constant for value 'LastSpaceFirst'
     * @return string 'LastSpaceFirst'
     */
    const VALUE_LASTSPACEFIRST = 'LastSpaceFirst';
    /**
     * Constant for value 'DisplayName'
     * @return string 'DisplayName'
     */
    const VALUE_DISPLAYNAME = 'DisplayName';
    /**
     * Constant for value 'FirstName'
     * @return string 'FirstName'
     */
    const VALUE_FIRSTNAME = 'FirstName';
    /**
     * Constant for value 'LastFirstMiddleSuffix'
     * @return string 'LastFirstMiddleSuffix'
     */
    const VALUE_LASTFIRSTMIDDLESUFFIX = 'LastFirstMiddleSuffix';
    /**
     * Constant for value 'LastName'
     * @return string 'LastName'
     */
    const VALUE_LASTNAME = 'LastName';
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
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LASTCOMMAFIRST
     * @uses self::VALUE_FIRSTSPACELAST
     * @uses self::VALUE_COMPANY
     * @uses self::VALUE_LASTCOMMAFIRSTCOMPANY
     * @uses self::VALUE_COMPANYLASTFIRST
     * @uses self::VALUE_LASTFIRST
     * @uses self::VALUE_LASTFIRSTCOMPANY
     * @uses self::VALUE_COMPANYLASTCOMMAFIRST
     * @uses self::VALUE_LASTFIRSTSUFFIX
     * @uses self::VALUE_LASTSPACEFIRSTCOMPANY
     * @uses self::VALUE_COMPANYLASTSPACEFIRST
     * @uses self::VALUE_LASTSPACEFIRST
     * @uses self::VALUE_DISPLAYNAME
     * @uses self::VALUE_FIRSTNAME
     * @uses self::VALUE_LASTFIRSTMIDDLESUFFIX
     * @uses self::VALUE_LASTNAME
     * @uses self::VALUE_EMPTY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_LASTCOMMAFIRST,
            self::VALUE_FIRSTSPACELAST,
            self::VALUE_COMPANY,
            self::VALUE_LASTCOMMAFIRSTCOMPANY,
            self::VALUE_COMPANYLASTFIRST,
            self::VALUE_LASTFIRST,
            self::VALUE_LASTFIRSTCOMPANY,
            self::VALUE_COMPANYLASTCOMMAFIRST,
            self::VALUE_LASTFIRSTSUFFIX,
            self::VALUE_LASTSPACEFIRSTCOMPANY,
            self::VALUE_COMPANYLASTSPACEFIRST,
            self::VALUE_LASTSPACEFIRST,
            self::VALUE_DISPLAYNAME,
            self::VALUE_FIRSTNAME,
            self::VALUE_LASTFIRSTMIDDLESUFFIX,
            self::VALUE_LASTNAME,
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
