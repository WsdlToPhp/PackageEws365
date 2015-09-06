<?php

namespace Ews\EnumType;

/**
 * This class stands for SendPromptType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSendPromptType
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
    const VALUE_VOTINGOPTION = 'VotingOption';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_SEND
     * @uses self::VALUE_VOTINGOPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_SEND,
            self::VALUE_VOTINGOPTION,
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
