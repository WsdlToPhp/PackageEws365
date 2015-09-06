<?php

namespace Ews\EnumType;

/**
 * This class stands for LobbyBypassType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLobbyBypassType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
    /**
     * Constant for value 'EnabledForGatewayParticipants'
     * @return string 'EnabledForGatewayParticipants'
     */
    const VALUE_ENABLEDFORGATEWAYPARTICIPANTS = 'EnabledForGatewayParticipants';
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
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLEDFORGATEWAYPARTICIPANTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLEDFORGATEWAYPARTICIPANTS,
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
