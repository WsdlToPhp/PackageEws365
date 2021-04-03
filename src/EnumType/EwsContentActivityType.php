<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ContentActivityType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContentActivityType extends AbstractStructEnumBase
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
    const VALUE_WHITE_BOARD = 'WhiteBoard';
    /**
     * Constant for value 'QAndA'
     * @return string 'QAndA'
     */
    const VALUE_QAND_A = 'QAndA';
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
    const VALUE_SHARED_NOTES = 'SharedNotes';
    /**
     * Return allowed values
     * @uses self::VALUE_POLL
     * @uses self::VALUE_WHITE_BOARD
     * @uses self::VALUE_QAND_A
     * @uses self::VALUE_CHAT
     * @uses self::VALUE_MEETING
     * @uses self::VALUE_ANNOTATIONS
     * @uses self::VALUE_SHARED_NOTES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POLL,
            self::VALUE_WHITE_BOARD,
            self::VALUE_QAND_A,
            self::VALUE_CHAT,
            self::VALUE_MEETING,
            self::VALUE_ANNOTATIONS,
            self::VALUE_SHARED_NOTES,
        ];
    }
}
