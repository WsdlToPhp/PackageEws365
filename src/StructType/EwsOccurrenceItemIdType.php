<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OccurrenceItemIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOccurrenceItemIdType extends EwsBaseItemIdType
{
    /**
     * The RecurringMasterId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $RecurringMasterId;
    /**
     * The InstanceIndex
     * Meta informations extracted from the WSDL
     * - use: required
     * @var int
     */
    public $InstanceIndex;
    /**
     * The ChangeKey
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ChangeKey;
    /**
     * Constructor method for OccurrenceItemIdType
     * @uses EwsOccurrenceItemIdType::setRecurringMasterId()
     * @uses EwsOccurrenceItemIdType::setInstanceIndex()
     * @uses EwsOccurrenceItemIdType::setChangeKey()
     * @param string $recurringMasterId
     * @param int $instanceIndex
     * @param string $changeKey
     */
    public function __construct($recurringMasterId = null, $instanceIndex = null, $changeKey = null)
    {
        $this
            ->setRecurringMasterId($recurringMasterId)
            ->setInstanceIndex($instanceIndex)
            ->setChangeKey($changeKey);
    }
    /**
     * Get RecurringMasterId value
     * @return string
     */
    public function getRecurringMasterId()
    {
        return $this->RecurringMasterId;
    }
    /**
     * Set RecurringMasterId value
     * @param string $recurringMasterId
     * @return \Ews\StructType\EwsOccurrenceItemIdType
     */
    public function setRecurringMasterId($recurringMasterId = null)
    {
        $this->RecurringMasterId = $recurringMasterId;
        return $this;
    }
    /**
     * Get InstanceIndex value
     * @return int
     */
    public function getInstanceIndex()
    {
        return $this->InstanceIndex;
    }
    /**
     * Set InstanceIndex value
     * @param int $instanceIndex
     * @return \Ews\StructType\EwsOccurrenceItemIdType
     */
    public function setInstanceIndex($instanceIndex = null)
    {
        $this->InstanceIndex = $instanceIndex;
        return $this;
    }
    /**
     * Get ChangeKey value
     * @return string|null
     */
    public function getChangeKey()
    {
        return $this->ChangeKey;
    }
    /**
     * Set ChangeKey value
     * @param string $changeKey
     * @return \Ews\StructType\EwsOccurrenceItemIdType
     */
    public function setChangeKey($changeKey = null)
    {
        $this->ChangeKey = $changeKey;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOccurrenceItemIdType
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
