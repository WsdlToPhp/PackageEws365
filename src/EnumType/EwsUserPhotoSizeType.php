<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserPhotoSizeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserPhotoSizeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'HR48x48'
     * @return string 'HR48x48'
     */
    const VALUE_HR_48_X_48 = 'HR48x48';
    /**
     * Constant for value 'HR64x64'
     * @return string 'HR64x64'
     */
    const VALUE_HR_64_X_64 = 'HR64x64';
    /**
     * Constant for value 'HR96x96'
     * @return string 'HR96x96'
     */
    const VALUE_HR_96_X_96 = 'HR96x96';
    /**
     * Constant for value 'HR120x120'
     * @return string 'HR120x120'
     */
    const VALUE_HR_120_X_120 = 'HR120x120';
    /**
     * Constant for value 'HR240x240'
     * @return string 'HR240x240'
     */
    const VALUE_HR_240_X_240 = 'HR240x240';
    /**
     * Constant for value 'HR360x360'
     * @return string 'HR360x360'
     */
    const VALUE_HR_360_X_360 = 'HR360x360';
    /**
     * Constant for value 'HR432x432'
     * @return string 'HR432x432'
     */
    const VALUE_HR_432_X_432 = 'HR432x432';
    /**
     * Constant for value 'HR504x504'
     * @return string 'HR504x504'
     */
    const VALUE_HR_504_X_504 = 'HR504x504';
    /**
     * Constant for value 'HR648x648'
     * @return string 'HR648x648'
     */
    const VALUE_HR_648_X_648 = 'HR648x648';
    /**
     * Return allowed values
     * @uses self::VALUE_HR_48_X_48
     * @uses self::VALUE_HR_64_X_64
     * @uses self::VALUE_HR_96_X_96
     * @uses self::VALUE_HR_120_X_120
     * @uses self::VALUE_HR_240_X_240
     * @uses self::VALUE_HR_360_X_360
     * @uses self::VALUE_HR_432_X_432
     * @uses self::VALUE_HR_504_X_504
     * @uses self::VALUE_HR_648_X_648
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_HR_48_X_48,
            self::VALUE_HR_64_X_64,
            self::VALUE_HR_96_X_96,
            self::VALUE_HR_120_X_120,
            self::VALUE_HR_240_X_240,
            self::VALUE_HR_360_X_360,
            self::VALUE_HR_432_X_432,
            self::VALUE_HR_504_X_504,
            self::VALUE_HR_648_X_648,
        );
    }
}
