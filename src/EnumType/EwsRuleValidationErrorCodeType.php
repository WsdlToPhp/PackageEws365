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
    const VALUE_ADOPERATIONFAILURE = 'ADOperationFailure';
    /**
     * Constant for value 'ConnectedAccountNotFound'
     * @return string 'ConnectedAccountNotFound'
     */
    const VALUE_CONNECTEDACCOUNTNOTFOUND = 'ConnectedAccountNotFound';
    /**
     * Constant for value 'CreateWithRuleId'
     * @return string 'CreateWithRuleId'
     */
    const VALUE_CREATEWITHRULEID = 'CreateWithRuleId';
    /**
     * Constant for value 'EmptyValueFound'
     * @return string 'EmptyValueFound'
     */
    const VALUE_EMPTYVALUEFOUND = 'EmptyValueFound';
    /**
     * Constant for value 'DuplicatedPriority'
     * @return string 'DuplicatedPriority'
     */
    const VALUE_DUPLICATEDPRIORITY = 'DuplicatedPriority';
    /**
     * Constant for value 'DuplicatedOperationOnTheSameRule'
     * @return string 'DuplicatedOperationOnTheSameRule'
     */
    const VALUE_DUPLICATEDOPERATIONONTHESAMERULE = 'DuplicatedOperationOnTheSameRule';
    /**
     * Constant for value 'FolderDoesNotExist'
     * @return string 'FolderDoesNotExist'
     */
    const VALUE_FOLDERDOESNOTEXIST = 'FolderDoesNotExist';
    /**
     * Constant for value 'InvalidAddress'
     * @return string 'InvalidAddress'
     */
    const VALUE_INVALIDADDRESS = 'InvalidAddress';
    /**
     * Constant for value 'InvalidDateRange'
     * @return string 'InvalidDateRange'
     */
    const VALUE_INVALIDDATERANGE = 'InvalidDateRange';
    /**
     * Constant for value 'InvalidFolderId'
     * @return string 'InvalidFolderId'
     */
    const VALUE_INVALIDFOLDERID = 'InvalidFolderId';
    /**
     * Constant for value 'InvalidSizeRange'
     * @return string 'InvalidSizeRange'
     */
    const VALUE_INVALIDSIZERANGE = 'InvalidSizeRange';
    /**
     * Constant for value 'InvalidValue'
     * @return string 'InvalidValue'
     */
    const VALUE_INVALIDVALUE = 'InvalidValue';
    /**
     * Constant for value 'MessageClassificationNotFound'
     * @return string 'MessageClassificationNotFound'
     */
    const VALUE_MESSAGECLASSIFICATIONNOTFOUND = 'MessageClassificationNotFound';
    /**
     * Constant for value 'MissingAction'
     * @return string 'MissingAction'
     */
    const VALUE_MISSINGACTION = 'MissingAction';
    /**
     * Constant for value 'MissingParameter'
     * @return string 'MissingParameter'
     */
    const VALUE_MISSINGPARAMETER = 'MissingParameter';
    /**
     * Constant for value 'MissingRangeValue'
     * @return string 'MissingRangeValue'
     */
    const VALUE_MISSINGRANGEVALUE = 'MissingRangeValue';
    /**
     * Constant for value 'NotSettable'
     * @return string 'NotSettable'
     */
    const VALUE_NOTSETTABLE = 'NotSettable';
    /**
     * Constant for value 'RecipientDoesNotExist'
     * @return string 'RecipientDoesNotExist'
     */
    const VALUE_RECIPIENTDOESNOTEXIST = 'RecipientDoesNotExist';
    /**
     * Constant for value 'RuleNotFound'
     * @return string 'RuleNotFound'
     */
    const VALUE_RULENOTFOUND = 'RuleNotFound';
    /**
     * Constant for value 'SizeLessThanZero'
     * @return string 'SizeLessThanZero'
     */
    const VALUE_SIZELESSTHANZERO = 'SizeLessThanZero';
    /**
     * Constant for value 'StringValueTooBig'
     * @return string 'StringValueTooBig'
     */
    const VALUE_STRINGVALUETOOBIG = 'StringValueTooBig';
    /**
     * Constant for value 'UnsupportedAddress'
     * @return string 'UnsupportedAddress'
     */
    const VALUE_UNSUPPORTEDADDRESS = 'UnsupportedAddress';
    /**
     * Constant for value 'UnexpectedError'
     * @return string 'UnexpectedError'
     */
    const VALUE_UNEXPECTEDERROR = 'UnexpectedError';
    /**
     * Constant for value 'UnsupportedRule'
     * @return string 'UnsupportedRule'
     */
    const VALUE_UNSUPPORTEDRULE = 'UnsupportedRule';
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
     * @uses self::VALUE_ADOPERATIONFAILURE
     * @uses self::VALUE_CONNECTEDACCOUNTNOTFOUND
     * @uses self::VALUE_CREATEWITHRULEID
     * @uses self::VALUE_EMPTYVALUEFOUND
     * @uses self::VALUE_DUPLICATEDPRIORITY
     * @uses self::VALUE_DUPLICATEDOPERATIONONTHESAMERULE
     * @uses self::VALUE_FOLDERDOESNOTEXIST
     * @uses self::VALUE_INVALIDADDRESS
     * @uses self::VALUE_INVALIDDATERANGE
     * @uses self::VALUE_INVALIDFOLDERID
     * @uses self::VALUE_INVALIDSIZERANGE
     * @uses self::VALUE_INVALIDVALUE
     * @uses self::VALUE_MESSAGECLASSIFICATIONNOTFOUND
     * @uses self::VALUE_MISSINGACTION
     * @uses self::VALUE_MISSINGPARAMETER
     * @uses self::VALUE_MISSINGRANGEVALUE
     * @uses self::VALUE_NOTSETTABLE
     * @uses self::VALUE_RECIPIENTDOESNOTEXIST
     * @uses self::VALUE_RULENOTFOUND
     * @uses self::VALUE_SIZELESSTHANZERO
     * @uses self::VALUE_STRINGVALUETOOBIG
     * @uses self::VALUE_UNSUPPORTEDADDRESS
     * @uses self::VALUE_UNEXPECTEDERROR
     * @uses self::VALUE_UNSUPPORTEDRULE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADOPERATIONFAILURE,
            self::VALUE_CONNECTEDACCOUNTNOTFOUND,
            self::VALUE_CREATEWITHRULEID,
            self::VALUE_EMPTYVALUEFOUND,
            self::VALUE_DUPLICATEDPRIORITY,
            self::VALUE_DUPLICATEDOPERATIONONTHESAMERULE,
            self::VALUE_FOLDERDOESNOTEXIST,
            self::VALUE_INVALIDADDRESS,
            self::VALUE_INVALIDDATERANGE,
            self::VALUE_INVALIDFOLDERID,
            self::VALUE_INVALIDSIZERANGE,
            self::VALUE_INVALIDVALUE,
            self::VALUE_MESSAGECLASSIFICATIONNOTFOUND,
            self::VALUE_MISSINGACTION,
            self::VALUE_MISSINGPARAMETER,
            self::VALUE_MISSINGRANGEVALUE,
            self::VALUE_NOTSETTABLE,
            self::VALUE_RECIPIENTDOESNOTEXIST,
            self::VALUE_RULENOTFOUND,
            self::VALUE_SIZELESSTHANZERO,
            self::VALUE_STRINGVALUETOOBIG,
            self::VALUE_UNSUPPORTEDADDRESS,
            self::VALUE_UNEXPECTEDERROR,
            self::VALUE_UNSUPPORTEDRULE,
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
