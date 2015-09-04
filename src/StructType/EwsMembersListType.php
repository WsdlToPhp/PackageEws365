<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MembersListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMembersListType extends AbstractStructBase
{
    /**
     * The Member
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMemberType
     */
    public $Member;
    /**
     * Constructor method for MembersListType
     * @uses EwsMembersListType::setMember()
     * @param \Ews\StructType\EwsMemberType $member
     */
    public function __construct(\Ews\StructType\EwsMemberType $member = null)
    {
        $this
            ->setMember($member);
    }
    /**
     * Get Member value
     * @return \Ews\StructType\EwsMemberType|null
     */
    public function getMember()
    {
        return $this->Member;
    }
    /**
     * Set Member value
     * @param \Ews\StructType\EwsMemberType $member
     * @return \Ews\StructType\EwsMembersListType
     */
    public function setMember(\Ews\StructType\EwsMemberType $member = null)
    {
        $this->Member = $member;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMembersListType
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
