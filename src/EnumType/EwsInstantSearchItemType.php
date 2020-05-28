<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InstantSearchItemType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInstantSearchItemType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MailItem'
     * @return string 'MailItem'
     */
    const VALUE_MAIL_ITEM = 'MailItem';
    /**
     * Constant for value 'MailConversation'
     * @return string 'MailConversation'
     */
    const VALUE_MAIL_CONVERSATION = 'MailConversation';
    /**
     * Constant for value 'CalendarItem'
     * @return string 'CalendarItem'
     */
    const VALUE_CALENDAR_ITEM = 'CalendarItem';
    /**
     * Constant for value 'Persona'
     * @return string 'Persona'
     */
    const VALUE_PERSONA = 'Persona';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MAIL_ITEM
     * @uses self::VALUE_MAIL_CONVERSATION
     * @uses self::VALUE_CALENDAR_ITEM
     * @uses self::VALUE_PERSONA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MAIL_ITEM,
            self::VALUE_MAIL_CONVERSATION,
            self::VALUE_CALENDAR_ITEM,
            self::VALUE_PERSONA,
        );
    }
}
