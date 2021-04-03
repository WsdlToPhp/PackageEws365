<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProcessComplianceOperationActionType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of compliance operation action
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProcessComplianceOperationActionType extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_GET_REVIEW_COMMENTS
     * @uses self::VALUE_SET_REVIEW_COMMENTS
     * @uses self::VALUE_SET_REVIEW_STATUS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_GET_REVIEW_COMMENTS,
            self::VALUE_SET_REVIEW_COMMENTS,
            self::VALUE_SET_REVIEW_STATUS,
        ];
    }
}
