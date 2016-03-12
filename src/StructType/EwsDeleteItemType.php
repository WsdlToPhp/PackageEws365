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
     * Meta informations extracted from the WSDL
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
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $SendMeetingCancellations;
    /**
     * The AffectedTaskOccurrences
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AffectedTaskOccurrences;
    /**
     * The SuppressReadReceipts
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deleteType, implode(', ', \Ews\EnumType\EwsDisposalType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $sendMeetingCancellations, implode(', ', \Ews\EnumType\EwsCalendarItemCreateOrDeleteOperationType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $affectedTaskOccurrences, implode(', ', \Ews\EnumType\EwsAffectedTaskOccurrencesType::getValidValues())), __LINE__);
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
        $this->SuppressReadReceipts = $suppressReadReceipts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteItemType
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
