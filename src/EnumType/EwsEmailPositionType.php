<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmailPositionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailPositionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'LatestReply'
     * @return string 'LatestReply'
     */
    const VALUE_LATEST_REPLY = 'LatestReply';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Subject'
     * @return string 'Subject'
     */
    const VALUE_SUBJECT = 'Subject';
    /**
     * Constant for value 'Signature'
     * @return string 'Signature'
     */
    const VALUE_SIGNATURE = 'Signature';
    /**
     * Return allowed values
     * @uses self::VALUE_LATEST_REPLY
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_SUBJECT
     * @uses self::VALUE_SIGNATURE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LATEST_REPLY,
            self::VALUE_OTHER,
            self::VALUE_SUBJECT,
            self::VALUE_SIGNATURE,
        );
    }
}
