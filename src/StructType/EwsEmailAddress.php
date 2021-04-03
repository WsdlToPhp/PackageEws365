<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailAddress StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEmailAddress extends AbstractStructBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Address;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The RoutingType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RoutingType = null;
    /**
     * Constructor method for EmailAddress
     * @uses EwsEmailAddress::setAddress()
     * @uses EwsEmailAddress::setName()
     * @uses EwsEmailAddress::setRoutingType()
     * @param string $address
     * @param string $name
     * @param string $routingType
     */
    public function __construct(string $address, ?string $name = null, ?string $routingType = null)
    {
        $this
            ->setAddress($address)
            ->setName($name)
            ->setRoutingType($routingType);
    }
    /**
     * Get Address value
     * @return string
     */
    public function getAddress(): string
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \StructType\EwsEmailAddress
     */
    public function setAddress(string $address): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsEmailAddress
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get RoutingType value
     * @return string|null
     */
    public function getRoutingType(): ?string
    {
        return $this->RoutingType;
    }
    /**
     * Set RoutingType value
     * @param string $routingType
     * @return \StructType\EwsEmailAddress
     */
    public function setRoutingType(?string $routingType = null): self
    {
        // validation for constraint: string
        if (!is_null($routingType) && !is_string($routingType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingType, true), gettype($routingType)), __LINE__);
        }
        $this->RoutingType = $routingType;
        
        return $this;
    }
}
