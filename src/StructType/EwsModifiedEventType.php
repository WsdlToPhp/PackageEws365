<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifiedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsModifiedEventType extends EwsBaseObjectChangedEventType
{
    /**
     * The UnreadCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $UnreadCount;
    /**
     * Constructor method for ModifiedEventType
     * @uses EwsModifiedEventType::setUnreadCount()
     * @param int $unreadCount
     */
    public function __construct($unreadCount = null)
    {
        $this
            ->setUnreadCount($unreadCount);
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount()
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \Ews\StructType\EwsModifiedEventType
     */
    public function setUnreadCount($unreadCount = null)
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !(is_int($unreadCount) || ctype_digit($unreadCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unreadCount, true), gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        return $this;
    }
}
