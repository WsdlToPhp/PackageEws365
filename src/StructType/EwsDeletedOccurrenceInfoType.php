<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletedOccurrenceInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeletedOccurrenceInfoType extends AbstractStructBase
{
    /**
     * The Start
     * @var dateTime
     */
    public $Start;
    /**
     * Constructor method for DeletedOccurrenceInfoType
     * @uses EwsDeletedOccurrenceInfoType::setStart()
     * @param dateTime $start
     */
    public function __construct($start = null)
    {
        $this
            ->setStart($start);
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
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType
     */
    public function setStart($start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeletedOccurrenceInfoType
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
