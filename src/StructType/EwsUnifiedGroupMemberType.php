<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnifiedGroupMemberType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMemberType extends AbstractStructBase
{
    /**
     * The Persona
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsPersonaType|null
     */
    protected ?\StructType\EwsPersonaType $Persona = null;
    /**
     * The IsOwner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsOwner = null;
    /**
     * Constructor method for UnifiedGroupMemberType
     * @uses EwsUnifiedGroupMemberType::setPersona()
     * @uses EwsUnifiedGroupMemberType::setIsOwner()
     * @param \StructType\EwsPersonaType $persona
     * @param bool $isOwner
     */
    public function __construct(?\StructType\EwsPersonaType $persona = null, ?bool $isOwner = null)
    {
        $this
            ->setPersona($persona)
            ->setIsOwner($isOwner);
    }
    /**
     * Get Persona value
     * @return \StructType\EwsPersonaType|null
     */
    public function getPersona(): ?\StructType\EwsPersonaType
    {
        return $this->Persona;
    }
    /**
     * Set Persona value
     * @param \StructType\EwsPersonaType $persona
     * @return \StructType\EwsUnifiedGroupMemberType
     */
    public function setPersona(?\StructType\EwsPersonaType $persona = null): self
    {
        $this->Persona = $persona;
        
        return $this;
    }
    /**
     * Get IsOwner value
     * @return bool|null
     */
    public function getIsOwner(): ?bool
    {
        return $this->IsOwner;
    }
    /**
     * Set IsOwner value
     * @param bool $isOwner
     * @return \StructType\EwsUnifiedGroupMemberType
     */
    public function setIsOwner(?bool $isOwner = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOwner) && !is_bool($isOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOwner, true), gettype($isOwner)), __LINE__);
        }
        $this->IsOwner = $isOwner;
        
        return $this;
    }
}
