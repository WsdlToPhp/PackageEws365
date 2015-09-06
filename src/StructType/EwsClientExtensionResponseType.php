<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientExtensionResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientExtensionResponseType extends EwsResponseMessageType
{
    /**
     * The ClientExtensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfClientExtensionsType
     */
    public $ClientExtensions;
    /**
     * The RawMasterTableXml
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RawMasterTableXml;
    /**
     * Constructor method for ClientExtensionResponseType
     * @uses EwsClientExtensionResponseType::setClientExtensions()
     * @uses EwsClientExtensionResponseType::setRawMasterTableXml()
     * @param \Ews\ArrayType\EwsArrayOfClientExtensionsType $clientExtensions
     * @param string $rawMasterTableXml
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfClientExtensionsType $clientExtensions = null, $rawMasterTableXml = null)
    {
        $this
            ->setClientExtensions($clientExtensions)
            ->setRawMasterTableXml($rawMasterTableXml);
    }
    /**
     * Get ClientExtensions value
     * @return \Ews\ArrayType\EwsArrayOfClientExtensionsType|null
     */
    public function getClientExtensions()
    {
        return $this->ClientExtensions;
    }
    /**
     * Set ClientExtensions value
     * @param \Ews\ArrayType\EwsArrayOfClientExtensionsType $clientExtensions
     * @return \Ews\StructType\EwsClientExtensionResponseType
     */
    public function setClientExtensions(\Ews\ArrayType\EwsArrayOfClientExtensionsType $clientExtensions = null)
    {
        $this->ClientExtensions = $clientExtensions;
        return $this;
    }
    /**
     * Get RawMasterTableXml value
     * @return string|null
     */
    public function getRawMasterTableXml()
    {
        return $this->RawMasterTableXml;
    }
    /**
     * Set RawMasterTableXml value
     * @param string $rawMasterTableXml
     * @return \Ews\StructType\EwsClientExtensionResponseType
     */
    public function setRawMasterTableXml($rawMasterTableXml = null)
    {
        $this->RawMasterTableXml = $rawMasterTableXml;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsClientExtensionResponseType
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
