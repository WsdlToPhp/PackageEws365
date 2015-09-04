<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableCulturesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetAvailableCulturesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The AvailableCultures
     * @var \Ews\ArrayType\EwsArrayOfAvailableCulturesType
     */
    public $AvailableCultures;
    /**
     * Constructor method for GetAvailableCulturesResponseMessageType
     * @uses EwsGetAvailableCulturesResponseMessageType::setAvailableCultures()
     * @param \Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures = null)
    {
        $this
            ->setAvailableCultures($availableCultures);
    }
    /**
     * Get AvailableCultures value
     * @return \Ews\ArrayType\EwsArrayOfAvailableCulturesType|null
     */
    public function getAvailableCultures()
    {
        return $this->AvailableCultures;
    }
    /**
     * Set AvailableCultures value
     * @param \Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures
     * @return \Ews\StructType\EwsGetAvailableCulturesResponseMessageType
     */
    public function setAvailableCultures(\Ews\ArrayType\EwsArrayOfAvailableCulturesType $availableCultures = null)
    {
        $this->AvailableCultures = $availableCultures;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetAvailableCulturesResponseMessageType
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
