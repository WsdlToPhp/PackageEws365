<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlagType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFlagType extends AbstractStructBase
{
    /**
     * The FlagStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FlagStatus;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDate;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DueDate;
    /**
     * The CompleteDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompleteDate;
    /**
     * Constructor method for FlagType
     * @uses EwsFlagType::setFlagStatus()
     * @uses EwsFlagType::setStartDate()
     * @uses EwsFlagType::setDueDate()
     * @uses EwsFlagType::setCompleteDate()
     * @param string $flagStatus
     * @param string $startDate
     * @param string $dueDate
     * @param string $completeDate
     */
    public function __construct($flagStatus = null, $startDate = null, $dueDate = null, $completeDate = null)
    {
        $this
            ->setFlagStatus($flagStatus)
            ->setStartDate($startDate)
            ->setDueDate($dueDate)
            ->setCompleteDate($completeDate);
    }
    /**
     * Get FlagStatus value
     * @return string
     */
    public function getFlagStatus()
    {
        return $this->FlagStatus;
    }
    /**
     * Set FlagStatus value
     * @uses \Ews\EnumType\EwsFlagStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsFlagStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $flagStatus
     * @return \Ews\StructType\EwsFlagType
     */
    public function setFlagStatus($flagStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsFlagStatusType::valueIsValid($flagStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flagStatus, implode(', ', \Ews\EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->FlagStatus = $flagStatus;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get DueDate value
     * @return string|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param string $dueDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setDueDate($dueDate = null)
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dueDate)), __LINE__);
        }
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Get CompleteDate value
     * @return string|null
     */
    public function getCompleteDate()
    {
        return $this->CompleteDate;
    }
    /**
     * Set CompleteDate value
     * @param string $completeDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setCompleteDate($completeDate = null)
    {
        // validation for constraint: string
        if (!is_null($completeDate) && !is_string($completeDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($completeDate)), __LINE__);
        }
        $this->CompleteDate = $completeDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFlagType
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
