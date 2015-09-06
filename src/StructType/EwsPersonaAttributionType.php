<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaAttributionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonaAttributionType extends AbstractStructBase
{
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Id;
    /**
     * The SourceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $SourceId;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The IsWritable
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsWritable;
    /**
     * The IsQuickContact
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsQuickContact;
    /**
     * The IsHidden
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsHidden;
    /**
     * The FolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved folder
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $FolderId;
    /**
     * Constructor method for PersonaAttributionType
     * @uses EwsPersonaAttributionType::setId()
     * @uses EwsPersonaAttributionType::setSourceId()
     * @uses EwsPersonaAttributionType::setDisplayName()
     * @uses EwsPersonaAttributionType::setIsWritable()
     * @uses EwsPersonaAttributionType::setIsQuickContact()
     * @uses EwsPersonaAttributionType::setIsHidden()
     * @uses EwsPersonaAttributionType::setFolderId()
     * @param string $id
     * @param \Ews\StructType\EwsItemIdType $sourceId
     * @param string $displayName
     * @param boolean $isWritable
     * @param boolean $isQuickContact
     * @param boolean $isHidden
     * @param \Ews\StructType\EwsFolderIdType $folderId
     */
    public function __construct($id = null, \Ews\StructType\EwsItemIdType $sourceId = null, $displayName = null, $isWritable = null, $isQuickContact = null, $isHidden = null, \Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this
            ->setId($id)
            ->setSourceId($sourceId)
            ->setDisplayName($displayName)
            ->setIsWritable($isWritable)
            ->setIsQuickContact($isQuickContact)
            ->setIsHidden($isHidden)
            ->setFolderId($folderId);
    }
    /**
     * Get Id value
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setId($id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get SourceId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }
    /**
     * Set SourceId value
     * @param \Ews\StructType\EwsItemIdType $sourceId
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setSourceId(\Ews\StructType\EwsItemIdType $sourceId = null)
    {
        $this->SourceId = $sourceId;
        return $this;
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setDisplayName($displayName = null)
    {
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get IsWritable value
     * @return boolean|null
     */
    public function getIsWritable()
    {
        return $this->IsWritable;
    }
    /**
     * Set IsWritable value
     * @param boolean $isWritable
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setIsWritable($isWritable = null)
    {
        $this->IsWritable = $isWritable;
        return $this;
    }
    /**
     * Get IsQuickContact value
     * @return boolean|null
     */
    public function getIsQuickContact()
    {
        return $this->IsQuickContact;
    }
    /**
     * Set IsQuickContact value
     * @param boolean $isQuickContact
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setIsQuickContact($isQuickContact = null)
    {
        $this->IsQuickContact = $isQuickContact;
        return $this;
    }
    /**
     * Get IsHidden value
     * @return boolean|null
     */
    public function getIsHidden()
    {
        return $this->IsHidden;
    }
    /**
     * Set IsHidden value
     * @param boolean $isHidden
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setIsHidden($isHidden = null)
    {
        $this->IsHidden = $isHidden;
        return $this;
    }
    /**
     * Get FolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getFolderId()
    {
        return $this->FolderId;
    }
    /**
     * Set FolderId value
     * @param \Ews\StructType\EwsFolderIdType $folderId
     * @return \Ews\StructType\EwsPersonaAttributionType
     */
    public function setFolderId(\Ews\StructType\EwsFolderIdType $folderId = null)
    {
        $this->FolderId = $folderId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPersonaAttributionType
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
