<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SenderAddInEntityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSenderAddInEntityType extends AbstractStructBase
{
    /**
     * The ExtensionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExtensionId = null;
    /**
     * Constructor method for SenderAddInEntityType
     * @uses EwsSenderAddInEntityType::setExtensionId()
     * @param string $extensionId
     */
    public function __construct(?string $extensionId = null)
    {
        $this
            ->setExtensionId($extensionId);
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
     * @return \StructType\EwsSenderAddInEntityType
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
