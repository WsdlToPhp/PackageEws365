<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StandardGroupByType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Represents standard groupings for GroupBy queries.
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStandardGroupByType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ConversationTopic'
     * @return string 'ConversationTopic'
     */
    const VALUE_CONVERSATION_TOPIC = 'ConversationTopic';
    /**
     * Return allowed values
     * @uses self::VALUE_CONVERSATION_TOPIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CONVERSATION_TOPIC,
        ];
    }
}
