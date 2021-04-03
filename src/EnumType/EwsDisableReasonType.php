<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisableReasonType EnumType
 * Meta information extracted from the WSDL
 * - documentation: List of possible reasons for disabling the client extension
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDisableReasonType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoReason'
     * @return string 'NoReason'
     */
    const VALUE_NO_REASON = 'NoReason';
    /**
     * Constant for value 'OutlookClientPerformance'
     * @return string 'OutlookClientPerformance'
     */
    const VALUE_OUTLOOK_CLIENT_PERFORMANCE = 'OutlookClientPerformance';
    /**
     * Constant for value 'OWAClientPerformance'
     * @return string 'OWAClientPerformance'
     */
    const VALUE_OWACLIENT_PERFORMANCE = 'OWAClientPerformance';
    /**
     * Constant for value 'MobileClientPerformance'
     * @return string 'MobileClientPerformance'
     */
    const VALUE_MOBILE_CLIENT_PERFORMANCE = 'MobileClientPerformance';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_REASON
     * @uses self::VALUE_OUTLOOK_CLIENT_PERFORMANCE
     * @uses self::VALUE_OWACLIENT_PERFORMANCE
     * @uses self::VALUE_MOBILE_CLIENT_PERFORMANCE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_REASON,
            self::VALUE_OUTLOOK_CLIENT_PERFORMANCE,
            self::VALUE_OWACLIENT_PERFORMANCE,
            self::VALUE_MOBILE_CLIENT_PERFORMANCE,
        ];
    }
}
