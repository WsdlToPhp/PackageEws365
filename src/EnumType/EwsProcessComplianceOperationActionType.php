<?php

namespace Ews\EnumType;

/**
 * This class stands for ProcessComplianceOperationActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of compliance operation action
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsProcessComplianceOperationActionType
{
    /**
     * Constant for value 'GetReviewComments'
     * @return string 'GetReviewComments'
     */
    const VALUE_GETREVIEWCOMMENTS = 'GetReviewComments';
    /**
     * Constant for value 'SetReviewComments'
     * @return string 'SetReviewComments'
     */
    const VALUE_SETREVIEWCOMMENTS = 'SetReviewComments';
    /**
     * Constant for value 'SetReviewStatus'
     * @return string 'SetReviewStatus'
     */
    const VALUE_SETREVIEWSTATUS = 'SetReviewStatus';
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
     * @uses self::VALUE_GETREVIEWCOMMENTS
     * @uses self::VALUE_SETREVIEWCOMMENTS
     * @uses self::VALUE_SETREVIEWSTATUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GETREVIEWCOMMENTS,
            self::VALUE_SETREVIEWCOMMENTS,
            self::VALUE_SETREVIEWSTATUS,
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
