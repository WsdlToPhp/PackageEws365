<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightItemType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The InsightId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $InsightId;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The StartTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartTimeUtc;
    /**
     * The EndTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndTimeUtc;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * The Context
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfInsightContextItem
     */
    public $Context;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The ApplicationsIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $ApplicationsIds;
    /**
     * Constructor method for InsightItemType
     * @uses EwsInsightItemType::setItemId()
     * @uses EwsInsightItemType::setInsightId()
     * @uses EwsInsightItemType::setType()
     * @uses EwsInsightItemType::setStartTimeUtc()
     * @uses EwsInsightItemType::setEndTimeUtc()
     * @uses EwsInsightItemType::setStatus()
     * @uses EwsInsightItemType::setVersion()
     * @uses EwsInsightItemType::setContext()
     * @uses EwsInsightItemType::setText()
     * @uses EwsInsightItemType::setApplicationsIds()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $insightId
     * @param string $type
     * @param string $startTimeUtc
     * @param string $endTimeUtc
     * @param string $status
     * @param string $version
     * @param \Ews\ArrayType\EwsArrayOfInsightContextItem $context
     * @param string $text
     * @param \Ews\ArrayType\EwsArrayOfStringsType $applicationsIds
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $insightId = null, $type = null, $startTimeUtc = null, $endTimeUtc = null, $status = null, $version = null, \Ews\ArrayType\EwsArrayOfInsightContextItem $context = null, $text = null, \Ews\ArrayType\EwsArrayOfStringsType $applicationsIds = null)
    {
        $this
            ->setItemId($itemId)
            ->setInsightId($insightId)
            ->setType($type)
            ->setStartTimeUtc($startTimeUtc)
            ->setEndTimeUtc($endTimeUtc)
            ->setStatus($status)
            ->setVersion($version)
            ->setContext($context)
            ->setText($text)
            ->setApplicationsIds($applicationsIds);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get InsightId value
     * @return string
     */
    public function getInsightId()
    {
        return $this->InsightId;
    }
    /**
     * Set InsightId value
     * @param string $insightId
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setInsightId($insightId = null)
    {
        // validation for constraint: pattern
        if (!is_null($insightId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $insightId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($insightId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($insightId) && !is_string($insightId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insightId)), __LINE__);
        }
        $this->InsightId = $insightId;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get StartTimeUtc value
     * @return string|null
     */
    public function getStartTimeUtc()
    {
        return $this->StartTimeUtc;
    }
    /**
     * Set StartTimeUtc value
     * @param string $startTimeUtc
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setStartTimeUtc($startTimeUtc = null)
    {
        // validation for constraint: string
        if (!is_null($startTimeUtc) && !is_string($startTimeUtc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTimeUtc)), __LINE__);
        }
        $this->StartTimeUtc = $startTimeUtc;
        return $this;
    }
    /**
     * Get EndTimeUtc value
     * @return string|null
     */
    public function getEndTimeUtc()
    {
        return $this->EndTimeUtc;
    }
    /**
     * Set EndTimeUtc value
     * @param string $endTimeUtc
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setEndTimeUtc($endTimeUtc = null)
    {
        // validation for constraint: string
        if (!is_null($endTimeUtc) && !is_string($endTimeUtc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTimeUtc)), __LINE__);
        }
        $this->EndTimeUtc = $endTimeUtc;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Ews\EnumType\EwsInsightStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsInsightStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsInsightStatusType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Ews\EnumType\EwsInsightStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get Context value
     * @return \Ews\ArrayType\EwsArrayOfInsightContextItem|null
     */
    public function getContext()
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param \Ews\ArrayType\EwsArrayOfInsightContextItem $context
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setContext(\Ews\ArrayType\EwsArrayOfInsightContextItem $context = null)
    {
        $this->Context = $context;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get ApplicationsIds value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getApplicationsIds()
    {
        return $this->ApplicationsIds;
    }
    /**
     * Set ApplicationsIds value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $applicationsIds
     * @return \Ews\StructType\EwsInsightItemType
     */
    public function setApplicationsIds(\Ews\ArrayType\EwsArrayOfStringsType $applicationsIds = null)
    {
        $this->ApplicationsIds = $applicationsIds;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInsightItemType
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
