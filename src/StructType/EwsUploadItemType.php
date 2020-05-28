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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $ParentFolderId;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Data;
    /**
     * The CreateAction
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $CreateAction;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The IsAssociated
     * Meta information extracted from the WSDL
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
     * @param string $data
     * @param string $createAction
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param bool $isAssociated
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $parentFolderId = null, $data = null, $createAction = null, \Ews\StructType\EwsItemIdType $itemId = null, $isAssociated = null)
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
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Ews\StructType\EwsUploadItemType
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
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
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCreateActionType', is_array($createAction) ? implode(', ', $createAction) : var_export($createAction, true), implode(', ', \Ews\EnumType\EwsCreateActionType::getValidValues())), __LINE__);
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
        // validation for constraint: boolean
        if (!is_null($isAssociated) && !is_bool($isAssociated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssociated, true), gettype($isAssociated)), __LINE__);
        }
        $this->IsAssociated = $isAssociated;
        return $this;
    }
}
