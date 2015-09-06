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
     * @var dateTime
     */
    public $StartDate;
    /**
     * The DueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $DueDate;
    /**
     * The CompleteDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $CompleteDate;
    /**
     * Constructor method for FlagType
     * @uses EwsFlagType::setFlagStatus()
     * @uses EwsFlagType::setStartDate()
     * @uses EwsFlagType::setDueDate()
     * @uses EwsFlagType::setCompleteDate()
     * @param string $flagStatus
     * @param dateTime $startDate
     * @param dateTime $dueDate
     * @param dateTime $completeDate
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
     * @param string $flagStatus
     * @return \Ews\StructType\EwsFlagType
     */
    public function setFlagStatus($flagStatus = null)
    {
        if (!\Ews\EnumType\EwsFlagStatusType::valueIsValid($flagStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $flagStatus, implode(', ', \Ews\EnumType\EwsFlagStatusType::getValidValues())), __LINE__);
        }
        $this->FlagStatus = $flagStatus;
        return $this;
    }
    /**
     * Get StartDate value
     * @return dateTime|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param dateTime $startDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setStartDate($startDate = null)
    {
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get DueDate value
     * @return dateTime|null
     */
    public function getDueDate()
    {
        return $this->DueDate;
    }
    /**
     * Set DueDate value
     * @param dateTime $dueDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setDueDate($dueDate = null)
    {
        $this->DueDate = $dueDate;
        return $this;
    }
    /**
     * Get CompleteDate value
     * @return dateTime|null
     */
    public function getCompleteDate()
    {
        return $this->CompleteDate;
    }
    /**
     * Set CompleteDate value
     * @param dateTime $completeDate
     * @return \Ews\StructType\EwsFlagType
     */
    public function setCompleteDate($completeDate = null)
    {
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
