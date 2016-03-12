<?php

namespace Ews\EnumType;

/**
 * This class stands for RuleValidationErrorCodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Rule validation error code describing what failed validation for each rule predicate or action.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleValidationErrorCodeType
{
    /**
     * Constant for value 'ADOperationFailure'
     * @return string 'ADOperationFailure'
     */
    const VALUE_ADOPERATION_FAILURE = 'ADOperationFailure';
    /**
     * Constant for value 'ConnectedAccountNotFound'
     * @return string 'ConnectedAccountNotFound'
     */
    const VALUE_CONNECTED_ACCOUNT_NOT_FOUND = 'ConnectedAccountNotFound';
    /**
     * Constant for value 'CreateWithRuleId'
     * @return string 'CreateWithRuleId'
     */
    const VALUE_CREATE_WITH_RULE_ID = 'CreateWithRuleId';
    /**
     * Constant for value 'EmptyValueFound'
     * @return string 'EmptyValueFound'
     */
    const VALUE_EMPTY_VALUE_FOUND = 'EmptyValueFound';
    /**
     * Constant for value 'DuplicatedPriority'
     * @return string 'DuplicatedPriority'
     */
    const VALUE_DUPLICATED_PRIORITY = 'DuplicatedPriority';
    /**
     * Constant for value 'DuplicatedOperationOnTheSameRule'
     * @return string 'DuplicatedOperationOnTheSameRule'
     */
    const VALUE_DUPLICATED_OPERATION_ON_THE_SAME_RULE = 'DuplicatedOperationOnTheSameRule';
    /**
     * Constant for value 'FolderDoesNotExist'
     * @return string 'FolderDoesNotExist'
     */
    const VALUE_FOLDER_DOES_NOT_EXIST = 'FolderDoesNotExist';
    /**
     * Constant for value 'InvalidAddress'
     * @return string 'InvalidAddress'
     */
    const VALUE_INVALID_ADDRESS = 'InvalidAddress';
    /**
     * Constant for value 'InvalidDateRange'
     * @return string 'InvalidDateRange'
     */
    const VALUE_INVALID_DATE_RANGE = 'InvalidDateRange';
    /**
     * Constant for value 'InvalidFolderId'
     * @return string 'InvalidFolderId'
     */
    const VALUE_INVALID_FOLDER_ID = 'InvalidFolderId';
    /**
     * Constant for value 'InvalidSizeRange'
     * @return string 'InvalidSizeRange'
     */
    const VALUE_INVALID_SIZE_RANGE = 'InvalidSizeRange';
    /**
     * Constant for value 'InvalidValue'
     * @return string 'InvalidValue'
     */
    const VALUE_INVALID_VALUE = 'InvalidValue';
    /**
     * Constant for value 'MessageClassificationNotFound'
     * @return string 'MessageClassificationNotFound'
     */
    const VALUE_MESSAGE_CLASSIFICATION_NOT_FOUND = 'MessageClassificationNotFound';
    /**
     * Constant for value 'MissingAction'
     * @return string 'MissingAction'
     */
    const VALUE_MISSING_ACTION = 'MissingAction';
    /**
     * Constant for value 'MissingParameter'
     * @return string 'MissingParameter'
     */
    const VALUE_MISSING_PARAMETER = 'MissingParameter';
    /**
     * Constant for value 'MissingRangeValue'
     * @return string 'MissingRangeValue'
     */
    const VALUE_MISSING_RANGE_VALUE = 'MissingRangeValue';
    /**
     * Constant for value 'NotSettable'
     * @return string 'NotSettable'
     */
    const VALUE_NOT_SETTABLE = 'NotSettable';
    /**
     * Constant for value 'RecipientDoesNotExist'
     * @return string 'RecipientDoesNotExist'
     */
    const VALUE_RECIPIENT_DOES_NOT_EXIST = 'RecipientDoesNotExist';
    /**
     * Constant for value 'RuleNotFound'
     * @return string 'RuleNotFound'
     */
    const VALUE_RULE_NOT_FOUND = 'RuleNotFound';
    /**
     * Constant for value 'SizeLessThanZero'
     * @return string 'SizeLessThanZero'
     */
    const VALUE_SIZE_LESS_THAN_ZERO = 'SizeLessThanZero';
    /**
     * Constant for value 'StringValueTooBig'
     * @return string 'StringValueTooBig'
     */
    const VALUE_STRING_VALUE_TOO_BIG = 'StringValueTooBig';
    /**
     * Constant for value 'UnsupportedAddress'
     * @return string 'UnsupportedAddress'
     */
    const VALUE_UNSUPPORTED_ADDRESS = 'UnsupportedAddress';
    /**
     * Constant for value 'UnexpectedError'
     * @return string 'UnexpectedError'
     */
    const VALUE_UNEXPECTED_ERROR = 'UnexpectedError';
    /**
     * Constant for value 'UnsupportedRule'
     * @return string 'UnsupportedRule'
     */
    const VALUE_UNSUPPORTED_RULE = 'UnsupportedRule';
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
     * @uses self::VALUE_ADOPERATION_FAILURE
     * @uses self::VALUE_CONNECTED_ACCOUNT_NOT_FOUND
     * @uses self::VALUE_CREATE_WITH_RULE_ID
     * @uses self::VALUE_EMPTY_VALUE_FOUND
     * @uses self::VALUE_DUPLICATED_PRIORITY
     * @uses self::VALUE_DUPLICATED_OPERATION_ON_THE_SAME_RULE
     * @uses self::VALUE_FOLDER_DOES_NOT_EXIST
     * @uses self::VALUE_INVALID_ADDRESS
     * @uses self::VALUE_INVALID_DATE_RANGE
     * @uses self::VALUE_INVALID_FOLDER_ID
     * @uses self::VALUE_INVALID_SIZE_RANGE
     * @uses self::VALUE_INVALID_VALUE
     * @uses self::VALUE_MESSAGE_CLASSIFICATION_NOT_FOUND
     * @uses self::VALUE_MISSING_ACTION
     * @uses self::VALUE_MISSING_PARAMETER
     * @uses self::VALUE_MISSING_RANGE_VALUE
     * @uses self::VALUE_NOT_SETTABLE
     * @uses self::VALUE_RECIPIENT_DOES_NOT_EXIST
     * @uses self::VALUE_RULE_NOT_FOUND
     * @uses self::VALUE_SIZE_LESS_THAN_ZERO
     * @uses self::VALUE_STRING_VALUE_TOO_BIG
     * @uses self::VALUE_UNSUPPORTED_ADDRESS
     * @uses self::VALUE_UNEXPECTED_ERROR
     * @uses self::VALUE_UNSUPPORTED_RULE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADOPERATION_FAILURE,
            self::VALUE_CONNECTED_ACCOUNT_NOT_FOUND,
            self::VALUE_CREATE_WITH_RULE_ID,
            self::VALUE_EMPTY_VALUE_FOUND,
            self::VALUE_DUPLICATED_PRIORITY,
            self::VALUE_DUPLICATED_OPERATION_ON_THE_SAME_RULE,
            self::VALUE_FOLDER_DOES_NOT_EXIST,
            self::VALUE_INVALID_ADDRESS,
            self::VALUE_INVALID_DATE_RANGE,
            self::VALUE_INVALID_FOLDER_ID,
            self::VALUE_INVALID_SIZE_RANGE,
            self::VALUE_INVALID_VALUE,
            self::VALUE_MESSAGE_CLASSIFICATION_NOT_FOUND,
            self::VALUE_MISSING_ACTION,
            self::VALUE_MISSING_PARAMETER,
            self::VALUE_MISSING_RANGE_VALUE,
            self::VALUE_NOT_SETTABLE,
            self::VALUE_RECIPIENT_DOES_NOT_EXIST,
            self::VALUE_RULE_NOT_FOUND,
            self::VALUE_SIZE_LESS_THAN_ZERO,
            self::VALUE_STRING_VALUE_TOO_BIG,
            self::VALUE_UNSUPPORTED_ADDRESS,
            self::VALUE_UNEXPECTED_ERROR,
            self::VALUE_UNSUPPORTED_RULE,
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
