<?php

namespace Ews\EnumType;

/**
 * This class stands for MapiPropertyTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Includes all of the extended property types that we support. Note that Error, Null, Object and Object array can not be used in restrictions, or for setting/getting values. They are only there for error reporting purposes.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMapiPropertyTypeType
{
    /**
     * Constant for value 'ApplicationTime'
     * @return string 'ApplicationTime'
     */
    const VALUE_APPLICATIONTIME = 'ApplicationTime';
    /**
     * Constant for value 'ApplicationTimeArray'
     * @return string 'ApplicationTimeArray'
     */
    const VALUE_APPLICATIONTIMEARRAY = 'ApplicationTimeArray';
    /**
     * Constant for value 'Binary'
     * @return string 'Binary'
     */
    const VALUE_BINARY = 'Binary';
    /**
     * Constant for value 'BinaryArray'
     * @return string 'BinaryArray'
     */
    const VALUE_BINARYARRAY = 'BinaryArray';
    /**
     * Constant for value 'Boolean'
     * @return string 'Boolean'
     */
    const VALUE_BOOLEAN = 'Boolean';
    /**
     * Constant for value 'CLSID'
     * @return string 'CLSID'
     */
    const VALUE_CLSID = 'CLSID';
    /**
     * Constant for value 'CLSIDArray'
     * @return string 'CLSIDArray'
     */
    const VALUE_CLSIDARRAY = 'CLSIDArray';
    /**
     * Constant for value 'Currency'
     * @return string 'Currency'
     */
    const VALUE_CURRENCY = 'Currency';
    /**
     * Constant for value 'CurrencyArray'
     * @return string 'CurrencyArray'
     */
    const VALUE_CURRENCYARRAY = 'CurrencyArray';
    /**
     * Constant for value 'Double'
     * @return string 'Double'
     */
    const VALUE_DOUBLE = 'Double';
    /**
     * Constant for value 'DoubleArray'
     * @return string 'DoubleArray'
     */
    const VALUE_DOUBLEARRAY = 'DoubleArray';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Float'
     * @return string 'Float'
     */
    const VALUE_FLOAT = 'Float';
    /**
     * Constant for value 'FloatArray'
     * @return string 'FloatArray'
     */
    const VALUE_FLOATARRAY = 'FloatArray';
    /**
     * Constant for value 'Integer'
     * @return string 'Integer'
     */
    const VALUE_INTEGER = 'Integer';
    /**
     * Constant for value 'IntegerArray'
     * @return string 'IntegerArray'
     */
    const VALUE_INTEGERARRAY = 'IntegerArray';
    /**
     * Constant for value 'Long'
     * @return string 'Long'
     */
    const VALUE_LONG = 'Long';
    /**
     * Constant for value 'LongArray'
     * @return string 'LongArray'
     */
    const VALUE_LONGARRAY = 'LongArray';
    /**
     * Constant for value 'Null'
     * @return string 'Null'
     */
    const VALUE_NULL = 'Null';
    /**
     * Constant for value 'Object'
     * @return string 'Object'
     */
    const VALUE_OBJECT = 'Object';
    /**
     * Constant for value 'ObjectArray'
     * @return string 'ObjectArray'
     */
    const VALUE_OBJECTARRAY = 'ObjectArray';
    /**
     * Constant for value 'Short'
     * @return string 'Short'
     */
    const VALUE_SHORT = 'Short';
    /**
     * Constant for value 'ShortArray'
     * @return string 'ShortArray'
     */
    const VALUE_SHORTARRAY = 'ShortArray';
    /**
     * Constant for value 'SystemTime'
     * @return string 'SystemTime'
     */
    const VALUE_SYSTEMTIME = 'SystemTime';
    /**
     * Constant for value 'SystemTimeArray'
     * @return string 'SystemTimeArray'
     */
    const VALUE_SYSTEMTIMEARRAY = 'SystemTimeArray';
    /**
     * Constant for value 'String'
     * @return string 'String'
     */
    const VALUE_STRING = 'String';
    /**
     * Constant for value 'StringArray'
     * @return string 'StringArray'
     */
    const VALUE_STRINGARRAY = 'StringArray';
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
     * @uses self::VALUE_APPLICATIONTIME
     * @uses self::VALUE_APPLICATIONTIMEARRAY
     * @uses self::VALUE_BINARY
     * @uses self::VALUE_BINARYARRAY
     * @uses self::VALUE_BOOLEAN
     * @uses self::VALUE_CLSID
     * @uses self::VALUE_CLSIDARRAY
     * @uses self::VALUE_CURRENCY
     * @uses self::VALUE_CURRENCYARRAY
     * @uses self::VALUE_DOUBLE
     * @uses self::VALUE_DOUBLEARRAY
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_FLOAT
     * @uses self::VALUE_FLOATARRAY
     * @uses self::VALUE_INTEGER
     * @uses self::VALUE_INTEGERARRAY
     * @uses self::VALUE_LONG
     * @uses self::VALUE_LONGARRAY
     * @uses self::VALUE_NULL
     * @uses self::VALUE_OBJECT
     * @uses self::VALUE_OBJECTARRAY
     * @uses self::VALUE_SHORT
     * @uses self::VALUE_SHORTARRAY
     * @uses self::VALUE_SYSTEMTIME
     * @uses self::VALUE_SYSTEMTIMEARRAY
     * @uses self::VALUE_STRING
     * @uses self::VALUE_STRINGARRAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPLICATIONTIME,
            self::VALUE_APPLICATIONTIMEARRAY,
            self::VALUE_BINARY,
            self::VALUE_BINARYARRAY,
            self::VALUE_BOOLEAN,
            self::VALUE_CLSID,
            self::VALUE_CLSIDARRAY,
            self::VALUE_CURRENCY,
            self::VALUE_CURRENCYARRAY,
            self::VALUE_DOUBLE,
            self::VALUE_DOUBLEARRAY,
            self::VALUE_ERROR,
            self::VALUE_FLOAT,
            self::VALUE_FLOATARRAY,
            self::VALUE_INTEGER,
            self::VALUE_INTEGERARRAY,
            self::VALUE_LONG,
            self::VALUE_LONGARRAY,
            self::VALUE_NULL,
            self::VALUE_OBJECT,
            self::VALUE_OBJECTARRAY,
            self::VALUE_SHORT,
            self::VALUE_SHORTARRAY,
            self::VALUE_SYSTEMTIME,
            self::VALUE_SYSTEMTIMEARRAY,
            self::VALUE_STRING,
            self::VALUE_STRINGARRAY,
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
