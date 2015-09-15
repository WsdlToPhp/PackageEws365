<?php

namespace Ews\EnumType;

/**
 * This class stands for MessageTrackingReportTemplateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMessageTrackingReportTemplateType
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
    const VALUE_RECIPIENTPATH = 'RecipientPath';
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
     * @uses self::VALUE_SUMMARY
     * @uses self::VALUE_RECIPIENTPATH
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUMMARY,
            self::VALUE_RECIPIENTPATH,
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
