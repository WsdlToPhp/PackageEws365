<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUnifiedGroupUnseenDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSetUnifiedGroupUnseenDataType extends EwsUnifiedGroupBaseRequestType
{
    /**
     * The LastVisitedTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var dateTime
     */
    public $LastVisitedTimeUtc;
    /**
     * Constructor method for SetUnifiedGroupUnseenDataType
     * @uses EwsSetUnifiedGroupUnseenDataType::setLastVisitedTimeUtc()
     * @param dateTime $lastVisitedTimeUtc
     */
    public function __construct($lastVisitedTimeUtc = null)
    {
        $this
            ->setLastVisitedTimeUtc($lastVisitedTimeUtc);
    }
    /**
     * Get LastVisitedTimeUtc value
     * @return dateTime
     */
    public function getLastVisitedTimeUtc()
    {
        return $this->LastVisitedTimeUtc;
    }
    /**
     * Set LastVisitedTimeUtc value
     * @param dateTime $lastVisitedTimeUtc
     * @return \Ews\StructType\EwsSetUnifiedGroupUnseenDataType
     */
    public function setLastVisitedTimeUtc($lastVisitedTimeUtc = null)
    {
        $this->LastVisitedTimeUtc = $lastVisitedTimeUtc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSetUnifiedGroupUnseenDataType
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
