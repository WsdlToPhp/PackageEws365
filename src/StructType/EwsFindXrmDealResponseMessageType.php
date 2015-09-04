<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindXrmDealResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindXrmDealResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Deals
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public $Deals;
    /**
     * Constructor method for FindXrmDealResponseMessageType
     * @uses EwsFindXrmDealResponseMessageType::setDeals()
     * @param \Ews\ArrayType\EwsArrayOfXrmDealType $deals
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfXrmDealType $deals = null)
    {
        $this
            ->setDeals($deals);
    }
    /**
     * Get Deals value
     * @return \Ews\ArrayType\EwsArrayOfXrmDealType
     */
    public function getDeals()
    {
        return $this->Deals;
    }
    /**
     * Set Deals value
     * @param \Ews\ArrayType\EwsArrayOfXrmDealType $deals
     * @return \Ews\StructType\EwsFindXrmDealResponseMessageType
     */
    public function setDeals(\Ews\ArrayType\EwsArrayOfXrmDealType $deals = null)
    {
        $this->Deals = $deals;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindXrmDealResponseMessageType
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
