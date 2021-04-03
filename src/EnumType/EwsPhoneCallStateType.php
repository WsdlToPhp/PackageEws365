<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PhoneCallStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPhoneCallStateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Idle'
     * @return string 'Idle'
     */
    const VALUE_IDLE = 'Idle';
    /**
     * Constant for value 'Connecting'
     * @return string 'Connecting'
     */
    const VALUE_CONNECTING = 'Connecting';
    /**
     * Constant for value 'Alerted'
     * @return string 'Alerted'
     */
    const VALUE_ALERTED = 'Alerted';
    /**
     * Constant for value 'Connected'
     * @return string 'Connected'
     */
    const VALUE_CONNECTED = 'Connected';
    /**
     * Constant for value 'Disconnected'
     * @return string 'Disconnected'
     */
    const VALUE_DISCONNECTED = 'Disconnected';
    /**
     * Constant for value 'Incoming'
     * @return string 'Incoming'
     */
    const VALUE_INCOMING = 'Incoming';
    /**
     * Constant for value 'Transferring'
     * @return string 'Transferring'
     */
    const VALUE_TRANSFERRING = 'Transferring';
    /**
     * Constant for value 'Forwarding'
     * @return string 'Forwarding'
     */
    const VALUE_FORWARDING = 'Forwarding';
    /**
     * Return allowed values
     * @uses self::VALUE_IDLE
     * @uses self::VALUE_CONNECTING
     * @uses self::VALUE_ALERTED
     * @uses self::VALUE_CONNECTED
     * @uses self::VALUE_DISCONNECTED
     * @uses self::VALUE_INCOMING
     * @uses self::VALUE_TRANSFERRING
     * @uses self::VALUE_FORWARDING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IDLE,
            self::VALUE_CONNECTING,
            self::VALUE_ALERTED,
            self::VALUE_CONNECTED,
            self::VALUE_DISCONNECTED,
            self::VALUE_INCOMING,
            self::VALUE_TRANSFERRING,
            self::VALUE_FORWARDING,
        ];
    }
}
