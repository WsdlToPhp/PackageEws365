<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MessageTrackingReportTemplateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMessageTrackingReportTemplateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Summary'
     * @return string 'Summary'
     */
    const VALUE_SUMMARY = 'Summary';
    /**
     * Constant for value 'RecipientPath'
     * @return string 'RecipientPath'
     */
    const VALUE_RECIPIENT_PATH = 'RecipientPath';
    /**
     * Return allowed values
     * @uses self::VALUE_SUMMARY
     * @uses self::VALUE_RECIPIENT_PATH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUMMARY,
            self::VALUE_RECIPIENT_PATH,
        );
    }
}
