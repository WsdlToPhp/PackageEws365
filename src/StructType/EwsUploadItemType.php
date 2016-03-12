<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUploadItemType extends AbstractStructBase
{
    /**
     * The ParentFolderId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var base64Binary
     */
    public $Data;
    /**
     * The CreateAction
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CreateAction;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The IsAssociated
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $IsAssociated;
    /**
     * Constructor method for UploadItemType
     * @uses EwsUploadItemType::setParentFolderId()
     * @uses EwsUploadItemType::setData()
     * @uses EwsUploadItemType::setCreateAction()
     * @uses EwsUploadItemType::setItemId()
     * @uses EwsUploadItemType::setIsAssociated()
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @param base64Binary $data
     * @param string $createAction
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param bool $isAssociated
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $parentFolderId = null, base64Binary $data = null, $createAction = null, \Ews\StructType\EwsItemIdType $itemId = null, $isAssociated = null)
    {
        $this
            ->setParentFolderId($parentFolderId)
            ->setData($data)
            ->setCreateAction($createAction)
            ->setItemId($itemId)
            ->setIsAssociated($isAssociated);
    }
    /**
     * Get ParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType
     */
    public function getParentFolderId()
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $parentFolderId
     * @return \Ews\StructType\EwsUploadItemType
     */
    public function setParentFolderId(\Ews\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this->ParentFolderId = $parentFolderId;
        return $this;
    }
    /**
     * Get Data value
     * @return base64Binary
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param base64Binary $data
     * @return \Ews\StructType\EwsUploadItemType
     */
    public function setData(base64Binary $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Get CreateAction value
     * @return string
     */
    public function getCreateAction()
    {
        return $this->CreateAction;
    }
    /**
     * Set CreateAction value
     * @uses \Ews\EnumType\EwsCreateActionType::valueIsValid()
     * @uses \Ews\EnumType\EwsCreateActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $createAction
     * @return \Ews\StructType\EwsUploadItemType
     */
    public function setCreateAction($createAction = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCreateActionType::valueIsValid($createAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $createAction, implode(', ', \Ews\EnumType\EwsCreateActionType::getValidValues())), __LINE__);
        }
        $this->CreateAction = $createAction;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsUploadItemType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get IsAssociated value
     * @return bool|null
     */
    public function getIsAssociated()
    {
        return $this->IsAssociated;
    }
    /**
     * Set IsAssociated value
     * @param bool $isAssociated
     * @return \Ews\StructType\EwsUploadItemType
     */
    public function setIsAssociated($isAssociated = null)
    {
        $this->IsAssociated = $isAssociated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUploadItemType
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
