<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupUnseenChangedChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupUnseenChangedChannelEventType extends EwsSubscriptionLevelChannelEventType
{
    /**
     * The UnseenCount
     * @var int|null
     */
    protected ?int $UnseenCount = null;
    /**
     * The LastVisitedTime
     * @var string|null
     */
    protected ?string $LastVisitedTime = null;
    /**
     * Constructor method for UnifiedGroupUnseenChangedChannelEventType
     * @uses EwsUnifiedGroupUnseenChangedChannelEventType::setUnseenCount()
     * @uses EwsUnifiedGroupUnseenChangedChannelEventType::setLastVisitedTime()
     * @param int $unseenCount
     * @param string $lastVisitedTime
     */
    public function __construct(?int $unseenCount = null, ?string $lastVisitedTime = null)
    {
        $this
            ->setUnseenCount($unseenCount)
            ->setLastVisitedTime($lastVisitedTime);
    }
    /**
     * Get UnseenCount value
     * @return int|null
     */
    public function getUnseenCount(): ?int
    {
        return $this->UnseenCount;
    }
    /**
     * Set UnseenCount value
     * @param int $unseenCount
     * @return \StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public function setUnseenCount(?int $unseenCount = null): self
    {
        // validation for constraint: int
        if (!is_null($unseenCount) && !(is_int($unseenCount) || ctype_digit($unseenCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unseenCount, true), gettype($unseenCount)), __LINE__);
        }
        $this->UnseenCount = $unseenCount;
        
        return $this;
    }
    /**
     * Get LastVisitedTime value
     * @return string|null
     */
    public function getLastVisitedTime(): ?string
    {
        return $this->LastVisitedTime;
    }
    /**
     * Set LastVisitedTime value
     * @param string $lastVisitedTime
     * @return \StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public function setLastVisitedTime(?string $lastVisitedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTime) && !is_string($lastVisitedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedTime, true), gettype($lastVisitedTime)), __LINE__);
        }
        $this->LastVisitedTime = $lastVisitedTime;
        
        return $this;
    }
}
