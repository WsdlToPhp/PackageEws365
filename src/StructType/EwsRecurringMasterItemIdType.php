<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringMasterItemIdType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurringMasterItemIdType extends EwsBaseItemIdType
{
    /**
     * The OccurrenceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - use: required
     * @var string
     */
    public $OccurrenceId;
    /**
     * The ChangeKey
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ChangeKey;
    /**
     * Constructor method for RecurringMasterItemIdType
     * @uses EwsRecurringMasterItemIdType::setOccurrenceId()
     * @uses EwsRecurringMasterItemIdType::setChangeKey()
     * @param string $occurrenceId
     * @param string $changeKey
     */
    public function __construct($occurrenceId = null, $changeKey = null)
    {
        $this
            ->setOccurrenceId($occurrenceId)
            ->setChangeKey($changeKey);
    }
    /**
     * Get OccurrenceId value
     * @return string
     */
    public function getOccurrenceId()
    {
        return $this->OccurrenceId;
    }
    /**
     * Set OccurrenceId value
     * @param string $occurrenceId
     * @return \Ews\StructType\EwsRecurringMasterItemIdType
     */
    public function setOccurrenceId($occurrenceId = null)
    {
        // validation for constraint: string
        if (!is_null($occurrenceId) && !is_string($occurrenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($occurrenceId, true), gettype($occurrenceId)), __LINE__);
        }
        $this->OccurrenceId = $occurrenceId;
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
     * @return \Ews\StructType\EwsRecurringMasterItemIdType
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
