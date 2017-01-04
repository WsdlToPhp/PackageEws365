<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteComplaintType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRouteComplaintType extends EwsBaseRequestType
{
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Data;
    /**
     * Constructor method for RouteComplaintType
     * @uses EwsRouteComplaintType::setData()
     * @param string $data
     */
    public function __construct($data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get Data value
     * @return string
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param string $data
     * @return \Ews\StructType\EwsRouteComplaintType
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($data)), __LINE__);
        }
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRouteComplaintType
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
