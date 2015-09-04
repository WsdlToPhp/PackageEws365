<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OccurrenceInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsOccurrenceInfoType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The Start
     * @var dateTime
     */
    public $Start;
    /**
     * The End
     * @var dateTime
     */
    public $End;
    /**
     * The OriginalStart
     * @var dateTime
     */
    public $OriginalStart;
    /**
     * Constructor method for OccurrenceInfoType
     * @uses EwsOccurrenceInfoType::setItemId()
     * @uses EwsOccurrenceInfoType::setStart()
     * @uses EwsOccurrenceInfoType::setEnd()
     * @uses EwsOccurrenceInfoType::setOriginalStart()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param dateTime $start
     * @param dateTime $end
     * @param dateTime $originalStart
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
     * @return dateTime|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param dateTime $start
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setStart($start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return dateTime|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param dateTime $end
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setEnd($end = null)
    {
        $this->End = $end;
        return $this;
    }
    /**
     * Get OriginalStart value
     * @return dateTime|null
     */
    public function getOriginalStart()
    {
        return $this->OriginalStart;
    }
    /**
     * Set OriginalStart value
     * @param dateTime $originalStart
     * @return \Ews\StructType\EwsOccurrenceInfoType
     */
    public function setOriginalStart($originalStart = null)
    {
        $this->OriginalStart = $originalStart;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsOccurrenceInfoType
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
