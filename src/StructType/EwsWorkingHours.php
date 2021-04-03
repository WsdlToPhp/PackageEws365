<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsSerializableTimeZone
     */
    protected \StructType\EwsSerializableTimeZone $TimeZone;
    /**
     * The WorkingPeriodArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfWorkingPeriod
     */
    protected \ArrayType\EwsArrayOfWorkingPeriod $WorkingPeriodArray;
    /**
     * Constructor method for WorkingHours
     * @uses EwsWorkingHours::setTimeZone()
     * @uses EwsWorkingHours::setWorkingPeriodArray()
     * @param \StructType\EwsSerializableTimeZone $timeZone
     * @param \ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray
     */
    public function __construct(\StructType\EwsSerializableTimeZone $timeZone, \ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray)
    {
        $this
            ->setTimeZone($timeZone)
            ->setWorkingPeriodArray($workingPeriodArray);
    }
    /**
     * Get TimeZone value
     * @return \StructType\EwsSerializableTimeZone
     */
    public function getTimeZone(): \StructType\EwsSerializableTimeZone
    {
        return $this->TimeZone;
    }
    /**
     * Set TimeZone value
     * @param \StructType\EwsSerializableTimeZone $timeZone
     * @return \StructType\EwsWorkingHours
     */
    public function setTimeZone(\StructType\EwsSerializableTimeZone $timeZone): self
    {
        $this->TimeZone = $timeZone;
        
        return $this;
    }
    /**
     * Get WorkingPeriodArray value
     * @return \ArrayType\EwsArrayOfWorkingPeriod
     */
    public function getWorkingPeriodArray(): \ArrayType\EwsArrayOfWorkingPeriod
    {
        return $this->WorkingPeriodArray;
    }
    /**
     * Set WorkingPeriodArray value
     * @param \ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray
     * @return \StructType\EwsWorkingHours
     */
    public function setWorkingPeriodArray(\ArrayType\EwsArrayOfWorkingPeriod $workingPeriodArray): self
    {
        $this->WorkingPeriodArray = $workingPeriodArray;
        
        return $this;
    }
}
