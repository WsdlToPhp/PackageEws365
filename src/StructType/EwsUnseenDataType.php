<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnseenDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnseenDataType extends AbstractStructBase
{
    /**
     * The GroupIdentity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsUnifiedGroupIdentity
     */
    protected \StructType\EwsUnifiedGroupIdentity $GroupIdentity;
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Count;
    /**
     * The LastVisitedTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $LastVisitedTimeUtc;
    /**
     * Constructor method for UnseenDataType
     * @uses EwsUnseenDataType::setGroupIdentity()
     * @uses EwsUnseenDataType::setCount()
     * @uses EwsUnseenDataType::setLastVisitedTimeUtc()
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @param int $count
     * @param string $lastVisitedTimeUtc
     */
    public function __construct(\StructType\EwsUnifiedGroupIdentity $groupIdentity, int $count, string $lastVisitedTimeUtc)
    {
        $this
            ->setGroupIdentity($groupIdentity)
            ->setCount($count)
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc);
    }
    /**
     * Get GroupIdentity value
     * @return \StructType\EwsUnifiedGroupIdentity
     */
    public function getGroupIdentity(): \StructType\EwsUnifiedGroupIdentity
    {
        return $this->GroupIdentity;
    }
    /**
     * Set GroupIdentity value
     * @param \StructType\EwsUnifiedGroupIdentity $groupIdentity
     * @return \StructType\EwsUnseenDataType
     */
    public function setGroupIdentity(\StructType\EwsUnifiedGroupIdentity $groupIdentity): self
    {
        $this->GroupIdentity = $groupIdentity;
        
        return $this;
    }
    /**
     * Get Count value
     * @return int
     */
    public function getCount(): int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\EwsUnseenDataType
     */
    public function setCount(int $count): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return string
     */
    public function getLastVisitedTimeUtc(): string
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param string $lastVisitedTimeUtc
     * @return \StructType\EwsUnseenDataType
     */
    public function setLastVisitedTimeUtc(string $lastVisitedTimeUtc): self
    {
        // validation for constraint: string
        if (!is_null($lastVisitedTimeUtc) && !is_string($lastVisitedTimeUtc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastVisitedTimeUtc, true), gettype($lastVisitedTimeUtc)), __LINE__);
        }
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        
        return $this;
    }
}
