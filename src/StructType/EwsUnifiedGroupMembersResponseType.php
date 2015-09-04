<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupMembersResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUnifiedGroupMembersResponseType extends AbstractStructBase
{
    /**
     * The TotalCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $TotalCount;
    /**
     * The Members
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUnifiedGroupMembersResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
