<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var int
     */
    public $TotalCount;
    /**
     * The Members
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType
     */
    public $Members;
    /**
     * Constructor method for UnifiedGroupMembersResponseType
     * @uses EwsUnifiedGroupMembersResponseType::setTotalCount()
     * @uses EwsUnifiedGroupMembersResponseType::setMembers()
     * @param int $totalCount
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType $members
     */
    public function __construct($totalCount = null, \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType $members = null)
    {
        $this
            ->setTotalCount($totalCount)
            ->setMembers($members);
    }
    /**
     * Get TotalCount value
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param int $totalCount
     * @return \Ews\StructType\EwsUnifiedGroupMembersResponseType
     */
    public function setTotalCount($totalCount = null)
    {
        // validation for constraint: int
        if (!is_null($totalCount) && !(is_int($totalCount) || ctype_digit($totalCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        return $this;
    }
    /**
     * Get Members value
     * @return \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType|null
     */
    public function getMembers()
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType $members
     * @return \Ews\StructType\EwsUnifiedGroupMembersResponseType
     */
    public function setMembers(\Ews\ArrayType\EwsArrayOfUnifiedGroupMembersType $members = null)
    {
        $this->Members = $members;
        return $this;
    }
}
