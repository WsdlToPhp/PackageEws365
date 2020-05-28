<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Updates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public $Updates;
    /**
     * The Attachments
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public $Attachments;
    /**
     * The MakeItemImmutable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MakeItemImmutable;
    /**
     * Constructor method for UpdateItemInRecoverableItemsType
     * @uses EwsUpdateItemInRecoverableItemsType::setItemId()
     * @uses EwsUpdateItemInRecoverableItemsType::setUpdates()
     * @uses EwsUpdateItemInRecoverableItemsType::setAttachments()
     * @uses EwsUpdateItemInRecoverableItemsType::setMakeItemImmutable()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @param bool $makeItemImmutable
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates = null, \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null, $makeItemImmutable = null)
    {
        $this
            ->setItemId($itemId)
            ->setUpdates($updates)
            ->setAttachments($attachments)
            ->setMakeItemImmutable($makeItemImmutable);
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
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get Updates value
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType|null
     */
    public function getUpdates()
    {
        return $this->Updates;
    }
    /**
     * Set Updates value
     * @param \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setUpdates(\Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType $updates = null)
    {
        $this->Updates = $updates;
        return $this;
    }
    /**
     * Get Attachments value
     * @return \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType|null
     */
    public function getAttachments()
    {
        return $this->Attachments;
    }
    /**
     * Set Attachments value
     * @param \Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setAttachments(\Ews\StructType\EwsNonEmptyArrayOfAttachmentsType $attachments = null)
    {
        $this->Attachments = $attachments;
        return $this;
    }
    /**
     * Get MakeItemImmutable value
     * @return bool|null
     */
    public function getMakeItemImmutable()
    {
        return $this->MakeItemImmutable;
    }
    /**
     * Set MakeItemImmutable value
     * @param bool $makeItemImmutable
     * @return \Ews\StructType\EwsUpdateItemInRecoverableItemsType
     */
    public function setMakeItemImmutable($makeItemImmutable = null)
    {
        // validation for constraint: boolean
        if (!is_null($makeItemImmutable) && !is_bool($makeItemImmutable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($makeItemImmutable, true), gettype($makeItemImmutable)), __LINE__);
        }
        $this->MakeItemImmutable = $makeItemImmutable;
        return $this;
    }
}
