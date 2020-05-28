<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Start
     * @var string
     */
    public $Start;
    /**
     * The End
     * @var string
     */
    public $End;
    /**
     * The OriginalStart
     * @var string
     */
    public $OriginalStart;
    /**
     * Constructor method for OccurrenceInfoType
     * @uses EwsOccurrenceInfoType::setItemId()
     * @uses EwsOccurrenceInfoType::setStart()
     * @uses EwsOccurrenceInfoType::setEnd()
     * @uses EwsOccurrenceInfoType::setOriginalStart()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $start
     * @param string $end
     * @param string $originalStart
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, $start = null, $end = null, $originalStart = null)
    {
        $this
            ->setItemId($itemId)
            ->setStart($start)
            ->setEnd($end)
            ->setOriginalStart($originalStart);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->End = $end;
        return $this;
    }
    /**
     * Get OriginalStart value
     * @return string|null
     */
    public function getOriginalStart()
    {
        return $this->OriginalStart;
    }
    /**
     * Set OriginalStart value
     * @param string $originalStart
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setOriginalStart($originalStart = null)
    {
        // validation for constraint: string
        if (!is_null($originalStart) && !is_string($originalStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalStart, true), gettype($originalStart)), __LINE__);
        }
        $this->OriginalStart = $originalStart;
        return $this;
    }
}
