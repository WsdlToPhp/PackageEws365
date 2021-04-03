<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $RecurringMasterId;
    /**
     * The InstanceIndex
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $InstanceIndex;
    /**
     * The ChangeKey
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ChangeKey = null;
    /**
     * Constructor method for OccurrenceItemIdType
     * @uses EwsOccurrenceItemIdType::setRecurringMasterId()
     * @uses EwsOccurrenceItemIdType::setInstanceIndex()
     * @uses EwsOccurrenceItemIdType::setChangeKey()
     * @param string $recurringMasterId
     * @param int $instanceIndex
     * @param string $changeKey
     */
    public function __construct(string $recurringMasterId, int $instanceIndex, ?string $changeKey = null)
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
    public function getRecurringMasterId(): string
    {
        return $this->RecurringMasterId;
    }
    /**
     * Set RecurringMasterId value
     * @param string $recurringMasterId
     * @return \StructType\EwsOccurrenceItemIdType
     */
    public function setRecurringMasterId(string $recurringMasterId): self
    {
        // validation for constraint: string
        if (!is_null($recurringMasterId) && !is_string($recurringMasterId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recurringMasterId, true), gettype($recurringMasterId)), __LINE__);
        }
        $this->RecurringMasterId = $recurringMasterId;
        
        return $this;
    }
    /**
     * Get InstanceIndex value
     * @return int
     */
    public function getInstanceIndex(): int
    {
        return $this->InstanceIndex;
    }
    /**
     * Set InstanceIndex value
     * @param int $instanceIndex
     * @return \StructType\EwsOccurrenceItemIdType
     */
    public function setInstanceIndex(int $instanceIndex): self
    {
        // validation for constraint: int
        if (!is_null($instanceIndex) && !(is_int($instanceIndex) || ctype_digit($instanceIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($instanceIndex, true), gettype($instanceIndex)), __LINE__);
        }
        $this->InstanceIndex = $instanceIndex;
        
        return $this;
    }
    /**
     * Get ChangeKey value
     * @return string|null
     */
    public function getChangeKey(): ?string
    {
        return $this->ChangeKey;
    }
    /**
     * Set ChangeKey value
     * @param string $changeKey
     * @return \StructType\EwsOccurrenceItemIdType
     */
    public function setChangeKey(?string $changeKey = null): self
    {
        // validation for constraint: string
        if (!is_null($changeKey) && !is_string($changeKey)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($changeKey, true), gettype($changeKey)), __LINE__);
        }
        $this->ChangeKey = $changeKey;
        
        return $this;
    }
}
