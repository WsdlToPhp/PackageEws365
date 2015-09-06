<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DistributionListType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDistributionListType extends EwsItemType
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The FileAs
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FileAs;
    /**
     * The ContactSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactSource;
    /**
     * The Members
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMembersListType
     */
    public $Members;
    /**
     * Constructor method for DistributionListType
     * @uses EwsDistributionListType::setDisplayName()
     * @uses EwsDistributionListType::setFileAs()
     * @uses EwsDistributionListType::setContactSource()
     * @uses EwsDistributionListType::setMembers()
     * @param string $displayName
     * @param string $fileAs
     * @param string $contactSource
     * @param \Ews\StructType\EwsMembersListType $members
     */
    public function __construct($displayName = null, $fileAs = null, $contactSource = null, \Ews\StructType\EwsMembersListType $members = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setFileAs($fileAs)
            ->setContactSource($contactSource)
            ->setMembers($members);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get FileAs value
     * @return string|null
     */
    public function getFileAs()
    {
        return $this->FileAs;
    }
    /**
     * Set FileAs value
     * @param string $fileAs
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setFileAs($fileAs = null)
    {
        $this->FileAs = $fileAs;
        return $this;
    }
    /**
     * Get ContactSource value
     * @return string|null
     */
    public function getContactSource()
    {
        return $this->ContactSource;
    }
    /**
     * Set ContactSource value
     * @uses \Ews\EnumType\EwsContactSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsContactSourceType::getValidValues()
     * @param string $contactSource
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setContactSource($contactSource = null)
    {
        if (!\Ews\EnumType\EwsContactSourceType::valueIsValid($contactSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $contactSource, implode(', ', \Ews\EnumType\EwsContactSourceType::getValidValues())), __LINE__);
        }
        $this->ContactSource = $contactSource;
        return $this;
    }
    /**
     * Get Members value
     * @return \Ews\StructType\EwsMembersListType|null
     */
    public function getMembers()
    {
        return $this->Members;
    }
    /**
     * Set Members value
     * @param \Ews\StructType\EwsMembersListType $members
     * @return \Ews\StructType\EwsDistributionListType
     */
    public function setMembers(\Ews\StructType\EwsMembersListType $members = null)
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
     * @return \Ews\StructType\EwsDistributionListType
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
