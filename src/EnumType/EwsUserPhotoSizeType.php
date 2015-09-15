<?php

namespace Ews\EnumType;

/**
 * This class stands for UserPhotoSizeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserPhotoSizeType
{
    /**
     * Constant for value 'HR48x48'
     * @return string 'HR48x48'
     */
    const VALUE_HR48X48 = 'HR48x48';
    /**
     * Constant for value 'HR64x64'
     * @return string 'HR64x64'
     */
    const VALUE_HR64X64 = 'HR64x64';
    /**
     * Constant for value 'HR96x96'
     * @return string 'HR96x96'
     */
    const VALUE_HR96X96 = 'HR96x96';
    /**
     * Constant for value 'HR120x120'
     * @return string 'HR120x120'
     */
    const VALUE_HR120X120 = 'HR120x120';
    /**
     * Constant for value 'HR240x240'
     * @return string 'HR240x240'
     */
    const VALUE_HR240X240 = 'HR240x240';
    /**
     * Constant for value 'HR360x360'
     * @return string 'HR360x360'
     */
    const VALUE_HR360X360 = 'HR360x360';
    /**
     * Constant for value 'HR432x432'
     * @return string 'HR432x432'
     */
    const VALUE_HR432X432 = 'HR432x432';
    /**
     * Constant for value 'HR504x504'
     * @return string 'HR504x504'
     */
    const VALUE_HR504X504 = 'HR504x504';
    /**
     * Constant for value 'HR648x648'
     * @return string 'HR648x648'
     */
    const VALUE_HR648X648 = 'HR648x648';
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
     * @uses self::VALUE_HR48X48
     * @uses self::VALUE_HR64X64
     * @uses self::VALUE_HR96X96
     * @uses self::VALUE_HR120X120
     * @uses self::VALUE_HR240X240
     * @uses self::VALUE_HR360X360
     * @uses self::VALUE_HR432X432
     * @uses self::VALUE_HR504X504
     * @uses self::VALUE_HR648X648
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HR48X48,
            self::VALUE_HR64X64,
            self::VALUE_HR96X96,
            self::VALUE_HR120X120,
            self::VALUE_HR240X240,
            self::VALUE_HR360X360,
            self::VALUE_HR432X432,
            self::VALUE_HR504X504,
            self::VALUE_HR648X648,
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
