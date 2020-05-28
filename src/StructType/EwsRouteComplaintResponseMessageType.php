<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RouteComplaintResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRouteComplaintResponseMessageType extends EwsBaseResponseMessageType
{
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Data;
    /**
     * Constructor method for RouteComplaintResponseMessageType
     * @uses EwsRouteComplaintResponseMessageType::setData()
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
     * @return \Ews\StructType\EwsRouteComplaintResponseMessageType
     */
    public function setData($data = null)
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->Data = $data;
        return $this;
    }
}
