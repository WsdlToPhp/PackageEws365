<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteItemType extends EwsBaseRequestType
{
    /**
     * The DeleteType
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $DeleteType;
    /**
     * The ItemIds
     * @var \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $ItemIds = null;
    /**
     * The SendMeetingCancellations
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $SendMeetingCancellations = null;
    /**
     * The AffectedTaskOccurrences
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $AffectedTaskOccurrences = null;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool|null
     */
    protected ?bool $SuppressReadReceipts = null;
    /**
     * Constructor method for DeleteItemType
     * @uses EwsDeleteItemType::setDeleteType()
     * @uses EwsDeleteItemType::setItemIds()
     * @uses EwsDeleteItemType::setSendMeetingCancellations()
     * @uses EwsDeleteItemType::setAffectedTaskOccurrences()
     * @uses EwsDeleteItemType::setSuppressReadReceipts()
     * @param string $deleteType
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param string $sendMeetingCancellations
     * @param string $affectedTaskOccurrences
     * @param bool $suppressReadReceipts
     */
    public function __construct(string $deleteType, ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, ?string $sendMeetingCancellations = null, ?string $affectedTaskOccurrences = null, ?bool $suppressReadReceipts = null)
    {
        $this
            ->setDeleteType($deleteType)
            ->setItemIds($itemIds)
            ->setSendMeetingCancellations($sendMeetingCancellations)
            ->setAffectedTaskOccurrences($affectedTaskOccurrences)
            ->setSuppressReadReceipts($suppressReadReceipts);
    }
    /**
     * Get DeleteType value
     * @return string
     */
    public function getDeleteType(): string
    {
        return $this->DeleteType;
    }
    /**
     * Set DeleteType value
     * @uses \EnumType\EwsDisposalType::valueIsValid()
     * @uses \EnumType\EwsDisposalType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $deleteType
     * @return \StructType\EwsDeleteItemType
     */
    public function setDeleteType(string $deleteType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDisposalType', is_array($deleteType) ? implode(', ', $deleteType) : var_export($deleteType, true), implode(', ', \EnumType\EwsDisposalType::getValidValues())), __LINE__);
        }
        $this->DeleteType = $deleteType;
        
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds(): ?\StructType\EwsNonEmptyArrayOfBaseItemIdsType
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \StructType\EwsDeleteItemType
     */
    public function setItemIds(?\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null): self
    {
        $this->ItemIds = $itemIds;
        
        return $this;
    }
    /**
     * Get SendMeetingCancellations value
     * @return string|null
     */
    public function getSendMeetingCancellations(): ?string
    {
        return $this->SendMeetingCancellations;
    }
    /**
     * Set SendMeetingCancellations value
     * @uses \EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid()
     * @uses \EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sendMeetingCancellations
     * @return \StructType\EwsDeleteItemType
     */
    public function setSendMeetingCancellations(?string $sendMeetingCancellations = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid($sendMeetingCancellations)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsCalendarItemCreateOrDeleteOperationType', is_array($sendMeetingCancellations) ? implode(', ', $sendMeetingCancellations) : var_export($sendMeetingCancellations, true), implode(', ', \EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingCancellations = $sendMeetingCancellations;
        
        return $this;
    }
    /**
     * Get AffectedTaskOccurrences value
     * @return string|null
     */
    public function getAffectedTaskOccurrences(): ?string
    {
        return $this->AffectedTaskOccurrences;
    }
    /**
     * Set AffectedTaskOccurrences value
     * @uses \EnumType\EwsAffectedTaskOccurrencesType::valueIsValid()
     * @uses \EnumType\EwsAffectedTaskOccurrencesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $affectedTaskOccurrences
     * @return \StructType\EwsDeleteItemType
     */
    public function setAffectedTaskOccurrences(?string $affectedTaskOccurrences = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsAffectedTaskOccurrencesType::valueIsValid($affectedTaskOccurrences)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsAffectedTaskOccurrencesType', is_array($affectedTaskOccurrences) ? implode(', ', $affectedTaskOccurrences) : var_export($affectedTaskOccurrences, true), implode(', ', \EnumType\EwsAffectedTaskOccurrencesType::getValidValues())), __LINE__);
        }
        $this->AffectedTaskOccurrences = $affectedTaskOccurrences;
        
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return bool|null
     */
    public function getSuppressReadReceipts(): ?bool
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \StructType\EwsDeleteItemType
     */
    public function setSuppressReadReceipts(?bool $suppressReadReceipts = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suppressReadReceipts) && !is_bool($suppressReadReceipts)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressReadReceipts, true), gettype($suppressReadReceipts)), __LINE__);
        }
        $this->SuppressReadReceipts = $suppressReadReceipts;
        
        return $this;
    }
}
