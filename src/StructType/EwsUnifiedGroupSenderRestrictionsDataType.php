<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupSenderRestrictionsDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupSenderRestrictionsDataType extends AbstractStructBase
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsPersonaType
     */
    protected \StructType\EwsPersonaType $Persona;
    /**
     * The ExternalDirectoryObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExternalDirectoryObjectId = null;
    /**
     * Constructor method for UnifiedGroupSenderRestrictionsDataType
     * @uses EwsUnifiedGroupSenderRestrictionsDataType::setPersona()
     * @uses EwsUnifiedGroupSenderRestrictionsDataType::setExternalDirectoryObjectId()
     * @param \StructType\EwsPersonaType $persona
     * @param string $externalDirectoryObjectId
     */
    public function __construct(\StructType\EwsPersonaType $persona, ?string $externalDirectoryObjectId = null)
    {
        $this
            ->setPersona($persona)
            ->setExternalDirectoryObjectId($externalDirectoryObjectId);
    }
    /**
     * Get Persona value
     * @return \StructType\EwsPersonaType
     */
    public function getPersona(): \StructType\EwsPersonaType
    {
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \StructType\EwsPersonaType $persona
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType
     */
    public function setPersona(\StructType\EwsPersonaType $persona): self
    {
        $this->Persona = $persona;
        
        return $this;
    }
    /**
     * Get ExternalDirectoryObjectId value
     * @return string|null
     */
    public function getExternalDirectoryObjectId(): ?string
    {
        return $this->ExternalDirectoryObjectId;
    }
    /**
     * Set ExternalDirectoryObjectId value
     * @param string $externalDirectoryObjectId
     * @return \StructType\EwsUnifiedGroupSenderRestrictionsDataType
     */
    public function setExternalDirectoryObjectId(?string $externalDirectoryObjectId = null): self
    {
        // validation for constraint: string
        if (!is_null($externalDirectoryObjectId) && !is_string($externalDirectoryObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalDirectoryObjectId, true), gettype($externalDirectoryObjectId)), __LINE__);
        }
        $this->ExternalDirectoryObjectId = $externalDirectoryObjectId;
        
        return $this;
    }
}
