<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfClientExtensionsType|null
     */
    protected ?\ArrayType\EwsArrayOfClientExtensionsType $ClientExtensions = null;
    /**
     * The RawMasterTableXml
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RawMasterTableXml = null;
    /**
     * Constructor method for ClientExtensionResponseType
     * @uses EwsClientExtensionResponseType::setClientExtensions()
     * @uses EwsClientExtensionResponseType::setRawMasterTableXml()
     * @param \ArrayType\EwsArrayOfClientExtensionsType $clientExtensions
     * @param string $rawMasterTableXml
     */
    public function __construct(?\ArrayType\EwsArrayOfClientExtensionsType $clientExtensions = null, ?string $rawMasterTableXml = null)
    {
        $this
            ->setClientExtensions($clientExtensions)
            ->setRawMasterTableXml($rawMasterTableXml);
    }
    /**
     * Get ClientExtensions value
     * @return \ArrayType\EwsArrayOfClientExtensionsType|null
     */
    public function getClientExtensions(): ?\ArrayType\EwsArrayOfClientExtensionsType
    {
        return $this->ClientExtensions;
    }
    /**
     * Set ClientExtensions value
     * @param \ArrayType\EwsArrayOfClientExtensionsType $clientExtensions
     * @return \StructType\EwsClientExtensionResponseType
     */
    public function setClientExtensions(?\ArrayType\EwsArrayOfClientExtensionsType $clientExtensions = null): self
    {
        $this->ClientExtensions = $clientExtensions;
        
        return $this;
    }
    /**
     * Get RawMasterTableXml value
     * @return string|null
     */
    public function getRawMasterTableXml(): ?string
    {
        return $this->RawMasterTableXml;
    }
    /**
     * Set RawMasterTableXml value
     * @param string $rawMasterTableXml
     * @return \StructType\EwsClientExtensionResponseType
     */
    public function setRawMasterTableXml(?string $rawMasterTableXml = null): self
    {
        // validation for constraint: string
        if (!is_null($rawMasterTableXml) && !is_string($rawMasterTableXml)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rawMasterTableXml, true), gettype($rawMasterTableXml)), __LINE__);
        }
        $this->RawMasterTableXml = $rawMasterTableXml;
        
        return $this;
    }
}
