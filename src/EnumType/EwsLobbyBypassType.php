<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LobbyBypassType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLobbyBypassType extends AbstractStructEnumBase
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
    const VALUE_ENABLED_FOR_GATEWAY_PARTICIPANTS = 'EnabledForGatewayParticipants';
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_ENABLED_FOR_GATEWAY_PARTICIPANTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
            self::VALUE_ENABLED_FOR_GATEWAY_PARTICIPANTS,
        );
    }
}
