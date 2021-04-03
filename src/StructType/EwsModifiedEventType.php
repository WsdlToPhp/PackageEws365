<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int|null
     */
    protected ?int $UnreadCount = null;
    /**
     * Constructor method for ModifiedEventType
     * @uses EwsModifiedEventType::setUnreadCount()
     * @param int $unreadCount
     */
    public function __construct(?int $unreadCount = null)
    {
        $this
            ->setUnreadCount($unreadCount);
    }
    /**
     * Get UnreadCount value
     * @return int|null
     */
    public function getUnreadCount(): ?int
    {
        return $this->UnreadCount;
    }
    /**
     * Set UnreadCount value
     * @param int $unreadCount
     * @return \StructType\EwsModifiedEventType
     */
    public function setUnreadCount(?int $unreadCount = null): self
    {
        // validation for constraint: int
        if (!is_null($unreadCount) && !(is_int($unreadCount) || ctype_digit($unreadCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unreadCount, true), gettype($unreadCount)), __LINE__);
        }
        $this->UnreadCount = $unreadCount;
        
        return $this;
    }
}
