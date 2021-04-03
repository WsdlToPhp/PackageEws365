<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FlaggedForActionType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Flagged for action enumeration, currently used in FlaggedForAction rule predicate
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlaggedForActionType extends AbstractStructEnumBase
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
    const VALUE_DO_NOT_FORWARD = 'DoNotForward';
    /**
     * Constant for value 'FollowUp'
     * @return string 'FollowUp'
     */
    const VALUE_FOLLOW_UP = 'FollowUp';
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
    const VALUE_NO_RESPONSE_NECESSARY = 'NoResponseNecessary';
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
    const VALUE_REPLY_TO_ALL = 'ReplyToAll';
    /**
     * Constant for value 'Review'
     * @return string 'Review'
     */
    const VALUE_REVIEW = 'Review';
    /**
     * Return allowed values
     * @uses self::VALUE_ANY
     * @uses self::VALUE_CALL
     * @uses self::VALUE_DO_NOT_FORWARD
     * @uses self::VALUE_FOLLOW_UP
     * @uses self::VALUE_FYI
     * @uses self::VALUE_FORWARD
     * @uses self::VALUE_NO_RESPONSE_NECESSARY
     * @uses self::VALUE_READ
     * @uses self::VALUE_REPLY
     * @uses self::VALUE_REPLY_TO_ALL
     * @uses self::VALUE_REVIEW
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ANY,
            self::VALUE_CALL,
            self::VALUE_DO_NOT_FORWARD,
            self::VALUE_FOLLOW_UP,
            self::VALUE_FYI,
            self::VALUE_FORWARD,
            self::VALUE_NO_RESPONSE_NECESSARY,
            self::VALUE_READ,
            self::VALUE_REPLY,
            self::VALUE_REPLY_TO_ALL,
            self::VALUE_REVIEW,
        ];
    }
}
