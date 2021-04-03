<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetClientExtensionActionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetClientExtensionActionType extends AbstractStructBase
{
    /**
     * The ActionId
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $ActionId;
    /**
     * The ClientExtension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsClientExtensionType|null
     */
    protected ?\StructType\EwsClientExtensionType $ClientExtension = null;
    /**
     * The ExtensionId
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ExtensionId = null;
    /**
     * Constructor method for SetClientExtensionActionType
     * @uses EwsSetClientExtensionActionType::setActionId()
     * @uses EwsSetClientExtensionActionType::setClientExtension()
     * @uses EwsSetClientExtensionActionType::setExtensionId()
     * @param string $actionId
     * @param \StructType\EwsClientExtensionType $clientExtension
     * @param string $extensionId
     */
    public function __construct(string $actionId, ?\StructType\EwsClientExtensionType $clientExtension = null, ?string $extensionId = null)
    {
        $this
            ->setActionId($actionId)
            ->setClientExtension($clientExtension)
            ->setExtensionId($extensionId);
    }
    /**
     * Get ActionId value
     * @return string
     */
    public function getActionId(): string
    {
        return $this->ActionId;
    }
    /**
     * Set ActionId value
     * @uses \EnumType\EwsSetClientExtensionActionIdType::valueIsValid()
     * @uses \EnumType\EwsSetClientExtensionActionIdType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $actionId
     * @return \StructType\EwsSetClientExtensionActionType
     */
    public function setActionId(string $actionId): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSetClientExtensionActionIdType::valueIsValid($actionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSetClientExtensionActionIdType', is_array($actionId) ? implode(', ', $actionId) : var_export($actionId, true), implode(', ', \EnumType\EwsSetClientExtensionActionIdType::getValidValues())), __LINE__);
        }
        $this->ActionId = $actionId;
        
        return $this;
    }
    /**
     * Get ClientExtension value
     * @return \StructType\EwsClientExtensionType|null
     */
    public function getClientExtension(): ?\StructType\EwsClientExtensionType
    {
        return $this->ClientExtension;
    }
    /**
     * Set ClientExtension value
     * @param \StructType\EwsClientExtensionType $clientExtension
     * @return \StructType\EwsSetClientExtensionActionType
     */
    public function setClientExtension(?\StructType\EwsClientExtensionType $clientExtension = null): self
    {
        $this->ClientExtension = $clientExtension;
        
        return $this;
    }
    /**
     * Get ExtensionId value
     * @return string|null
     */
    public function getExtensionId(): ?string
    {
        return $this->ExtensionId;
    }
    /**
     * Set ExtensionId value
     * @param string $extensionId
     * @return \StructType\EwsSetClientExtensionActionType
     */
    public function setExtensionId(?string $extensionId = null): self
    {
        // validation for constraint: string
        if (!is_null($extensionId) && !is_string($extensionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($extensionId, true), gettype($extensionId)), __LINE__);
        }
        $this->ExtensionId = $extensionId;
        
        return $this;
    }
}
