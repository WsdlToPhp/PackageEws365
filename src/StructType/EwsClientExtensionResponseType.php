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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfClientExtensionsType
     */
    public $ClientExtensions;
    /**
     * The RawMasterTableXml
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($rawMasterTableXml) && !is_string($rawMasterTableXml)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rawMasterTableXml, true), gettype($rawMasterTableXml)), __LINE__);
        }
        $this->RawMasterTableXml = $rawMasterTableXml;
        return $this;
    }
}
