<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsFolderIdType
     */
    protected \StructType\EwsFolderIdType $ParentFolderId;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Data;
    /**
     * The CreateAction
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $CreateAction;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The IsAssociated
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $IsAssociated = null;
    /**
     * Constructor method for UploadItemType
     * @uses EwsUploadItemType::setParentFolderId()
     * @uses EwsUploadItemType::setData()
     * @uses EwsUploadItemType::setCreateAction()
     * @uses EwsUploadItemType::setItemId()
     * @uses EwsUploadItemType::setIsAssociated()
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @param string $data
     * @param string $createAction
     * @param \StructType\EwsItemIdType $itemId
     * @param bool $isAssociated
     */
    public function __construct(\StructType\EwsFolderIdType $parentFolderId, string $data, string $createAction, ?\StructType\EwsItemIdType $itemId = null, ?bool $isAssociated = null)
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
     * @return \StructType\EwsFolderIdType
     */
    public function getParentFolderId(): \StructType\EwsFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @return \StructType\EwsUploadItemType
     */
    public function setParentFolderId(\StructType\EwsFolderIdType $parentFolderId): self
    {
        $this->ParentFolderId = $parentFolderId;
        
        return $this;
    }
    /**
     * Get Data value
     * @return string
     */
    public function getData(): string
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \StructType\EwsUploadItemType
     */
    public function setData(string $data): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        
        return $this;
    }
    /**
     * Get CreateAction value
     * @return string
     */
    public function getCreateAction(): string
    {
        return $this->CreateAction;
    }
    /**
     * Set CreateAction value
     * @uses \EnumType\EwsCreateActionType::valueIsValid()
     * @uses \EnumType\EwsCreateActionType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $createAction
     * @return \StructType\EwsUploadItemType
     */
    public function setCreateAction(string $createAction): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCreateActionType::valueIsValid($createAction)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCreateActionType', is_array($createAction) ? implode(', ', $createAction) : var_export($createAction, true), implode(', ', \EnumType\EwsCreateActionType::getValidValues())), __LINE__);
        }
        $this->CreateAction = $createAction;
        
        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsUploadItemType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get IsAssociated value
     * @return bool|null
     */
    public function getIsAssociated(): ?bool
    {
        return $this->IsAssociated;
    }
    /**
     * Set IsAssociated value
     * @param bool $isAssociated
     * @return \StructType\EwsUploadItemType
     */
    public function setIsAssociated(?bool $isAssociated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isAssociated) && !is_bool($isAssociated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAssociated, true), gettype($isAssociated)), __LINE__);
        }
        $this->IsAssociated = $isAssociated;
        
        return $this;
    }
}
