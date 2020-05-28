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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsMember;
    /**
     * The IsOwner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsOwner;
    /**
     * The IsSubscribed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsSubscribed;
    /**
     * Constructor method for UserUnifiedGroupRelationshipType
     * @uses EwsUserUnifiedGroupRelationshipType::setIsMember()
     * @uses EwsUserUnifiedGroupRelationshipType::setIsOwner()
     * @uses EwsUserUnifiedGroupRelationshipType::setIsSubscribed()
     * @param bool $isMember
     * @param bool $isOwner
     * @param bool $isSubscribed
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
     * @return bool|null
     */
    public function getIsMember()
    {
        return $this->IsMember;
    }
    /**
     * Set IsMember value
     * @param bool $isMember
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function setIsMember($isMember = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMember) && !is_bool($isMember)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMember, true), gettype($isMember)), __LINE__);
        }
        $this->IsMember = $isMember;
        return $this;
    }
    /**
     * Get IsOwner value
     * @return bool|null
     */
    public function getIsOwner()
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param bool $isOwner
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function setIsOwner($isOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOwner) && !is_bool($isOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwner, true), gettype($isOwner)), __LINE__);
        }
        $this->IsOwner = $isOwner;
        return $this;
    }
    /**
     * Get IsSubscribed value
     * @return bool|null
     */
    public function getIsSubscribed()
    {
        return $this->IsSubscribed;
    }
    /**
     * Set IsSubscribed value
     * @param bool $isSubscribed
     * @return \Ews\StructType\EwsUserUnifiedGroupRelationshipType
     */
    public function setIsSubscribed($isSubscribed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSubscribed) && !is_bool($isSubscribed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSubscribed, true), gettype($isSubscribed)), __LINE__);
        }
        $this->IsSubscribed = $isSubscribed;
        return $this;
    }
}
