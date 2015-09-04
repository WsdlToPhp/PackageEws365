<?php

namespace Ews\EnumType;

/**
 * This class stands for ContentActivityType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContentActivityType
{
    /**
     * Constant for value 'Poll'
     * @return string 'Poll'
     */
    const VALUE_POLL = 'Poll';
    /**
     * Constant for value 'WhiteBoard'
     * @return string 'WhiteBoard'
     */
    const VALUE_WHITEBOARD = 'WhiteBoard';
    /**
     * Constant for value 'QAndA'
     * @return string 'QAndA'
     */
    const VALUE_QANDA = 'QAndA';
    /**
     * Constant for value 'Chat'
     * @return string 'Chat'
     */
    const VALUE_CHAT = 'Chat';
    /**
     * Constant for value 'Meeting'
     * @return string 'Meeting'
     */
    const VALUE_MEETING = 'Meeting';
    /**
     * Constant for value 'Annotations'
     * @return string 'Annotations'
     */
    const VALUE_ANNOTATIONS = 'Annotations';
    /**
     * Constant for value 'SharedNotes'
     * @return string 'SharedNotes'
     */
    const VALUE_SHAREDNOTES = 'SharedNotes';
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
     * @uses self::VALUE_POLL
     * @uses self::VALUE_WHITEBOARD
     * @uses self::VALUE_QANDA
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_ANNOTATIONS
     * @uses self::VALUE_SHAREDNOTES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POLL,
            self::VALUE_WHITEBOARD,
            self::VALUE_QANDA,
            self::VALUE_CHAT,
            self::VALUE_MEETING,
            self::VALUE_ANNOTATIONS,
            self::VALUE_SHAREDNOTES,
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
