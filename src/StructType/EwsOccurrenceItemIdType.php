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
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - use: required
     * @var string
     */
    public $RecurringMasterId;
    /**
     * The InstanceIndex
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $InstanceIndex;
    /**
     * The ChangeKey
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($recurringMasterId) && !is_string($recurringMasterId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurringMasterId, true), gettype($recurringMasterId)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($instanceIndex) && !(is_int($instanceIndex) || ctype_digit($instanceIndex))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($instanceIndex, true), gettype($instanceIndex)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($changeKey) && !is_string($changeKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeKey, true), gettype($changeKey)), __LINE__);
        }
        $this->ChangeKey = $changeKey;
        return $this;
    }
}
