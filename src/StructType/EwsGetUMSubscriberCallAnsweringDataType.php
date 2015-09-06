<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMSubscriberCallAnsweringDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMSubscriberCallAnsweringDataType extends EwsBaseRequestType
{
    /**
     * The Timeout
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var duration
     */
    public $Timeout;
    /**
     * Constructor method for GetUMSubscriberCallAnsweringDataType
     * @uses EwsGetUMSubscriberCallAnsweringDataType::setTimeout()
     * @param duration $timeout
     */
    public function __construct($timeout = null)
    {
        $this
            ->setTimeout($timeout);
    }
    /**
     * Get Timeout value
     * @return duration
     */
    public function getTimeout()
    {
        return $this->Timeout;
    }
    /**
     * Set Timeout value
     * @param duration $timeout
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataType
     */
    public function setTimeout($timeout = null)
    {
        $this->Timeout = $timeout;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataType
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
