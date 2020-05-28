<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkingHours StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsWorkingHours extends AbstractStructBase
{
    /**
     * The TimeZone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsSerializableTimeZone
     */
    public $TimeZone;
    /**
     * The WorkingPeriodArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
    /**
     * Constructor method for WorkingHours
     * @uses EwsWorkingHours::setTimeZone()
     * @uses EwsWorkingHours::setWorkingPeriodArray()
     * @param \Ews\StructType\EwsSerializableTimeZone $timeZone
     * @param \Ews\ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray
     */
    public function __construct(\Ews\StructType\EwsSerializableTimeZone $timeZone = null, \Ews\ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray = null)
    {
        $this
            ->setTimeZone($timeZone)
            ->setWorkingPeriodArray($workingPeriodArray);
    }
    /**
     * Get TimeZone value
     * @return \Ews\StructType\EwsSerializableTimeZone
     */
    public function getTimeZone()
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param \Ews\StructType\EwsSerializableTimeZone $timeZone
     * @return \Ews\StructType\EwsWorkingHours
     */
    public function setTimeZone(\Ews\StructType\EwsSerializableTimeZone $timeZone = null)
    {
        $this->TimeZone = $timeZone;
        return $this;
    }
    /**
     * Get WorkingPeriodArray value
     * @return \Ews\ArrayType\EwsArrayOfWorkingPeriod
     */
    public function getWorkingPeriodArray()
    {
        return $this->WorkingPeriodArray;
    }
    /**
     * Set WorkingPeriodArray value
     * @param \Ews\ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray
     * @return \Ews\StructType\EwsWorkingHours
     */
    public function setWorkingPeriodArray(\Ews\ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray = null)
    {
        $this->WorkingPeriodArray = $workingPeriodArray;
        return $this;
    }
}
