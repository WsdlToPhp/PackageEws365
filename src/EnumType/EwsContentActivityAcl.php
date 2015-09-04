<?php

namespace Ews\EnumType;

/**
 * This class stands for ContentActivityAcl EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContentActivityAcl
{
    /**
     * Constant for value 'Organizer'
     * @return string 'Organizer'
     */
    const VALUE_ORGANIZER = 'Organizer';
    /**
     * Constant for value 'Presenter'
     * @return string 'Presenter'
     */
    const VALUE_PRESENTER = 'Presenter';
    /**
     * Constant for value 'Everyone'
     * @return string 'Everyone'
     */
    const VALUE_EVERYONE = 'Everyone';
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
     * @uses self::VALUE_ORGANIZER
     * @uses self::VALUE_PRESENTER
     * @uses self::VALUE_EVERYONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ORGANIZER,
            self::VALUE_PRESENTER,
            self::VALUE_EVERYONE,
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
