<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserUnifiedGroupRelationshipType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserUnifiedGroupRelationshipType extends AbstractStructBase
{
    /**
     * The IsMember
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsMember;
    /**
     * The IsOwner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsOwner;
    /**
     * The IsSubscribed
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsSubscribed;
    /**
     * Constructor method for UserUnifiedGroupRelationshipType
     * @uses EwsUserUnifiedGroupRelationshipType::setIsMember()
     * @uses EwsUserUnifiedGroupRelationshipType::setIsOwner()
     * @uses EwsUserUnifiedGroupRelationshipType::setIsSubscribed()
     * @param boolean $isMember
     * @param boolean $isOwner
     * @param boolean $isSubscribed
     */
    public function __construct($isMember = null, $isOwner = null, $isSubscribed = null)
    {
        $this
            ->setIsMember($isMember)
            ->setIsOwner($isOwner)
            ->setIsSubscribed($isSubscribed);
    }
    /**
     * Get IsMember value
     * @return boolean|null
     */
    public function getIsMember()
    {
        return $this->IsMember;
    }
    /**
     * Set IsMember value
     * @param boolean $isMember
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function setIsMember($isMember = null)
    {
        $this->IsMember = $isMember;
        return $this;
    }
    /**
     * Get IsOwner value
     * @return boolean|null
     */
    public function getIsOwner()
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param boolean $isOwner
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function setIsOwner($isOwner = null)
    {
        $this->IsOwner = $isOwner;
        return $this;
    }
    /**
     * Get IsSubscribed value
     * @return boolean|null
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param boolean $isSubscribed
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function setIsSubscribed($isSubscribed = null)
    {
        $this->IsSubscribed = $isSubscribed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
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
