<?php

namespace Ews\EnumType;

/**
 * This class stands for DeliverMeetingRequestsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeliverMeetingRequestsType
{
    /**
     * Constant for value 'DelegatesOnly'
     * @return string 'DelegatesOnly'
     */
    const VALUE_DELEGATESONLY = 'DelegatesOnly';
    /**
     * Constant for value 'DelegatesAndMe'
     * @return string 'DelegatesAndMe'
     */
    const VALUE_DELEGATESANDME = 'DelegatesAndMe';
    /**
     * Constant for value 'DelegatesAndSendInformationToMe'
     * @return string 'DelegatesAndSendInformationToMe'
     */
    const VALUE_DELEGATESANDSENDINFORMATIONTOME = 'DelegatesAndSendInformationToMe';
    /**
     * Constant for value 'NoForward'
     * @return string 'NoForward'
     */
    const VALUE_NOFORWARD = 'NoForward';
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
     * @uses self::VALUE_DELEGATESONLY
     * @uses self::VALUE_DELEGATESANDME
     * @uses self::VALUE_DELEGATESANDSENDINFORMATIONTOME
     * @uses self::VALUE_NOFORWARD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DELEGATESONLY,
            self::VALUE_DELEGATESANDME,
            self::VALUE_DELEGATESANDSENDINFORMATIONTOME,
            self::VALUE_NOFORWARD,
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
