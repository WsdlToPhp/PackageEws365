<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExchangeImpersonationType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Allow attributes in the soap namespace to be used here
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExchangeImpersonationType extends AbstractStructBase
{
    /**
     * The ConnectingSID
     * @var \Ews\StructType\EwsConnectingSIDType
     */
    public $ConnectingSID;
    /**
     * Constructor method for ExchangeImpersonationType
     * @uses EwsExchangeImpersonationType::setConnectingSID()
     * @param \Ews\StructType\EwsConnectingSIDType $connectingSID
     */
    public function __construct(\Ews\StructType\EwsConnectingSIDType $connectingSID = null)
    {
        $this
            ->setConnectingSID($connectingSID);
    }
    /**
     * Get ConnectingSID value
     * @return \Ews\StructType\EwsConnectingSIDType|null
     */
    public function getConnectingSID()
    {
        return $this->ConnectingSID;
    }
    /**
     * Set ConnectingSID value
     * @param \Ews\StructType\EwsConnectingSIDType $connectingSID
     * @return \Ews\StructType\EwsExchangeImpersonationType
     */
    public function setConnectingSID(\Ews\StructType\EwsConnectingSIDType $connectingSID = null)
    {
        $this->ConnectingSID = $connectingSID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExchangeImpersonationType
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
