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
     * @var string
     */
    public $Timeout;
    /**
     * Constructor method for GetUMSubscriberCallAnsweringDataType
     * @uses EwsGetUMSubscriberCallAnsweringDataType::setTimeout()
     * @param string $timeout
     */
    public function __construct($timeout = null)
    {
        $this
            ->setTimeout($timeout);
    }
    /**
     * Get Timeout value
     * @return string
     */
    public function getTimeout()
    {
        return $this->Timeout;
    }
    /**
     * Set Timeout value
     * @param string $timeout
     * @return \Ews\StructType\EwsGetUMSubscriberCallAnsweringDataType
     */
    public function setTimeout($timeout = null)
    {
        // validation for constraint: string
        if (!is_null($timeout) && !is_string($timeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeout)), __LINE__);
        }
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
