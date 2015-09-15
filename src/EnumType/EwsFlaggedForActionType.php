<?php

namespace Ews\EnumType;

/**
 * This class stands for FlaggedForActionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Flagged for action enumeration, currently used in FlaggedForAction rule predicate
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlaggedForActionType
{
    /**
     * Constant for value 'Any'
     * @return string 'Any'
     */
    const VALUE_ANY = 'Any';
    /**
     * Constant for value 'Call'
     * @return string 'Call'
     */
    const VALUE_CALL = 'Call';
    /**
     * Constant for value 'DoNotForward'
     * @return string 'DoNotForward'
     */
    const VALUE_DONOTFORWARD = 'DoNotForward';
    /**
     * Constant for value 'FollowUp'
     * @return string 'FollowUp'
     */
    const VALUE_FOLLOWUP = 'FollowUp';
    /**
     * Constant for value 'FYI'
     * @return string 'FYI'
     */
    const VALUE_FYI = 'FYI';
    /**
     * Constant for value 'Forward'
     * @return string 'Forward'
     */
    const VALUE_FORWARD = 'Forward';
    /**
     * Constant for value 'NoResponseNecessary'
     * @return string 'NoResponseNecessary'
     */
    const VALUE_NORESPONSENECESSARY = 'NoResponseNecessary';
    /**
     * Constant for value 'Read'
     * @return string 'Read'
     */
    const VALUE_READ = 'Read';
    /**
     * Constant for value 'Reply'
     * @return string 'Reply'
     */
    const VALUE_REPLY = 'Reply';
    /**
     * Constant for value 'ReplyToAll'
     * @return string 'ReplyToAll'
     */
    const VALUE_REPLYTOALL = 'ReplyToAll';
    /**
     * Constant for value 'Review'
     * @return string 'Review'
     */
    const VALUE_REVIEW = 'Review';
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
     * @uses self::VALUE_ANY
     * @uses self::VALUE_CALL
     * @uses self::VALUE_DONOTFORWARD
     * @uses self::VALUE_FOLLOWUP
     * @uses self::VALUE_FYI
     * @uses self::VALUE_FORWARD
     * @uses self::VALUE_NORESPONSENECESSARY
     * @uses self::VALUE_READ
     * @uses self::VALUE_REPLY
     * @uses self::VALUE_REPLYTOALL
     * @uses self::VALUE_REVIEW
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANY,
            self::VALUE_CALL,
            self::VALUE_DONOTFORWARD,
            self::VALUE_FOLLOWUP,
            self::VALUE_FYI,
            self::VALUE_FORWARD,
            self::VALUE_NORESPONSENECESSARY,
            self::VALUE_READ,
            self::VALUE_REPLY,
            self::VALUE_REPLYTOALL,
            self::VALUE_REVIEW,
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
