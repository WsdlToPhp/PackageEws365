<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateXrmDealResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateXrmDealResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Deal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsXrmDealType
     */
    public $Deal;
    /**
     * Constructor method for CreateXrmDealResponseMessageType
     * @uses EwsCreateXrmDealResponseMessageType::setDeal()
     * @param \Ews\StructType\EwsXrmDealType $deal
     */
    public function __construct(\Ews\StructType\EwsXrmDealType $deal = null)
    {
        $this
            ->setDeal($deal);
    }
    /**
     * Get Deal value
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function getDeal()
    {
        return $this->Deal;
    }
    /**
     * Set Deal value
     * @param \Ews\StructType\EwsXrmDealType $deal
     * @return \Ews\StructType\EwsCreateXrmDealResponseMessageType
     */
    public function setDeal(\Ews\StructType\EwsXrmDealType $deal = null)
    {
        $this->Deal = $deal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateXrmDealResponseMessageType
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
