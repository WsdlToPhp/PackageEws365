<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConversationQueryTraversalType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Types of sub-tree traversal for conversations
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationQueryTraversalType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Shallow'
     * @return string 'Shallow'
     */
    const VALUE_SHALLOW = 'Shallow';
    /**
     * Constant for value 'Deep'
     * @return string 'Deep'
     */
    const VALUE_DEEP = 'Deep';
    /**
     * Return allowed values
     * @uses self::VALUE_SHALLOW
     * @uses self::VALUE_DEEP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SHALLOW,
            self::VALUE_DEEP,
        ];
    }
}
