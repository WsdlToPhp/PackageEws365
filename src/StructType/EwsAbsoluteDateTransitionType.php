<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbsoluteDateTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbsoluteDateTransitionType extends EwsTransitionType
{
    /**
     * The DateTime
     * @var dateTime
     */
    public $DateTime;
    /**
     * Constructor method for AbsoluteDateTransitionType
     * @uses EwsAbsoluteDateTransitionType::setDateTime()
     * @param dateTime $dateTime
     */
    public function __construct($dateTime = null)
    {
        $this
            ->setDateTime($dateTime);
    }
    /**
     * Get DateTime value
     * @return dateTime|null
     */
    public function getDateTime()
    {
        return $this->DateTime;
    }
    /**
     * Set DateTime value
     * @param dateTime $dateTime
     * @return \Ews\StructType\EwsAbsoluteDateTransitionType
     */
    public function setDateTime($dateTime = null)
    {
        $this->DateTime = $dateTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAbsoluteDateTransitionType
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
