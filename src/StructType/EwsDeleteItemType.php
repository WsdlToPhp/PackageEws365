<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $DeleteType;
    /**
     * The ItemIds
     * @var \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;
    /**
     * The SendMeetingCancellations
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SendMeetingCancellations;
    /**
     * The AffectedTaskOccurrences
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AffectedTaskOccurrences;
    /**
     * The SuppressReadReceipts
     * Meta information extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $SuppressReadReceipts;
    /**
     * Constructor method for DeleteItemType
     * @uses EwsDeleteItemType::setDeleteType()
     * @uses EwsDeleteItemType::setItemIds()
     * @uses EwsDeleteItemType::setSendMeetingCancellations()
     * @uses EwsDeleteItemType::setAffectedTaskOccurrences()
     * @uses EwsDeleteItemType::setSuppressReadReceipts()
     * @param string $deleteType
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @param string $sendMeetingCancellations
     * @param string $affectedTaskOccurrences
     * @param bool $suppressReadReceipts
     */
    public function __construct($deleteType = null, \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null, $sendMeetingCancellations = null, $affectedTaskOccurrences = null, $suppressReadReceipts = null)
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
    public function getDeleteType()
    {
        return $this->DeleteType;
    }
    /**
     * Set DeleteType value
     * @uses \Ews\EnumType\EwsDisposalType::valueIsValid()
     * @uses \Ews\EnumType\EwsDisposalType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deleteType
     * @return \Ews\StructType\EwsDeleteItemType
     */
    public function setDeleteType($deleteType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDisposalType::valueIsValid($deleteType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDisposalType', is_array($deleteType) ? implode(', ', $deleteType) : var_export($deleteType, true), implode(', ', \Ews\EnumType\EwsDisposalType::getValidValues())), __LINE__);
        }
        $this->DeleteType = $deleteType;
        return $this;
    }
    /**
     * Get ItemIds value
     * @return \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType|null
     */
    public function getItemIds()
    {
        return $this->ItemIds;
    }
    /**
     * Set ItemIds value
     * @param \Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds
     * @return \Ews\StructType\EwsDeleteItemType
     */
    public function setItemIds(\Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType $itemIds = null)
    {
        $this->ItemIds = $itemIds;
        return $this;
    }
    /**
     * Get SendMeetingCancellations value
     * @return string|null
     */
    public function getSendMeetingCancellations()
    {
        return $this->SendMeetingCancellations;
    }
    /**
     * Set SendMeetingCancellations value
     * @uses \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid()
     * @uses \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $sendMeetingCancellations
     * @return \Ews\StructType\EwsDeleteItemType
     */
    public function setSendMeetingCancellations($sendMeetingCancellations = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::valueIsValid($sendMeetingCancellations)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType', is_array($sendMeetingCancellations) ? implode(', ', $sendMeetingCancellations) : var_export($sendMeetingCancellations, true), implode(', ', \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues())), __LINE__);
        }
        $this->SendMeetingCancellations = $sendMeetingCancellations;
        return $this;
    }
    /**
     * Get AffectedTaskOccurrences value
     * @return string|null
     */
    public function getAffectedTaskOccurrences()
    {
        return $this->AffectedTaskOccurrences;
    }
    /**
     * Set AffectedTaskOccurrences value
     * @uses \Ews\EnumType\EwsAffectedTaskOccurrencesType::valueIsValid()
     * @uses \Ews\EnumType\EwsAffectedTaskOccurrencesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $affectedTaskOccurrences
     * @return \Ews\StructType\EwsDeleteItemType
     */
    public function setAffectedTaskOccurrences($affectedTaskOccurrences = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsAffectedTaskOccurrencesType::valueIsValid($affectedTaskOccurrences)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsAffectedTaskOccurrencesType', is_array($affectedTaskOccurrences) ? implode(', ', $affectedTaskOccurrences) : var_export($affectedTaskOccurrences, true), implode(', ', \Ews\EnumType\EwsAffectedTaskOccurrencesType::getValidValues())), __LINE__);
        }
        $this->AffectedTaskOccurrences = $affectedTaskOccurrences;
        return $this;
    }
    /**
     * Get SuppressReadReceipts value
     * @return bool|null
     */
    public function getSuppressReadReceipts()
    {
        return $this->SuppressReadReceipts;
    }
    /**
     * Set SuppressReadReceipts value
     * @param bool $suppressReadReceipts
     * @return \Ews\StructType\EwsDeleteItemType
     */
    public function setSuppressReadReceipts($suppressReadReceipts = null)
    {
        // validation for constraint: boolean
        if (!is_null($suppressReadReceipts) && !is_bool($suppressReadReceipts)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressReadReceipts, true), gettype($suppressReadReceipts)), __LINE__);
        }
        $this->SuppressReadReceipts = $suppressReadReceipts;
        return $this;
    }
}
