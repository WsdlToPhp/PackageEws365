<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUMPromptNamesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetUMPromptNamesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The PromptNames
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $PromptNames;
    /**
     * Constructor method for GetUMPromptNamesResponseMessageType
     * @uses EwsGetUMPromptNamesResponseMessageType::setPromptNames()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $promptNames
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this
            ->setPromptNames($promptNames);
    }
    /**
     * Get PromptNames value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getPromptNames()
    {
        return $this->PromptNames;
    }
    /**
     * Set PromptNames value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $promptNames
     * @return \Ews\StructType\EwsGetUMPromptNamesResponseMessageType
     */
    public function setPromptNames(\Ews\ArrayType\EwsArrayOfStringsType $promptNames = null)
    {
        $this->PromptNames = $promptNames;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetUMPromptNamesResponseMessageType
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
