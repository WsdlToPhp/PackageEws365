<?php

namespace Ews\EnumType;

/**
 * This class stands for ProcessComplianceOperationActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Types of compliance operation action
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProcessComplianceOperationActionType
{
    /**
     * Constant for value 'GetReviewComments'
     * @return string 'GetReviewComments'
     */
    const VALUE_GET_REVIEW_COMMENTS = 'GetReviewComments';
    /**
     * Constant for value 'SetReviewComments'
     * @return string 'SetReviewComments'
     */
    const VALUE_SET_REVIEW_COMMENTS = 'SetReviewComments';
    /**
     * Constant for value 'SetReviewStatus'
     * @return string 'SetReviewStatus'
     */
    const VALUE_SET_REVIEW_STATUS = 'SetReviewStatus';
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
     * @uses self::VALUE_GET_REVIEW_COMMENTS
     * @uses self::VALUE_SET_REVIEW_COMMENTS
     * @uses self::VALUE_SET_REVIEW_STATUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GET_REVIEW_COMMENTS,
            self::VALUE_SET_REVIEW_COMMENTS,
            self::VALUE_SET_REVIEW_STATUS,
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
