<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbchPersonItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsAbchPersonItemType extends EwsItemType
{
    /**
     * The AntiLinkInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AntiLinkInfo;
    /**
     * The PersonId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $PersonId;
    /**
     * The ContactHandles
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType
     */
    public $ContactHandles;
    /**
     * The ContactCategories
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ContactCategories;
    /**
     * The RelevanceOrder1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RelevanceOrder1;
    /**
     * The RelevanceOrder2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RelevanceOrder2;
    /**
     * The TrustLevel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TrustLevel;
    /**
     * The FavoriteOrder
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FavoriteOrder;
    /**
     * Constructor method for AbchPersonItemType
     * @uses EwsAbchPersonItemType::setAntiLinkInfo()
     * @uses EwsAbchPersonItemType::setPersonId()
     * @uses EwsAbchPersonItemType::setContactHandles()
     * @uses EwsAbchPersonItemType::setContactCategories()
     * @uses EwsAbchPersonItemType::setRelevanceOrder1()
     * @uses EwsAbchPersonItemType::setRelevanceOrder2()
     * @uses EwsAbchPersonItemType::setTrustLevel()
     * @uses EwsAbchPersonItemType::setFavoriteOrder()
     * @param string $antiLinkInfo
     * @param string $personId
     * @param \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles
     * @param \Ews\ArrayType\EwsArrayOfStringsType $contactCategories
     * @param string $relevanceOrder1
     * @param string $relevanceOrder2
     * @param int $trustLevel
     * @param int $favoriteOrder
     */
    public function __construct($antiLinkInfo = null, $personId = null, \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles = null, \Ews\ArrayType\EwsArrayOfStringsType $contactCategories = null, $relevanceOrder1 = null, $relevanceOrder2 = null, $trustLevel = null, $favoriteOrder = null)
    {
        $this
            ->setAntiLinkInfo($antiLinkInfo)
            ->setPersonId($personId)
            ->setContactHandles($contactHandles)
            ->setContactCategories($contactCategories)
            ->setRelevanceOrder1($relevanceOrder1)
            ->setRelevanceOrder2($relevanceOrder2)
            ->setTrustLevel($trustLevel)
            ->setFavoriteOrder($favoriteOrder);
    }
    /**
     * Get AntiLinkInfo value
     * @return string|null
     */
    public function getAntiLinkInfo()
    {
        return $this->AntiLinkInfo;
    }
    /**
     * Set AntiLinkInfo value
     * @param string $antiLinkInfo
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setAntiLinkInfo($antiLinkInfo = null)
    {
        $this->AntiLinkInfo = $antiLinkInfo;
        return $this;
    }
    /**
     * Get PersonId value
     * @return string|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
    /**
     * Set PersonId value
     * @param string $personId
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setPersonId($personId = null)
    {
        $this->PersonId = $personId;
        return $this;
    }
    /**
     * Get ContactHandles value
     * @return \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType|null
     */
    public function getContactHandles()
    {
        return $this->ContactHandles;
    }
    /**
     * Set ContactHandles value
     * @param \Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setContactHandles(\Ews\ArrayType\EwsArrayOfAbchPersonContactHandlesType $contactHandles = null)
    {
        $this->ContactHandles = $contactHandles;
        return $this;
    }
    /**
     * Get ContactCategories value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getContactCategories()
    {
        return $this->ContactCategories;
    }
    /**
     * Set ContactCategories value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $contactCategories
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setContactCategories(\Ews\ArrayType\EwsArrayOfStringsType $contactCategories = null)
    {
        $this->ContactCategories = $contactCategories;
        return $this;
    }
    /**
     * Get RelevanceOrder1 value
     * @return string|null
     */
    public function getRelevanceOrder1()
    {
        return $this->RelevanceOrder1;
    }
    /**
     * Set RelevanceOrder1 value
     * @param string $relevanceOrder1
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setRelevanceOrder1($relevanceOrder1 = null)
    {
        $this->RelevanceOrder1 = $relevanceOrder1;
        return $this;
    }
    /**
     * Get RelevanceOrder2 value
     * @return string|null
     */
    public function getRelevanceOrder2()
    {
        return $this->RelevanceOrder2;
    }
    /**
     * Set RelevanceOrder2 value
     * @param string $relevanceOrder2
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setRelevanceOrder2($relevanceOrder2 = null)
    {
        $this->RelevanceOrder2 = $relevanceOrder2;
        return $this;
    }
    /**
     * Get TrustLevel value
     * @return int|null
     */
    public function getTrustLevel()
    {
        return $this->TrustLevel;
    }
    /**
     * Set TrustLevel value
     * @param int $trustLevel
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setTrustLevel($trustLevel = null)
    {
        $this->TrustLevel = $trustLevel;
        return $this;
    }
    /**
     * Get FavoriteOrder value
     * @return int|null
     */
    public function getFavoriteOrder()
    {
        return $this->FavoriteOrder;
    }
    /**
     * Set FavoriteOrder value
     * @param int $favoriteOrder
     * @return \Ews\StructType\EwsAbchPersonItemType
     */
    public function setFavoriteOrder($favoriteOrder = null)
    {
        $this->FavoriteOrder = $favoriteOrder;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbchPersonItemType
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
