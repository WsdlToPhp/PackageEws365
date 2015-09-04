<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfAlternateIdsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: A non-empty array of alternate Ids.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfAlternateIdsType extends AbstractStructBase
{
    /**
     * The AlternateId
     * Meta informations extracted from the WSDL
     * - documentation: Represents an alternate mailbox folder or item Id.
     * @var \Ews\StructType\EwsAlternateIdType
     */
    public $AlternateId;
    /**
     * The AlternatePublicFolderId
     * Meta informations extracted from the WSDL
     * - documentation: Represents an alternate public folder Id.
     * @var \Ews\StructType\EwsAlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;
    /**
     * The AlternatePublicFolderItemId
     * Meta informations extracted from the WSDL
     * - documentation: Represents an alternate public folder item Id.
     * @var \Ews\StructType\EwsAlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
    /**
     * Constructor method for NonEmptyArrayOfAlternateIdsType
     * @uses EwsNonEmptyArrayOfAlternateIdsType::setAlternateId()
     * @uses EwsNonEmptyArrayOfAlternateIdsType::setAlternatePublicFolderId()
     * @uses EwsNonEmptyArrayOfAlternateIdsType::setAlternatePublicFolderItemId()
     * @param \Ews\StructType\EwsAlternateIdType $alternateId
     * @param \Ews\StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId
     * @param \Ews\StructType\EwsAlternatePublicFolderItemIdType
     * $alternatePublicFolderItemId
     */
    public function __construct(\Ews\StructType\EwsAlternateIdType $alternateId = null, \Ews\StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId = null, \Ews\StructType\EwsAlternatePublicFolderItemIdType $alternatePublicFolderItemId = null)
    {
        $this
            ->setAlternateId($alternateId)
            ->setAlternatePublicFolderId($alternatePublicFolderId)
            ->setAlternatePublicFolderItemId($alternatePublicFolderItemId);
    }
    /**
     * Get AlternateId value
     * @return \Ews\StructType\EwsAlternateIdType|null
     */
    public function getAlternateId()
    {
        return $this->AlternateId;
    }
    /**
     * Set AlternateId value
     * @param \Ews\StructType\EwsAlternateIdType $alternateId
     * @return \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function setAlternateId(\Ews\StructType\EwsAlternateIdType $alternateId = null)
    {
        $this->AlternateId = $alternateId;
        return $this;
    }
    /**
     * Get AlternatePublicFolderId value
     * @return \Ews\StructType\EwsAlternatePublicFolderIdType|null
     */
    public function getAlternatePublicFolderId()
    {
        return $this->AlternatePublicFolderId;
    }
    /**
     * Set AlternatePublicFolderId value
     * @param \Ews\StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId
     * @return \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function setAlternatePublicFolderId(\Ews\StructType\EwsAlternatePublicFolderIdType $alternatePublicFolderId = null)
    {
        $this->AlternatePublicFolderId = $alternatePublicFolderId;
        return $this;
    }
    /**
     * Get AlternatePublicFolderItemId value
     * @return \Ews\StructType\EwsAlternatePublicFolderItemIdType|null
     */
    public function getAlternatePublicFolderItemId()
    {
        return $this->AlternatePublicFolderItemId;
    }
    /**
     * Set AlternatePublicFolderItemId value
     * @param \Ews\StructType\EwsAlternatePublicFolderItemIdType
     * $alternatePublicFolderItemId
     * @return \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType
     */
    public function setAlternatePublicFolderItemId(\Ews\StructType\EwsAlternatePublicFolderItemIdType $alternatePublicFolderItemId = null)
    {
        $this->AlternatePublicFolderItemId = $alternatePublicFolderItemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfAlternateIdsType
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
