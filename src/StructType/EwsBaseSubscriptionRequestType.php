<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseSubscriptionRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseSubscriptionRequestType extends AbstractStructBase
{
    /**
     * The FolderIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $FolderIds = null;
    /**
     * The EventTypes
     * @var \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $EventTypes = null;
    /**
     * The Watermark
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Watermark = null;
    /**
     * The SubscribeToAllFolders
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SubscribeToAllFolders = null;
    /**
     * Constructor method for BaseSubscriptionRequestType
     * @uses EwsBaseSubscriptionRequestType::setFolderIds()
     * @uses EwsBaseSubscriptionRequestType::setEventTypes()
     * @uses EwsBaseSubscriptionRequestType::setWatermark()
     * @uses EwsBaseSubscriptionRequestType::setSubscribeToAllFolders()
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @param \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @param string $watermark
     * @param bool $subscribeToAllFolders
     */
    public function __construct(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null, ?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null, ?string $watermark = null, ?bool $subscribeToAllFolders = null)
    {
        $this
            ->setFolderIds($folderIds)
            ->setEventTypes($eventTypes)
            ->setWatermark($watermark)
            ->setSubscribeToAllFolders($subscribeToAllFolders);
    }
    /**
     * Get FolderIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseFolderIdsType|null
     */
    public function getFolderIds(): ?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType
    {
        return $this->FolderIds;
    }
    /**
     * Set FolderIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds
     * @return \StructType\EwsBaseSubscriptionRequestType
     */
    public function setFolderIds(?\StructType\EwsNonEmptyArrayOfBaseFolderIdsType $folderIds = null): self
    {
        $this->FolderIds = $folderIds;
        
        return $this;
    }
    /**
     * Get EventTypes value
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType|null
     */
    public function getEventTypes(): ?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
    {
        return $this->EventTypes;
    }
    /**
     * Set EventTypes value
     * @param \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes
     * @return \StructType\EwsBaseSubscriptionRequestType
     */
    public function setEventTypes(?\ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType $eventTypes = null): self
    {
        $this->EventTypes = $eventTypes;
        
        return $this;
    }
    /**
     * Get Watermark value
     * @return string|null
     */
    public function getWatermark(): ?string
    {
        return $this->Watermark;
    }
    /**
     * Set Watermark value
     * @param string $watermark
     * @return \StructType\EwsBaseSubscriptionRequestType
     */
    public function setWatermark(?string $watermark = null): self
    {
        // validation for constraint: string
        if (!is_null($watermark) && !is_string($watermark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watermark, true), gettype($watermark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($watermark) && mb_strlen((string) $watermark) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $watermark)), __LINE__);
        }
        $this->Watermark = $watermark;
        
        return $this;
    }
    /**
     * Get SubscribeToAllFolders value
     * @return bool|null
     */
    public function getSubscribeToAllFolders(): ?bool
    {
        return $this->SubscribeToAllFolders;
    }
    /**
     * Set SubscribeToAllFolders value
     * @param bool $subscribeToAllFolders
     * @return \StructType\EwsBaseSubscriptionRequestType
     */
    public function setSubscribeToAllFolders(?bool $subscribeToAllFolders = null): self
    {
        // validation for constraint: boolean
        if (!is_null($subscribeToAllFolders) && !is_bool($subscribeToAllFolders)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subscribeToAllFolders, true), gettype($subscribeToAllFolders)), __LINE__);
        }
        $this->SubscribeToAllFolders = $subscribeToAllFolders;
        
        return $this;
    }
}
