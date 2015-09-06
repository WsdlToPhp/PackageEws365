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
     * @var base64Binary
     */
    public $Data;
    /**
     * Constructor method for RouteComplaintType
     * @uses EwsRouteComplaintType::setData()
     * @param base64Binary $data
     */
    public function __construct(base64Binary $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get Data value
     * @return base64Binary
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param base64Binary $data
     * @return \Ews\StructType\EwsRouteComplaintType
     */
    public function setData(base64Binary $data = null)
    {
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
