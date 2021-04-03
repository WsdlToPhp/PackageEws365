<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateItemInRecoverableItemsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateItemInRecoverableItemsType extends EwsBaseRequestType
{
    /**
     * The ItemId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The Updates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $Updates = null;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfAttachmentsType $Attachments = null;
    /**
     * The MakeItemImmutable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MakeItemImmutable = null;
    /**
     * Constructor method for UpdateItemInRecoverableItemsType
     * @uses EwsUpdateItemInRecoverableItemsType::setItemId()
     * @uses EwsUpdateItemInRecoverableItemsType::setUpdates()
     * @uses EwsUpdateItemInRecoverableItemsType::setAttachments()
     * @uses EwsUpdateItemInRecoverableItemsType::setMakeItemImmutable()
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param bool $makeItemImmutable
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null, ?\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates = null, ?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, ?bool $makeItemImmutable = null)
    {
        $this
            ->setItemId($itemId)
            ->setUpdates($updates)
            ->setAttachments($attachments)
            ->setMakeItemImmutable($makeItemImmutable);
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
     * @return \StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get Updates value
     * @return \StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType|null
     */
    public function getUpdates(): ?\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
    {
        return $this->Updates;
    }
    /**
     * Set Updates value
     * @param \StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates
     * @return \StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setUpdates(?\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates = null): self
    {
        $this->Updates = $updates;
        
        return $this;
    }
    /**
     * Get Attachments value
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments(): ?\StructType\EwsNonEmptyArrayOfAttachmentsType
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setAttachments(?\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null): self
    {
        $this->Attachments = $attachments;
        
        return $this;
    }
    /**
     * Get MakeItemImmutable value
     * @return bool|null
     */
    public function getMakeItemImmutable(): ?bool
    {
        return $this->MakeItemImmutable;
    }
    /**
     * Set MakeItemImmutable value
     * @param bool $makeItemImmutable
     * @return \StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setMakeItemImmutable(?bool $makeItemImmutable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($makeItemImmutable) && !is_bool($makeItemImmutable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($makeItemImmutable, true), gettype($makeItemImmutable)), __LINE__);
        }
        $this->MakeItemImmutable = $makeItemImmutable;
        
        return $this;
    }
}
