<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SendPromptType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSendPromptType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Send'
     * @return string 'Send'
     */
    const VALUE_SEND = 'Send';
    /**
     * Constant for value 'VotingOption'
     * @return string 'VotingOption'
     */
    const VALUE_VOTING_OPTION = 'VotingOption';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SEND
     * @uses self::VALUE_VOTING_OPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SEND,
            self::VALUE_VOTING_OPTION,
        );
    }
}
