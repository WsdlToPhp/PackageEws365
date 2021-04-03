<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OccurrenceInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOccurrenceInfoType extends AbstractStructBase
{
    /**
     * The ItemId
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The Start
     * @var string|null
     */
    protected ?string $Start = null;
    /**
     * The End
     * @var string|null
     */
    protected ?string $End = null;
    /**
     * The OriginalStart
     * @var string|null
     */
    protected ?string $OriginalStart = null;
    /**
     * Constructor method for OccurrenceInfoType
     * @uses EwsOccurrenceInfoType::setItemId()
     * @uses EwsOccurrenceInfoType::setStart()
     * @uses EwsOccurrenceInfoType::setEnd()
     * @uses EwsOccurrenceInfoType::setOriginalStart()
     * @param \StructType\EwsItemIdType $itemId
     * @param string $start
     * @param string $end
     * @param string $originalStart
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null, ?string $start = null, ?string $end = null, ?string $originalStart = null)
    {
        $this
            ->setItemId($itemId)
            ->setStart($start)
            ->setEnd($end)
            ->setOriginalStart($originalStart);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsOccurrenceInfoType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \StructType\EwsOccurrenceInfoType
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \StructType\EwsOccurrenceInfoType
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->End = $end;
        
        return $this;
    }
    /**
     * Get OriginalStart value
     * @return string|null
     */
    public function getOriginalStart(): ?string
    {
        return $this->OriginalStart;
    }
    /**
     * Set OriginalStart value
     * @param string $originalStart
     * @return \StructType\EwsOccurrenceInfoType
     */
    public function setOriginalStart(?string $originalStart = null): self
    {
        // validation for constraint: string
        if (!is_null($originalStart) && !is_string($originalStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalStart, true), gettype($originalStart)), __LINE__);
        }
        $this->OriginalStart = $originalStart;
        
        return $this;
    }
}
