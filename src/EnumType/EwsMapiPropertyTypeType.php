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
    const VALUE_APPLICATION_TIME = 'ApplicationTime';
    /**
     * Constant for value 'ApplicationTimeArray'
     * @return string 'ApplicationTimeArray'
     */
    const VALUE_APPLICATION_TIME_ARRAY = 'ApplicationTimeArray';
    /**
     * Constant for value 'Binary'
     * @return string 'Binary'
     */
    const VALUE_BINARY = 'Binary';
    /**
     * Constant for value 'BinaryArray'
     * @return string 'BinaryArray'
     */
    const VALUE_BINARY_ARRAY = 'BinaryArray';
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
    const VALUE_CURRENCY_ARRAY = 'CurrencyArray';
    /**
     * Constant for value 'Double'
     * @return string 'Double'
     */
    const VALUE_DOUBLE = 'Double';
    /**
     * Constant for value 'DoubleArray'
     * @return string 'DoubleArray'
     */
    const VALUE_DOUBLE_ARRAY = 'DoubleArray';
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
    const VALUE_FLOAT_ARRAY = 'FloatArray';
    /**
     * Constant for value 'Integer'
     * @return string 'Integer'
     */
    const VALUE_INTEGER = 'Integer';
    /**
     * Constant for value 'IntegerArray'
     * @return string 'IntegerArray'
     */
    const VALUE_INTEGER_ARRAY = 'IntegerArray';
    /**
     * Constant for value 'Long'
     * @return string 'Long'
     */
    const VALUE_LONG = 'Long';
    /**
     * Constant for value 'LongArray'
     * @return string 'LongArray'
     */
    const VALUE_LONG_ARRAY = 'LongArray';
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
    const VALUE_OBJECT_ARRAY = 'ObjectArray';
    /**
     * Constant for value 'Short'
     * @return string 'Short'
     */
    const VALUE_SHORT = 'Short';
    /**
     * Constant for value 'ShortArray'
     * @return string 'ShortArray'
     */
    const VALUE_SHORT_ARRAY = 'ShortArray';
    /**
     * Constant for value 'SystemTime'
     * @return string 'SystemTime'
     */
    const VALUE_SYSTEM_TIME = 'SystemTime';
    /**
     * Constant for value 'SystemTimeArray'
     * @return string 'SystemTimeArray'
     */
    const VALUE_SYSTEM_TIME_ARRAY = 'SystemTimeArray';
    /**
     * Constant for value 'String'
     * @return string 'String'
     */
    const VALUE_STRING = 'String';
    /**
     * Constant for value 'StringArray'
     * @return string 'StringArray'
     */
    const VALUE_STRING_ARRAY = 'StringArray';
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
     * @uses self::VALUE_APPLICATION_TIME
     * @uses self::VALUE_APPLICATION_TIME_ARRAY
     * @uses self::VALUE_BINARY
     * @uses self::VALUE_BINARY_ARRAY
     * @uses self::VALUE_BOOLEAN
     * @uses self::VALUE_CLSID
     * @uses self::VALUE_CLSIDARRAY
     * @uses self::VALUE_CURRENCY
     * @uses self::VALUE_CURRENCY_ARRAY
     * @uses self::VALUE_DOUBLE
     * @uses self::VALUE_DOUBLE_ARRAY
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_FLOAT
     * @uses self::VALUE_FLOAT_ARRAY
     * @uses self::VALUE_INTEGER
     * @uses self::VALUE_INTEGER_ARRAY
     * @uses self::VALUE_LONG
     * @uses self::VALUE_LONG_ARRAY
     * @uses self::VALUE_NULL
     * @uses self::VALUE_OBJECT
     * @uses self::VALUE_OBJECT_ARRAY
     * @uses self::VALUE_SHORT
     * @uses self::VALUE_SHORT_ARRAY
     * @uses self::VALUE_SYSTEM_TIME
     * @uses self::VALUE_SYSTEM_TIME_ARRAY
     * @uses self::VALUE_STRING
     * @uses self::VALUE_STRING_ARRAY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_APPLICATION_TIME,
            self::VALUE_APPLICATION_TIME_ARRAY,
            self::VALUE_BINARY,
            self::VALUE_BINARY_ARRAY,
            self::VALUE_BOOLEAN,
            self::VALUE_CLSID,
            self::VALUE_CLSIDARRAY,
            self::VALUE_CURRENCY,
            self::VALUE_CURRENCY_ARRAY,
            self::VALUE_DOUBLE,
            self::VALUE_DOUBLE_ARRAY,
            self::VALUE_ERROR,
            self::VALUE_FLOAT,
            self::VALUE_FLOAT_ARRAY,
            self::VALUE_INTEGER,
            self::VALUE_INTEGER_ARRAY,
            self::VALUE_LONG,
            self::VALUE_LONG_ARRAY,
            self::VALUE_NULL,
            self::VALUE_OBJECT,
            self::VALUE_OBJECT_ARRAY,
            self::VALUE_SHORT,
            self::VALUE_SHORT_ARRAY,
            self::VALUE_SYSTEM_TIME,
            self::VALUE_SYSTEM_TIME_ARRAY,
            self::VALUE_STRING,
            self::VALUE_STRING_ARRAY,
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
