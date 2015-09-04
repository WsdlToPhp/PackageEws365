<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNonIndexableItemDetailsResponseMessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Response message type for the GetNonIndexableItemDetails web method.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetNonIndexableItemDetailsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The NonIndexableItemDetailsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Non indexable item details result.
     * @var \Ews\StructType\EwsNonIndexableItemDetailResultType
     */
    public $NonIndexableItemDetailsResult;
    /**
     * Constructor method for GetNonIndexableItemDetailsResponseMessageType
     * @uses
     * EwsGetNonIndexableItemDetailsResponseMessageType::setNonIndexableItemDetailsResu
     * lt()
     * @param \Ews\StructType\EwsNonIndexableItemDetailResultType
     * $nonIndexableItemDetailsResult
     */
    public function __construct(\Ews\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult = null)
    {
        $this
            ->setNonIndexableItemDetailsResult($nonIndexableItemDetailsResult);
    }
    /**
     * Get NonIndexableItemDetailsResult value
     * @return \Ews\StructType\EwsNonIndexableItemDetailResultType|null
     */
    public function getNonIndexableItemDetailsResult()
    {
        return $this->NonIndexableItemDetailsResult;
    }
    /**
     * Set NonIndexableItemDetailsResult value
     * @param \Ews\StructType\EwsNonIndexableItemDetailResultType
     * $nonIndexableItemDetailsResult
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
     */
    public function setNonIndexableItemDetailsResult(\Ews\StructType\EwsNonIndexableItemDetailResultType $nonIndexableItemDetailsResult = null)
    {
        $this->NonIndexableItemDetailsResult = $nonIndexableItemDetailsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetNonIndexableItemDetailsResponseMessageType
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
