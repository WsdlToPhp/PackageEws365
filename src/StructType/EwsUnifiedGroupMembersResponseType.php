<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupMembersResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMembersResponseType extends AbstractStructBase
{
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $TotalCount = null;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUnifiedGroupMembersType|null
     */
    protected ?\ArrayType\EwsArrayOfUnifiedGroupMembersType $Members = null;
    /**
     * Constructor method for UnifiedGroupMembersResponseType
     * @uses EwsUnifiedGroupMembersResponseType::setTotalCount()
     * @uses EwsUnifiedGroupMembersResponseType::setMembers()
     * @param int $totalCount
     * @param \ArrayType\EwsArrayOfUnifiedGroupMembersType $members
     */
    public function __construct(?int $totalCount = null, ?\ArrayType\EwsArrayOfUnifiedGroupMembersType $members = null)
    {
        $this
            ->setTotalCount($totalCount)
            ->setMembers($members);
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount(): ?int
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \StructType\EwsUnifiedGroupMembersResponseType
     */
    public function setTotalCount(?int $totalCount = null): self
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        
        return $this;
    }
    /**
     * Get Members value
     * @return \ArrayType\EwsArrayOfUnifiedGroupMembersType|null
     */
    public function getMembers(): ?\ArrayType\EwsArrayOfUnifiedGroupMembersType
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \ArrayType\EwsArrayOfUnifiedGroupMembersType $members
     * @return \StructType\EwsUnifiedGroupMembersResponseType
     */
    public function setMembers(?\ArrayType\EwsArrayOfUnifiedGroupMembersType $members = null): self
    {
        $this->Members = $members;
        
        return $this;
    }
}
