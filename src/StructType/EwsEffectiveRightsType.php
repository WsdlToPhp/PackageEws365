<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EffectiveRightsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEffectiveRightsType extends AbstractStructBase
{
    /**
     * The CreateAssociated
     * @var boolean
     */
    public $CreateAssociated;
    /**
     * The CreateContents
     * @var boolean
     */
    public $CreateContents;
    /**
     * The CreateHierarchy
     * @var boolean
     */
    public $CreateHierarchy;
    /**
     * The Delete
     * @var boolean
     */
    public $Delete;
    /**
     * The Modify
     * @var boolean
     */
    public $Modify;
    /**
     * The Read
     * @var boolean
     */
    public $Read;
    /**
     * The ViewPrivateItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ViewPrivateItems;
    /**
     * Constructor method for EffectiveRightsType
     * @uses EwsEffectiveRightsType::setCreateAssociated()
     * @uses EwsEffectiveRightsType::setCreateContents()
     * @uses EwsEffectiveRightsType::setCreateHierarchy()
     * @uses EwsEffectiveRightsType::setDelete()
     * @uses EwsEffectiveRightsType::setModify()
     * @uses EwsEffectiveRightsType::setRead()
     * @uses EwsEffectiveRightsType::setViewPrivateItems()
     * @param boolean $createAssociated
     * @param boolean $createContents
     * @param boolean $createHierarchy
     * @param boolean $delete
     * @param boolean $modify
     * @param boolean $read
     * @param boolean $viewPrivateItems
     */
    public function __construct($createAssociated = null, $createContents = null, $createHierarchy = null, $delete = null, $modify = null, $read = null, $viewPrivateItems = null)
    {
        $this
            ->setCreateAssociated($createAssociated)
            ->setCreateContents($createContents)
            ->setCreateHierarchy($createHierarchy)
            ->setDelete($delete)
            ->setModify($modify)
            ->setRead($read)
            ->setViewPrivateItems($viewPrivateItems);
    }
    /**
     * Get CreateAssociated value
     * @return boolean|null
     */
    public function getCreateAssociated()
    {
        return $this->CreateAssociated;
    }
    /**
     * Set CreateAssociated value
     * @param boolean $createAssociated
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setCreateAssociated($createAssociated = null)
    {
        $this->CreateAssociated = $createAssociated;
        return $this;
    }
    /**
     * Get CreateContents value
     * @return boolean|null
     */
    public function getCreateContents()
    {
        return $this->CreateContents;
    }
    /**
     * Set CreateContents value
     * @param boolean $createContents
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setCreateContents($createContents = null)
    {
        $this->CreateContents = $createContents;
        return $this;
    }
    /**
     * Get CreateHierarchy value
     * @return boolean|null
     */
    public function getCreateHierarchy()
    {
        return $this->CreateHierarchy;
    }
    /**
     * Set CreateHierarchy value
     * @param boolean $createHierarchy
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setCreateHierarchy($createHierarchy = null)
    {
        $this->CreateHierarchy = $createHierarchy;
        return $this;
    }
    /**
     * Get Delete value
     * @return boolean|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param boolean $delete
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setDelete($delete = null)
    {
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get Modify value
     * @return boolean|null
     */
    public function getModify()
    {
        return $this->Modify;
    }
    /**
     * Set Modify value
     * @param boolean $modify
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setModify($modify = null)
    {
        $this->Modify = $modify;
        return $this;
    }
    /**
     * Get Read value
     * @return boolean|null
     */
    public function getRead()
    {
        return $this->Read;
    }
    /**
     * Set Read value
     * @param boolean $read
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setRead($read = null)
    {
        $this->Read = $read;
        return $this;
    }
    /**
     * Get ViewPrivateItems value
     * @return boolean|null
     */
    public function getViewPrivateItems()
    {
        return $this->ViewPrivateItems;
    }
    /**
     * Set ViewPrivateItems value
     * @param boolean $viewPrivateItems
     * @return \Ews\StructType\EwsEffectiveRightsType
     */
    public function setViewPrivateItems($viewPrivateItems = null)
    {
        $this->ViewPrivateItems = $viewPrivateItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEffectiveRightsType
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
